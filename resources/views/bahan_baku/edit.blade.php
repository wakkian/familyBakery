@extends('layouts.master')

@section('content')
<!-- form start -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Bahan Baku</h6>
            </div>
            <form role="form" action="{{route('updatebb', $data->id)}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNama">Nama</label>
                    <input type="text" class="form-control" id="inputNama" placeholder="Isi Nama" name="inputNama" value="{{ $data->nama }}">
                    <label for="inputTanggal">Tanggal Expired</label>
                    <input type="date" class="form-control" id="inputTanggal" placeholder="Isi Tanggal" name="inputTanggal" value="{{ $data->tanggal_expired }}">
                    <label for="inputStok">Stok</label>
                    <input type="text" class="form-control" id="inputStok" placeholder="Isi Stok" name="inputStok" value="{{ $data->stok }}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            </div>
@endsection