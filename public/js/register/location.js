let geocode = (latitude, longitude, allow) => {
    let GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+latitude+','+longitude+'&key=AIzaSyCpslLLMvrUUPGWepKF3r-8g87FCEF2Qek&language=en';

    $.getJSON(GEOCODING).done((location) => {
        console.log(location['plus_code']['compound_code']);
        let add = location['plus_code']['compound_code'];
        let value = add.split(",");
        let count = value.length;
        let country = value[count-1];
        let state = value[count-2];
        let city_code = value[count-3].split(" ");
        let code = city_code.shift();
        let city = city_code.join(' ');
        console.log('country', country);
        console.log('state', state);
        console.log('city', city);
        console.log('code', code);
        document.getElementById('gps_latitude').setAttribute('value', latitude);
        document.getElementById('gps_longitude').setAttribute('value', longitude);
        document.getElementById('gps_city').setAttribute('value', city);
        document.getElementById('gps_country').setAttribute('value', country);
        document.getElementById('gps_region').setAttribute('value', state);
        document.getElementById('gps_code').setAttribute('value', code);
        document.getElementById('gps_allowlocation').setAttribute('value', allow);
    });
};

let ip_pos = () => {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: 'https://api.ipdata.co?api-key=ef86a8cdcf9c1d049387de03d36272d52fdefccbb4460c0326757254',
        success: (data) => {
            console.log(data);
            geocode(data.latitude, data.longitude, '0');
        }
    });
};

let gps_pos = () => {
    navigator.geolocation.getCurrentPosition(
        (position) => {
            console.log('gps', position);
            let latitude = position.coords.latitude;
            let longitude = position.coords.longitude;
            geocode (latitude, longitude, '1');

        },
        (error) => {
            console.log('error', error);
            ip_pos();
        });
};

document.addEventListener('DOMContentLoaded', () => {
    console.log('test');
    gps_pos();
});