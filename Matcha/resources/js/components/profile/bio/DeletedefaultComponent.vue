<template>
    <button type="submit" id="deletebio_btn" class="delete_btn" title="delete bio" @click="deletesmth" hidden>
        <img :src="src" class="edit cancel">
    </button>
</template>

<script>
    export default {
        props: [
            'name',
            'url',
            'src'
        ],
        methods: {
            deletesmth : function (e) {
                e.preventDefault();
                let idform = this.name + '_form';
                let form = new FormData(document.getElementById(idform));
                let XHR = "onload" in new XMLHttpRequest() ? XMLHttpRequest : XDomainRequest;
                let xhr = new XHR();
                xhr.responseType = 'json';
                let url = this.url;
                xhr.open('POST', url, true);
                xhr.onreadystatechange = () => {
                    if (xhr.readyState !== 4) {
                        return;
                    }
                    if (xhr.status === 200) {
                        let string = xhr.response;
                        if (string.result == true) {
                            document.getElementById('bio').value = '';
                            document.getElementById(this.name + '_btn').hidden = true;
                            document.getElementById('bio_error_msg').innerHTML = '';
                            document.getElementById('bio_error_msg').hidden = true;
                            update_raiting(string.rating);
                            update_fill_profile(string.empty);
                        } else if (string.result == false) {
                        }

                    }
                };
                xhr.send(form);
            }
        }
    }
</script>

<style scoped>

</style>