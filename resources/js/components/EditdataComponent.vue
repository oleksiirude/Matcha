<template>
        <div style="height: 250px;">
                <textarea type="text" name="bio" placeholder="Tell about yourself, up to 500 symbols" class="profiledata" id="bio" @keyup="show_btn(name)"  @click="editInput(name)" maxlength="500">{{bio}}</textarea>
                <img src="/images/service/edit.png" class="edit" @click="editInput(name)" id="bio_edit">
                <br>
                <button type="submit" hidden id="bio_btn" class="btn edit_submit" @click="save">Save</button>
        </div>
</template>

<script>
    export default {
        props: [
                'name',
                'bio',
        ],
        methods: {
                editInput: function (name) {
                        // console.log('editInput', this);
                        let input = document.getElementById(name);
                        // console.log('btn', btn);
                        // btn.hidden = false;
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
                                                // document.getElementById(name).innerHTML = '';
                                                document.getElementById(this.name + '_btn').hidden = true;
                                        } else if (string.result == false) {
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