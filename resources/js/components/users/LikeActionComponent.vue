<template>
    <div>
        <form :action="unurl" method="POST" id="like_form" hidden>
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" :value="unmethod">
            <button type="submit" @click="make_action">
                <img :src="imgsrc" title="like user" alt="like">
            </button>
        </form>
        <form :action="url" method="POST" id="unlike_form" hidden>
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" :value="method">
            <button type="submit" class="liked" @click="make_action">
                <img :src="imgsrc" title="unlike user" alt="unlike">
            </button>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            let id = this.show + '_form';
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
            'liked_me',
            'user'

        ],
        data: function () {
            return {
                mutableShow: this.show,
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
                            if (this.mutableShow == 'like')
                            {
                                if (this.liked_me == 1) {
                                    document.getElementById('connect_span').hidden = false;
                                    if (document.getElementById('like_to_me')) {
                                        document.getElementById('like_to_me').hidden = false;
                                        document.getElementById('like_to_me').innerHTML = "&#x2661; IT IS A MATCH! &#x2661;";
                                        document.getElementById('like_to_me').style.fontSize='24px';
                                        document.getElementById('like_to_me').style.color='#D76D77';
                                        document.getElementById('like_to_me').style.fontWeight='bold';
                                        if (document.getElementById('unblock_form').hidden == true)
                                        {
                                            document.getElementById('chat_form').hidden = false;
                                        }

                                        let func = function () {
                                            document.getElementById('like_to_me').innerHTML = '';
                                            document.getElementById('like_to_me').hidden = true;
                                            document.getElementById('like_to_me').style.fontSize='0.9rem';
                                            document.getElementById('like_to_me').style.fontWeight='normal';
                                            document.getElementById('like_to_me').style.color='#FFAF7B';
                                        };

                                        setTimeout(func, 1200);
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

                                        setTimeout(func, 1200);
                                    }
                                }
                                document.getElementById(this.mutableShow + '_form').hidden = true;
                                this.mutableShow = 'unlike';
                                document.getElementById(this.mutableShow + '_form').hidden = false;
                            }
                            else
                            {
                                if (this.liked_me == 1) {
                                    if (document.getElementById('like_to_me')) {
                                    document.getElementById('like_to_me').hidden = false;
                                    document.getElementById('like_to_me').innerHTML = "&#x2661; "+ this.user +" liked you ;) &#x2661;";
                                    }
                                }
                                document.getElementById('chat_form').hidden = true;
                                document.getElementById('connect_span').hidden = true;
                                document.getElementById(this.mutableShow + '_form').hidden = true;
                                this.mutableShow = 'like';
                                document.getElementById(this.mutableShow + '_form').hidden = false;
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