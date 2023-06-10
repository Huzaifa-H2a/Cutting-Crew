<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutsController extends Controller
{
    function about() {
        $abouts = About::all()->toArray();
        return view ('admin/about')->with('about', $abouts);
    }

    function add_about(Request $request) {
        $request->validate([
            'description' => 'required',
            'experience' => 'required',
            'since' => 'required',
            'client' => 'required',
        ]);

        // print_r($errors->all());     

        $abouts = new About;
        $abouts->description = $request["description"];
        $abouts->experience = $request["experience"];
        $abouts->since = $request["since"];
        $abouts->client = $request["client"];
        $abouts->save();

        return redirect('/admin/about');
    }
}
