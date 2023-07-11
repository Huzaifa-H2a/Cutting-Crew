<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Contact;
use DB;

class ContactsController extends Controller
{
    function contact() {
        $data['settings'] = Setting::all()->toArray();
        return view('contact')->with('data', $data);
    }

    function add_contact(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);     

        $contacts = new Contact;
        $contacts->name = $request["name"];
        $contacts->email = $request["email"];
        $contacts->subject = $request["subject"];
        $contacts->message = $request["message"];
        $contacts->status = 'Pending';
        $contacts->save();

        return redirect('contact');
    }

    function dash_contact() {
        $contacts = Contact::all()->toArray();
        return view ('admin/contact')->with('contacts', $contacts);

    }

    function resolve_contact($id) {
        $contacts = DB::table('contacts')
        ->where('id', $id)
        ->update(array('status' => 'Request Resolved'));
        return redirect('admin/contact');
    }

    function delete_contact($id) {
        $contacts = Contact::find($id);
        $contacts->delete();

        return redirect('/admin/contact');
    }
}