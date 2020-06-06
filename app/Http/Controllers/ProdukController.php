<?php

namespace App\Http\Controllers;

use App\Produk;
use App\JenisProduk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks=Produk::all();
        return view('produk.index',compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisProduk = JenisProduk::all();
        return view('produk.create', compact('jenisProduk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Produk();
        $post ->nama = $request->get('inputNama');
        $post ->idjenis = $request->get('inputIdJenis');
        $post->save();
        return redirect('produks');
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
        $jenisProduk=JenisProduk::all();
        $data = Produk::find($id);
        return view('produk.edit', compact('data','jenisProduk'));
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
        $produks = Produk::find($id);
        $produks ->nama = $request->get('inputNama');
        $produks ->idjenis = $request->get('inputIdJenis');
        $produks->save();
        return redirect('produks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Produk::find($id);
        $data->delete();
        return redirect('produks')->with('success','Data Deleted');
    }
}
