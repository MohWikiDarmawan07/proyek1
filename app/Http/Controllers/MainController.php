<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\Booking;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bokings=Booking::all();
        $post=Booking::orderBy('id','desc')->paginate(6);
        return view('daftarbooking',compact('bookings'))->
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'Nama'=>'required',
            'Email'=>'required',
            'Day'=>'required',
            'Time'=>'required',
            'Dokter'=>'required',
            'Keterangan'=>'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Booking=Booking::find($id);
        return view('detailbooking',compact('Booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Booking=Booking::find($id);
        return view('editBooking',compact('Booking'));
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
            'Nama'=>'required',
            'Email'=>'required',
            'Day'=>'required',
            'Time'=>'required',
            'Dokter'=>'required',
            'Keterangan'=>'required',
        ]);
        Booking::find($id)->update($request->all());
        return redirect()->route('index')
        ->with('success','Booking berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::find($id)->delete();
        return redirect()->route('index')
        ->with('success','Booking berhasil diupdate');
    }
}
