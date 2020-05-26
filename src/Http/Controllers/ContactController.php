<?php

namespace Smt\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Smt\Contact\Mail\MailableClass;
use Smt\Contact\Models\Contact;
class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new MailableClass($request->message));
        Contact::create($request->all());
    }
}
