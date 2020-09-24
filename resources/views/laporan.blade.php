@extends('master.layouts')
@section('content')
<div class="main-content-container container-fluid px-4 mb-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-6 text-center text-sm-left mb-4 mb-sm-0">
        <span class="text-uppercase page-subtitle">Informasi
        </span>
        <h3 class="page-title">Data User</h3>
      </div>
    </div>
    <!-- End Page Header -->
<!-- Transaction History Table -->
<div class="row">
  <div class="col">
    <div class="card card-small mb-2">
      <div class="card-header border-bottom">
        
      <div class="card-body p-0 pb-3 text-center">
        <table class="table mb-0">
          <thead class="bg-light">
            <tr>
              <th scope="col" class="border-0">No</th>
              <th scope="col" class="border-0">Nama</th>
              <th scope="col" class="border-0">Nama Jukir</th>
              <th scope="col" class="border-0">Tanggal Masuk</th>
              <th scope="col" class="border-0">Status</th>
              <th scope="col" class="border-0">Biaya parkir</th>
            </tr>
        </thead>
          <tbody>
            @foreach($laporan as $d)
                
            <tr>
              <td>{{$d->id_kendaraan}}</td>
              <td>{{$d->UserKendaraan->UserAkun->UserBiodata->nama}}</td>
              <td>{{$d->jukir}}</td>
              <td>{{$d->tgl_masuk}}</td>
              <td>{{$d->stat_parkir}}</td>
              <td>{{$d->biaya_parkir}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    <!-- End Transaction History Table -->
</div> 
@endsection