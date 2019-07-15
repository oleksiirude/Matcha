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
            this.update();
        },
        methods: {
            update: function () {
                console.log('path', this.srcavatar);
            },
            deleteusrphoto : function (e) {
            //     console.log('e',this.parentElement);
                e.preventDefault();
                let idform = this.idform;
                let imgid = 'img' + this.photo;
                let formdel = new FormData(document.getElementById(idform));
                // console.log('formData', formData);
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
                        console.log('res', string);
                        if (string.result == true) {
                            document.getElementById(imgid).src = '';
                            document.getElementById(imgid).hidden = true;
                            document.getElementById(this.idform).hidden = true;
                        } else if (string.result == false) {
                            console.log('error');
                        }
                        console.log('res', string);
                    }
                };
                xhr.send(formdel);
            }
        }
    }

</script>

<style scoped>

</style>