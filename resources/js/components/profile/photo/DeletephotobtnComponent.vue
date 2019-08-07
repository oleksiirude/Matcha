<template>
    <button type="submit" :id="idbtn" @click="deleteusrphoto" class="delete_btn">
        <img :src="srcavatar" title="delete">
    </button>
</template>

<script>
    export default {
        props: [
            'srcavatar',
            'idbtn',
            'idform',
            'photo'
        ],
        mounted () {

        },
        methods: {
            deleteusrphoto : function (e) {
                e.preventDefault();
                let idform = this.idform;
                let imgid = 'img' + this.photo;
                let formdel = new FormData(document.getElementById(idform));
                let XHR = "onload" in new XMLHttpRequest() ? XMLHttpRequest : XDomainRequest;
                let xhr = new XHR();
                xhr.responseType = 'json';
                let url = '/delete/photo/' + this.photo;
                xhr.open('POST', url, true);
                xhr.onreadystatechange = () => {
                    if (xhr.readyState !== 4) {
                        return;
                    }
                    if (xhr.status === 200) {
                        let string = xhr.response;
                        if (string.result == true) {
                            document.getElementById(imgid).src = '';
                            document.getElementById(imgid).hidden = true;
                            document.getElementById(this.idform).hidden = true;
                            document.getElementById('photo' + this.photo + '_camera').hidden = false;
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