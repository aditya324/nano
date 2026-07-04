<?php

namespace App\Http\Controllers;

use App\Mail\RequestCallMail;
use App\Services\LeadWebhookService;
use App\Support\LeadFormRules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestCallController extends Controller
{
    public function send(Request $request, LeadWebhookService $leadWebhook)
    {
        $validated = LeadFormRules::normalize(
            $request->validate(
                LeadFormRules::requestCallRules(),
                LeadFormRules::messages()
            )
        );

        $leadResult = $leadWebhook->sendCallbackLead($validated);

        if (! $leadResult->shouldTreatAsSuccess()) {
            return response()->json([
                'status' => 'error',
                'message' => 'We could not submit your request to our system right now. Please try again in a few minutes or call us directly.',
            ], 503);
        }

        if (config('services.leads.send_notification_mail')) {
            Mail::to('crm.bg@nanohospitals.in')->send(
                new RequestCallMail($validated)
            );
        }

        return response()->json([
            'status'  => 'success',
            'message' => 'Your call-back request has been sent successfully!',
        ]);
    }
}

