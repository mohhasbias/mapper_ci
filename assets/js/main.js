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
  $.getJSON(restBaseURL + '/issues', function (data) {
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

  // var positionPENS = {
  //   coords: {
  //     latitude: -7.2764785,
  //     longitude: 112.7941515
  //   }
  // };
  // loadGoogleMap(positionPENS);
  navigator.geolocation.getCurrentPosition(loadGoogleMap);
}

google.maps.event.addDomListener(window, 'load', initialize);
// google.maps.event.addDomListener(window, 'push', initialize);



function previewImage(){
  if(typeof FileReader !== "undefined"){
    var oFReader = new FileReader();

    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function(oFREvent){
      console.log(oFREvent.target.result);
      document.getElementById("uploadPreview").src = oFREvent.target.result;
    }
  }
}

$(document).ready(function(){
  var longitude = $('input[name="longitude"');
  var latitude = $('input[name="latitude"');
  if(longitude && latitude){
    console.log("ouch");
    navigator.geolocation.getCurrentPosition(function(position){
      longitude.val(position.coords.longitude);
      longitude.attr('value', longitude.val());
      latitude.val(position.coords.latitude);
      latitude.value = latitude.val();
    });
  }
})