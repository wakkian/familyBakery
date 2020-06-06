<?php

namespace App\Http\Controllers;

use App\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabangs=Cabang::all();
        return view('cabang.index',compact('cabangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cabang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Cabang();
        $post ->nama = $request->get('inputNama');
        $post ->alamat = $request->get('inputAlamat');
        $post->save();
        return redirect('cabangs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Cabang::find($id);
        return view('cabang.edit', compact('data'));
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
        $cabangs = Cabang::find($id);
        $cabangs ->nama = $request->get('inputNama');
        $cabangs ->alamat = $request->get('inputAlamat');
        $cabangs ->save();
        return redirect('cabangs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $datacabang=Cabang::find($id);
       $datacabang->delete();
       return redirect('cabangs')->with('success','Data Deleted');
    }
}
