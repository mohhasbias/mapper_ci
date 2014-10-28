/*globals console, google, $*/
/*jslint plusplus: true*/

function makeMarkerHandler(map, infowindow, marker, content) {
  'use strict';
  return function () {
    infowindow.setContent(content);
    infowindow.open(map, marker);
  };
}

function loadGoogleMap(position) {
  'use strict';
  console.log(position);
  
  var infowindow = new google.maps.InfoWindow(),
    map = new google.maps.Map(
      document.getElementById('map-canvas'),
      {
        center: { lat: position.coords.latitude, lng: position.coords.longitude },
        zoom: 19,
        scaleControl: true
      }
    );

//  $.getJSON('data.json', function (data) {
  var restBaseURL = 'http://api.mohhasbias.com/index.php';
  $.getJSON(restBaseURL + '/lighting_survey', function (data) {
    console.log(data);
    var i, marker, contentString;
    for (i = 0; i < data.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(data[i].latitude, data[i].longitude),
        map: map,
        title: data[i].title
      });

      contentString = '<div style="line-height:1.35;overflow:hidden;white-space:nowrap;">' +
          '<h1>' + data[i].title + '</h1>' +
          '<p>' +
          '<img src="' + data[i].photo + '">' + '<br>' +
          '<a href="#" target="_blank">Details</a>' +
          '</p>' + '</div>';

      google.maps.event.addListener(
        marker,
        'click',
        makeMarkerHandler(map, infowindow, marker, contentString)
      );
    }
  });
}

function initialize() {
//  navigator.geolocation.getCurrentPosition(loadGoogleMap);
  'use strict';

  if(!document.getElementById('map-canvas')){
    return;
  }

  var positionPENS = {
    coords: {
      latitude: -7.2764785,
      longitude: 112.7941515
    }
  };
  loadGoogleMap(positionPENS);
}

google.maps.event.addDomListener(window, 'load', initialize);
// google.maps.event.addDomListener(window, 'push', initialize);