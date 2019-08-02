<template>
    <div>
        <span id="change_geo_title" @click="editGeo">Change/set location <img src="/images/service/edit.png" class="edit" style="float: none"  id=""></span>
        <form id="geo_form" hidden>
            <button type="submit" class="btn edit_submit" id="geo_btn" @click="save">Save</button>
        </form>
        <div id="geolocation_div" hidden>
            <div class="pac-card" id="pac-card">
                <div>
                    <div id="title">
                        Your location
                    </div>
                    <div id="type-selector" class="pac-controls">
                        <input type="radio" name="type" id="changetype-all" checked="checked">
                        <label for="changetype-all">All</label>
                    </div>
                    <div id="strict-bounds-selector" class="pac-controls">
                        <input type="checkbox" id="use-strict-bounds" value="">
                        <label for="use-strict-bounds">Strict Bounds</label>
                    </div>
                </div>
                <div id="pac-container">
                    <input id="pac-input" type="text" placeholder="Enter a location">
                </div>
            </div>
            <div id="map"></div>
            <div id="infowindow-content">
                <img src="" width="16" height="16" id="place-icon">
                <span id="place-name"  class="title"></span><br>
                <span id="place-address"></span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted () {

            console.log('lat', this.lat, this.lng, this.allow);
            // let map;
            // global.initMap = this.initMap();
            // this.initMap();
        },
        data: function () {
            return {
                mutableLtt: '',
                mutableLng: '',
                mutableJson: ''
                // markers : []
            }
        },
        props : [
            'lat',
            'lng',
            'allow',
            // 'map'
        ],
        methods : {
            editGeo: function () {
                if (document.getElementById('geolocation_div').hidden == true) {
                    document.getElementById('geolocation_div').hidden = false;
                    this.initMap();
                }
                else {
                    document.getElementById('pac-input').value = '';
                    document.getElementById('geo_form').hidden = true;
                    document.getElementById('geolocation_div').hidden = true;

                }
            },

            // geocode: function(ltt, lng) {
            //     latitude = ltt;
            //     longitude = lng;
            //     console.log('response', latitude, longitude);
            //
            //     let GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCpslLLMvrUUPGWepKF3r-8g87FCEF2Qek&latlng='+latitude+','+longitude+'&language=en';
            //     // $.ajaxSetup({async: false});
            //     $.ajax({
            //         url: GEOCODING,
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
            //                 state=city;
            //             }
            //             else {
            //                 state=value[count-2];
            //                 let city_code=value[count-3].split(" ");
            //                 code = city_code.shift();
            //                 city = city_code.join(' ');
            //             }
            //             console.log('country', country);
            //             console.log('state', state);
            //             console.log('city', city);
            //             console.log('code', code);
            //         }
            //     });
            // },

            initMap: function () {
                let self = this;
                let card = document.getElementById('pac-card');
                let input = document.getElementById('pac-input');
                let infowindowContent = document.getElementById('infowindow-content');
                let map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: this.lat * 1, lng: this.lng * 1},
                    zoom: 13
                });
                let marker;
                map.scrollwheel=true;
                map.setOptions({ mapTypeControl:true});
                if (this.allow == 1) {
                    let latlng = new google.maps.LatLng(this.lat, this.lng);
                    marker = new google.maps.Marker({position: latlng, map: map});
                }
                else {
                    marker = new google.maps.Marker({
                            map: map,
                            anchorPoint: new google.maps.Point(0, -29)
                        });
                }



                map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

                let autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.bindTo('bounds', map);
                autocomplete.setFields(
                    ['address_components', 'geometry', 'icon', 'name']);

                let infowindow = new google.maps.InfoWindow();
                infowindow.setContent(infowindowContent);


                autocomplete.addListener('place_changed', function() {
                    infowindow.close();
                    marker.setVisible(false);
                    let place = autocomplete.getPlace();
                    if (!place.geometry) {
                        window.alert("No details available for input: '" + place.name + "'");
                        return;
                    }

                    if (place.geometry.viewport) {
                        map.fitBounds(place.geometry.viewport);
                    } else {
                        map.setCenter(place.geometry.location);
                        map.setZoom(17);
                    }
                    console.log('geocode', geocode(place.geometry.location.lat(), place.geometry.location.lng()));
                    self.mutableLtt = place.geometry.location.lat();
                    self.mutableLng = place.geometry.location.lng();
                    self.mutableJson = geocode(place.geometry.location.lat(), place.geometry.location.lng());
                    console.log('(place.geometry.location', place.geometry.location.lat(), place.geometry.location.lng());
                    document.getElementById('geo_form').hidden = false;
                    marker.setPosition(place.geometry.location);
                    marker.setVisible(true);

                    let address = '';
                    if (place.address_components) {
                        address = [
                            (place.address_components[0] && place.address_components[0].short_name || ''),
                            (place.address_components[1] && place.address_components[1].short_name || ''),
                            (place.address_components[2] && place.address_components[2].short_name || '')
                        ].join(' ');
                    }

                    infowindowContent.children['place-icon'].src = place.icon;
                    infowindowContent.children['place-name'].textContent = place.name;
                    infowindowContent.children['place-address'].textContent = address;
                    infowindow.open(map, marker);
                });

            },
            save: function (e) {
                console.log('SAVE', this.mutableLtt, this.mutableLng, this.mutableJson);
                e.preventDefault();
            }
        }
    }
</script>

<style scoped>

</style>