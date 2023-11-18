<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function doctoradd(){
        return view("controll.doctoradd");
    }

    public function upload(Request $req)
    {
        $data= new doctor;   //doctor is table name
        $image=$req->image;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $req->image->move("storeimg",$imagename);
        $data->image=$imagename;
        $data->name=$req->name;
        $data->phone=$req->phone;
        $data->room=$req->room;
        $data->spetiality=$req->spetiality;
        $data->save();
        return redirect()->back();

    }
}
