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

$('a[data-delete]').each(function(){
  console.log($(this));

  $(this).on('click touch', function(evt){
    var confirmDelete = confirm("Are you sure you want to delete this item?");
    if(!confirmDelete)
    {
      evt.preventDefault();
    }
  })
});