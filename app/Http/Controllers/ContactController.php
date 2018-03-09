<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\StoreContact;

class ContactController extends Controller
{
    public function store(StoreContact $request)
    {

    	$contact = new Contact();
    	$contact->name = $request->name;
    	$contact->last_name = $request->lastName;
    	$contact->city = $request->city;
    	$contact->phone = $request->phone;
    	$contact->email = $request->email;
    	$contact->message = $request->message;

    	$contact->save();

    	return $contact;

    }
}
