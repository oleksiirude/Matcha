<template>
    <div>
        <span id="change_password_title" @click="editPassword">Change password <img :src=src class="edit" style="float: none"  id=""></span>
        <div id="change_password_div" hidden>
            <label for="current_password">Current password:</label>
            <input type="password" name="current_password" id="current_password" autocomplete="off"><br>
            <label for="new_password">New password:</label>
            <input type="password" name="new_password" id = "new_password" @keyup='check();' autocomplete="off"><br>
            <label for="new_password_confirm">Confirm new password:</label>
            <input type="password" name="new_password_confirm" id="new_password_confirm" @keyup='check();' autocomplete="off"><br>
            <div class="usr_name_btn_div">
                <button type="submit" class="usr_name_btn" :id="id_btn" @click="save">Change password</button>
                <input class="usr_name_btn" id="password_btn_cancel" @click="cancel()" value="Cancel" autocomplete="off">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'src',
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
            check: function() {
                let register_button = document.getElementById(this.id_btn);
                if (document.getElementById('new_password').value ==
                    document.getElementById('new_password_confirm').value &&
                    document.getElementById('new_password').value != 0) {
                    document.getElementById(this.name + '_error_msg').innerHTML = '';
                    document.getElementById(this.name + '_error_msg').hidden = true;
                    register_button.type="submit";
                    register_button.classList.remove('disabled');
                } else {
                    document.getElementById(this.name + '_error_msg').hidden = false;
                    document.getElementById(this.name + '_error_msg').style.color = '#D76D77';
                    document.getElementById(this.name + '_error_msg').innerHTML = 'Confirm your password!';
                    register_button.classList.add('disabled');
                    register_button.type="button";
                }
            },
            editPassword: function (name) {
                if (document.getElementById('change_password_div').hidden == true)
                   document.getElementById('change_password_div').hidden = false;
                else {
                    document.getElementById('change_password_div').hidden = true;
                    document.getElementById(this.name + '_error_msg').innerHTML = '';
                    document.getElementById(this.name + '_error_msg').hidden = true;
                }
            },
            editInput: function (name) {

                let input = document.getElementById(name);
                input.focus();
            },
            show_btn: function(name) {
                document.getElementById(name + '_btn').hidden = false;
                document.getElementById(name + '_btn_cancel').hidden = false;
            },
            cancel: function () {
                document.getElementById(this.name).value = this.mutableValue;
                document.getElementById('current_password').value = '';
                document.getElementById('new_password').value = '';
                document.getElementById('new_password_confirm').value = '';
                document.getElementById(this.name + '_error_msg').innerHTML = '';
                document.getElementById(this.name + '_error_msg').hidden = true;
                document.getElementById('change_password_div').hidden = true;
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
                            document.getElementById('current_password').value = '';
                            document.getElementById('new_password').value = '';
                            document.getElementById('new_password_confirm').value = '';
                            document.getElementById(this.name + '_error_msg').innerHTML = '';
                            document.getElementById(this.name + '_error_msg').hidden = true;
                            document.getElementById('change_password_div').hidden = true;
                        } else if (string.result == false) {
                            document.getElementById(this.name).value = this.mutableValue;
                            document.getElementById(this.name + '_error_msg').hidden = false;
                            document.getElementById(this.name + '_error_msg').innerHTML = string.error;
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