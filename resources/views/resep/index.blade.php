@extends('layouts.master')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Resep</h6>
            </div>
            <div class="card-footer">
              <a href="http://localhost/Familybakery/public/reseps/create" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
              <div class="form-group">
                    <label for="inputIdProduk">Id Produk</label>
                    <input style="size: 50%;" type="text" class="form-control" id="inputIdProduk" placeholder="Isi ID" name="inputIdProduk">
              </div>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Bahan Baku</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Bahan Baku</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Tepung</td>
                    </tr>
                  </tbody>
                </table>
              </div>            
            </div>
</div>
@endsection