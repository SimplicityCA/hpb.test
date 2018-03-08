<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteText;

class SiteTextController extends Controller
{
    public function aboutus(){
    	$about = SiteText::where('title','QUIÉNES SOMOS')->first();
    	return $about;
    }
}
