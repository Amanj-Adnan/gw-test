<?php

namespace App\Http\Controllers;

use App\Models\Founder;
use Illuminate\Http\Request;

class FounderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $founder = Founder::all()->toJson();
      return $founder;
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
    public function store(Request $request)
    {

        $validation =  $request->validate([
            'name' => 'required',
            'age' => 'required',
            'salary' => 'required',
            'gender' => 'required',
            'jobtitle' => 'required',
            'hireddate' => 'required',
        ]);




        Founder::create([
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
     * @param  \App\Models\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $founder = Founder::find($id);
        return $founder;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function edit(Founder $founder)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $founder = Founder::find($id);

        $validation =  $request->validate([
            'name' => 'required',
            'age' => 'required',
            'salary' => 'required',
            'gender' => 'required',
            'jobtitle' => 'required',
            'hireddate' => 'required',
        ]);

        $founder->update([
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
     * @param  \App\Models\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $founder = Founder::find($id);
        $founder->delete();
    }
}
