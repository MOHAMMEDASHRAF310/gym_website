<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Rooms;
use App\Models\book;
use App\Models\trainer;
use Laravel\Jetstream\Rules\Role;

class UserController extends Controller
{
    public function index(){
        $trainer=trainer::all();
        $book=book::all();
        $usertype = Auth::user()->usertype;
        if($usertype==1){
            return view('admin.index',compact('trainer','book'));
        }
        else{
            return view('home.index',compact('trainer'));
        }
    }
    public function home(){
        $trainer=trainer::all();
        return view('home.index',compact('trainer'));

    }



    public function book(){

        $class=Rooms::all();// to view the rooms in form and select one of them
        
        if(Auth::id()){
            $user_id=Auth::user()->id;
            $data=book::where('user_id',$user_id)->get();
            return view('home.book',compact('data','class'));
        }
        return view('home.book',compact('class'));
        

        
    }



    public function add_book(Request $request){
        $book=new book;
        $room=new Rooms;
        $book->name=$request->name;
        $book->age=$request->age;
        $book->phone=$request->phone;
        $book->weight=$request->weight;
        $book->height=$request->height;
        $book->class_id=$request->class;// return id value
                
        if(Auth::id()){
            $book->user_id=Auth::user()->id;
        }
        $book->save();
        return redirect()->back()->with('message','The Book Added Successfully, we will contact with you soon');

    }


    public function room(){
        $data=Rooms::all();
        $trainer=trainer::all();
        return view('home.room',compact('data','trainer'));
    }
    public function delete($id){
        $cancel=book::find($id);
        $cancel->delete();
        return redirect()->back();
    }


}
