<template>
    <div>
        <form :action="unurl" method="POST" hidden>
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" :value="unmethod">
            <button type="submit" :class="" @click="make_action">
                <img :src="imgsrc" title="unblock" alt="unblock">
                <!--            {{ btn_name }}-->
            </button>
        </form>
        <form :action="urlcurrent" method="POST" hidden>
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" :value="method">
            <button type="submit" :class="btn_class" @click="make_action">
                <img :src="imgsrc" :title="title" :alt="alt">
    <!--            {{ btn_name }}-->
            </button>
        </form>
    </div>
</template>

<script>
    export default {
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
            'btn_class',
            'title',
            'alt'

        ],
        data: function () {
                return {
                    // urlcurrent: this.url,
                    // methodcurrent: this.method,
                    // btn_classcurrent: this.btn_class,
                    // mutableUrl: this.url,
                    // mutableUnurl: this.unurl,
                }
        },
        // data: function () {
        //     return {
        //         mutableUrl: this.url,
        //         mutableValue: this.value,
        //         mutableMethod: this.method,
        //         // mutableUrl: this.url
        //     }
        // },
        methods: {
            make_action: function (e) {
                e.preventDefault();
                let form = new FormData(this._vnode.elm);
                console.log('TEST', this._vnode.elm);
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
                            if (this.unaction)
                            {
                                this.urlcurrent = this.mutableUnurl;
                                this.mutableUnurl = this.mutableUrl;
                                this.mutableUrl = this.urlcurrent;
                                if (this.methodcurrent == "PUT")
                                    this.methodcurrent = "DELETE";
                                else
                                    this.methodcurrent = "PUT";
                                if (this.btn_classcurrent == "liked")
                                    this.btn_classcurrent = "";
                                else
                                    this.btn_classcurrent = "liked";
                            }


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