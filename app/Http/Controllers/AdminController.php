<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\books;

class AdminController extends Controller
{
    public function index(){
        if(Auth::id()){
            $user_type = Auth()->user()->user_type;

            if($user_type == 'admin'){
                return view('admin.index');
            }
            else if($user_type == 'user'){
                return view('home.index');
            }
            else{
                return redirect()->back();
            }
        }
    }
    public function books_page(){
        $data = books::all();
        return view('admin.books', compact('data')); 
    }
    public function book_page(){
        $data = books::all();
        return view('home.books', compact('data')); 
    }
    

    public function add_books(Request $request){
        $data = new books;
        $data->book_title = $request->book_name;
        $data->quantity = $request->book_quantity;
        $data->author = $request->book_author;

        $data->save();

        return redirect()->back()->with('message', 'book added successfully');
    }

    public function book_delete($id){
        $data = books::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function book_update($id){
        $data = books::find($id);
        return view('admin.book_update', compact('data'));
    }

    public function update_book(Request $request, $id){
        $data = books::find($id);
        $data->book_title = $request->book_name;
        $data->quantity = $request->quantity;
        $data->author = $request->author;

        $data->save();

        return redirect('/books_page');
    }

    public function search(Request $request){
        $search = $request->search;
        $data = books::where('book_title','like','%'.$search.'%')->get();

        return view('home.books', compact('data'));
    }

    
}

