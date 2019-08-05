<template>
    <div>
        <input type="text" :name="name" class="name profiledata" :value="value" @click="editInput(name)" :id="name" @keyup="show_btn(name)">
        <div class="usr_name_btn_div">
            <button type="submit" class="usr_name_btn" :id="id_btn" hidden @click="save">Save</button>
            <span class="usr_name_btn" :id="id_btn_cancel" hidden @click="cancel">Cancel</span>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'value',
            'name',
            'id_btn',
            'id_btn_cancel',
            'url'
        ],
        data: function () {
            return {
                mutableValue: this.value
            }
        },
        methods: {
            editInput: function (name) {

                let input = document.getElementById(name);
                input.focus();
            },
            show_btn: function(name) {
                document.getElementById(name + '_btn').hidden = false;
                document.getElementById(name + '_btn_cancel').hidden = false;

            },
            save: function (e) {
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
                        console.log('res', string);
                        if (string.result == true) {
                            this.mutableValue = document.getElementById(this.name).value;
                            document.getElementById(this.name + '_btn').hidden = true;
                            document.getElementById(this.name + '_btn_cancel').hidden = true;
                            document.getElementById('name_error_msg').innerHTML = '';
                            document.getElementById('name_error_msg').hidden = true;
                        } else if (string.result == false) {
                            document.getElementById(this.name).value = this.mutableValue;
                            document.getElementById('name_error_msg').hidden = false;
                            document.getElementById('name_error_msg').innerHTML = string.error;
                            console.log('error');

                        }
                        console.log('res', string);
                    }
                };
                xhr.send(form);
            },
            cancel: function() {
                document.getElementById(this.name).value = this.mutableValue;
                document.getElementById(this.name + '_btn').hidden = true;
                document.getElementById(this.name + '_btn_cancel').hidden = true;
                document.getElementById('name_error_msg').innerHTML = '';
                document.getElementById('name_error_msg').hidden = true;
            }
        }
    }
</script>

<style scoped>

</style>