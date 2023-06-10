<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    function services() {
        $services = Service::all()->toArray();
        return view ('admin/services')->with('services', $services);
    }

    function add() {
        return view ('admin/add-service');
    }

    function add_service(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'logo' => 'required',
        ]);

        // print_r($errors->all());

        $imageName = time().'.'.$request->logo->extension();
        $request->logo->move(public_path('img'), $imageName);
        
        $service = new Service;
        $service->name = $request["name"];
        $service->description = $request["description"];
        $service->price = $request["price"];
        $service->logo = $imageName;
        $service->save();

        return redirect('/admin/services');
    }

    function edit($id) {
        $service = Service::find($id)->toArray();
        return view ('admin/edit-service')->with('service', $service);
    }

    function edit_service(Request $request, $id) {
        $service = Service::find($id);
        $service->name = $request["name"];
        $service->description = $request["description"];
        $service->price = $request["price"];
        $service->logo = $request["logo"];
        $service->save();

        return redirect('/admin/services');
    }

    function delete_service($id) {
        $service = Service::find($id);
        $service->delete();

        return redirect('/admin/services');
    }
}
