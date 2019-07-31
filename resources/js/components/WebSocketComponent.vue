<template>
    <div class="container" id="main_container">
        <h3 class="text-center"><span class="badge badge-secondary">Private chat with {{ opponent }}</span></h3>
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">
                <div id="chat">
                <ul class="p-0" v-for="item in mutableHistory">

                    <li v-if="item.sender.toString() === id_from">
                        <div class="row comments mb-2">
                            <div class="col-md-2 col-sm-2 col-3 text-center user-img">
                                <img :src="your_avatar" class="rounded-circle" />
                            </div>
                            <div id="my_block" class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
                                <h4 class="m-0 float-left">{{ you }}</h4>
                                <time class="text-grey ml-3 float-left">{{ item.date }}</time><br>
                                <p class="mb-0 text-black">{{ item.message }}</p>
                            </div>
                        </div>
                    </li>
                    <li v-else>
                        <div class="row comments mb-2">
                            <div class="col-md-9 col-sm-9 col-9 comment rounded mb-2" id="opponents_block">
                                <h4 class="m-0 float-right">{{ opponent }}</h4>
                                <time class="text-grey ml-3 float-right">{{ item.date }}</time><br>
                                <p class="mb-0 text-black">{{ item.message }}</p>
                            </div>
                            <div class="col-md-2 col-sm-2 col-3 text-center user-img">
                                <img :src="opponents_avatar" class="rounded-circle" />
                            </div>
                        </div>
                    </li>
                </ul>
                </div>

                <div class="row comment-box-main p-3 rounded-bottom">
                    <div class="col-md-9 col-sm-9 col-9 pr-0 comment-box">
                        <input id="textarea" type="text" class="form-control" placeholder="Type here..." />
                    </div>
                    <div class="col-md-3 col-sm-2 col-2 pl-0 text-center send-btn">
                        <button id="send-msg" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted () {
            let from = this.id_from;
            let to = this.id_to;
            let you = this.you;
            let opponent = this.opponent;
            let your_avatar = this.your_avatar;
            let opponents_avatar = this.opponents_avatar;

            let conn = new WebSocket('ws://localhost:8081');
            conn.onopen = function() {
                console.log("Connection established!");
            };

            conn.onmessage = function(e) {
                let msg = JSON.parse(e.data);
                addMessageFromUser(msg);
            };

            let send = document.getElementById('send-msg');
            if (send) {
                send.addEventListener('click', sendMessage);
            }

            // automatically scroll to the newest message in the history
            scrollToButtom();

            function sendMessage() {
                let textarea = document.getElementById('textarea');
                let msg = textarea.value;

                if (msg.length === 0 || msg.length > 500)
                    return;

                textarea.value = "";

                let box = {
                    'action': 'chat',
                    'from': from,
                    'to': to,
                    'msg': msg
                };
                addMessageFromMe(msg);
                conn.send(JSON.stringify(box));
            }

            function addMessageFromUser(msg) {
                let main_div = document.createElement('div');
                main_div.className = 'row comments mb-2';

                let div_for_avatar = document.createElement('div');
                div_for_avatar.className = 'col-md-2 col-sm-2 col-3 text-center user-img';

                let avatar = document.createElement('img');
                avatar.className = 'rounded-circle';
                avatar.src = opponents_avatar;

                div_for_avatar.appendChild(avatar);

                let div_for_message = document.createElement('div');
                div_for_message.id = 'opponents_block';
                div_for_message.className = 'col-md-9 col-sm-9 col-9 comment rounded mb-2';

                let h4 = document.createElement('h4');
                h4.className = "m-0 float-left";
                h4.innerHTML = opponent;

                let time_tag = document.createElement('time');
                time_tag.className = 'text-grey ml-3 float-left';
                time_tag.innerHTML = new Date().toISOString().substr(0, 19).replace('T', ' ');

                let p = document.createElement('p');
                p.className = 'mb-0 text-black';
                p.innerHTML = msg;

                div_for_message.append(h4, time_tag, document.createElement('br'), p);
                main_div.append(div_for_message, div_for_avatar);

                let ul = document.createElement('ul');
                ul.className = 'p-0';
                let li = document.createElement('li');

                document.getElementById('chat').appendChild(ul.appendChild(li.appendChild(main_div)));
                let chat = document.getElementById("chat");
                chat.scrollTop = chat.scrollHeight;
            }

            function addMessageFromMe(msg) {
                let main_div = document.createElement('div');
                main_div.className = 'row comments mb-2';

                let div_for_avatar = document.createElement('div');
                div_for_avatar.className = 'col-md-2 col-sm-2 col-3 text-center user-img';

                let avatar = document.createElement('img');
                avatar.className = 'rounded-circle';
                avatar.src = your_avatar;

                div_for_avatar.appendChild(avatar);

                let div_for_message = document.createElement('div');
                div_for_message.id = 'my_block';
                div_for_message.className = 'col-md-9 col-sm-9 col-9 comment rounded mb-2';

                let h4 = document.createElement('h4');
                h4.className = "m-0 float-left";
                h4.innerHTML = you;

                let time_tag = document.createElement('time');
                time_tag.className = 'text-grey ml-3 float-left';
                time_tag.innerHTML = new Date().toISOString().substr(0, 19).replace('T', ' ');

                let p = document.createElement('p');
                p.className = 'mb-0 text-black';
                p.innerHTML = msg;

                div_for_message.append(h4, time_tag, document.createElement('br'), p);
                main_div.append(div_for_avatar, div_for_message);

                let ul = document.createElement('ul');
                ul.className = 'p-0';
                let li = document.createElement('li');

                document.getElementById('chat').appendChild(ul.appendChild(li.appendChild(main_div)));
                let chat = document.getElementById("chat");
                chat.scrollTop = chat.scrollHeight;
            }

            function scrollToButtom() {
                let chat = document.getElementById('chat');
                chat.scrollTop = chat.scrollHeight;
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
            'history',
            'opponents_avatar',
            'your_avatar'
        ],
        methods : {

        }
    }
</script>

<style scoped>
    #chat::-webkit-scrollbar { width: 0 !important }
    #chat {
        overflow: -moz-scrollbars-none;
        scrollbar-width: none;
        overflow: auto;
        max-height: 60vh;
        overflow-x: hidden;
    }
</style>