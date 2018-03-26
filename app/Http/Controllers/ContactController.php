<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\StoreContact;
use Illuminate\Support\Facades\Mail;
use App\Mail\HomeContact;

class ContactController extends Controller
{
    public function store(StoreContact $request)
    {
      try{
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->last_name = $request->lastName;
        $contact->city = $request->city;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;

        if($contact->save())
        {
            Mail::to('joserhond@gmail.com')->send(new HomeContact($request));
        }   
      }     
      catch(\Exception $e){
          return $e;
          }
      return $request;

    }
}
