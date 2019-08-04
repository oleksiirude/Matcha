<template>
    <div>
<!--        <p> {{ value }}</p>-->
        <label for="gender" id="gender_label">Gender:</label>
        <select name="gender" id="gender" @change="show_btn">
            <option disabled>choose gender</option>
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <div class="usr_name_btn_div">
            <button type="submit" class="usr_name_btn" hidden @click="change_gender" id="gender_btn">Save</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'name',
            'value',
            'url'
        ],
        mounted () {
            console.log('test', this.value);
            document.getElementById(this.name).value = this.value;
        },
        methods: {
            change_gender: function (e) {
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
                            document.getElementById(this.name + '_btn').hidden = true;
                        } else if (string.result == false) {
                            console.log('error');
                        }
                        console.log('res', string);
                    }
                };
                xhr.send(form);
            },
            show_btn: function () {
                document.getElementById(this.name + '_btn').hidden = false;
            }
        }
    }
</script>

<style scoped>

</style>