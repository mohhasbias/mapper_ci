/*globals console, google, $*/
/*jslint plusplus: true*/

function showOnGoogleMap(position) {
  var map = loadGoogleMap(position);

//  $.getJSON('data.json', function (data) {
  var restBaseURL = 'http://api.mohhasbias.com/index.php';
  $.getJSON(restBaseURL + '/issues', function (data) {
    console.log(data);
    var i, marker, contentString;
    var infowindow = new google.maps.InfoWindow();
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

  navigator.geolocation.getCurrentPosition(showOnGoogleMap);
}

google.maps.event.addDomListener(window, 'load', initialize);
