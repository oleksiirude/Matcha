<template>
    <div>
        <p><span class="title_data" @click="open_map()" id="user_map_title">Show at map</span></p>
        <div id="user_map" hidden>
            <div class="pac-card" id="pac-card">
            </div>
            <div id="map"></div>
<!--            <div id="infowindow-content">-->
<!--                <img src="" width="16" height="16" id="place-icon">-->
<!--                <span id="place-name"  class="title"></span><br>-->
<!--                <span id="place-address"></span>-->
<!--            </div>-->
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log(this.ltt, this.lng)
        },
        props: [
            'ltt',
            'lng',
            'src',
            'login'
        ],
        methods: {
            open_map: function () {
                let div = document.getElementById('user_map');
                if (div.hidden == true) {
                    div.hidden = false;
                    this.initMap();
                }
                else {
                    div.hidden = true;
                }
            },
            initMap: function () {

                let self = this;
                let card = document.getElementById('pac-card');
                let input = document.getElementById('pac-input');
                let infowindowContent = document.getElementById('infowindow-content');
                let map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: this.ltt * 1, lng: this.lng * 1},
                    zoom: 13
                });
                let marker;
                map.scrollwheel=true;
                map.setOptions({ mapTypeControl:true});
                    let latlng = new google.maps.LatLng(this.ltt, this.lng);
                    marker = new google.maps.Marker({
                        position: latlng,
                        map: map,
                        // icon: image,
                        title:this.login,
                        animation: google.maps.Animation.BOUNCE
                    });

                map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

            },
        }

    }
</script>

<style scoped>
    #user_map_title:hover {
        cursor: pointer;
        text-decoration: underline;

    }
</style>