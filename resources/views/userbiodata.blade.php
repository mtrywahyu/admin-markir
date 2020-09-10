
@extends("master.layouts")
@section("content")

<div class="main-content-container container-fluid px-4 mb-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
                <h3 class="page-title">Info User Akun</h3>
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
                      <th scope="col" class="border-0">Status</th>
                      <th scope="col" class="border-0">Detail user</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($userbiodata as $u)
                        
                    <tr>
                      <td>{{$u->id_kendaraan}}</td>
                      <td>{{$u->username}}</td>
                      <td>{{$u->nama}}</td>
                    <td>
                      @if ($u->status == "N")
                        <button class="btn btn-danger">Belum Terverifikasi</button>
                      @else
                        <button class="btn btn-success">Terverifikasi</button>
                     @endif


                     {{-- @if ($u->status == "N")
                     <div class="btn-group btn-group-sm" role="group" aria-label="Table row actions">
                       <a href="/editJukir/{{$j->id}}">
                       <button type="button" class="btn btn-white">
                         <i class="material-icons">edit</i>
                       </button>
                       </a>
                     </div>
                   @else
                     <div class="btn-group btn-group-sm" role="group" aria-label="Table row actions">
                       <a href="/showJukir/{{$j->id}}">
                       <button type="button" class="btn btn-white">
                         <i class="material-icons">visibility</i>
                       </button>
                       </a>
                     </div>
                   @endif
                    --}}
                  </td>
                      <td>
                            <div class="container">
                              <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-white" data-toggle="modal" data-target="#myModal1" id="btn1" onclick="getuser('{{$u->username}}')">
                                  <i class="material-icons">account_box</i>
                                </button>
                              
                            
                              <!-- The Modal -->
                              <div class="modal fade" id="myModal1">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Maps Kendaraan</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      <body>
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <div class="card card-small mb-4 pt-3">
                                              <div class="card-header border-bottom text-center">
                                                <div class="mb-3 mx-auto">
                                                  <img class="rounded-circle" src="images/avatars/0.jpg" alt="User Avatar" width="110">
                                                </div>
                                              </div>
                                              <p class="text-center text-light m-0 mb-2">Lihat Kendaraan User</p>
                                              <ul class="user-details__social user-details__social--primary d-table mx-4 mb-2">
                                                <li class="mx-4">
                                                    <a href="/infouser/{{$u->username}}">
                                                      <button type="button" class="btn btn-white">
                                                        Lihat Kendaraan
                                                      </button>
                                                   </a>
                                                </li>
                                              </ul>
                                            
                                              </ul>
                                            </div>
                                          </div>
                                          <div class="col-lg-8">
                                            <div class="card card-small mb-4">
                                              <div class="card-header border-bottom">
                                                <h6 class="m-0">User Biodata</h6>
                                              </div>
                                              <ul class="list-group list-group-flush">
                                                <li class="list-group-item p-3">
                                                  <div class="row">
                                                    <div class="col">
                                                      <form>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label for="feFirstName">Username</label>
                                                            <input type="text" class="form-control" id="username" placeholder="Username ">
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label for="feLastName">Nama</label>
                                                            <input type="text" class="form-control" id="nama" placeholder="nama" >
                                                          </div>
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label for="feEmailAddress">Tanggal Lahir</label>
                                                            <input type="email" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" >
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label for="fePassword">No Hp</label>
                                                            <input type="text" class="form-control" id="no_hp" placeholder="No Hp">
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="feInputAddress">Email</label>
                                                          <input type="text" class="form-control" id="email" placeholder="Email">
                                                        </div>
                                                      </form>
                                                    </div>
                                                  </div>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                       
                                      </body>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    {{-- END MODAL MAPS --}}
                                  </div>
                                </div>
                              </div>
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
<script>
  function getuser(username){
    $.ajax({url: "/getuser/"+ username, success: function(result){
      // var obj = JSON.parse(result);
      console.log(result.username);
      $("#nama1").val(result.nama);
      $("#username").val(result.username);
      $("#nama").val(result.nama);
      $("#tgl_lahir").val(result.tgl_lahir);
      $("#no_hp").val(result.no_hp);
      $("#email").val(result.email);
    }});
  }
</script>