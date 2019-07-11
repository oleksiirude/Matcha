// $.ajax({
//     type: "GET",
//     dataType: "json",
//     url: 'https://ip-api.io/json?api_key={e96729ee-21fb-4023-a69c-a5cb59295350}',
//     success: function(data) {
//         console.log(
//             'Your ip address is ' + data.ip
//             + ' city: ' + data.city
//             + ' region: ' + data.region_name
//             + ' country: ' + data.country_name
//         );
//
//     }
// });

let ip_pos = function () {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: 'https://api.ipdata.co?api-key=ef86a8cdcf9c1d049387de03d36272d52fdefccbb4460c0326757254',
        success: function (data) {
            console.log(
                data,
                'Your ip address is ' + data.ip
                + ' city: ' + data.city
                + ' country: ' + data.country_name
            );

        }
    });
}
    // function initialize() {
    //     let geocoder = new google.maps.Geocoder();
    //
    //
    //
    // }
    //
    // function codeLatLng(lat, lng) {
    //
    //     var latlng = new google.maps.LatLng(lat, lng);
    //     geocoder.geocode({'latLng': latlng}, function(results, status) {
    //         if (status == google.maps.GeocoderStatus.OK) {
    //             console.log(results)
    //             if (results[1]) {
    //                 //formatted address
    //                 alert(results[0].formatted_address)
    //                 //find country name
    //                 for (var i=0; i<results[0].address_components.length; i++) {
    //                     for (var b=0;b<results[0].address_components[i].types.length;b++) {
    //
    //                         //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
    //                         if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
    //                             //this is the object you are looking for
    //                             city= results[0].address_components[i];
    //                             break;
    //                         }
    //                     }
    //                 }
    //                 //city data
    //                 alert(city.short_name + " " + city.long_name)
    //
    //
    //             } else {
    //                 alert("No results found");
    //             }
    //         } else {
    //             alert("Geocoder failed due to: " + status);
    //         }
    //     });
    // }


    // $.getJSON("http://ip-api.io/json/",
    //     function(result) {
    //         console.log(result);
    //     });
    // $.get("https://ipinfo.io", function (response) {
    //     $("#ip").html("IP: " + response.ip);
    //     $("#address").html("Location: " + response.city + ", " + response.region);
    //     $("#details").html(JSON.stringify(response, null, 4));
    //     console.log(response);
    // }, "jsonp");
    // $.getJSON("http://freegeoip.net/json/", function(data) {
    //     var country_code = data.country_code;
    //     var country = data.country_name;
    //     var ip = data.ip;
    //     var time_zone = data.time_zone;
    //     var latitude = data.latitude;
    //     var longitude = data.longitude;
    //
    //     console.log("Country Code: ", country_code);
    //     console.log("Country Name: ", country);
    //     console.log("IP: ", ip);
    //     console.log("Time Zone: ", time_zone);
    //     console.log("Latitude: ", latitude);
    //     console.log("Longitude: ", longitude);
    // });

let gps_pos = function () {
    navigator.geolocation.getCurrentPosition(
        function(position) {
            console.log('gps', position);

//            console.log('gps', http://maps.googleapis.com/maps/api/geocode/json?latlng='+lat+','+long+'&sensor=true
            let latitude = position.coords.latitude;
            let longitude = position.coords.longitude;
            var GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+latitude+','+longitude+'&key=AIzaSyCpslLLMvrUUPGWepKF3r-8g87FCEF2Qek&language=en';
            // AIzaSyCpslLLMvrUUPGWepKF3r-8g87FCEF2Qek

            $.getJSON(GEOCODING).done(function(location) {
                console.log(location['plus_code']['compound_code']);
                var add= location['plus_code']['compound_code'];
                var  value=add.split(",");

                var count=value.length;
                var country=value[count-1];
                var state=value[count-2];
                var city=value[count-3];
                console.log('country', country);
                console.log('state', state);
                console.log('city', city);
            });
            document.getElementById('gps_latitude').setAttribute('value', latitude);
            document.getElementById('gps_longitude').setAttribute('value', longitude);
            document.getElementById('gps_city').setAttribute('value', latitude);
            document.getElementById('gps_country').setAttribute('value', latitude);
            document.getElementById('gps_allowlocation').setAttribute('value', '1');

        //     var map = new GMaps({
        //         el: '#map',
        //     lat: latitude,
        //     lng: longitude
        // });
        //     map.addMarker({
        //         lat: latitude,
        //     lng: longitude
        // });



        },
        function(error){
            console.log('error', error);
            ip_pos();

        }
        );
};

document.addEventListener('DOMContentLoaded', function(){
    console.log('test');
    // initialize();
    gps_pos();
});