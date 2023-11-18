<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Users;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
   
     public function root(){
        if(Auth::id())
        {
            return redirect("home");
        }
        else{
            $data=doctor::all();
            return view("user.home",compact("data"));
        }

      
    }
    public function index()
    {
        if(Auth::id())
        {
            
            if(Auth::user()->usertype =="user")
            {
                $data=doctor::all();
                return view("user.home",compact("data"));
            }
            else if(Auth::user()->usertype == "admin")
            {
                return view("controll.home");
            }
        }
        else
        {
           return redirect()->back();
        }

    }
    public function appointment(Request $req)
    {
       
        
        $data=new Appointment;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->phone=$req->phone;
        $data->date=$req->date;
        $data->messsage=$req->messsage;
        $data->doctor=$req->doctor;
        $user_id=Auth::id();
        $data->user_id=$user_id;
        $data->save();
        return redirect()->back();
    }
    public function myappointment()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;
            $data=appointment::where("user_id",$userid)->get();
            
            return view("user.my_appointment",compact('data'));
        }
        else{
            return redirect()->back();
        }
     
    }
    public function cancel_appoinment($id)
    {
           $data=appointment::find($id);
           $data->delete();
           return redirect()->back();
    }
   
}
