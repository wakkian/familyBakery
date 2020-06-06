@extends('layouts.master_karyawan')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary" style="text-align: center;">FAMILY BAKERY</h4>
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Penjadwalan Produksi</h6>
            </div>
            <div class="card-body">
              <form role="form" action="" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <div style="float: left; width: 65%;">
                        <label for="inputIdPenjadwalan" style="margin: 10px;float: left;">Id Penjadwalan</label>
                        <input type="text" class="form-control" id="inputIdPenjadwalan" placeholder="" name="inputIdPenjadwalan" style="float: left; width: 10%;" disabled="true">
                        <br><br>

                        <label for="inputProduk" style="margin: 10px;float: left;">Produk</label>
                        <input type="text" class="form-control" id="inputProduk" placeholder="" name="inputProduk" style="float: left; width: 10%;" disabled="true">
                        <br><br>
 
                        <label for="inputJamMulai" style="margin: 10px;float: left;">Jam Mulai</label>
                        <input type="time" class="form-control" id="inputJamMulai" placeholder="" name="inputJamMulai" style="width: 20%; float: left;" >
                        <br><br>

                        <label for="inputJamSelesai" style="margin: 10px;float: left;">Jam Selesai</label>
                        <input type="time" class="form-control" id="inputJamSelesai" placeholder="" name="inputJamSelesai" style="width: 20%; float: left;" >
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
                <table class="table table-bordered" id="dataTable" style="width: 60%; text-align: center; margin-left: 20%;" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Bahan Baku</th>
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
                <button type="submit" class="btn btn-primary">Mulai</button>
                <button type="submit" class="btn btn-primary">Selesai</button>
              </div>
            </form>
            </div>            
</div>

@endsection