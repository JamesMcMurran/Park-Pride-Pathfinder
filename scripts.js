var globalThisLocation = [];
var map;
var infowindow;
var restArray = [];
var sorted;
var defaultlocation = {lat: 33.7831032, lng: -84.3767911}

function getWhere(){
      navigator.geolocation.getCurrentPosition(function(position) {
        console.log(`lat: ${position.coords.latitude} lng: ${position.coords.longitude}`);
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

var localDataUrl = "json/parks_geo.json";
var remoteDataUrl = "http://officeassassins.com/parks_geo.json";

$.getJSON(localDataUrl, function(response) {
  console.log(response);
  appendParkItemsToBody(response);
});

function appendParkItemsToBody(parksJson) {
  for(var i = 0; i < 10; i++){
    var parkHtmlItem=
    `
    <div class="media park-item border">
        <div class="media-left">
          <a href=#>
              <img src="img-placeholders/p1.jpg" class="img-thumbnail">          
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">${parksJson.parks[i].NAME}</h4>
          <i class="fas fa-table-tennis"></i>
          <i class="fab fa-envira"></i>
          <i class="fas fa-volleyball-ball"></i>
          <p>${parksJson.parks[i].Address}</p>
        </div>
      </div>
    `
    
    $("#park-information-body").append(parkHtmlItem);
  }
}