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

  {{-- Chart balok parkir Terkini --}}
<div class="row">
    <div class="col col-lg-8 col-md-12 col-sm-12 mb-4">
      <div class="card card-small h-100">
        <div class="card-header border-bottom">
          <h6 class="m-0">Data Per-Hari</h6>
          <div class="block-handle"></div>
        </div>
        <div class="card-body pt-0">
          <div class="row border-bottom py-2 bg-light">
            <div class="col-12 col-sm-6 d-flex mb-2 mb-sm-0">
            </div>
          </div>
          <div id="analytics-overview-sessions-legend"></div>
          <canvas id="myChart"></canvas>
        </div>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    {{-- End Chart Parkir TerKini --}}


  <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
    <!-- Chart Pie Jukirs -->
    <div class="card ubd-stats card-small h-100">
      <div class="card-header border-bottom">
        <h6 class="m-0">Jukir</h6>
        <div class="block-handle"></div>
      </div>
      <div class="card-body d-flex flex-column">
        <canvas id="my"></canvas>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- end Chart Pie Jukir -->
  </div>
</div>
{{-- Chart parkir terkini --}}
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
              label: 'Jenis Kendaraan',
              backgroundColor: 'rgb(28, 173, 186)',
              borderColor: 'rgb(28, 173, 186)',
              data: total,
          }]
          
      },
  
      // Configuration options go here
      options: { 
        
        }
  });
 </script>
 {{-- END chart Parkir Terkini --}}

 <canvas id="myChart2"width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
  
  
@endsection
