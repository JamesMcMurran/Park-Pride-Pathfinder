// function getWhere(){
//       navigator.geolocation.getCurrentPosition(function(position) {
//       // console.log(`lat: ${position.coords.latitude} lng: ${position.coords.longitude}`);
//       var thisLocation = { lat: position.coords.latitude, lng: position.coords.longitude };
//       initMap(thisLocation);  
//   },
//   );
// }

$.getJSON("json/parks-no_geo.json", function(response) {
  console.log(response);
  appendParkItemsToBody(response);
});

function appendParkItemsToBody(parksJson) {
  for(var i = 0; i < 50; i++){
    var parkHtmlItem=
    `
    <div class="media park-item">
        <div class="media-left">
          <a href=#>
              <img src="img-placeholders/p1.jpg" class="img-thumbnail">          
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">${parksJson.parks[i].NAME}</h4>
          <p>${parksJson.parks[i].ADDRESS}</p>
        </div>
      </div>
    `
    
    $("#park-information-body").append(parkHtmlItem);
  }
}