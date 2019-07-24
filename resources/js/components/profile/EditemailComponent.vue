<template>
    <div>
        <label :for="name">{{ label }}</label>
        <input type="email" :name="name" class="profiledata" :value="value" @click="editInput(name)" :id="name" @keyup="show_btn(name)" placeholder=""><br>
        <div id="email_confirm_pass" hidden>
            <label for="password">Your password to confirm changes</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit" class="btn edit_submit" :id="id_btn" hidden @click="save">Save</button>
        <input class="btn edit_submit cancel_submit" id="email_btn_cancel" hidden @click="cancel(name)" value="Cancel">
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
                            // update_raiting(string.rating);
                        } else if (string.result == false) {
                            document.getElementById(this.name).value = this.mutableValue;
                            document.getElementById(this.name + '_error_msg').hidden = false;
                            document.getElementById(this.name + '_error_msg').innerHTML = string.error;
                            document.getElementById('password').value = '';
                            // console.log('error');
                        }
                        // console.log('res', string);
                    }
                };
                xhr.send(form);
            }
        }
    }
</script>

<style scoped>

</style>