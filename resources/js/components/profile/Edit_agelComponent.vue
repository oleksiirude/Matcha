<template>
    <div>
        <p style="margin-bottom: 0.5rem;"><span id="age_title" @click="show_birthday_input">Age:</span>
            <span id="user_age" @click="show_birthday_input">{{ mutableSpan }} </span>
        </p>
<!--        <label for='userage'>Age:</label>-->
<!--        <input type="text" name="userage" class="profiledata" value="" @click="show_birthday_input" id="userage" placeholder="" readonly><br>-->
        <div id="fill_birthday" hidden>
            <label :for="name">{{ label }}</label>
            <input type="date" :name="name" min="1899-01-01" max="2002-01-01" class="profiledata" :value="value" @click="editInput(name)" :id="name" @change="show_btn(name)" placeholder="">
            <button type="submit" class="btn edit_submit" :id="id_btn" hidden @click="save">Save</button>
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
            'url',
        ],
        data: function () {
            return {
                mutableValue: this.value,
                mutableSpan : this.value
            }
        },
        mounted() {
            if (this.value && this.value != 0)
            {
                this.mutableSpan = this.value + ' years';
            }
            else {
                this.mutableSpan =  "isn't specified";
            }
        },
        methods: {
            show_birthday_input: function () {
                if (document.getElementById('fill_birthday').hidden == true) {
                    document.getElementById('fill_birthday').hidden = false;
                    document.getElementById(this.name).focus();
                }
                else {
                    document.getElementById('fill_birthday').hidden = true;
                    document.getElementById(this.name).blur();
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
                            this.mutableSpan = string.age + ' years';
                            document.getElementById(this.name + '_btn').hidden = true;
                            document.getElementById(this.name + '_error_msg').innerHTML = '';
                            document.getElementById(this.name + '_error_msg').hidden = true;
                            document.getElementById('user_age').innerHTML = this.mutableSpan;
                            update_raiting(string.rating);
                            update_fill_profile(string.empty);
                            document.getElementById('fill_birthday').hidden = true;
                            document.getElementById(this.name).blur();
                        } else if (string.result == false) {
                            // if (this.name == 'login' && string.error == '') {
                            //     update_raiting(string.rating);
                            //     update_fill_profile(string.empty);
                            // }
                            document.getElementById('user_age').innerHTML = this.mutableSpan;
                            document.getElementById(this.name + '_error_msg').hidden = false;
                            document.getElementById(this.name + '_error_msg').innerHTML = string.error;
                            // console.log('error');
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