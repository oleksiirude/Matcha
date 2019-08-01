<template>
    
</template>

<script>
    export default {
        mounted () {
            let from = this.id_from;
            let to = this.id_to;
            let title = this.title;
            let chat = this.chat;

            console.log('from: '+from, 'to: '+to, 'title: '+title, 'chat: '+chat);

            let conn = new WebSocket('ws://localhost:8081/?from=user&to=user');

            conn.onopen = function() {
                console.log("Connection established! Mode: [notification]");

                let box = {
                    'action': 'notification',
                    'to': to,
                    'msg': title,
                    'chat': chat // boolean (for creating valid link in db -> function addNotificationToDB())
                };

                conn.send(JSON.stringify(box));
            };

            conn.onmessage = function(e) {
                let msg = JSON.parse(e.data);

                console.log(msg['msg']);
            };

        },
        props : [
            'id_from',
            'id_to',
            'title',
            'chat'
        ],
    }
</script>

<style scoped>

</style>