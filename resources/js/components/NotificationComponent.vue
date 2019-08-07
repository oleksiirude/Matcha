<template>
    
</template>

<script>
    export default {
        mounted () {
            let to = this.id_to;
            let login = this.login;
            let self = this;
            let conn = new WebSocket('ws://localhost:8081/?from=user&to=user');

            conn.onopen = function() {

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
                self.show_notification(msg);
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
        methods: {
            show_notification: function (msg) {
                let div = document.getElementById('drop_up_notifications_body');
                let mini_div = document.createElement('div');
                mini_div.style.display = "none";
                div.insertBefore(mini_div, div.firstElementChild);
                mini_div.innerHTML = '<span class="close_span" title="close" onclick="clear_msg(event)">x</span><a href="'+msg['link']+'" target="_blank">'+ msg['login']+'</a> '+ msg['msg'];
                let promise = document.getElementById('play').play();

                if (promise !== undefined) {
                    promise.then(_ => {
                        document.getElementById('play').play();
                    }).catch(error => {
                    });
                }
                $(mini_div).fadeIn(1000);
                document.getElementById('clear_all').hidden = false;
            }
        }
    }
</script>

<style scoped>

</style>