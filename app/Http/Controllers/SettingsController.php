<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    function settings() {
        $settings = DB::table('settings')->select('*')->get();
        return view ('admin/settings')->with('settings', $settings);
    }

    function add_settings(Request $request) {
        $request->validate([
            'website_name' => 'required',
            'website_title' => 'required',
            'website_address' => 'required',
            'website_phone' => 'required',
            'website_email' => 'required',
            'twitter_link' => 'required',
            'facebook_link' => 'required',
            'youtube_link' => 'required',
            'linkedin_link' => 'required'
        ]);
        // print_r($errors->all());     

        $settings = new Setting;
        $settings->name = $request["website_name"];
        $settings->title = $request["website_title"];
        $settings->address = $request["website_address"];
        $settings->phone = $request["website_phone"];
        $settings->email = $request["website_email"];
        $settings->twitter = $request["twitter_link"];
        $settings->facebook = $request["facebook_link"];
        $settings->youtube = $request["youtube_link"];
        $settings->linkedin = $request["linkedin_link"];
        $settings->save();

        return redirect('/admin/settings');
    }
}
