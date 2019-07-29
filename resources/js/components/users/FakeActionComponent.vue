<template>
    <div>
        <form :action="url" method="POST" id="report_form">
            <input type="hidden" name="_token" :value="csrf">
            <button type="submit" @click="make_action">
                <img :src="imgsrc" :title="title" :alt="alt">
            </button>
        </form>
        <span id="fake_error_msg"  class="error_msg" hidden></span>
    </div>
</template>

<script>
    export default {
        mounted() {

        },
        props: [
            'action',
            'url',
            'imgsrc',
            'csrf',
            'title',
            'alt'
        ],
        data: function () {
            return {
                mutableShow: this.show,
            }
        },
        methods: {
            make_action: function (e) {
                e.preventDefault();
                // console.log('TEST', e.path[2].action);
                // console.log('TEST', e.path);
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
                            document.getElementById('report_form').hidden = true;
                            let span = document.getElementById('fake_error_msg');
                            span.hidden = false;
                            span.innerHTML = 'Your report to admin has been successfully sent!';
                            let func = function () {
                                span.innerHTML = '';
                                span.hidden = true;
                            };

                            setTimeout(func, 2000);

                        }
                        console.log('vue', string);
                    }
                }
                xhr.send(form);
            }

        }
    }
</script>

<style scoped>

</style>