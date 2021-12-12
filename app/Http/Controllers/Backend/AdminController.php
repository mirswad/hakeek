<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Auth;
use Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Categories;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(){
       
        return view('admin/dashboard');
    }


    public function categories(){
        $categories = Categories::all();
       
        return view('admin/categories', ['categories' => $categories]);

    }


    public function add_category(){
    
        return view('admin/add-category', ['edit_mode' => 'off']);

    }


    public function post_category(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);

        if($request->edit == 1){
            $category = Categories::where('id',$request->id)->first(); 
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->updated_by = Auth::user()->id;
            $category->save();
            Session::flash('message', 'Successfully Updated!');
            Session::flash('alert-class', 'alert-danger'); 

            return redirect()->route('admin.categories');
            
        }
       

        Categories::create($validateData + ['updated_by' => Auth::user()->id ]);
        Session::flash('message', 'Successfully Added!');
        Session::flash('alert-class', 'alert-danger'); 
        return redirect()->route('admin.categories');


    }

    public function edit_category($id){
        
        $category = Categories::where('id',$id)->first();
   

        return view('admin/add-category', ['edit_mode' => 'on', 'category' => $category]);


    }






}
