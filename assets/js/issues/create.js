/*globals console, google, $*/
/*jslint plusplus: true*/

function showOnGoogleMap(position) {
  var map = loadGoogleMap(position);

  var GeoMarker = new GeolocationMarker(map);
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