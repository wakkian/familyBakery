@extends('layouts.master_karyawan')

@section('content')
<!-- form start -->


<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary" style="text-align: center;">FAMILY BAKERY</h4>
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">LOGIN</h6>
            </div>
            <form role="form" action="{{ route('login') }}"" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputId">ID</label>
                    <input type="text" class="form-control" id="inputId" placeholder="Isi Nama" name="inputId">
                    <label for="inputJabatan">Jabatan</label>
                    <input type="text" class="form-control" id="inputJabatan" placeholder="Isi Jabatan" name="inputJabatan">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Isi Password" name="inputPassword">
                    
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">LOGIN</button>
                </div>
            </form>

            </div>
@endsection