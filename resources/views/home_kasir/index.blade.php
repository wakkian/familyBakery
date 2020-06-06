@extends('layouts.master_karyawan')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">FAMILY BAKERY</h4>
            </div>
            <a href="http://localhost/Familybakery/public/notapenjualans" class="btn btn-primary" style="width: 10%; float: left; margin: 10px;">LOGOUT</a>
            <div style="float: left; margin-left: 85%;">
                <label for="inputKaryawan" style="">Karyawan : </label>
                <label for="inputKaryawan" style="float: right;">Data Karyawan</label>
                <br>

                <label for="inputCabang" style="">Cabang : </label>
                <label for="inputCabang" style="float: right;">Data Cabang</label>
            </div> 

            <div class="card-body" style="text-align: center;">
            	<a href="http://localhost/Familybakery/public/notapenjualans" class="btn btn-primary">Penjualan</a>
            	<a href="http://localhost/Familybakery/public/notapesanans" class="btn btn-primary">Pesanan</a>
            	<a href="http://localhost/Familybakery/public/returs" class="btn btn-primary">Update Stok</a>
            </div>
</div>
@endsection