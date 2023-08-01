<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    function getEmployee()
    {
        $first_name = $this->getFirstName();
        
        $emp = User::all();
        return view('employee', compact("emp", "first_name"));
    }

    private function getFirstName()
    {
        return User::where('id', 2)
        ->pluck('first_name');
    }
}
