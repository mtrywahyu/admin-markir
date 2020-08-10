
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
                  <select class="custom-select" id="jukir" onchange="getInfoParkir()">
                    <option value="0" selected>All</option>
                    @foreach ($jukir as $item)
                    @if (isset($_GET['jukir']))
                      <option value="{{$item->username}}" {{ ($_GET['jukir']==$item->username) ? 'selected' : '' }}>{{$item->UserJukirBiodata->nama}} ({{ $item->username }})</option>
                    @else
                      <option value="{{$item->username}}" >{{$item->UserJukirBiodata->nama}} ({{ $item->username }})</option>
                    @endif
                      
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="displayEmail">Jenis kendaraan</label>
                  <select class="custom-select" id="jenis_kendaraan" onchange="getInfoParkir()">
                    <option value="0" selected>All</option>
                    @foreach ($refbiaya as $i)
                      @if (isset($_GET['jenis_kendaraan']))
                      <option value="{{$i->id_ref_kendaraan}}" {{ ($_GET['jenis_kendaraan']==$i->id_ref_kendaraan) ? 'selected' : '' }}>{{$i->jenis_kendaraan}}</option>
                      @else
                      <option value="{{$i->id_ref_kendaraan}}" >{{$i->jenis_kendaraan}}</option>
                      @endif
                      
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
               zoom:15,
               mapTypeId:google.maps.MapTypeId.ROADMAP
           };
           
           var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
           // membuat Marker
           @foreach ($tb_parkir  as $item)
            @if(isset($_GET['jenis_kendaraan']))
              @if($_GET['jenis_kendaraan'] == "0")
                  var latitude = {{$item->lat }};
                  var longtitude = {{$item->lng }};
                  var myLatLng = {lat:parseFloat(latitude), lng:parseFloat(longtitude)};
                  markers[i] = new google.maps.Marker({
                    position: myLatLng,
                    map : peta
                  });
                  i++;
              @else
                @if($item->UserKendaraan->RefJenisKendaraan1->id_ref_kendaraan == $_GET['jenis_kendaraan'])
                  var latitude = {{$item->lat }};
                  var longtitude = {{$item->lng }};
                  var myLatLng = {lat:parseFloat(latitude), lng:parseFloat(longtitude)};
                  markers[i] = new google.maps.Marker({
                    position: myLatLng,
                    map : peta
                  });
                  i++;
                @endif
              @endif
            @else
                  var latitude = {{$item->lat }};
                  var longtitude = {{$item->lng }};
                  var myLatLng = {lat:parseFloat(latitude), lng:parseFloat(longtitude)};
                  markers[i] = new google.maps.Marker({
                    position: myLatLng,
                    map : peta
                  });
                  i++;
            @endif
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
  <script>
    function getInfoParkir(){
      var jukir = $("#jukir").val();
      var jenis_kendaraan = $("#jenis_kendaraan").val();
      window.location.replace('/parkirkeluar?jukir='+jukir+'&jenis_kendaraan='+jenis_kendaraan);
    }
  </script>
@endsection
