@extends('layouts.master_karyawan')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary" style="text-align: center;">FAMILY BAKERY</h4>
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Retur</h6>
            </div>
            <form role="form" action="" method="post">
            <div class="card-body">
              <div class="form-group">
                <div style="float: left; width: 65%;">
                    <label for="inputNoRetur" style="float: left; margin: 10px;">No Retur</label>
                    <input style="width: 10%; float: left;" type="text" class="form-control" id="inputNoRetur" placeholder="" name="inputNoRetur" disabled="true">
                    <br><br>

                    <label for="inputTanggal" style="float: left; margin: 10px;">Tanggal</label>
                    <input type="date" class="form-control" id="inputTanggal" placeholder="" name="inputTanggal" style="width: 20%; float: left;" >
                </div>
                <div style="float: left; ">
                        <label for="inputKaryawan" style="">Karyawan : </label>
                        <label for="inputKaryawan" style="float: right;">Data Karyawan</label><br>

                        <label for="inputCabang" style="">Cabang : </label>
                        <label for="inputCabang" style="float: right;">Data Cabang</label>
                </div>
              </div>
              <div class="form-group" style="float: left; margin-left: 10%; margin-top: 5%;">
                    <input type="text" class="form-control" id="inputIdProduk" placeholder="Kode" name="inputIdProduk" style="width: 20%; float: left; margin:5px;">
                    <input type="number" class="form-control" id="inputQty" placeholder="Qty" name="inputQty" style="width: 15%; float: left; margin:5px;" >
                    <button type="submit" style="margin:5px;">+</button>
                  </div>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Produk</th>
                      <th>Jumlah Awal</th>
                      <th>Jumlah Akhir</th>
                      <th>Sisa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tepung</td>
                    </tr>
                  </tbody>
                </table>
              </div>            
            </div>
            <div class="card-footer" style="text-align: center;">
                  <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>

            </div>

@endsection