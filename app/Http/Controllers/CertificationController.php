<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certification;

class CertificationController extends Controller
{
    public function index(){
    	$certifications = Certification::all();

    	return $certifications;
    }
}
