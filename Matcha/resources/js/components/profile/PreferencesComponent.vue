<template>
    <div>
        <label for="preferences" id="preferences_label">Sexual preferences:</label>
        <select name="preferences" id="preferences" @change="show_btn">
            <option disabled>choose sexual preferences</option>
            <option value="homosexual">homosexual</option>
            <option value="bisexual">bisexual</option>
            <option value="heterosexual">heterosexual</option>
        </select>
        <div class="usr_name_btn_div">
            <button type="submit" class="usr_name_btn" hidden @click="change_gender" id="preferences_btn">Save</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'name',
            'value',
            'url',
            'allow'
        ],
        mounted () {
            if (this.allow == 1)
                document.getElementById(this.name).value = this.value;
            else
                document.getElementById(this.name).value = 'choose sexual preferences';
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
                        if (string.result == true) {
                            update_raiting(string.rating);
                            update_fill_profile(string.empty);
                            document.getElementById(this.name + '_btn').hidden = true;
                        } else if (string.result == false) {
                        }
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