<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    function home() {
        return view('home');
    }

    function about() {
        return view('about');
    }

    function service() {
        return view('service');
    }

    function price() {
        return view('price');
    }

    function open() {
        return view('open');
    }

    function contact() {
        return view('contact');
    }

    function appointment() {
        return view('appointment');
    }
}
