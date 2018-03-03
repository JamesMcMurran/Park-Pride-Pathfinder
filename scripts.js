function getWhere(){
      navigator.geolocation.getCurrentPosition(function(position) {
      // console.log(`lat: ${position.coords.latitude} lng: ${position.coords.longitude}`);
      var thisLocation = { lat: position.coords.latitude, lng: position.coords.longitude };
      initMap(thisLocation);  
  },
  );
}