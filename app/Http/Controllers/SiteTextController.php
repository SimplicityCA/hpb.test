<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteText;

class SiteTextController extends Controller
{
    public function aboutus(){
    	$about = SiteText::find(1);
    	return $about;
    }

    public function certification(){
    	$certificationText = SiteText::find(2);
    	return $certificationText;
    }
}
