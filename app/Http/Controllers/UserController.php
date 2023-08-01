<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{

    //Add Employee to the Employee Table
    function addEmployee(Request $req)
    {   
        if($req->hasFile('image'))
        {
            $image = $req->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $filename);

            $user = new User();
            $user->first_name = $req->first_name;
            $user->image = $filename;

            $user->save();

            return redirect('employee')->with('success', "thanks");
        }
    }

    function getEmployee()
    {
        $emp = User::all();
        return view('employee', ['emp'=>$emp]);
    }

    function getEmployeeById($id)
    {
        $emp = User::where('Id', $id)->get();

        return $emp;
    }

    function try($try){
        echo $try;
    }
}
