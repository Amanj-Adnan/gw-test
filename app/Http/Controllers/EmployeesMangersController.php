<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesMangersController extends Controller
{
    public function managers($id){

        $employee= Employee::find($id);
        $manager = $employee->manager;
        $founder = $manager->founder;


        return response()->json([
            'manger' => $manager->name,
            'founder' => $founder->name,
        ]);
    }

    public function managersSalary($id){
        $employee= Employee::find($id);
        $manager = $employee->manager;
        $founder = $manager->founder;

        return response()->json([
            $manager->name => $manager->salary,
            $founder->name => $founder->salary,
        ]);


    }
}
