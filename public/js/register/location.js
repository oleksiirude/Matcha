
// const axios = require('axios');
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
    return true;
};


let geocode = function(ltt, lng) {
    latitude = 50.428266;
    longitude = 30.525979;
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




let ip_pos = function () {
    allow = '0';

    $.ajax({
        type: "GET",
        async: false,
        dataType: "json",
        url: 'https://api.ipdata.co?api-key=ef86a8cdcf9c1d049387de03d36272d52fdefccbb4460c0326757254',
        success: (data) => {
            console.log(data);
            latitude = data.latitude;
            longitude = data.longitude;
            geocode(data.latitude, data.longitude);
        }
    });
};

let gps_pos = () => {
    navigator.geolocation.getCurrentPosition(
        (position) => {
            console.log('gps', position);
            latitude = position.coords.latitude;
            longitude = position.coords.longitude;
            allow = '1';
            geocode (latitude, longitude);

        },
        (error) => {
            console.log('error', error);
            ip_pos();
        });
};
    function fill_input () {
    console.log('promise', allow);
        if (allow == undefined) {
            ip_pos();
            tofillinputs();
            // console.log('uuuuu', latitude, longitude);
        }
        else
            tofillinputs();

        return true;

        // return await document.getElementById('register_form').submit();

};


document.addEventListener('DOMContentLoaded', () => {
    console.log('test');
    gps_pos();
});
document.getElementById('register_button').addEventListener('click', async function(event){
    event.preventDefault();
    fill_input();
    console.log('1latitude', latitude);
    console.log('1longitude', longitude);
    console.log('1country', country);
    console.log('1state', state);
    console.log('1city', city);
    console.log('1code', code);
    return document.getElementById('register_form').submit()
    // console.log('promisffffe', allow);
});
