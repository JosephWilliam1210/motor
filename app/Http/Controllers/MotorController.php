<?php

namespace App\Http\Controllers;

use App\Models\motor;
use App\Models\User;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $motors = Motor::all();
        return view('motor.index', compact('motors'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return  view('motor.add', compact( 'users'));
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
        Motor::create($request->all());
        return redirect()->route('motor.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function show(motor $motor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function edit(motor $motor)
    {
        $users = User::all();
        return view('motor.edit', compact('motor', 'users'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, motor $motor)
    {
        $motor->update($request->all());
        return redirect()->route('index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\motor  $motor
     * @return \Illuminate\Http\Response
     */
    public function destroy(motor $motor)
    {
        $motor -> delete();
        return redirect()->route('index');
        //
    }
}
