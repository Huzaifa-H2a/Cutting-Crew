<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialsController extends Controller
{
    function testimonials() {
        $testimonials = Testimonial::all()->toArray();
        return view ('admin/testimonials')->with('testimonials', $testimonials);
    }

    function add() {
        return view ('admin/add-testimonial');
    }

    function add_testimonial(Request $request) {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'comment' => 'required',
            'image' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img'), $imageName);
        
        $testimonial = new Testimonial;
        $testimonial->name = $request["name"];
        $testimonial->designation = $request["designation"];
        $testimonial->comment = $request["comment"];
        $testimonial->image = $imageName;
        $testimonial->save();

        return redirect('/admin/testimonials');
    }

    function edit($id) {
        $testimonial = Testimonial::find($id)->toArray();
        return view ('admin/edit-testimonial')->with('testimonial', $testimonial);
    }

    function edit_testimonial(Request $request, $id) {
        $testimonial = Testimonial::find($id);
        $testimonial->name = $request["name"];
        $testimonial->designation = $request["designation"];
        $testimonial->comment = $request["comment"];
        $testimonial->image = $request["image"];
        $testimonial->save();
        

        return redirect('/admin/testimonials');
    }

    function delete_testimonial($id) {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();

        return redirect('/admin/testimonials');
    }
}
