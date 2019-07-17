<template>
    <button type="submit" :id="idbtn" @click="deletephoto" class="delete_btn">
        <img :src="srcavatar" title="delete">
    </button>
</template>

<script>
    export default {
        props: [
            'srcavatar',
            'idbtn'
        ],
        mounted () {
          this.update();
        },
        methods: {
            update: function () {
                console.log('path', this.srcavatar);
            },
            deletephoto : function (e) {
                console.log('e',this.parentElement);
                e.preventDefault();
                let formdel = new FormData(document.forms.deleteavatar_form);
                // console.log('formData', formData);
                let XHR = "onload" in new XMLHttpRequest() ? XMLHttpRequest : XDomainRequest;
                let xhr = new XHR();
                xhr.responseType = 'json';
                xhr.open('POST', '/delete/avatar', true);
                xhr.onreadystatechange = () => {
                    if (xhr.readyState !== 4) {
                        return;
                    }
                    if (xhr.status === 200) {
                        let string = xhr.response;
                        console.log('res', string);
                        if (string.result == true) {
                            document.getElementById('avatar').src = 'images/service/default_avatar.png';
                            document.getElementById('delete_btn').hidden = true;
                        } else if (string.result == false) {
                            console.log('default avatar');
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