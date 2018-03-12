<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePicture;
use App\SiteText;
use App\Http\Requests\StoreClient;
use App\Client;

class ClientController extends Controller
{
    public function banner()
    {

    	$image = HomePicture::where('location','CLIENTS')->first();
    	
    	return $image;

    }

    public function description()
    {

    	$image = SiteText::where('location','CLIENTS')->first();
    	
    	return $image;

    }

    public function store(StoreClient $request)
    {

    	$client = new Client();
    	$client->ruc = $request->ruc;
    	$client->store_name = $request->storeName;
    	$client->name = $request->name;
    	$client->last_name = $request->lastName;
    	$client->city = $request->city;
    	$client->address = $request->address;
    	$client->phone = $request->phone;
    	$client->email = $request->email;
    	$client->message = $request->message;

    	$client->save();

    	return $client;

    }
}
