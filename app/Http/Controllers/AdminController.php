<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\trainer;
use Illuminate\Http\Request;
use App\Models\Rooms;
use League\CommonMark\Extension\Table\Table;


class AdminController extends Controller
{
    public function Aroom(){
        $trainer=trainer::all();
        return view('admin.room',compact('trainer'));
    }
    public function add_class(Request $request){
        $class= new Rooms;
        $class->room_name=$request->name;
        $class->num_of_trainee=$request->num;
        $class->gender=$request->gender;
        $class->trainer=$request->trainer;
        $class->price=$request->price;
        $class->program=$request->program;
        $class->save();
        return redirect()->back()->with('message','The Class Added Successfully');
    }
    public function  orders(){
        $orders=book::all();
        return view('admin.orders',compact('orders'));
    }
    public function approve($id){
        $data=book::find($id);
        $data->status='Approved';
        $class_id=$data->class_id;
        $class_approved=Rooms::find($class_id);
        if($class_approved->num_of_trainee>0){
            $class_approved->num_of_trainee--;
        }

        $class_approved->save();
        $data->save();
        return redirect()->back();
    }
    public function cancel($id){
        $data=book::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();
    }
    public function trainers(){
        return view('admin.trainers');
    }
    public function add_trainers(Request $request){
        $trainer=new trainer;
        $trainer->name=$request->name;
        $trainer->age=$request->age;
        $trainer->address=$request->address;
        $trainer->specialize=$request->program;
        $image=$request->photo;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->photo->move('trainer_image',$imagename);
        $trainer->photo=$imagename;
        $trainer->save();
        return redirect()->back()->with('message','Trainer Added Successfully');

    }
    public function all_trainers(){
        $trainer=trainer::all();
        return view('admin.all_trainer',compact('trianer'));
    }
}
