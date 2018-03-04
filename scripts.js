var globalThisLocation = [];
var map;
var infowindow;
var restArray = [];
var sorted;
<<<<<<< HEAD
var defaultlocation = {lat: 33.7831032, lng: -84.3767911};
                      

var items = [];

var locations;
=======
var defaultlocation = {lat: 33.7831032, lng: -84.3767911}
>>>>>>> 54846a5c70a24703390868c6cb1887f978589652

function getWhere(){
      navigator.geolocation.getCurrentPosition(function(position) {
        console.log(`lat: ${position.coords.latitude} lng: ${position.coords.longitude}`);
        var thisLocation = { lat: position.coords.latitude, lng: position.coords.longitude };
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
  


  $.getJSON( "http://officeassassins.com/parks_geo.json", function(data) {
  
  // console.log(data);

    for( i = 0; i < 350; i++){


      var longitudes = data.parks[i].long
      var latitudes = data.parks[i].Lat
      var name = data.parks[i].NAME
      console.log(longitudes)
      console.log(latitudes)
      var longlat = {lat: parseFloat(latitudes), lng: parseFloat(longitudes)};
      // items.push(longlat)
     var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
    var parkMarker = new google.maps.Marker({
      position: longlat,
      map: map,
      icon: image,
      title: name
    });
     
      
    }


console.log(longlat.lat[0])
console.log(longlat.lng[0])
parklocations = {lat: parseFloat(longlat.lat[0]), lng: parseFloat(longlat.lng[0])}
console.log(parklocations)
});
}
