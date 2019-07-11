let latitude;
let longitude;
let country;
let state;
let code;
let city;
let allow;

let tofillinputs = function(){
    document.getElementById('gps_latitude').setAttribute('value', latitude);
    document.getElementById('gps_longitude').setAttribute('value', longitude);
    document.getElementById('gps_city').setAttribute('value', city);
    document.getElementById('gps_country').setAttribute('value', country);
    document.getElementById('gps_region').setAttribute('value', state);
    document.getElementById('gps_code').setAttribute('value', code);
    document.getElementById('gps_allowlocation').setAttribute('value', allow);
};
let geocode = function(ltt, lng) {
    latitude = ltt;
    longitude = lng;
    let GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCpslLLMvrUUPGWepKF3r-8g87FCEF2Qek&latlng='+latitude+','+longitude+'&language=en';

    $.getJSON(GEOCODING).done(function(location) {
        console.log(location['plus_code']['compound_code']);
        let add= location['plus_code']['compound_code'];
        let  value=add.split(",");
        let count=value.length;
        country=value[count-1];
        state=value[count-2];
        let city_code=value[count-3].split(" ");
        code = city_code.shift();
        city = city_code.join(' ');
        console.log('country', country);
        console.log('state', state);
        console.log('city', city);
        console.log('code', code);
    });
};

let ip_pos = function () {
    allow = '0';
    $.ajax({
        type: "GET",
        dataType: "json",
        url: 'https://api.ipdata.co?api-key=ef86a8cdcf9c1d049387de03d36272d52fdefccbb4460c0326757254',
        success: function (data) {
            console.log(data);
            latitude = data.latitude;
            longitude = data.longitude;
            geocode(data.latitude, data.longitude);
        }
    });
};

let gps_pos = function () {
    navigator.geolocation.getCurrentPosition(
        function(position) {
            console.log('gps', position);
            latitude = position.coords.latitude;
            longitude = position.coords.longitude;
            allow = '1';
            geocode (latitude, longitude);

        },
        function(error){
            console.log('error', error);
            ip_pos();
        }
        );
};
function fill_input () {
    console.log('promise', allow);
        if (allow == undefined) {
            ip_pos();
            // console.log('uuuuu', latitude, longitude);
        }
        tofillinputs();

        // return await document.getElementById('register_form').submit();

};

// let fill_input = new Promise((resolve, reject) => {
//
//     if (allow == undefined) {
//         console.log('promisffffe', allow);
//         ip_pos();
//     }
//     resolve("result");
//     // setTimeout(() => {
//     //     // переведёт промис в состояние fulfilled с результатом "result"
//     //     resolve("result");
//     // }, 1000);
//
// })
//     .then(
//         result => {
//             // первая функция-обработчик - запустится при вызове resolve
//             alert("Fulfilled: " + result); // result - аргумент resolve
//         },
//         error => {
//             // вторая функция - запустится при вызове reject
//             alert("Rejected: " + error); // error - аргумент reject
//         }
//     );

document.addEventListener('DOMContentLoaded', function(){
    console.log('test');
    gps_pos();
});
document.getElementById('register_button').addEventListener('click', function(event){
    event.preventDefault();
    fill_input();
    return document.getElementById('register_form').submit()
    // console.log('promisffffe', allow);
});
