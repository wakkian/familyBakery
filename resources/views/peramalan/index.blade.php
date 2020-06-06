@extends('layouts.master')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Peramalan</h6>
            </div>
            <div class="card-body">
              <form role="form" action="" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputCabang">Cabang</label>
                    <select class="cabang">
                      <option>Surabaya-01</option>
                      <option>Gresik-02</option>
                    </select><br>
                    <label for="inputTglPemesanan" style="position: blok; float: left;">Pemesanan</label>
                    <input type="date" class="form-control" id="inputTglPemesanan" placeholder="Isi Alamat" name="inputTglPemesanan" style="width: 30%; float: left;" >
                    <label style="float: left;">s/d</label>
                    <input type="date" class="form-control" id="inputTglPemesanan" placeholder="Isi Alamat" name="inputTglPemesanan" style="width: 30%;">
                    <label for="inputTglPemesanan" style="position: blok; float: left;">Retur</label>
                    <input type="date" class="form-control" id="inputTglPemesanan" placeholder="Isi Alamat" name="inputTglPemesanan" style="width: 30%; float: left;" >
                    <label style="float: left;">s/d</label>
                    <input type="date" class="form-control" id="inputTglPemesanan" placeholder="Isi Alamat" name="inputTglPemesanan" style="width: 30%;">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cari</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Produk Yang Laku</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Produk Yang Laku</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <tr>
                      <td>coklat</td>
                  
                  </tr>
                  </tbody>
                </table>
              </div>
            </form>
            </div>
</div>
@endsection