var globalThisLocation = [];
var map;
var infowindow;
var restArray = [];
var sorted;
var defaultlocation = {lat: 33.7831032, lng: -84.3767911}




function getWhere(){
      navigator.geolocation.getCurrentPosition(function(position) {
        // console.log(`lat: ${position.coords.latitude} lng: ${position.coords.longitude}`);
        var thisLocation = { lat: position.coords.latitude, lng: position.coords.longitude };
        console.log(thisLocation);
        console.log(defaultlocation)
        initMap(thisLocation);
        globalThisLocation.push(thisLocation);
      },);
}
function initMap(location) {
  map = new google.maps.Map(document.getElementById('map'), {
    center: location,
    zoom: 14
  });
  var marker = new google.maps.Marker({
    position: location,
    map: map,
    title: 'Hello World!'
  });
  var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
  var parkMarker = new google.maps.Marker({
    position: defaultlocation,
    map: map,
    icon: image
  });
}
