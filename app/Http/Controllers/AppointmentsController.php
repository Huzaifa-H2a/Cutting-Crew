<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Setting;

class AppointmentsController extends Controller
{
    function dash_appointment() {
        $appointments = Appointment::all()->toArray();
        return view ('admin/appointment')->with('appointments', $appointments);
    }
     
    function appointment() {
        $data['settings'] = Setting::all()->toArray();
        return view('appointment')->with('data', $data);
    }

    function add_appointment(Request $request) {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'service' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);     

        $appointments = new Appointment;
        $appointments->name = $request["name"];
        $appointments->phone = $request["phone"];
        $appointments->email = $request["email"];
        $appointments->service = $request["service"];
        $appointments->date = $request["date"];
        $appointments->time = $request["time"];
        $appointments->save();

        return redirect('appointment');
    }

    function reject_appointment($id) {
        $appointments = Appointment::find($id);
        $appointments->delete();

        return redirect('/admin/appointment');
    }

    function approve_appointment($id) {
        $appointments = Appointment::find($id)->toArray();
        return view ('admin/appointment')->with('appointment', $appointments);
    }

}