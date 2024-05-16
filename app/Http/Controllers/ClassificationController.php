<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Classification;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    //
    // public function insert(Request $request){
    //     $classify = new Classification();
    //     $classify->title = $request->title;
    //     $classify->description = $request->description;
    //     $classify->govt_class = $request->govt_class;

    //     $classify->save();
    //     return redirect("/products/classification");
    // }
    // public function insert(Request $request){
    //     $title = $request->input('title');
    //     $description = $request->input('description');
    //     $govt_class = $request->input('govt-class');
    //     DB::insert("INSERT INTO classifications (title, description, govt_class) VALUES (?, ?, ?)",[$title, $description, $govt_class]);
    //     return redirect("/products/classification");
    // }
    public function insert(Request $request){
        $classify = new Classification();
        $classify->title = $request->title;
        $classify->description = $request->description;
        $classify->govt_class = $request->govt_class;

        $classify->save();
        return redirect("/products/classification");
    }
}
