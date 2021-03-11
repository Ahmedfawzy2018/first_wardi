@extends('layouts.front')
@section('content')
    <style type="text/css">
         /* map needs width and height to appear */
        #map{
          max-width: 100%;
          height: 500px;   
        }
        #panel{
            line-height: 1.42857143;
            font-weight: 400;
            font-style: normal;
            font-size: 12px;
            text-transform: none;
            color: rgb(80, 80, 80);
            -webkit-font-smoothing: antialiased;
            -webkit-tap-highlight-color: transparent;
            font-family: Cairo !important;
            margin: 0;
            padding: 0;
            outline: 0;
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
            width: 25%;
            border: 1px solid #ccc !important;
            overflow: auto !important;
            box-sizing: border-box;
            height: 500px;
            margin-right: 10px;
        }

        .storelocator-filter {
          line-height: 1.42857143;
          font-weight: 400;
          font-style: normal;
          font-size: 12px;
          text-transform: none;
          color: rgb(80, 80, 80);
          -webkit-font-smoothing: antialiased;
          -webkit-tap-highlight-color: transparent;
          font-family: Cairo !important;
          margin: 0;
          padding: 0;
          border: 0;
          outline: 0;
          box-sizing: border-box;
        }
      .location-search{
          line-height: 1.42857143;
          font-weight: 400;
          font-style: normal;
          font-size: 12px;
          text-transform: none;
          color: rgb(80, 80, 80);
          -webkit-font-smoothing: antialiased;
          -webkit-tap-highlight-color: transparent;
          font-family: Cairo !important;
          margin: 0;
          border: 0;
          outline: 0;
         
          box-sizing: border-box;
      }

      
    .feature-filter{
      line-height: 1.42857143;
      font-weight: 400;
      font-style: normal;
      font-size: 12px;
      text-transform: none;
      color: rgb(80, 80, 80);
      -webkit-font-smoothing: antialiased;
      -webkit-tap-highlight-color: transparent;
      font-family: Cairo !important;
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      overflow: hidden !important;
      box-sizing: border-box;
    }

    .location-search input{
          -webkit-font-smoothing: antialiased;
      -webkit-tap-highlight-color: transparent;
      font-family: Cairo !important;
      margin: 0;
      font: inherit;
      color: inherit;
      line-height: inherit;
      height: 40px;
      text-align:center;
      font-size: 15px;
      width: 100% !important;
      box-sizing: border-box;
    }

    .location-search input[type='button']{
         height:30px;
         margin-top: 10px;
         width: 30% !important;
    }

    .store-list{
          line-height: 1.42857143;
      font-weight: 400;
      font-style: normal;
      font-size: 12px;
      text-transform: none;
      color: rgb(80, 80, 80);
      -webkit-font-smoothing: antialiased;
      -webkit-tap-highlight-color: transparent;
      font-family: Cairo !important;
      margin: 0 !important;
      padding: 0 !important;
      list-style: none !important;
      box-sizing: border-box;
    }

    .store {
          display: block;
    border-bottom: 1px solid #eee;
    padding: 10px;
    text-decoration: none;
    }
    .store:hover{
        background-color: rgba(168, 45, 93, 0.43) !important;
        cursor: pointer !important;
    }

    .title_name {
      display: block;
      font: normal normal bold 30px/44px Tajawal;
letter-spacing: 0px;
color: #646464;
opacity: 1
    }

  .locationimage{
      float:right;
      width:20px;
      height:20px;
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      
  }

    .address{
      line-height: 1.42857143;
      font-weight: 400;
      font-style: normal;
      text-transform: none;
      list-style: none !important;
      -webkit-font-smoothing: antialiased;
      -webkit-tap-highlight-color: transparent;
      font-family: Cairo !important;
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      margin-top: 0.2em !important;
      margin-bottom: 0.5em !important;
      display: block !important;
      color: #000;
      box-sizing: border-box;
    }

  .marker{
     padding:0;
  } 

  .marker h3 {
    color:#ED64A5;
    margin:0;
    display:block;
    border-radius:3px 3px 0 0;
    font-weight:700;
  }
.search-container {
  margin-bottom: 10px;  
}

.search-container input[type=text] {
  padding: 4px;
  width: 70%;
  height: 40px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  border-radius: 5px;
}

.search-container button {
  width: 25%;
  height: 40px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 970px) {
 .search-container {
    float: none;
  }
  .search-container a, .search-container input[type=text], .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .search-container input[type=text] {
    border: 1px solid #ccc;  
  }
  #panel{
    width:100%;
  }
  #map{
    margin-left: 0px;
  }
}
h4{
        font-style: normal;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
        -webkit-tap-highlight-color: transparent;
        font-family: Cairo !important;
        font-weight: 500;
        line-height: 1.1;
        border: 0;
        outline: 0;
        margin: 10px !important;
        padding: 0px !important;
        font-size: 20px !important;
        color: rgb(168, 45, 93)!important;
      }
    </style>
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="pages">
                    <li>
                        <a href="{{ route('front.index') }}">
                            {{ $langg->lang17 }}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{ $langg->lang16 }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

 <!-- Contact Us Area Start -->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-section-title" style="top: 588px;
left: 416px;
width: 1059px;
height: 51px;
text-align: center;
font: normal normal bold 35px/50px Tajawal;
letter-spacing: 0px;
color: #646464;
opacity: 1;">
                            {{ $langg->lang88880 }}
                            
                    </div>
                    <form  >
                        <input type="text" id="addressInput" placeholder="{{ $langg->lang88880 }}" name="addressInput" required="" value="{{ request()->get('addressInput') }}" autocomplete="off" style="top: 689px;
width: 70%;
height: 60px;
border: 1px solid #D1D1D1;
border-radius: 10px;
opacity: 1;">
                        <input type="hidden" id="loc_lat" />
                        <input type="hidden" id="loc_long" />
                        <button type="submit" id="searchButton" style="top: 689px;
width: 20%;
height: 60px;
border-radius: 10px;
background-color:#ED64A5 ;
font:white;
opacity: 1;">Search</button>
                    </form>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-12 col-lg-12 col-md-6">
                     <div class="container" id="maps-locator-div">
        <div class="row">

          <div class="col-l-3 storelocator-panel" id="panel" >

                <ul class="store-list">
                    @foreach($branches as $branch)
                    <li class="store" id="{{ $branch->id }}" onclick="searchLoc('{{ $branch->address_latitude }}','{{ $branch->address_longitude }}','{{ $branch->nameLang() }}','{{ $branch->cityLang() }}');"> 

                        <input type="hidden" class="hiden" name="address_latitude" id="address_latitude" value="{{ $branch->address_latitude }}" >
                        <input type="hidden" class="hiden" name="address_longitude" id="address_longitude" value="{{ $branch->address_longitude }}" >
                        
                        <div  id="locationSelect" name="locationSelect"> 
                            <div class="title_name" >{{ $branch->nameLang() }} 
                            </div>  
                            <div class="address">
                                <i class="fas fa-map-marker-alt"></i> {{ $branch->cityLang() }}
                                <br>
                                <i class="fas fa-map-marker-alt"></i> Saudi Arabia
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
          <div class="col-l-7" id="map" style="width: 70%"></div> 

      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End-->

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCIyqaj_vYHBGogXIqMBsmqw6rs6Z3u8Yc&callback=initMap&libraries=places&language=en" async defer></script>

<script type="text/javascript">

        //Define some GLOBAL Variables  for general Use
      var map;
      var markers = [];
      var infoWindow;
      var locationSelect;
      var LocaArr = [] ;
      var pinIcon = 'assets/images/icon.jpg' ;
      var CompanyName = 'WARDI' ;

      //Intialize map and markers for locations on it 
      function initMap() {
        //determine openlocation
          var sydney = {lat: 30.045369, lng: 31.235974};
          map = new google.maps.Map(document.getElementById('map'), {
            center: sydney,
            zoom: 12,
            mapTypeId: 'roadmap',
            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
          });

          infoWindow = new google.maps.InfoWindow();

          //Add eventlistner for search form submit
          searchButton = document.getElementById("searchButton").onclick = searchLocations;
          
          //Prepare Autocomplete search form
          document.getElementById('addressInput').addEventListener('keypress', function(event) {
            //Prevent enterkey from submit 
            if (event.keyCode == 13) {
                event.preventDefault();
                searchLocations();
            }
          });

          // Added all locations marker on map in opening 
          $( ".store" ).each(function() {
                var entryData = {
                  address_latitude    : $(this).find('#address_latitude').val(),
                  address_longitude    : $(this).find('#address_longitude').val(),
              
                };
            LocaArr.push(entryData);
          });
          
          for(i= 0 ; i < LocaArr.length; i++){
            //var latlngStr = LocaArr[i].id.split(',', 2);
            var latlng = {lat: parseFloat( LocaArr[i].address_latitude), lng: parseFloat( LocaArr[i].address_longitude)};
            var marker = new google.maps.Marker({    
              position: latlng,    
              map: map,
              }); 
            createMarker(latlng);
          }


          locationSelect = document.getElementById("locationSelect");
          locationSelect.onclick = function() {
            var markerNum = locationSelect.value;
            if (markerNum != ""){
              google.maps.event.trigger(markers[markerNum], 'click');
            }
          };
        
          var searchInput = 'addressInput';
          var autocomplete;
          autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                types: ['geocode'],
            });
          
          google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var near_place = autocomplete.getPlace();
                document.getElementById('loc_lat').value = near_place.geometry.location.lat();
                document.getElementById('loc_long').value = near_place.geometry.location.lng();
          });
        }


    function searchLocations() {
      //Search location 
        var geocoder = new google.maps.Geocoder();
        geocodeAddress(geocoder,map,infoWindow);
    }

    function geocodeAddress(geocoder, resultsMap,infowindow) {
      var address = document.getElementById('addressInput').value;
      if(address == ''){
        alert('Please Enter location for search ?') ;
        document.getElementById('addressInput').focus();
        return false ;
      }
      //Search for the location on the MaP with Address
      geocoder.geocode({'address': address}, function(results, status) {
        if (status === 'OK') {

          var marker = new google.maps.Marker({
              zoom: 14,
              map: resultsMap,
              position: results[0].geometry.location,
              icon : pinIcon 
          });
            infowindow.setContent(results[0].formatted_address);
            infowindow.open(map, marker);
        } else {
            alert('Location '+address+' not found ');
            document.getElementById('addressInput').focus();
        }
      });
    }

  function searchLoc(lat,lan,name,address){

      var geocoder = new google.maps.Geocoder();
      var latlng = {lat: parseFloat(lat), lng: parseFloat( lan)};
      geocodeLatLng(geocoder,map,infoWindow,latlng,name,address) ;
  }

  function geocodeLatLng(geocoder, map, infowindow,geocode,name,address) {

    //Search for the location on the MaP with latlang Geocode
     // var latlngStr = geocode.split(',', 2);
      var latlng = geocode;//{lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
      //SEND LatLng to google 
      geocoder.geocode({'location': latlng}, function(results, status) {

      if (status === 'OK') {
          if (results[0]) {
            map.setZoom(11);
            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
            });
            //Marker for click Location
             var popup = '<div class="marker"><h3>'+CompanyName+'</h3><br /><div>' + name;
             infowindow.setContent(popup );
            infowindow.open(map, marker);
          } else {
              window.alert('No results found');
          }
      } else {
            window.alert('Geocoder failed due to: ' + status);
      }
    });
  }

  //Prepare Marker on MaP
  function createMarker(latlng) {
      //var html ='<div class="marker"><h3>'+CompanyName+'</h3><br /><div>' + name +"<br />" +address;
      var marker = new google.maps.Marker({
            map: map,
            position: latlng,
      });
      //EventListner on click marker Display data
      
      markers.push(marker);
  }

      

</script>