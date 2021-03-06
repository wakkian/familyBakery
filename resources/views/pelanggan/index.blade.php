@extends('layouts.master')
<script>
  $(document).ready(fuction(){
    $('.delete_form').on('submit',fuction(){
      if (confirm("Apakah anda yakin untuk menghapus data ini?")) {
        return true;
      }
      else{
        return false;
      }
    });
  });
</script>
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Pelanggan</h6>
              <br>
              @if($message = Session::get('success'))
              <div class="alert alert-success">
                <p>{{$message}}</p>
              </div>
              @endif
            </div>
            <div class="card-footer">
              <a href="http://localhost/Familybakery/public/pelanggans/create" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>No HP</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>No HP</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  	@foreach($pelanggans as $pelanggan)
					           <tr>
					            <td>{{$pelanggan->id}}</td>
					            <td>{{$pelanggan->nama}}</td>
					            <td>{{$pelanggan->alamat}}</td>
                      <td>{{$pelanggan->no_HP}}</td>
                      <td>
                        <form action="{{route('editpelanggan',$pelanggan->id)}}" style="float: left;">
                        {{csrf_field()}}
                          <button type="submit" class="btn btn-default btn-lg">
                            <i class="fas fa-pencil-alt"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
					           @endforeach
                  </tbody>
                </table>
              </div>
            </div>

@endsection