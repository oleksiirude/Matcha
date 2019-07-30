<template>
    <div>
        <form :action="unurl" method="POST" id="block_form" hidden>
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" :value="unmethod">
            <button type="submit" @click="make_action">
                <img :src="imgsrc" title="block user" alt="block">
                <!--            {{ btn_name }}-->
            </button>
        </form>
        <form :action="url" method="POST" id="unblock_form" hidden>
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" :value="method">
            <button type="submit" class="liked" @click="make_action">
                <img :src="imgsrc" title="unblock user" alt="unblock">
    <!--            {{ btn_name }}-->
            </button>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            let id = this.show + '_form';
            console.log('show', id);
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
            'btn_class',
            'title',
            'alt',
            'show'

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
                            if (this.mutableShow == 'block')
                            {
                                document.getElementById(this.mutableShow + '_form').hidden = true;
                                this.mutableShow = 'unblock';
                                document.getElementById(this.mutableShow + '_form').hidden = false;
                            }
                            else
                            {
                                document.getElementById(this.mutableShow + '_form').hidden = true;
                                this.mutableShow = 'block';
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