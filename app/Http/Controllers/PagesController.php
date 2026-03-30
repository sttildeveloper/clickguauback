<?php

namespace App\Http\Controllers;

use App\GlobalSettings;
use App\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Throwable;

class PagesController extends Controller
{
    //

    function privacypolicy(Request $request){
        $data = Pages::first();
       return $data->privacy;
    }
    function termsOfUse(Request $request){
        $data = Pages::first();
       return $data->termsofuse;
    }

    function viewTerms(Request $request){
        $data = Pages::first();
        return view('pages.viewTerms',['data'=> $data->termsofuse]);
    }
    function updatePrivacy(Request $request){
        $data = Pages::first();
        $data->privacy= $request->content;
        $data->save();

        return  json_encode(['status'=>true,'message'=>"update successful"]);
    }
    function updateTerms(Request $request){
        $data = Pages::first();
        $data->termsofuse= $request->content;
        $data->save();

        return  json_encode(['status'=>true,'message'=>"update successful"]);
    }
    function viewPrivacy(){

        $data = Pages::first();
        return view('pages.viewPrivacy',['data'=> $data->privacy]);
    }

    function accountDeletion()
    {
        return view('pages.accountDeletion', [
            'helpMail' => $this->resolveSupportEmail(),
        ]);
    }

    function submitAccountDeletionRequest(Request $request)
    {
        $supportEmail = $this->resolveSupportEmail();

        if (empty($supportEmail)) {
            return redirect()
                ->route('accountDeletion')
                ->withErrors([
                    'request' => 'Account deletion support is temporarily unavailable. Please try again shortly.',
                ])
                ->withInput();
        }

        $validated = $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email|max:190',
            'account_identifier' => 'required|string|max:190',
            'message' => 'nullable|string|max:1000',
        ]);

        $mailBody = implode("\n", [
            'New public account deletion assistance request',
            'Name: ' . $validated['name'],
            'Contact email: ' . $validated['email'],
            'Account identifier: ' . $validated['account_identifier'],
            'Message: ' . (!empty($validated['message']) ? $validated['message'] : 'N/A'),
            'Source: public account deletion page',
            'IP: ' . $request->ip(),
            'User-Agent: ' . substr((string) $request->userAgent(), 0, 500),
            'Submitted at: ' . now()->toDateTimeString(),
        ]);

        try {
            Mail::raw($mailBody, function ($message) use ($supportEmail, $validated) {
                $message->to($supportEmail)
                    ->replyTo($validated['email'], $validated['name'])
                    ->subject('Clickguau account deletion assistance request');
            });
        } catch (Throwable $e) {
            Log::error('Failed to send account deletion support request', [
                'support_email' => $supportEmail,
                'request_email' => $validated['email'],
                'error' => $e->getMessage(),
            ]);

            return redirect()
                ->route('accountDeletion')
                ->withErrors([
                    'request' => 'We could not send your request right now. Please use the support email listed on this page.',
                ])
                ->withInput();
        }

        return redirect()
            ->route('accountDeletion')
            ->with('accountDeletionRequestStatus', 'sent');
    }

    private function resolveSupportEmail(): ?string
    {
        $candidates = [];

        if (Schema::hasTable('tbl_settings')) {
            $candidates[] = optional(GlobalSettings::first())->help_mail;
        }

        $candidates[] = env('ACCOUNT_DELETION_SUPPORT_EMAIL');
        $candidates[] = config('mail.from.address');

        foreach ($candidates as $candidate) {
            $email = is_string($candidate) ? trim($candidate) : null;

            if (empty($email)) {
                continue;
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                continue;
            }

            if (str_ends_with(strtolower($email), '@example.com')) {
                continue;
            }

            return $email;
        }

        return null;
    }

}
