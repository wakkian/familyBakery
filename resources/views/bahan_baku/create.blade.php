@extends('layouts.master')

@section('content')
<!-- form start -->


<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Bahan Baku</h6>
            </div>
            <form role="form" action="{{route('bahan_bakus.store')}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNama">Nama</label>
                    <input type="text" class="form-control" id="inputNama" placeholder="Isi Nama" name="inputNama">
                    <label for="inputTanggal">Tanggal Expired</label>
                    <input type="date" class="form-control" id="inputTanggal" placeholder="" name="inputTanggal">
                    <label for="inputStok">Stok</label>
                    <input type="text" class="form-control" id="inputStok" placeholder="Isi Stok" name="inputStok">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            </div>
@endsection