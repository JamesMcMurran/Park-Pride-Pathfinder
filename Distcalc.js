
function distance (x1,y1,x2 ,y2) {
   var R = 3959; // earth's mean radius in miles
   var dLat  = deg2rad(x2 - x1);
   var dLong = deg2rad(y2 - y1);
   var a =  Math.sin(dLat/2) *  Math.sin(dLat/2) +
        Math.cos(deg2rad(x1)) *  Math.cos(deg2rad(x2)) *  Math.sin(dLong/2) *  Math.sin(dLong/2);
   var c = 2 *  Math.atan2( Math.sqrt(a),  Math.sqrt(1-a));
   var d = R * c;
    return d; //distance in miles
}

function deg2rad(degrees) {
    return degrees * Math.PI / 180;
}

/**
 *
 * @param Obj the Obj of the items that need to be sorted
 * @param lat
 * @param long
 * @returns {Array.<T>|string|Blob|ArrayBuffer}
 */
function sortObjByDistance(Obj,lat,long) {
    var tempObj = Obj.slice(0);
    tempObj.sort(function(a,b) {
        return distance(a.Lat, a.long,lat, long)- distance(b.Lat, b.long,lat, long);
    });
    return tempObj;
}

console.log(sortObjByDistance(test.parks,33.6746282, -84.4970713));

