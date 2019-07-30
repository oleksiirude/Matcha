<template>
    <div class="container" id="main_container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Chat between</div>
                    <div class="card-header">{{ opponent }}  and  {{ you }}</div>

                    <div class="card-body">
                        <p>HERE WILL BE THE BEST CHATROOM EVER :D</p>
                        <textarea id="textarea"></textarea><br><br>
                        <button type="button" id="send-msg">Send</button>
                        <span v-for="item in mutableHistory">
                            {{ item.message }} {{ item.date }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted () {
           console.log('asdf', this.mutableHistory);

            let from = this.id_from;
            let to = this.id_to;

            let conn = new WebSocket('ws://localhost:8081');
            conn.onopen = function() {
                console.log("Connection established!");
            };

            conn.onmessage = function(e) {
                let msg = JSON.parse(e.data);
                console.log(msg);
            };

            let send = document.getElementById('send-msg');
            if (send) {
                send.addEventListener('click', sendMessage);
            }

            function sendMessage() {
                let textarea = document.getElementById('textarea');
                let msg = textarea.value;

                if (msg.length === 0)
                    return;

                textarea.value = "";

                let box = {
                    'action': 'chat',
                    'from': from,
                    'to': to,
                    'msg': msg
                };
                conn.send(JSON.stringify(box));
            }

        },
        data: function () {
            return {
                mutableHistory: JSON.parse(this.history),
            }
        },
        props : [
            'opponent',
            'you',
            'id_from',
            'id_to',
            'history'
        ],
        methods : {

        }
    }
</script>

<style scoped>

</style>