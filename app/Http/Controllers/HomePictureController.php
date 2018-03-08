<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePicture;

class HomePictureController extends Controller
{
    public function index()
    {
    	$images = HomePicture::where('location','HOME')->get();
    	return $images;
    }
}
