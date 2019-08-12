<template>
    <div>
        <form :action="url" method="POST" id="unblock_form" >
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" :value="method">
            <button type="submit" @click="make_action">
                <img :src="imgsrc" title="delete from history" alt="delete from history">
            </button>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
        },
        props: [
            'action',
            'method',
            'url',
            'imgsrc',
            'csrf',
            'text'
        ],
        data: function () {
            return {
            }
        },
        methods: {
            make_action: function (e) {
                e.preventDefault();
                let path = e.path || (e.composedPath && e.composedPath()) || composedPath(e.target);
                let form = new FormData(path[2]);
                let XHR = "onload" in new XMLHttpRequest() ? XMLHttpRequest : XDomainRequest;
                let xhr = new XHR();
                xhr.responseType = 'json';
                let url = path[2].action;
                xhr.open('POST', url, true);
                xhr.onreadystatechange = () => {
                    if (xhr.readyState !== 4) {
                        return;
                    }
                    if (xhr.status === 200) {
                        let string = xhr.response;
                        if (string.result == true) {
                            path[8].remove();
                            if (document.getElementsByClassName('list_users').length == 0) {
                                let span = document.createElement('span');
                                document.getElementById('card_body').appendChild(span);
                                span.innerHTML = this.text;
                                span.style.margin = 'auto';
                            }
                        }
                    }
                }
                xhr.send(form);
            }
        }
    }
</script>

<style scoped>

</style>