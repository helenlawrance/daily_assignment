<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   /* public function index()
    {
    	return "Go Home";
    }*/
    public function index()
    {
    	$title="Diya";

    	return view('Pages.index')->with('name',$title);
    }
    public function service()
    {
    	return view('Pages.service');
    }
    public function about()
    {
    	return view('Pages.about');
    }
}
