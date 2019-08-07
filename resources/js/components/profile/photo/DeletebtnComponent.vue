<template>
    <button type="submit" :id="idbtn" @click="deletephoto" class="delete_btn">
        <img :src="srcavatar" title="delete">
    </button>
</template>

<script>
    export default {
        props: [
            'srcavatar',
            'idbtn',
            'url'
        ],
        mounted () {
          this.update();
        },
        methods: {
            update: function () {
                console.log('path', this.srcavatar);
            },
            deletephoto : function (e) {
                e.preventDefault();
                let formdel = new FormData(document.forms.deleteavatar_form);
                let XHR = "onload" in new XMLHttpRequest() ? XMLHttpRequest : XDomainRequest;
                let xhr = new XHR();
                xhr.responseType = 'json';
                xhr.open('POST', this.url, true);
                xhr.onreadystatechange = () => {
                    if (xhr.readyState !== 4) {
                        return;
                    }
                    if (xhr.status === 200) {
                        let string = xhr.response;
                        if (string.result == true) {
                            document.getElementById('avatar').src = 'images/service/default_avatar.png';
                            document.getElementById('delete_btn').hidden = true;
                            update_raiting(string.rating);
                            update_fill_profile(string.empty);
                        } else if (string.result == false) {

                        }
                    }
                };
                xhr.send(formdel);
            }
        }
    }

</script>

<style scoped>

</style>