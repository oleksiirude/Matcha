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
                if (file.size > 5000000)
                {
                    document.getElementById(this.inputid + '_errormsg').innerHTML = '&#9755; ERROR: Too big image';
                }
                else {
                    let id_form = this.inputid + '_form';
                    let formData = new FormData(document.getElementById(id_form));
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
                                let id_img = 'img' + this.photovalue;
                                document.getElementById(id_img).src = string.path;
                                document.getElementById(this.inputid + '_errormsg').innerHTML = '';
                                document.getElementById(id_img).hidden = false;
                                document.getElementById('deletephoto_form' + this.photovalue).hidden = false;
                                document.getElementById(this.inputid+ '_camera').hidden = true;
                                update_raiting(string.rating);
                                update_fill_profile(string.empty);
                            } else if (string.result == false) {
                                document.getElementById(this.inputid + '_errormsg').innerHTML = '&#9755; ERROR: ' + string.error;
                            }
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