var gMapAPIKey = 'AIzaSyChq2F27ivyWZBkUg2S7K86lPlYFOD9Bfg';

var map;
      function initMap() {
      	    var myLatLng = {lat: 34.1031131, lng: -118.326343};


        map = new google.maps.Map(document.getElementById('hplus-map'), {
          'center' : myLatLng,
          'zoom' : 12,
          'mapTypeId' : google.maps.MapTypeId.ROADMAP,
          'draggable' : false,
          'scrollwheel' : false
        });

        var popupContent = 'H+ Sport<br>';
        	popupContent += '1750 Vine St<br>';
        	popupContent += 'Los Angeles, CA<br>';


        var infowindow = new google.maps.InfoWindow({
          content: popupContent
        });

        var marker = new google.maps.Marker({
          'position': myLatLng,
          'map': map,
          'title': 'hplus sport in los angeles'
        });

        marker.addListener('click', function() {
        	infowindow.open(map, marker);
        });
      }