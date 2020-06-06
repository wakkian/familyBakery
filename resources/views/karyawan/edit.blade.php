@extends('layouts.master')

@section('content')
<!-- form start -->

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Karyawan</h6>
            </div>
            <form role="form" action="{{route('updatekaryawan', $data->id)}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNama">Nama</label>
                    <input type="text" class="form-control" id="inputNama" placeholder="Isi Nama" name="inputNama" value="{{ $data->name }}">
                    <label for="inputJabatan">Jabatan</label>
                    <input type="text" class="form-control" id="inputJabatan" placeholder="Isi Jabatan" name="inputJabatan" value="{{ $data->jabatan }}">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Isi Password" name="inputPassword" value="{{ $data->password }}">
                    <label for="inputIdCabang">Cabang</label>


                    
                    <select id="inputIdCabang" name="inputIdCabang" class="form-control form-control-sm">
                      @foreach($cabangs as $cabang)
                      <option value="{{$cabang->id}}">{{$cabang->nama}}</option>
                      @endforeach
                    </select>
                    
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            </div>
@endsection