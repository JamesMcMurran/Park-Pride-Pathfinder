var localDataUrl = "json/parks_geo.json";

$.getJSON(localDataUrl, function(response) {
  var sortedParks = sortObjByDistance(response.parks, defaultlocation.lat, defaultlocation.lng);
  appendParkItemsToBody(sortedParks);
});

function appendParkItemsToBody(parks) {
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
          <h4 class="media-heading">${parks[i].NAME}</h4>
          <i class="fas fa-table-tennis"></i>
          <i class="fab fa-envira"></i>
          <i class="fas fa-volleyball-ball"></i>
          <p>${parks[i].Address}</p>
        </div>
      </div>
    `
    
    $("#park-information-body").append(parkHtmlItem);
  }
}