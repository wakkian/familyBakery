@extends('layouts.master')

@section('content')
<!-- form start -->


<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Pelanggan</h6>
            </div>
            <form role="form" action="{{route('pelanggans.store')}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNama">Nama</label>
                    <input type="text" class="form-control" id="inputNama" placeholder="Isi Nama" name="inputNama">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" class="form-control" id="inputAlamat" placeholder="Isi Alamat" name="inputAlamat">
                    <label for="inputNoHP">No HP</label>
                    <input type="text" class="form-control" id="inputNoHP" placeholder="Isi No HP" name="inputNoHP">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            </div>
@endsection