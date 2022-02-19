<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $manager = Manager::all()->toJson();
        return $manager;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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




       Manager::create([
           'founder_id'=>$id,
            'name' => $request->name,
            'age' => $request->age,
            'salary' => $request->salary,
            'gender' => $request->gender,
            'job-title' => $request->jobtitle,
            'hired-date' => $request->hireddate,
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function show($founder,$id)
    {
        $manager = Manager::find($id);
        return $manager;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit(Manager $manager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $founder,$id)
    {
        $manager = Manager::find($id);

         $request->validate([
            'name' => 'required',
            'age' => 'required',
            'salary' => 'required',
            'gender' => 'required',
            'jobtitle' => 'required',
            'hireddate' => 'required',
        ]);

        $manager->update([
            'founder_id'=>$founder,
            'name' => $request->name,
            'age' => $request->age,
            'salary' => $request->salary,
            'gender' => $request->gender,
            'job-title' => $request->jobtitle,
            'hired-date' => $request->hireddate,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy($founder, $id)
    {
        $manager = Manager::find($id);
        $manager->delete();
    }
}
