<template>
        <div style="height: 250px;">
                <textarea type="text" :name="name" placeholder="Tell about yourself, up to 500 symbols" class="profiledata" id="bio" @keyup="show_btn(name)"  @click="editInput(name)" maxlength="500" spellcheck="false">{{bio}}</textarea>
                <img :src="src" class="edit" @click="editInput(name)" id="bio_edit">
                <br>
                <button type="submit" hidden id="bio_btn" class="btn edit_submit" @click="save">Save</button>
        </div>
</template>

<script>
    export default {
        props: [
                'name',
                'bio',
                'src'
        ],
            data: function () {
                    return {
                            mutableValue: this.bio
                    }
            },
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
                                                update_raiting(string.rating);
                                                document.getElementById(this.name + '_btn').hidden = true;
                                                document.getElementById('deletebio_btn').hidden = false;
                                                this.mutableValue = document.getElementById(this.name).value;
                                                document.getElementById(this.name + '_error_msg').innerHTML = '';
                                                document.getElementById(this.name + '_error_msg').hidden = true;
                                                console.log('this.mutableValue', this.mutableValue);
                                                update_fill_profile(string.empty);
                                                document.getElementById(this.name).blur();
                                        } else if (string.result == false) {
                                                document.getElementById(this.name).value = this.mutableValue;
                                                document.getElementById(this.name + '_error_msg').hidden = false;
                                                document.getElementById(this.name + '_error_msg').innerHTML = string.error;
                                                console.log('this.mutableValue', this.mutableValue);
                                                console.log('error');
                                        }
                                        console.log('res', string);
                                }
                        };
                        xhr.send(form);
                },
        }
    }
</script>

<style scoped>

</style>