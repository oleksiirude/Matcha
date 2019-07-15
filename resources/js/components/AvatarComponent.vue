<template>
    <div>
        <input type="file" accept=".jpg, .jpeg" name="avatar" @change='downloadphoto' id="avatar_input" class="photo_input"/>
        <label for="avatar_input" id="avatar_label">Выберите файл</label>
    </div>
</template>

<script>
    export default {
        mounted() {


        },
        props: {

        },
        methods: {
            downloadphoto : function () {
                let file = document.getElementById("avatar_input").files[0];
                console.log('file', file);
                if (file.size > 5000000)
                {
                    document.getElementById('avatar_errormsg').innerHTML = '&#9755; ERROR: Too big image';
                }
                else {
                    let formData = new FormData(document.forms.useravatar_form);
                    let XHR = "onload" in new XMLHttpRequest() ? XMLHttpRequest : XDomainRequest;
                    let xhr = new XHR();
                    xhr.responseType = 'json';
                    xhr.open('POST', '/upload/avatar', true);
                    console.log('res', xhr, formData);
                    xhr.onreadystatechange = () => {
                        if (xhr.readyState !== 4) {
                            return;
                        }
                        if (xhr.status === 200) {
                            let string = xhr.response;
                            if (string.result == true) {
                                document.getElementById('avatar').src = string.path;
                                document.getElementById('avatar_errormsg').innerHTML = '';
                                document.getElementById('delete_btn').hidden = false;
                                console.log('ajax', string.path);
                            } else if (string.result == false) {
                                document.getElementById('avatar_errormsg').innerHTML = '&#9755; ERROR: ' + string.error;
                                console.log('error', string.error);
                            }
                            console.log('res', string);
                        }

                    };
                    xhr.send(formData);
                }
            },

        }
    }
</script>

<style scoped>

</style>