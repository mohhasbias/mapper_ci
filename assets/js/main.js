function makeMarkerHandler(map, infowindow, marker, content) 
{
  'use strict';
  return function () {
    infowindow.setContent(content);
    infowindow.open(map, marker);
  };
}

function loadGoogleMap(position)
{
  'use strict';
  console.log(position);
  
  var map = new google.maps.Map(
    document.getElementById('map-canvas'),
    {
      center: { lat: position.coords.latitude, lng: position.coords.longitude },
      zoom: 19,
      scaleControl: true,
      mapTypeId: google.maps.MapTypeId.HYBRID
    }
  );

  return map;
}