<template>
    <div>
        <label :for="name">{{ label }}</label>
        <input type="email" :name="name" class="profiledata" :value="value" @click="editInput(name)" :id="name" @keyup="show_btn(name)" placeholder="">
        <div id="email_confirm_pass" hidden>
            <label for="password">Your password to confirm changes</label>
            <input type="password" name="password" id="password" autocomplete="off">
        </div>
        <div class="usr_name_btn_div">
            <button type="submit" class="usr_name_btn" :id="id_btn" hidden @click="save">Save</button>
            <input class="usr_name_btn" id="email_btn_cancel" hidden @click="cancel(name)" value="Cancel">
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'value',
            'name',
            'id_btn',
            'label',
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
                document.getElementById('email_confirm_pass').hidden = false;
                document.getElementById(name + '_btn').hidden = false;
                document.getElementById(name + '_btn_cancel').hidden = false;
            },
            cancel: function (name) {
                document.getElementById(this.name).value = this.mutableValue;
                document.getElementById('email_confirm_pass').hidden = true;
                document.getElementById(name + '_btn').hidden = true;
                document.getElementById(name + '_btn_cancel').hidden = true;
                document.getElementById(this.name + '_error_msg').innerHTML = '';
                document.getElementById(this.name + '_error_msg').hidden = true;
                document.getElementById('password').value = '';
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
                        if (string.result == true) {
                            this.mutableValue = document.getElementById(this.name).value;
                            document.getElementById(this.name + '_btn').hidden = true;
                            document.getElementById(this.name + '_btn_cancel').hidden = true;
                            document.getElementById('email_confirm_pass').hidden = true;
                            document.getElementById(this.name + '_error_msg').innerHTML = '';
                            document.getElementById(this.name + '_error_msg').hidden = true;
                            document.getElementById('password').value = '';
                        } else if (string.result == false) {
                            document.getElementById(this.name).value = this.mutableValue;
                            document.getElementById(this.name + '_error_msg').hidden = false;
                            document.getElementById(this.name + '_error_msg').innerHTML = string.error;
                            document.getElementById('password').value = '';
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