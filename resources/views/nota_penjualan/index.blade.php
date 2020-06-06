@extends('layouts.master_karyawan')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary" style="text-align: center;">FAMILY BAKERY</h4>
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Nota Penjualan</h6>
            </div>
            <div class="card-body">
              <form role="form" action="" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <div style="float: left; width: 70%;">
                        <label for="inputNoNota" style="margin: 10px;float: left;">No Nota </label>
                        <input type="text" class="form-control" id="inputNoNota" placeholder="" name="inputNoNota" style="float: left; width: 20%;" disabled="true">
                        <br><br>
                    
                        <label for="inputPelanggan" style="margin: 10px;float: left;">Pelanggan</label>
                        <input type="text" class="form-control" id="inputPelanggan" placeholder="" name="inputPelanggan" style=" float: left; width: 50%" >
                        <a href="http://localhost/Familybakery/public/pelanggans" style="margin: 10px;"><i class="fas fa-search"></i></a>
                        <br><br>

                        <label for="inputTglPembelian" style="margin: 10px;float: left;">Tanggal Pembelian</label>
                        <input type="date" class="form-control" id="inputTglPembelian" placeholder="" name="inputTglPembelian" style="float: left; width: 50%" >
                    </div>
                    <div style="float: left; ">
                        <label for="inputKaryawan" style="">Karyawan : </label>
                        <label for="inputKaryawan" style="float: right;">Data Karyawan</label><br>

                        <label for="inputCabang" style="">Cabang : </label>
                        <label for="inputCabang" style="float: right;">Data Cabang</label>
                    </div> 
                  
                  <div class="form-group" style="float: left; margin-left: 10%; margin-top: 5%;">
                    <input type="text" class="form-control" id="inputIdProduk" placeholder="Kode" name="inputIdProduk" style="width: 20%; float: left; margin:5px;">
                    <input type="hidden" id="namaProduk">
                    <input type="number" class="form-control" id="inputQty" placeholder="Qty" min="1" name="inputQty" style="width: 15%; float: left; margin:5px;" disabled>
                    <input type="text" class="form-control" id="inputHargaSatuan" placeholder="Harga Satuan" name="inputHargaSatuan" style="width: 25%; float: left; margin:5px;" disabled="true" >
                    <input type="text" class="form-control" id="inputSubTotal" placeholder="Sub Total" name="inputSubTotal" style="width: 30%; float: left; margin:5px;" disabled="true" >
                    <button disabled id="submitNota" style="margin:5px;">+</button>
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
                  
                  <tbody id="tablebody">
                  
                  </tbody>
                </table>
                <label for="inputGrandTotal" style="margin-left: 60%;">Grand Total</label>
                <input type="text" class="form-control" id="inputGrandTotal" placeholder="" name="inputGrandTotal" style="width: 25%; float: right;" disabled="true" >

              </div>
              <div class="card-footer" style="text-align: center;">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="submit" class="btn btn-primary">Cetak</button>
              </div>
            </form>
            </div>            
</div>

@endsection
@push('scripts')
<script>
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  //inputIdProduk
  $(document).on('change', '#inputIdProduk', function(e) {
    var val = $('#inputIdProduk').val();
    var url = "{{url('/notapenjualans/getharga/')}}/"+val;
    // alert(url);
    $.ajax({
      type: "GET",
      url: url,
      dataType: "json",
      success: function(data) {
        // console.log(data);
        $('#inputHargaSatuan').val(data.data.hargaSatuan);
        $('#namaProduk').val(data.data.nama);
        $('#inputQty').prop('disabled', false);
        $('#inputQty').attr('max', data.data.stok);
      }
    });
  });

  $(document).on('change', '#inputQty', function(e) {
    if (parseInt($(this).val()) > parseInt($('#inputQty').attr('max'))) {
      console.log($(this).val());
      console.log($('#inputQty').attr('max'));
      alert('Melebihi batas stok');
      $('#inputQty').val('');
    }else {

      var harga = $('#inputHargaSatuan').val();
      var total = $(this).val() * harga;
      $('#inputSubTotal').val(total);
      $('#submitNota').prop('disabled', false);
 
    }
  })
  //<tr> <td>coklat</td> <td>100</td> <td>3000</td> <td>300.000</td> </tr>
  $(document).on('click', '#submitNota', function(e) {
    e.preventDefault();
    var nama = $('#namaProduk').val();
    var qty = $('#inputQty').val();
    var harga = $('#inputHargaSatuan').val();
    var sub = $('#inputSubTotal').val();
    $( "#tablebody" ).append( "<tr> <td>"+nama+"</td> <td>"+qty+"</td> <td>"+harga+"</td> <td class='subtotal'>"+sub+"</td> </tr>" );
  });
  
  $(document).on('click', '#submitNota', function(e) {
    var total = 0;
    $('.subtotal').each(function(index, data) {
      // console.log(index);
      console.log($(data).text());
      total += parseFloat($(data).text());
    });
    $('#inputGrandTotal').val(total);
  });

</script>
@endpush