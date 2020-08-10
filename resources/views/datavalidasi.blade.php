@extends("master.layouts")
@section("content")
<div class="main-content-container container-fluid px-4">
    <div class="row">
      <div class="col-lg-8 mx-auto mt-4">
        <!-- Edit User Details Card -->
        <div class="card card-small edit-user-details mb-4">
          <div class="card-header p-0">
          </div>
          <div class="card-body p-0">
            <div class="border-bottom clearfix d-flex">
              <ul class="nav nav-tabs border-0 mt-auto mx-4 pt-2">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Biodata Jukir</a>
                </li>
              </ul>
            </div>
            <form action="#" class="py-4">
              <div class="form-row mx-4">
                <div class="col mb-3">
                  <h6 class="form-text m-0">biodata jukir</h6>
                  <p class="form-text text-muted m-0">biodata yang telah di input oleh calon jukir</p>
                </div>
              </div>
              <div class="form-row mx-4">
                <div class="col-lg-8">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="firstName">username</label>
                      <input type="text" class="form-control" id="firstName" value="username">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="lastName">nama</label>
                      <input type="text" class="form-control" id="lastName" value="nama">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="userLocation">Tanggal Lahir</label>
                      <div class="input-group input-group-seamless">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="material-icons">today</i>
                          </div>
                        </div>
                        <input type="text" class="form-control" value="Remote">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="phoneNumber">Nomor Telepon</label>
                      <div class="input-group input-group-seamless">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="material-icons">&#xE0CD;</i>
                          </div>
                        </div>
                        <input type="text" class="form-control" id="phoneNumber" value="08xxxxxxxxxx">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="emailAddress">Email</label>
                      <div class="input-group input-group-seamless">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="material-icons">&#xE0BE;</i>
                          </div>
                        </div>
                        <input type="email" class="form-control" id="emailAddress">
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="col-lg-4">
                  <label for="userProfilePicture" class="text-center w-100 mb-4">Profile Picture</label>
                  <div class="edit-user-details__avatar m-auto">
                    <img src="images/avatars/0.jpg" alt="User Avatar">
                    <label class="edit-user-details__avatar__change">
                      <i class="material-icons mr-1">&#xE439;</i>
                      <input type="file" id="userProfilePicture" class="d-none">
                    </label>
                  </div>
                </div>
              </div>
              <div class="card-footer border-top">
                <a href="#" class="btn btn-sm btn-accent ml-auto d-table mr-3">Konfirmasi Jukir</a>
              </div>
        <!-- End Edit User Details Card -->
    </div>
  </div>

@endsection