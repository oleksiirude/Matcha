<template>
    <div>
        <div id="block_div" v-if="allow === '1'">
            <input type="checkbox" @change="blockGeo()" id="block_geo" name="block_geo" value=""/>
            <label for="block_geo" id="block_geo">Block geolocation</label>
        </div>
        <div v-else hidden id="block_div">
            <input type="checkbox" @change="blockGeo()" id="block_geo" name="block_geo" value=""/>
            <label for="block_geo" id="block_geo">Block geolocation</label>
        </div>

        <span id="change_geo_title" @click="editGeo">Change/set location <img :src="src" class="edit" style="float: none"  id=""></span>
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
        },
        data: function () {
            return {
                mutableAllow: this.allow,
                mutableLtt: '',
                mutableLng: '',
                currentLtt: this.lat,
                currentLng: this.lng,
                mutableJson: ''
            }
        },
        props : [
            'src',
            'lat',
            'lng',
            'allow',
            'url',
            'csrf',
            'urloff'
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

            initMap: function () {
                // console.log('new init', this.currentLtt, this.currentLng);
                let self = this;
                let card = document.getElementById('pac-card');
                let input = document.getElementById('pac-input');
                let infowindowContent = document.getElementById('infowindow-content');
                let map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: this.currentLtt * 1, lng: this.currentLng * 1},
                    // center: {lat: this.lat * 1, lng: this.lng * 1},
                    zoom: 13
                });
                let marker;
                map.scrollwheel=true;
                map.setOptions({ mapTypeControl:true});
                if (this.mutableAllow == 1) {
                    let latlng = new google.maps.LatLng(this.currentLtt * 1, this.currentLng * 1);
                    // let latlng = new google.maps.LatLng(this.lat * 1, this.lng * 1);
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
                    self.mutableLtt = place.geometry.location.lat();
                    self.mutableLng = place.geometry.location.lng();
                    self.mutableJson = geocode(place.geometry.location.lat(), place.geometry.location.lng(), self.csrf);
                    // console.log('(place.geometry.location', place);
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
                let locate = this.mutableJson;
                let self = this;
                console.log('SAVE', this.mutableLtt, this.mutableLng, this.mutableJson);
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': this.csrf
                    }
                });
                jQuery.ajax({
                    url: this.url,
                    method: 'PUT',
                    data: JSON.stringify(this.mutableJson),
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function(result){
                        if (result == true)
                        {
                            document.getElementById('city_form').hidden = false;
                            document.getElementById('block_div').hidden = false;
                            document.getElementById('country').value = locate['country'];
                            document.getElementById('city').value = locate['city'];
                            document.getElementById('pac-input').value = '';
                            document.getElementById('geo_form').hidden = true;
                            document.getElementById('geolocation_div').hidden = true;
                            // self.curentLtt = self.mutableLtt;
                            // self.curentLng = self.mutableLng;
                            // console.log('location', self.curentLtt, self.mutableLtt);
                            // console.log('location', locate['city'], locate['country']);
                        }
                        // console.log('location result', result);
                    }});
                this.currentLtt = this.mutableLtt;
                this.currentLng = this.mutableLng;
                this.mutableAllow = 1;
            },
            blockGeo: function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': this.csrf
                    }
                });
                jQuery.ajax({
                    url: this.urloff,
                    method: 'DELETE',
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function(result){
                        if (result == true)
                        {
                            document.getElementById('city').value = '';
                            document.getElementById('city_form').hidden = true;
                            document.getElementById('block_div').hidden = true;
                            document.getElementById('country').value = "isn't specified";

                        }
                        console.log('off result', result);
                    }});
                this.mutableAllow = 0;
            }
        }
    }
</script>

<style scoped>

</style>