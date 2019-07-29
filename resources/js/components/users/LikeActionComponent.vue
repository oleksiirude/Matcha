<template>
    <div>
        <form :action="unurl" method="POST" id="like_form" hidden>
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" :value="unmethod">
            <button type="submit" @click="make_action">
                <img :src="imgsrc" title="like user" alt="like">
                <!--            {{ btn_name }}-->
            </button>
        </form>
        <form :action="url" method="POST" id="unlike_form" hidden>
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" :value="method">
            <button type="submit" class="liked" @click="make_action">
                <img :src="imgsrc" title="unlike user" alt="unlike">
    <!--            {{ btn_name }}-->
            </button>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            let id = this.show + '_form';
            console.log('like_me', this.like_me);
            document.getElementById(id).hidden = false;
        },
        props: [
            'action',
            'unaction',
            'value',
            'method',
            'url',
            'unurl',
            'unmethod',
            'imgsrc',
            'csrf',
            'title',
            'alt',
            'show',
            'like_me'

        ],
        data: function () {
            return {
                mutableShow: this.show,
            }
        },
        methods: {
            make_action: function (e) {
                e.preventDefault();
                console.log('TEST', e);
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
                            if (this.mutableShow == 'like')
                            {
                                if (this.like_me == 1) {
                                    document.getElementById('connect_span').hidden = false;
                                    if (document.getElementById('like_to_me')) {
                                        document.getElementById('like_to_me').innerHTML = "&#x2661; IT IS A MATCH! &#x2661;";
                                        let func = function () {
                                            document.getElementById('like_to_me').innerHTML = '';
                                            document.getElementById('like_to_me').hidden = true;
                                        };

                                        setTimeout(func, 2000);
                                    }
                                    else {
                                        let span = document.createElement('span');
                                        span.innerHTML = "&#x2661; IT IS A MATCH! &#x2661;";
                                        let div = document.getElementById('love_notifications');
                                        div.appendChild(span);
                                        let func = function () {
                                            span.innerHTML = '';
                                            div.removeChild(span);
                                        };

                                        setTimeout(func, 2000);
                                    }
                                }
                                document.getElementById(this.mutableShow + '_form').hidden = true;
                                this.mutableShow = 'unlike';
                                document.getElementById(this.mutableShow + '_form').hidden = false;
                            }
                            else
                            {
                                document.getElementById('connect_span').hidden = true;
                                document.getElementById(this.mutableShow + '_form').hidden = true;
                                this.mutableShow = 'like';
                                document.getElementById(this.mutableShow + '_form').hidden = false;
                            }

                            // if (this.unaction)
                            // {
                            //     this.urlcurrent = this.mutableUnurl;
                            //     this.mutableUnurl = this.mutableUrl;
                            //     this.mutableUrl = this.urlcurrent;
                            //     if (this.methodcurrent == "PUT")
                            //         this.methodcurrent = "DELETE";
                            //     else
                            //         this.methodcurrent = "PUT";
                            //     if (this.btn_classcurrent == "liked")
                            //         this.btn_classcurrent = "";
                            //     else
                            //         this.btn_classcurrent = "liked";
                            // }


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