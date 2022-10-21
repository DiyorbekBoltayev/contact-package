<?php
namespace DiyorbekBoltayev\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use DiyorbekBoltayev\Contact\Mail\ContactMailable;
use DiyorbekBoltayev\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function GuzzleHttp\Promise\all;

class ContactController extends  Controller{

    public function index(){
        return view('contact::contact');
    }
    protected function send(Request $request)
    {
        Contact::create($request->all());
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
return redirect()->route('contact');
    }
}
