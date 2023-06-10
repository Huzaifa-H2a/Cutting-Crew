<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barber;

class BarbersController extends Controller
{
    function barbers() {
        $barbers = Barber::all()->toArray();
        return view ('admin/barbers')->with('barbers', $barbers);
    }

    function add() {
        return view ('admin/add-barber');
    }

    function add_barber(Request $request) {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img'), $imageName);
        
        $barber = new Barber;
        $barber->name = $request["name"];
        $barber->designation = $request["designation"];
        $barber->image = $imageName;
        $barber->save();

        return redirect('/admin/barbers');
    }

    function edit($id) {
        $barber= Barber::find($id)->toArray();
        return view ('admin/edit-barber')->with('barber', $barber);
    }

    function edit_barber(Request $request, $id) {
        $barber = Barber::find($id);
        $barber->name = $request["name"];
        $barber->designation = $request["designation"];
        $barber->image = $request["image"];
        $barber->save();

        return redirect('/admin/barbers');
    }

    function delete_barber($id) {
        $barber = Barber::find($id);
        $barber->delete();

        return redirect('/admin/barbers');
    }
}
