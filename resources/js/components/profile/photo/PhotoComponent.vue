<template>
    <div>
        <input type="hidden" name="photo" :value="photovalue">
        <input type="file" accept=".jpg, .jpeg" name="photo" @change='downloadusrphoto' :id="inputid" class="photo_input"/>
        <label :for="inputid" class="photo_label" :id="labelid">Выберите файл</label>
    </div>
</template>

<script>
    export default {
        props: [
            'photovalue',
            'inputid',
            'labelid',
            'url'
        ],
        methods: {
            downloadusrphoto : function () {
                let file = document.getElementById(this.inputid).files[0];
                console.log('file', file);
                if (file.size > 5000000)
                {
                    document.getElementById(this.inputid + '_errormsg').innerHTML = '&#9755; ERROR: Too big image';
                }
                else {
                    let id_form = this.inputid + '_form';
                    let formData = new FormData(document.getElementById(id_form));
                    console.log('formData', formData);
                    let XHR = "onload" in new XMLHttpRequest() ? XMLHttpRequest : XDomainRequest;
                    let xhr = new XHR();
                    xhr.responseType = 'json';
                    xhr.open('POST', this.url, true);
                    console.log('res', xhr, formData);
                    xhr.onreadystatechange = () => {
                        if (xhr.readyState !== 4) {
                            return;
                        }
                        if (xhr.status === 200) {
                            let string = xhr.response;
                            if (string.result == true) {
                                let id_img = 'img' + this.photovalue;
                                // console.log('id_img', document.getElementById(id_img));
                                document.getElementById(id_img).src = string.path;
                                document.getElementById(this.inputid + '_errormsg').innerHTML = '';
                                document.getElementById(id_img).hidden = false;
                                document.getElementById('deletephoto_form' + this.photovalue).hidden = false;
                                document.getElementById(this.inputid+ '_camera').hidden = true;
                                update_raiting(string.rating);
                                console.log('ajax', string.path);
                                update_fill_profile(string.empty);
                            } else if (string.result == false) {
                                document.getElementById(this.inputid + '_errormsg').innerHTML = '&#9755; ERROR: ' + string.error;
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