// var input = document.getElementById('pac-input');
// var autocomplete = new google.maps.places.Autocomplete(input);
//     //, options);
//  result = autocomplete.getPlace();
// console.log(result); // take a look at this result object
// console.log(result.address_components); // a result has multiple address components
//
// for(var i = 0; i < result.address_components.length; i += 1) {
//     var addressObj = result.address_components[i];
//     for(var j = 0; j < addressObj.types.length; j += 1) {
//         if (addressObj.types[j] === 'country') {
//             console.log(addressObj.types[j]); // confirm that this is 'country'
//             console.log(addressObj.long_name); // confirm that this is the country name
//         }
//     }
// }
let geocode = function(ltt, lng) {
    latitude = ltt;
    longitude = lng;
//     const response = await axios.get('https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCpslLLMvrUUPGWepKF3r-8g87FCEF2Qek&latlng='+latitude+','+longitude+'&language=en');
    console.log('response', latitude, longitude);

    let GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCpslLLMvrUUPGWepKF3r-8g87FCEF2Qek&latlng='+latitude+','+longitude+'&language=en';
    // $.ajaxSetup({async: false});
    $.ajax({
        url: GEOCODING,
        dataType: 'json',
        async: false,
        success: function(location) {
            console.log(location['plus_code']['compound_code']);
            let add= location['plus_code']['compound_code'];
            let  value=add.split(",");
            let count=value.length;
            country=value[count-1];
            if (count == 2)
            {
                let city_code=value[count-2].split(" ");
                code = city_code.shift();
                city = city_code.join(' ');
                state=city;
            }
            else {
                state=value[count-2];
                let city_code=value[count-3].split(" ");
                code = city_code.shift();
                city = city_code.join(' ');
            }
            console.log('country', country);
            console.log('state', state);
            console.log('city', city);
            console.log('code', code);
        }
    });
};