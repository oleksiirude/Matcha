// let geocode = function(ltt, lng, csrf) {
//     let latitude = ltt;
//     let longitude = lng;
//     let code;
//     let city;
//     let country;
// //     const response = await axios.get('https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCpslLLMvrUUPGWepKF3r-8g87FCEF2Qek&latlng='+latitude+','+longitude+'&language=en');
//     console.log('response', latitude, longitude, csrf);
//
//     let GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCpslLLMvrUUPGWepKF3r-8g87FCEF2Qek&latlng='+latitude+','+longitude+'&language=en';
//     // $.ajaxSetup({async: false});
//     $.ajaxSetup({
//         // headers: {
//         //     // "Access-Control-Request-Headers": ''
//         // }
//         headers: {
//             // "Allow-Control-Allow-Origin": "*",
//             // 'X-CSRF-TOKEN': csrf
//         }
//     });
//     $.ajax({
//         url: GEOCODING,
//         type: 'GET',
//         dataType: 'json',
//         async: false,
//         success: function(location) {
//             console.log(location['plus_code']['compound_code']);
//             let add= location['plus_code']['compound_code'];
//             let  value=add.split(",");
//             let count=value.length;
//             country=value[count-1];
//             if (count == 2)
//             {
//                 let city_code=value[count-2].split(" ");
//                 code = city_code.shift();
//                 city = city_code.join(' ');
//                 state = city;
//             }
//             else {
//                 state=value[count-2];
//                 let city_code=value[count-3].split(" ");
//                 code = city_code.shift();
//                 city = city_code.join(' ');
//             }
//             // console.log('country', country);
//             // console.log('state', state);
//             // console.log('city', city);
//             // console.log('code', code);
//         }
//     });
//     let location = {
//         country: country,
//         city: city,
//         latitude: ltt,
//         longitude: lng,
//     };
//     let json = location;
//     return (json);
// };