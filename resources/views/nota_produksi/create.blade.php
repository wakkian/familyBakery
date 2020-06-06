@extends('layouts.master_karyawan')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary" style="text-align: center;">FAMILY BAKERY</h4>
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Nota Produksi</h6>
            </div>
            <div class="card-body">
              <form role="form" action="" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <div style="float: left; width: 65%;">
                        <label for="inputNoNota" style="margin: 10px;float: left;">No Nota </label>
                        <input type="text" class="form-control" id="inputNoNota" placeholder="" name="inputNoNota" style="float: left; width: 20%;" disabled="true">
                        <br><br>

                        <label for="inputNoPesanan" style="margin: 10px;float: left;">No Pesanan</label>
                        <input type="text" class="form-control" id="inputNoPesanan" placeholder="" name="inputNoPesanan" style="float: left; width: 20%;" disabled="true">
                        <br><br>
 
                        <label for="inputTglMulai" style="margin: 10px;float: left;">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="inputTglMulai" placeholder="" name="inputTglMulai" style="width: 30%; float: left;" >
                        <br><br>

                        <label for="inputTglSelesai" style="margin: 10px;float: left;">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="inputTglSelesai" placeholder="" name="inputTglSelesai" style="width: 30%; float: left;" >
                    </div>
                    <div style="float: left; ">
                        <label for="inputKaryawan" style="">Karyawan : </label>
                        <label for="inputKaryawan" style="float: right;">Data Karyawan</label><br>

                        <label for="inputCabang" style="">Cabang : </label>
                        <label for="inputCabang" style="float: right;">Data Cabang</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" style="width: 50%; text-align: center; margin-left: 25%;" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Produk</th>
                      <th>QTY</th>
                      <th></th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  <tr>
                      <td>coklat</td>
                      <td>100</td>
                      <td>
                        <a href="http://localhost/Familybakery/public/penjadwalans">
                          <i class="fas fa-calendar-alt"></i>
                        </a>
                      </td>
                  
                  </tr>
                  </tbody>
                </table>
                </div>
                <div style="float: left; width: 65%;">
                        <label for="inputKelebihan" style="margin: 10px;float: left;">Kelebihan Produk</label>
                        <input type="text" class="form-control" id="inputKelebihan" placeholder="" name="inputKelebihan" style="float: left; width: 10%;">
                        <br><br>

                        <label for="inputGagal" style="margin: 10px;float: left;">No Produk Gagal</label>
                        <input type="text" class="form-control" id="inputGagal" placeholder="" name="inputGagal" style="float: left; width: 10%;" >
                        <br><br>

                        <label for="inputSisaBB" style="margin: 10px;float: left;">Stok Pengembalian Bahan Baku</label>
                        <select id="inputSisaBB" name="inputSisaBB" class="form-control form-control-sm" style="width: 30%; float: left; margin: 5px;">
                        @foreach($bahanbakus as $bb)
                          <option value="{{$bb->id}}">{{$bb->nama}}</option>
                        @endforeach
                        </select>
                        <input type="text" class="form-control" id="inputSisaBB" placeholder="" name="inputSisaBB" style="float: left; width: 10%;" >
                        <button type="submit" style="margin:5px;">+</button>
                  </div>

                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" style="width: 50%; text-align: center; margin-left: 25%;" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Produk</th>
                      <th>QTY</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  <tr>
                      <td>coklat</td>
                      <td>100</td>
                  
                  </tr>
                  </tbody>
                </table>
                </div>
              <div class="card-footer" style="text-align: center;">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
            </div>            
</div>

@endsection