<?php

namespace App\Http\Controllers;

use App\Stud;
use Illuminate\Http\Request;

class StudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stud= Stud::all();
        return view('Students.index',compact('stud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Students.stud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stud = new Stud([
            'roll'=>$request -> get ('roll'),
            'name'=>$request -> get('name'), 
            'address'=>$request -> get ('address'),
            'mail'=>$request -> get('mail'), 
            'phone'=>$request -> get('phone')
        ]);
        $stud->save();
        return redirect('/stud/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stud  $stud
     * @return \Illuminate\Http\Response
     */
    public function show(Stud $stud)
    {
        return view('Students.stud');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stud  $stud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stud = Stud::find($id);
        return view('Students.edit',compact('stud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stud  $stud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stud = Stud::find($id);
        $stud->roll = $request->get('roll');
        $stud->name = $request->get('name');
        $stud->address = $request->get('address');
        $stud->mail = $request->get('mail');
        $stud->phone = $request->get('phone');
        $stud->save();
        return redirect('/stud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stud  $stud
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stud = Stud::find($id);
        $stud->delete();
        return redirect('/stud')->with('success','Student Record has been deleted successfully');
    }
}
