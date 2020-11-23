<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function submit(ContactRequest $request)
    {
        Notification::route('mail', env('MAIL_CONTACT'))
            ->notify(new ContactNotification($request->all()));

        return redirect('#formulaire')->with([
            'success' => 'Email envoyé! je vous répondrai dans les plus brefs délais.'
        ]);
    }
}

