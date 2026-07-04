<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Services\LeadFormUploadService;
use App\Services\LeadWebhookService;
use App\Support\LeadFormRules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request, LeadWebhookService $leadWebhook, LeadFormUploadService $uploads)
    {
        $source = $request->input('source');

        $validated = LeadFormRules::normalize(
            $request->validate(
                LeadFormRules::contactRules($source),
                LeadFormRules::messages()
            ),
            $source
        );

        $filePath = null;
        $leadData = $validated;

        if ($request->hasFile('report')) {
            $stored = $uploads->store($request->file('report'), 'reports');
            $filePath = $stored['path'];
            $leadData['file_url'] = $stored['url'];
        }

        $leadResult = $leadWebhook->sendCallbackLead($leadData);

        if (! $leadResult->shouldTreatAsSuccess()) {
            return response()->json([
                'status' => 'error',
                'message' => 'We could not submit your request to our system right now. Please try again in a few minutes or call us directly.',
            ], 503);
        }

        if (config('services.leads.send_notification_mail')) {
            Mail::to('crm.bg@nanohospitals.in')->send(
                new ContactFormMail($validated, $filePath)
            );
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully!'
        ]);
    }
}