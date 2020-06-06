@extends('layouts.master_karyawan')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary" style="text-align: center;">FAMILY BAKERY</h4>
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Nota Pesanan</h6>
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
                    
                        <label for="inputPelanggan" style="margin: 10px;float: left;">Pelanggan</label>
                        <input type="text" class="form-control" id="inputPelanggan" placeholder="" name="inputPelanggan" style=" float: left; width: 50%" >
                        <a href="http://localhost/Familybakery/public/pelanggans" style="margin: 10px;"><i class="fas fa-search"></i></a>
                        <br><br>

                        <label for="inputTglPemesanan" style="margin: 10px;float: left;">Tanggal Pemesanan</label>
                        <input type="date" class="form-control" id="inputTglPemesanan" placeholder="" name="inputTglPemesanan" style="width: 30%; float: left;" >
                        <br><br>

                        <label for="inputTglSelesai" style="margin: 10px;float: left;">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="inputTglSelesai" placeholder="" name="inputTglSelesai" style="width: 30%; float: left;" >
                    </div>
                    <div style="float: left; ">
                        <label for="inputKaryawan" style="">Karyawan : </label>
                        <label for="inputKaryawan" style="float: right;">Data Karyawan</label><br>

                        <label for="inputCabang" style="">Cabang : </label>
                        <label for="inputCabang" style="float: right;">Data Cabang</label><br>

                        <label for="inputPembayaran" style="">Pembayaran : </label><br>
                        <form action="">
                          <input type="radio" name="pembayaran" value="tunai">Tunai
                          <input type="radio" name="pembayaran" value="DP">DP
                        </form><br>

                        <label for="inputPengiriman" style="">Pengiriman : </label><br>
                        <form action="">
                          <input type="radio" name="pengiriman" value="kirim">Kirim
                          <input type="radio" name="pengiriman" value="ambil">Ambil
                        </form>
                    
                        <label for="inputAlamat" style="margin-top: 10px;">Alamat Pengiriman</label>
                        <input type="text" class="form-control" id="inputAlamat" placeholder="" name="inputAlamat" style=" " >
                    </div>                     
                  </div>

                  <div class="form-group" style="float: left; margin-left: 10%; margin-top: 5%;">
                    <input type="text" class="form-control" id="inputIdProduk" placeholder="Kode" name="inputIdProduk" style="width: 20%; float: left; margin:5px;">
                    <input type="number" class="form-control" id="inputQty" placeholder="Qty" name="inputQty" style="width: 15%; float: left; margin:5px;" >
                    <input type="text" class="form-control" id="inputHargaSatuan" placeholder="Harga Satuan" name="inputHargaSatuan" style="width: 25%; float: left; margin:5px;" disabled="true" >
                    <input type="text" class="form-control" id="inputSubTotal" placeholder="Sub Total" name="inputSubTotal" style="width: 30%; float: left; margin:5px;" disabled="true" >
                    <button type="submit" style="margin:5px;">+</button>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Produk</th>
                      <th>QTY</th>
                      <th>Harga Satuan</th>
                      <th>Sub Total</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  <tr>
                      <td>coklat</td>
                      <td>coklat</td>
                      <td>coklat</td>
                      <td>coklat</td>
                  
                  </tr>
                  </tbody>
                </table>
                <label for="inputGrandTotal" style="margin-left: 60%; margin-bottom: 20px;">Grand Total</label>
                <input type="text" class="form-control" id="inputGrandTotal" placeholder="" name="inputGrandTotal" style="width: 25%; float: right;" disabled="true" >

                <label for="inputDP" style="margin-left: 60%; margin-bottom: 20px;">DP</label>
                <input type="number" class="form-control" id="inputDP" placeholder="" name="inputDP" style="width: 25%; float: right;" >

                <label for="inputSisa" style="margin-left: 60%; margin-bottom: 20px;">Sisa</label>
                <input type="text" class="form-control" id="inputSisa" placeholder="" name="inputSisa" style="width: 25%; float: right;" disabled="true">



              </div>
              <div class="card-footer" style="text-align: center;">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="submit" class="btn btn-primary">Cetak</button>
              </div>
            </form>
            </div>            
</div>

@endsection