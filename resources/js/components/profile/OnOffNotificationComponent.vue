<template>
    <div>
        <div id="on_off_div">
            <img :src="img">
            <p title="notification to email">
                <input type="checkbox" @change="turn()" id="turn" name="turn" value=""/>
                <label for="turn" id="turn_label">{{this.text}}</label>
            </p>
        </div>
        <form :action="url" method="POST" hidden>
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" value="PUT">
            <button type="submit">change notifications mode</button>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            let input = document.getElementById('turn');
            if (this.mutableOnOff == 1)
            {
                this.text = "to turn Off";
                input.checked = true;
            }
            else {
                this.text = "to turn On";
                input.checked = false;
            }
            console.log('on-off', this.on_off)
        },
        props: [
            'url',
            'csrf',
            'on_off',
            'img'
        ],
        data: function () {
            return {
                mutableOnOff: this.on_off,
                text: '',
            }
        },
        methods: {
            turn: function () {
                let self = this;
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': this.csrf
                    }
                });
                jQuery.ajax({
                    url: this.url,
                    method: 'PUT',
                    responseType: 'json',
                    success: function(result){
                        let input = document.getElementById('turn');
                        if (self.mutableOnOff == 1) {
                            document.getElementById('turn_label').innerHTML = "to turn On";
                            input.checked = false;
                            self.mutableOnOff = 0;
                        }
                        else {
                            document.getElementById('turn_label').innerHTML = "to turn Off";
                            input.checked = true;
                            self.mutableOnOff = 1;

                        }

                    }});
            }
        }
    }
</script>

<style scoped>
    input[type="checkbox"]:not(checked) {
        position: absolute;
        opacity: 0;
    }
    input[type="checkbox"]:not(checked) + label {
        position: relative;
        padding: 0 0 0 45px;
    }

    input[type="checkbox"]:not(checked) + label:before {
        content: '';
        position: absolute;
        /*top: -4px;*/
        left: 0;
        width: 35px;
        height: 20px;
        border-radius: 13px;
        background: #CDD1DA;
        box-shadow: inset 0 2px 3px rgba(0,0,0,.2);
    }

    input[type="checkbox"]:not(checked) + label:after {
        content: '';
        position: absolute;
        top: 2px;
        left: 2px;
        width: 15px;
        height: 15px;
        border-radius: 10px;
        background: #FFF;
        box-shadow: 0 2px 5px rgba(0,0,0,.3);
        transition: all .2s;
    }

    input[type="checkbox"]:checked + label:before {
        background: #FFAF7B;
    }

    input[type="checkbox"]:checked + label:after {
        left: 19px;
    }
    #on_off_div img {
        width: 30px;
    }
    #on_off_div p {
        display: inline-block;
    }
    #on_off_div p:hover  {
        cursor: pointer;
    }
    #turn_label {
        margin-bottom: 0;
        vertical-align: middle;
    }
</style>