 <!DOCTYPE html>
  <html>
    <head>
      
      <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
      <meta charset="utf-8">
    <meta name="language" content="en-us"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Team Relief Chennai | We are a small group of people who took up an initiative to help and rescue people stuck up in floods in Chennai.
    " />
    <meta name="keywords" content="Chennai, Rains, Floods, pray for chennai, chennai rains, rescue, help, ngo, chennai support, chennai sos, chennai emergency" />
    <meta name="distribution" content="Global" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="1 days"/>
     <meta name="copyright" content="Relief Chennai"/>
    
    <meta charset="utf-8">
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
.controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 300px;
}

#pac-input:focus {
  border-color: #4d90fe;
}

.pac-container {
  font-family: Roboto;
}

#type-selector {
  color: #fff;
  background-color: #4d90fe;
  padding: 5px 11px 0px 11px;
}

#type-selector label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}

#full-size{
  width:100%;
  overflow:hidden;
  background-color: #38ACEC;
  padding: 20px 20px 20px 20px;
  font-family: Roboto;
}

#Logo{
  background-color: #C11B17;
  padding: 20px 20px 20px 20px;
  font-family: Roboto;  
  font-weight: 300;
  color: #FFFFFF;
}

select, input {
    border:1px solid #ccc;
    vertical-align:middle;
    height:30px;
}

::-webkit-input-placeholder {
   color: #99f;
}

:-moz-placeholder { /* Firefox 18- */
   color: #99f;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #99f;  
}

:-ms-input-placeholder {  
   color: #99f;  
}

input, select{
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}


    </style>
    <title>ChennaiSOS - Flood Relief</title>
    <style>
      #target {
        width: 345px;
      }
    </style>
  

      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

    <body>
<?php

include 'analyticstracking.php';

?><title>ReliefChennai-An initiative by VIT'ains</title>

    
    <?php

    include 'navbar.php';
    include 'funcs.php';
    include 'side-bar1.php'
    echo '

          <div class="col s12 m12 l9"> <!-- Note that "m8 l9" was added -->
            <!-- Teal page content

                  This content will be:
              9-columns-wide on large screens,
              8-columns-wide on medium screens,
              12-columns-wide on small screens  -->
                <br><br>
       <div class="row">
          <div class="grid-example col s12"><span class="flow-text"><center>THE REAL HEROES</center> </span>
            </div>
            </div>';

    ?>


<div id="Logo" >
  <ul>
  <li style="font-size: 50px;">Chennai SOS - Flood Relief Works</li>
  <li style="font-size: 20px;">A Project by World Tamil Organisation (UK) & Abdul Kalam Vision India Movement (UK)</li>
  <li style="font-size: 15px;">www.worldtamilorg.uk, www.abdulkalamvisionindia.org <img</li>
  <li style="font-size: 15px;">If you are a website developer, please join hand with us. Please write to us at: contact@worldtamilorg.uk</li><br/>
  <li style="font-size: 20px;">PLEASE FILL ALL THE BELOW FIELDS IN ORDER TO AVOID ERROR!!!</li>
</ul>
  </div>
  
 <div id="full-size" >
  <form method="post" action="http://chennaisos.com/post.php">
  My Location:
  <input type="text" id="FindLoc" name="MyLocation" placeholder="Enter your location" size="40">
  <select name="HelpType">
  <option value="FoodAvailable" selected="selected">Food Available</option>
  <option value="MedicineAvailable">Medicine Available</option>
  <option value="AccAvailable">Accommodation Available</option>
  <option value="RescueAvailable">Rescue Available</option>
  <option value="FoodNeeded">Food Needed</option>
  <option value="MedicineNeeded">Medicine Needed</option>
  <option value="AccNeeded">Accommodation Needed</option>
  <option value="RescueNeeded">Rescue Needed</option>
  <option value="InfoNeeded">Information Needed</option>
  <option value="InfoProvided">Information Provided</option>
  <option value="IVolunteer">I am a volunteer</option>
  <option value="AnyOthers">Any Others</option>
</select>
  <input type="text" name="ContactNo" placeholder="Contact Number">
  <input type="text" name="AdditionalInfo" size="30" placeholder="Additional Info (100 chars)">
  <input type="hidden" id="MyLat" name="Lat" value="">
  <input type="hidden" id="MyLng" name="Lng" value="">
  <input type="submit" name="submit" value="Update"> 
  <!--<button type="button" onclick="alert('Hello World!')">Search/Update</button>-->
</form>
</div>
    <input id="pac-input" class="controls" type="text" placeholder="Search who is available in your area">
    <div id="map"></div>
    <script>
  //<![CDATA[
  var customIcons = {
      FoodAvailable: {
        icon: 'http://chennaisos.com/FoodAvailable.png'
      },
    FoodNeeded: {
        icon: 'http://chennaisos.com/FoodNeeded.png'
      },
    MedicineAvailable: {
        icon: 'http://chennaisos.com/MedicineAvailable.png'
      },
      MedicineNeeded: {
        icon: 'http://chennaisos.com/MedicineNeeded.png'
      },
      RescueAvailable: {
        icon: 'http://chennaisos.com/RescueAvailable.png'
      },
      RescueNeeded: {
        icon: 'http://chennaisos.com/RescueNeeded.png'
      },
    AccAvailable: {
        icon: 'http://chennaisos.com/AccAvailable.png'
      },
      AccNeeded: {
        icon: 'http://chennaisos.com/AccNeeded.png'
      },
    InfoNeeded: {
        icon: 'http://chennaisos.com/InfoNeeded.png'
      },
    InfoProvided: {
        icon: 'http://chennaisos.com/InfoProvided.png'
      },
    IVolunteer: {
        icon: 'http://chennaisos.com/IVolunteer.png'
      },
      AnyOthers: {
        icon: 'http://chennaisos.com/AnyOthers.png'
      }
    
    };
// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.

function initAutocomplete() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 13.082680, lng: 80.270718},
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  
  var infoWindow = new google.maps.InfoWindow;
  
  // Change this depending on the name of your PHP file
      downloadUrl("phpsqlajax_genxml.php", function(data) {
  var parser = new DOMParser();
  var xml = parser.parseFromString(data.response, "application/xml");
  //var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var contactno = markers[i].getAttribute("contactno");
          var note = markers[i].getAttribute("note");
      //var timestamp = markers[i].getAttribute("timestamp");
          var helptyp = markers[i].getAttribute("helptyp");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>Contact: " + contactno + "</b> <br/>" + note;
          var icon = customIcons[helptyp] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon,
            shadow: icon.shadow
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }
  
  function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;
      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };
      request.open('GET', url, true);
      request.send(null);
    }
    function doNothing() {}
    //]]>
  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  
  // Create the search box and link it to the UI element.
  var findloc = document.getElementById('FindLoc');
  var searchloc = new google.maps.places.SearchBox(findloc);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });
  
  // Lat & Lng of search place
  searchloc.addListener('places_changed', function() {
  var places = searchloc.getPlaces();

    if (places.length == 0) {
      return;
    }
  
  places.forEach(function(place) {
    var latitude = place.geometry.location.lat();
    var longitude = place.geometry.location.lng();
    document.getElementById("MyLat").value = latitude;
    document.getElementById("MyLng").value = longitude;
  });
});

  var markers = [];
  // [START region_getplaces]
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
      }));

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
  // [END region_getplaces]
}


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANUilVIvBXYwVxBm3Obm0ndyE3dTMPXwI&libraries=places&callback=initAutocomplete"
         async defer></script>
     

    <?php
    echo '
    </div>
    
    </div>';


        
?>  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html> 


