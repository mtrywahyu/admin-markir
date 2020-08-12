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
              <a href="/riwayat">
              <img src="{{asset('images/mobil-keluar.png')}} ">
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
              </a>
            </div>
          </div>
          <canvas height="60" class="analytics-overview-stats-small-4"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- End Small Stats Blocks -->
@endsection