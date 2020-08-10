
@extends("master.layouts")
@section("content")

<div class="main-content-container container-fluid px-4 mb-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
                <h3 class="page-title">Data Jukir</h3>
              </div>
            </div>
            <!-- End Page Header -->
        <!-- Transaction History Table -->
        <div class="row">
          <div class="col">
            <div class="card card-small mb-4">
              <div class="card-header border-bottom">
                <h6 class="m-0">Active Users</h6>
              </div>
              <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                  <thead class="bg-light">
                    <tr>
                      <th scope="col" class="border-0">No</th>
                      <th scope="col" class="border-0">Username</th>
                      <th scope="col" class="border-0">Nama</th>
                      <th scope="col" class="border-0">No. Hp</th>
                      <th scope="col" class="border-0">Status</th>
                      <th scope="col" class="border-0">#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    @foreach($jukir as $j)
                        
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$j->username}}</td>
                      <td>{{$j->UserJukirBiodata->nama}}</td>
                      <td>{{$j->UserJukirBiodata->no_hp}}</td>
                      <td>
                        @if ($j->status == "N")
                          <button class="btn btn-danger">Belum Terverifikasi</button>
                        @else
                        <button class="btn btn-success">Terverifikasi</button>
                        @endif
                      </td>
                      <td>
                        @if ($j->status == "N")
                          <div class="btn-group btn-group-sm" role="group" aria-label="Table row actions">
                            <a href="/editJukir/{{$j->username}}">
                            <button type="button" class="btn btn-white">
                              <i class="material-icons">edit</i>
                            </button>
                            </a>
                          </div>
                        @else
                          <div class="btn-group btn-group-sm" role="group" aria-label="Table row actions">
                            <a href="/showJukir/{{$j->username}}">
                            <button type="button" class="btn btn-white">
                              <i class="material-icons">visibility</i>
                            </button>
                            </a>
                          </div>
                        @endif
                        
                        <div class="btn-group btn-group-sm" role="group" aria-label="Table row actions">
                          <a href="/jukir/{{$j->username}}">
                          <button type="button" class="btn btn-white">
                            <i class="material-icons">delete</i>
                          </button>
                          </a>
                        </div>
                      </td>
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