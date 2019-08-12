<template>

</template>

<script>
    export default {
        mounted () {
            let self = this;
            let conn = new WebSocket('ws://localhost:8081/?from=user&to=user');

            conn.onopen = function() {
            };

            conn.onmessage = function(e) {
                let msg = JSON.parse(e.data);
                self.show_notification(msg);
            };

        },
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