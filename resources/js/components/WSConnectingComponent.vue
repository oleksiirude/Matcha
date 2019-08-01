<template>

</template>

<script>
    export default {
        mounted () {
            let conn = new WebSocket('ws://localhost:8081/?from=user&to=user');

            conn.onopen = function() {
                console.log("Connection established! Mode: [just connection]");
            };

            conn.onmessage = function(e) {
                let msg = JSON.parse(e.data);

                console.log(msg['msg']);
            };

        },
    }
</script>

<style scoped>

</style>