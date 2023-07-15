<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Working;
use Illuminate\Support\Facades\DB;

class WorkingsController extends Controller
{
    function working() {
        $workings = DB::table('workings')->select('*')->get();
        return view ('admin/working')->with('workings', $workings);
    }

    function add_working(Request $request) {
        $request->validate([
            'monday1' => 'required',
            'monday2' => 'required',
            'tuesday1' => 'required',
            'tuesday2' => 'required',
            'wednesday1' => 'required',
            'wednesday2' => 'required',
            'thursday1' => 'required',
            'thursday2' => 'required',
            'friday1' => 'required',
            'friday2' => 'required',
            'saturday1' => 'required',
            'saturday2' => 'required',
            'sunday1' => 'required',
            'sunday2' => 'required',
        ]);

        // print_r($errors->all());     

        $workings = new Working;
        $workings->monday1 = $request["monday1"];
        $workings->monday2 = $request["monday2"];
        $workings->tuesday1 = $request["tuesday1"];
        $workings->tuesday2 = $request["tuesday2"];
        $workings->wednesday1 = $request["wednesday1"];
        $workings->wednesday2 = $request["wednesday2"];
        $workings->thursday1 = $request["thursday1"];       
        $workings->thursday2 = $request["thursday2"];
        $workings->friday1 = $request["friday1"];
        $workings->friday2 = $request["friday2"];
        $workings->saturday1 = $request["saturday1"];
        $workings->saturday2 = $request["saturday2"];
        $workings->sunday1 = $request["sunday1"];
        $workings->sunday2 = $request["sunday2"];
        $workings->save();

        return redirect('/admin/working');
    }
}
