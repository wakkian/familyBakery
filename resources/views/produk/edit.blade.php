@extends('layouts.master')

@section('content')
<!-- form start -->

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Produk</h6>
            </div>
            <form role="form" action="{{route('updateproduk', $data->id)}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNama">Nama</label>
                    <input type="text" class="form-control" id="inputNama" placeholder="Isi Nama" name="inputNama" value="{{ $data->nama }}">
                    
                    <select id="inputIdJenis" name="inputIdJenis" class="form-control form-control-sm">
                        @foreach($jenisProduk as $jenis)
                      <option value="{{$jenis->id}}">{{$jenis->nama}}</option>
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