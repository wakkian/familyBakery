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
              <h6 class="m-0 font-weight-bold text-primary">Daftar Cabang</h6>
              <br>
              @if($message = Session::get('success'))
              <div class="alert alert-success">
                <p>{{$message}}</p>
              </div>
              @endif
            </div>
            <div class="card-footer">
                  <a href="http://localhost/Familybakery/public/cabangs/create" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  	@foreach($cabangs as $cabang)
					<tr>
					<td>{{$cabang->id}}</td>
					<td>{{$cabang->nama}}</td>
					<td>{{$cabang->alamat}}</td>
          <td>
              <form action="{{route('editcabang',$cabang->id)}}" style="float: left;">
                {{csrf_field()}}
                <button type="submit" class="btn btn-default btn-lg">
                  <i class="fas fa-pencil-alt"></i>
                </button>
              </form>
              <form method="post" class="delete_form" action="{{route('deletecabang',$cabang->id)}}">
                {{csrf_field()}}
                <button type="submit" class="btn btn-default btn-lg">
                  <i class="fas fa-trash"></i>
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
