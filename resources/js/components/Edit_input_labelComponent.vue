<template>
    <div>
        <label :for="name">{{ label }}</label>
        <input type="text" :name="name" class="profiledata" :value="value" @click="editInput(name)" :id="name" @keyup="show_btn(name)">
        <button type="submit" class="btn edit_submit" :id="id_btn" hidden @click="save">Save</button>
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
                document.getElementById(name + '_btn').hidden = false;
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
                            document.getElementById(this.name + '_error_msg').innerHTML = '';
                            document.getElementById(this.name + '_error_msg').hidden = true;
                            update_raiting(string.rating);
                            if (this.name == 'login') {
                                let i = document.getElementById('navbarDropdown').firstChild;
                                document.getElementById('navbarDropdown').firstChild.nodeValue = this.mutableValue;
                                // i.data = this.mutableValue;
                                console.log('ok', i.nodeValue);
                                // document.getElementById('navbarDropdown').firstChild = this.mutableValue;
                                console.log('ok1', document.getElementById('navbarDropdown').firstChild);
                            }

                        } else if (string.result == false) {
                            document.getElementById(this.name).value = this.mutableValue;
                            document.getElementById(this.name + '_error_msg').hidden = false;
                            document.getElementById(this.name + '_error_msg').innerHTML = string.error;
                            console.log('error');
                        }
                        console.log('res', string);
                    }
                };
                xhr.send(form);
            }
        }
    }
</script>

<style scoped>

</style>