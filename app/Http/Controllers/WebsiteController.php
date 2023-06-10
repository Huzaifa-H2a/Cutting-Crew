<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\About;
use App\Models\Service;
use App\Models\Barber;
use App\Models\Working;
use App\Models\Testimonial;


class WebsiteController extends Controller
{
    function home() {
        $data['settings'] = Setting::all()->toArray();
        $data['abouts'] = About::all()->toArray();
        $data['services'] = Service::all()->toArray();
        $data['barbers'] = Barber::all()->toArray();
        $data['workings'] = Working::all()->toArray();
        $data['testimonials'] = Testimonial::all()->toArray();
        return view('home')->with('data', $data);
    }

    function about() {
        $data['settings'] = Setting::all()->toArray();
        $data['abouts'] = About::all()->toArray();
        return view('about')->with('data', $data);
    }

    function service() {
        $data['settings'] = Setting::all()->toArray();
        $data['services'] = Service::all()->toArray();
        $data['testimonials'] = Testimonial::all()->toArray();
        return view('service')->with('data', $data);
    }

    function price() {
        $data['settings'] = Setting::all()->toArray();
        $data['services'] = Service::all()->toArray();
        return view('price')->with('data', $data);
    }

    function open() {
        $data['settings'] = Setting::all()->toArray();
        $data['workings'] = Working::all()->toArray();
        return view('open')->with('data', $data);
    }

    function contact() {
        $data['settings'] = Setting::all()->toArray();
        return view('contact')->with('data', $data);
    }

    // function appointment() {
    //     $data['settings'] = Setting::all()->toArray();
    //     return view('appointment')->with('data', $data);
    // }
}
