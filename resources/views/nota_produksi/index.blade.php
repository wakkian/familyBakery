@extends('layouts.master_karyawan')
@section('content')
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary" style="text-align: center;">FAMILY BAKERY</h4>
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Nota Produksi</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" style="width: 60%; margin-left: 20%; text-align: center;" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nomor Pesanan</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  	<tr>
                     <td>@foreach($notapesanans as $notapesanan)
                          <p value="{{$notapesanan->noNota}}">{{$notapesanan->noNota}}</p>
                        @endforeach</td> 
                     <td>
                       <form action="{{route('createnotaproduksi')}}" style="">
                          {{csrf_field()}}
                          <button type="submit" class="btn btn-default btn-lg">
                            <i class="fas fa-file"></i>
                          </button>
                        </form>
                     </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

@endsection