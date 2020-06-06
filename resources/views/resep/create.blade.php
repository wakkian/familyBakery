@extends('layouts.master')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Resep</h6>
            </div>
            <form role="form" action="{{route('reseps.store')}}" method="post">
            <div class="card-body">
              <div class="form-group">
                    <label for="inputIdProduk">Id Produk</label>
                    <input style="size: 50%;" type="text" class="form-control" id="inputIdProduk" placeholder="Isi ID" name="inputIdProduk">
                    <label for="inputIdBB">Id Bahan Baku</label>
                    <input style="size: 50%;" type="text" class="form-control" id="inputIdBB" placeholder="Isi ID" name="inputIdBB">
                    <label for="inputJml" style="position: blok;">Jumlah</label><br>
                    <input style="width: 50%; float: left;  " type="text" class="form-control" id="inputJml" placeholder="Isi ID" name="inputJml">
                    <button type="submit" style="float: left; margin: 5px;">+</button>

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
            <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>

</div>
@endsection