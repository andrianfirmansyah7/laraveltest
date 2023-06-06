<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Casts\EncryptCast;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function showdata(){
        $data = Employee::All();
        return view("showdata",compact("data"));
    }
}
