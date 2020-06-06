<?php

namespace App\Http\Controllers;

use App\BahanBaku;
use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahanbakus=BahanBaku::all();
        return view('bahan_baku.index',compact('bahanbakus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bahan_baku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new BahanBaku();
        $post ->nama = $request->get('inputNama');
        $post ->tanggal_expired = $request->get('inputTanggal');        
        $post ->stok = $request->get('inputStok');
        $post->save();
        return redirect('bahan_bakus');
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
        $data = BahanBaku::find($id);
        return view('bahan_baku.edit', compact('data'));
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
        $bahanbakus = BahanBaku::find($id);
        $bahanbakus ->nama = $request->get('inputNama');
        $bahanbakus ->tanggal_expired = $request->get('inputTanggal');        
        $bahanbakus ->stok = $request->get('inputStok');
        $bahanbakus->save();
        return redirect('bahan_bakus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=BahanBaku::find($id);
        $data->delete();
        return redirect('bahan_bakus')->with('success','Data Deleted');
    }
}
