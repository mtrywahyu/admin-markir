
@extends("master.layouts")
@section("content")

<div class="main-content-container container-fluid px-4 mb-4">
           <!-- Page Header -->
           <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
              <h3 class="page-title">Riwayat</h3>
            </div>
            <div class="col-12 col-sm-4 d-flex align-items-center">
              <div class="btn-group btn-group-sm btn-group-toggle d-inline-flex mb-4 mb-sm-0 mx-auto" role="group" aria-label="Page actions">
                <div class="form-group col-md-6">
                  <label for="displayEmail">Jukir</label>
                  <select class="custom-select">
                    <option value="0" selected>All</option>
                    @foreach ($jukir as $item)
                      <option value="{{$item->username}}">{{$item->username}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-6">
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
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZkuHiUXYr2MnjteerrkucCJ8wUCu5-zo&callback&language=id&region=ID"></script>

       <script>
         var markers = [];
         var i = 0;
           // fungsi initialize untuk mempersiapkan peta
           function initialize() {
           var propertiPeta = {
               center:new google.maps.LatLng(-0.501617,117.126472),
               zoom:9,
               mapTypeId:google.maps.MapTypeId.ROADMAP
           };
           
           var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
           // membuat Marker
           @foreach ($tb_parkir  as $item)
             var latitude = {{$item->lat }};
             var longtitude = {{$item->lng }};
             var myLatLng = {lat:parseFloat(latitude), lng:parseFloat(longtitude)};
             markers[i] = new google.maps.Marker({
               position: myLatLng,
               map : peta
             });
             i++;
           @endforeach
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