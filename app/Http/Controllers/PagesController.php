<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function faq(){
        return view('faq');
    }

    public function pricing(){
        return view('pricing');
    }

    public function submit(){
        return view('submit');
    }

}
