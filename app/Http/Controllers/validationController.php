<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Valid;

class validationController extends Controller
{
    //
// Displays Home View
    public function index() {
        return view('index');
    }

// Displays Form View   
    public function create() {
        return view('create');
    }

// Collects and Stores Data from Form
    public function store( Request $request) {
        $info = new Valid();

        $info -> name = $request -> input('name');
        $info -> age = $request -> input('age');
        $info -> DOB = $request -> input('DOB');
        $info -> profile_picture = $request -> input('profile_picture');
        
        $info -> save();
        return redirect('/showforms') -> with('mssg','Thanks you for adding');
    }

// Shows the forms lists
    public function show() {
        $info = Valid::all();
        
        return view('show', ['info' => $info]);
    }

// updates forms
    public function edit($id, Request $request) {
        $info = Valid::find($id);

        $info -> name = $request -> input('name');
        $info -> age = $request -> input('age');
        $info -> DOB = $request -> input('DOB');

        $info -> update();
        return redirect('/showforms');
    }

// display Update forms
    public function update($id){
        $info = Valid::find($id);
        return view('update', compact('info'));
    }

// Deletes information
    public function delete($id) {
        $info = Valid::findOrFail($id);

        $info -> delete();
        return redirect('/showforms');
    }
}
