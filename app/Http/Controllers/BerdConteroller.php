<?php

namespace App\Http\Controllers;

use App\Models\bard;
use App\Models\Student;
use Illuminate\Http\Request;

class BerdConteroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bards = bard::all();
        return view('bards.bard', compact('bards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bard = bard::create([
            'name'=> $request->name,
            'type' => $request->type,
            'email' => $request->email,
            'stu_id' => $request->stu_id
        ]);
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bard = bard::find($id);
        return view('bards.show', compact('bard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bard = bard::find($id);
        return view('bards.edit', compact('bard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|max:12',
            'type' => 'required|max:220',
            'email' => 'required|email'
        ]);
        $bard = bard::find($id);
        $bard->name= $request->name;
        $bard->type = $request->type;
        $bard->email = $request->email;
        $bard->update();
        return redirect()->route('get.show',['id'=>$bard->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bard = bard::find($id);
        $bard->destroy($id);
        return redirect()->route('get.index');

    }
}