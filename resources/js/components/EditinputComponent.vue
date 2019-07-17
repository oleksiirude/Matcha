<template>
    <div>
        <input type="text" :name="name" class="name profiledata" :value="value" @click="editInput(name)" :id="name" @keyup="show_btn(name)">
        <button type="submit" class="btn edit_submit" :id="id_btn" hidden @click="save">Save</button>
    </div>
</template>

<script>
    export default {
        props: [
            'value',
            'name',
            'id_btn'
        ],
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
                let url = '/set/' + this.name;
                xhr.open('POST', url, true);
                xhr.onreadystatechange = () => {
                    if (xhr.readyState !== 4) {
                        return;
                    }
                    if (xhr.status === 200) {
                        let string = xhr.response;
                        console.log('res', string);
                        if (string.result == true) {
                            this.value = document.getElementById(this.name).value;
                            document.getElementById(this.name + '_btn').hidden = true;
                            document.getElementById('name_error_msg').innerHTML = '';
                            update_raiting(string.rating);
                        } else if (string.result == false) {
                            document.getElementById(this.name).value = this.value;
                            document.getElementById('name_error_msg').innerHTML = string.error;
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