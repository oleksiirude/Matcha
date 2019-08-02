<template>
    
</template>

<script>
    export default {
        mounted () {
            let to = this.id_to;
            let login = this.login;

            let conn = new WebSocket('ws://localhost:8081/?from=user&to=user');

            conn.onopen = function() {
                console.log("Connection established! Mode: [notification]");

                let box = {
                    'action': 'notification',
                    'aim': 'checked',
                    'to': to,
                    'login': login,
                    'chat': false // for creating valid link in db -> function addNotificationToDB()
                };

                conn.send(JSON.stringify(box));
            };

            conn.onmessage = function(e) {
                let msg = JSON.parse(e.data);

                console.log(msg['msg']);
            };

            let like_form = document.getElementById('like_form');
            if (like_form)
                like_form.addEventListener('click', onLike);

            let unlike_form = document.getElementById('unlike_form');
            if (unlike_form)
                unlike_form.addEventListener('click', onUnLike);

            function onLike() {
                let unlike_form = document.getElementById('unlike_form');
                if (unlike_form) {
                    unlike_form.addEventListener('click', onUnLike);
                    like_form.removeEventListener('click', onLike);

                    let box = {
                        'action': 'notification',
                        'aim': 'like',
                        'to': to,
                        'login': login,
                        'chat': false // for creating valid link in db -> function addNotificationToDB()
                    };

                    conn.send(JSON.stringify(box));
                }
            }

            function onUnLike() {
                let like_form = document.getElementById('like_form');
                if (like_form) {
                    like_form.addEventListener('click', onLike);
                    unlike_form.removeEventListener('click', onUnLike);

                    let box = {
                        'action': 'notification',
                        'aim': 'unlike',
                        'to': to,
                        'login': login,
                        'chat': false // boolean (for creating valid link in db -> function addNotificationToDB())
                    };

                    conn.send(JSON.stringify(box));
                }
            }

        },
        props : [
            'id_to',
            'login',
        ],
    }
</script>

<style scoped>

</style>