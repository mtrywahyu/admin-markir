
@extends("master.layouts")
@section("content")

<div class="main-content-container container-fluid px-4 mb-4">
           <!-- Page Header -->
           <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
              <h3 class="page-title">Parkir Terkini</h3>
            </div>
            <div class="col-12 col-sm-4 d-flex align-items-center">
              <div class="btn-group btn-group-sm btn-group-toggle d-inline-flex mb-4 mb-sm-0 mx-auto" role="group" aria-label="Page actions">
                <div class="form-group col-md-8">
                  <label for="displayEmail">Jenis kendaraan</label>
                  <select class="custom-select">
                    <option value="0" selected>All</option>
                    @foreach ($refbiaya as $i)
                    <option value="{{$i->jenis_kendaraan}}">{{$i->jenis_kendaraan}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-4 d-flex align-items-center">
              <div id="analytics-overview-date-range" class="input-daterange input-group input-group-sm ml-auto">
                <input type="search" class="input-sm form-control" name="end" placeholder="Search" id="analytics-overview-date-range-2">
              </div>
            </div>
          </div>
          <!-- End Page Header -->
        <!-- Transaction History Table -->
        <script src="http://maps.googleapis.com/maps/api/js"></script>

        <script>
            // fungsi initialize untuk mempersiapkan peta
            function initialize() {
            var propertiPeta = {
                center:new google.maps.LatLng(-0.501617,117.126472),
                zoom:9,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            
            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
            // membuat Marker
            }
            // event jendela di-load  
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <body>
          <div id="googleMap" style="width:100%;height:65vh;"></div>
        </body>
            <!-- End Transaction History Table -->
  </div>
@endsection