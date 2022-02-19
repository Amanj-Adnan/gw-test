<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class SearchController extends Controller
{
   public function search(Request $request){
       $data = $request->data;


       $employees = Employee::where('name', 'like', "%{$data}%")->get();

            return response()->json([
                'name' => $employees
            ]);
   }

}
