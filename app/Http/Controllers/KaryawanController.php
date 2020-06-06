<?php

namespace App\Http\Controllers;

use App\User;
use App\Cabang;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('karyawan.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cabangs=Cabang::all();
        return view('karyawan.create', compact('cabangs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new User();
        $post ->name = $request->get('inputNama');
        $post ->jabatan = $request->get('inputJabatan');
        $post ->password = $request->get('inputPassword');
        $post ->idcabang = $request->get('inputIdCabang');
        $post->save();
        return redirect('users');
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
        $cabangs=Cabang::all();
        $data = User::find($id);
        return view('karyawan.edit', compact('data','cabangs'));   
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
        $users = User::find($id);
        $cabangs= Cabang::all();
        $users ->name = $request->get('inputNama');
        $users ->jabatan = $request->get('inputJabatan');
        $users ->password = $request->get('inputPassword');
        $users ->idcabang = $request->get('inputIdCabang');
        $users->save();
        return redirect('users');
    }           

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect('users')->with('success','Data Deleted');
    }
}
