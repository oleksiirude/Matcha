<template>
    <div>
        <li title="click to delete" @click="delete_tag" :id="id_li">
            {{ value }}
            <form :action="url" method="POST" :id="id_form">
                <input type="hidden" name="_token" :value="csrf">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" hidden>delete</button>
            </form>
        </li>
    </div>
</template>

<script>
    export default {
        props: [
            'value',
            'id_li',
            'id_form',
            'csrf',
            'url',
            'name',
            'id_btn'
        ],
        methods: {
            delete_tag: function (e) {
                e.preventDefault();
                let form = new FormData(document.getElementById(this.id_form));
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
                            document.getElementById(this.id_li).remove();
                            // this.mutableValue = document.getElementById(this.name).value;
                            // document.getElementById(this.name + '_btn').hidden = true;
                            // document.getElementById(this.name + '_error_msg').innerHTML = '';
                            // document.getElementById(this.name + '_error_msg').hidden = true;
                            update_raiting(string.rating);
                            update_fill_profile(string.empty);

                        } else if (string.result == false) {

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