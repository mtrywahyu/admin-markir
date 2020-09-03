@extends("master.layouts")
@section("content")

 <!-- / .main-navbar -->
 <div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
        <h3 class="page-title">Selamat Datang</h3>
      </div>
    </div>
    <!-- End Page Header -->

 <div class="row">
    <div class="col-12 col-md-6 col-lg-3 mb-4">
      <div class="stats-small card card-small">
        <div class="card-body px-0 pb-0">
          <div class="d-flex px-3">
            <div class="stats-small__data">
              <span class="stats-small__label mb-1 text-uppercase">
                <span class="stats-medium__label mb-1 text-uppercase">Parkir Terkini</span>
              </span>
              <a href="/parkirmasuk">
                <img src="{{asset('images/mobil-masuk.png')}} ">
              <p>Total:{{$terkini}}</p>
            </a>
            </div>
          </div>
          <canvas height="60" class="analytics-overview-stats-small-1"></canvas>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 mb-4">
      <div class="stats-small card card-small">
        <div class="card-body px-0 pb-0">
          <div class="d-flex px-3">
            <div class="stats-small__data">
              <span class="stats-small__label mb-1 text-uppercase">Riwayat</span>
              <a href="/parkirkeluar">
              <img src="{{asset('images/mobil-keluar.png')}} ">
              <p>Total:{{$riwayat}}</p>
            </a>
            </div> 
          </div>
          <canvas height="60" class="analytics-overview-stats-small-2"></canvas>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 mb-4">
      <div class="stats-small card card-small">
        <div class="card-body px-0 pb-0">
          <div class="d-flex px-3">
            <div class="stats-small__data">
              <span class="stats-small__label mb-1 text-uppercase">Jukir</span>
              <a href="/jukir">
                <img src="{{asset('images/avatar.png')}} ">
                <p>Total:{{$jukir}}</p>
              </a>
            </div>
          </div>
          <canvas height="60" class="analytics-overview-stats-small-3"></canvas>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 mb-4">
      <div class="stats-small card card-small">
        <div class="card-body px-0 pb-0">
          <div class="d-flex px-3">
            <div class="stats-small__data">
              <span class="stats-small__label mb-1 text-uppercase">User</span>
              <a href="/userbiodata">
                <img src="{{asset('images/user.png')}} ">
              <p>Total:{{$user_akun}}</p>
              </a>
            </div>
          </div>
          <canvas height="60" class="analytics-overview-stats-small-4"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- End Small Stats Blocks -->
  <div class="row">
    <div class="col col-lg-8 col-md-12 col-sm-12 mb-4">
      <div class="card card-small h-100">
        <div class="card-header border-bottom">
          <h6 class="m-0">Sessions</h6>
          <div class="block-handle"></div>
        </div>
        <div class="card-body pt-0">
          <div class="row border-bottom py-2 bg-light">
            <div class="col-12 col-sm-6 d-flex mb-2 mb-sm-0">
              <div class="btn-group btn-group-sm btn-group-toggle d-flex my-auto mx-auto mx-sm-0" data-toggle="buttons">
                <label class="btn btn-white active">
                  <input type="radio" name="options" id="option1" autocomplete="off" checked=""> Data Per-Hari </label>
              </div>
            </div>
          </div>
          <div id="analytics-overview-sessions-legend"></div>
          <canvas id="myChart"></canvas>
        </div>
      </div>
    </div>
  </div><script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script>
  var label = [];
  @foreach($a as $item)
    label.push('<?php echo $item; ?>');
  @endforeach
  var total = [];
  @foreach($b as $item)
    total.push('<?php echo $item; ?>');
  @endforeach
  
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'bar',
    
      // The data for our dataset
      data: {
          labels: label,
          datasets: [{
              label: 'Data Parkir Terkini ',
              backgroundColor: 'rgb(28, 173, 186)',
              borderColor: 'rgb(28, 173, 186)',
              data: total
          }]
      },
  
      // Configuration options go here
      options: {}
  });
 </script>
 
  
  
@endsection
