<?php

namespace App\Http\Controllers;

use App\Services\LeadFormUploadService;
use App\Services\LeadWebhookService;
use App\Support\LeadFormRules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    // public function apply(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string',
    //         'mobile' => 'required',
    //         'email' => 'required|email',
    //         'department' => 'required',
    //         'location' => 'required',
    //         'resume' => 'required|file|mimes:pdf,doc,docx|max:15360',
    //     ]);

    //     $emails = [
    //         'Hulimavu' => 'hr.bg@nanohospitals.in',
    //         'Uttarahalli' => 'hr.ut@nanohospitals.in',
    //     ];

    //     $hrEmail = $emails[$request->location] ?? null;

    //     if (!$hrEmail) {
    //         return redirect()->back()->with('error', 'Invalid location selected.');
    //     }

    //     $file = $request->file('resume');

    //     try {
    //         Mail::send('emails.job_application', ['data' => $request], function ($message) use ($request, $hrEmail, $file) {
    //             $message->to($hrEmail)
    //                 ->subject('New Job Application - ' . $request->location)
    //                 ->replyTo($request->email, $request->name);

    //             $message->attach($file->getRealPath(), [
    //                 'as' => $file->getClientOriginalName(),
    //                 'mime' => $file->getMimeType(),
    //             ]);
    //         });

    //         return redirect()->back()->with('success', 'Application submitted successfully.');
    //     } catch (\Throwable $e) {
    //         Log::error('Job application mail failed: ' . $e->getMessage(), [
    //             'exception' => $e,
    //             'location' => $request->location,
    //         ]);

    //         return redirect()->back()->with('error', 'Failed to send application. Please try again or contact us directly.');
    //     }
    // }


    public function apply(Request $request, LeadWebhookService $leadWebhook, LeadFormUploadService $uploads)
    {
        $validated = LeadFormRules::normalize(
            $request->validate(
                LeadFormRules::jobRules(),
                LeadFormRules::messages()
            )
        );

        $stored = $uploads->store($request->file('resume'), 'resumes');

        $leadData = $validated;
        $leadData['source'] = 'careers';
        $leadData['file_url'] = $stored['url'];

        $leadResult = $leadWebhook->sendCallbackLead($leadData);

        if (! $leadResult->shouldTreatAsSuccess()) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'We could not submit your application to our system right now. Please try again in a few minutes or contact us directly.');
        }

        $hrEmails = [
            'hr.bg@nanohospitals.in',
            'hr.ut@nanohospitals.in',
        ];

        $file = $request->file('resume');

        try {
            Mail::send('emails.job_application', ['data' => $request], function ($message) use ($request, $hrEmails, $file) {
                $message->to($hrEmails)
                    ->subject('New Job Application')
                    ->replyTo($request->email, $request->name);

                $message->attach($file->getRealPath(), [
                    'as' => $file->getClientOriginalName(),
                    'mime' => $file->getMimeType(),
                ]);
            });

            return redirect()->back()->with('success', 'Application submitted successfully.');
        } catch (\Throwable $e) {
            Log::error('Job application mail failed: '.$e->getMessage(), [
                'exception' => $e,
            ]);

            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to send application. Please try again.');
        }
    }
}
