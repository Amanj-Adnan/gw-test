<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employee = Employee::all()->toJson();
        return $employee;
    }



    public function store(Request $request,$id)
    {

        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'salary' => 'required',
            'gender' => 'required',
            'jobtitle' => 'required',
            'hireddate' => 'required',
        ]);




        Employee::create([
            'manager_id'=>$id,
            'name' => $request->name,
            'age' => $request->age,
            'salary' => $request->salary,
            'gender' => $request->gender,
            'job-title' => $request->jobtitle,
            'hired-date' => $request->hireddate,
        ]);

    }


    public function show($manager,$id)
    {
        $employee= Employee::find($id);
        return $employee;
    }




    public function update(Request $request,$manager,$id)
    {
        $employee= Employee::find($id);

        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'salary' => 'required',
            'gender' => 'required',
            'jobtitle' => 'required',
            'hireddate' => 'required',
        ]);




        $employee->update([
            'manager_id'=>$manager,
            'name' => $request->name,
            'age' => $request->age,
            'salary' => $request->salary,
            'gender' => $request->gender,
            'job-title' => $request->jobtitle,
            'hired-date' => $request->hireddate,
        ]);
    }


    public function destroy($manager,$id)
    {
        $employee= Employee::find($id);
        $employee->delete();
    }
}
