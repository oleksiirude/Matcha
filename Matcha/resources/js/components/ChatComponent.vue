<template>
    <div class="container" id="main_container">
        <h3 class="text-center">Private chat with <a id="link" style="text-decoration: none; color: rgba(39, 39, 39, 0.8)">{{ opponent }}</a></h3>
        <h4 class="text-center"><span id="status" class="badge badge-secondary"></span></h4>
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2 col-sm-12 col-12 comments-main pt-4 rounded">
                <div id="chat">
                    <p>It's beginning of your conversation with {{ opponent }}</p>
                <ul class="p-0" v-for="item in mutableHistory">

                    <li v-if="item.sender.toString() === id_from">
                        <div class="row comments mb-2">
                            <div class="col-md-2 col-sm-2 col-2 text-center user-img">
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
                            <div class="col-md-2 col-sm-2 col-2 text-center user-img">
                                <img :src="opponents_avatar" class="rounded-circle" />
                            </div>
                        </div>
                    </li>
                </ul>
                </div>

                <div class="row comment-box-main p-3 rounded-bottom">
                    <div class="col-md-9 col-sm-9 col-9 pr-0 comment-box">
                        <input id="textarea" type="text" class="form-control" placeholder="Type here..."  autocomplete="off"/>
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

    import moment from 'moment';

    export default {
        mounted () {
            let self = this;
            let you = this.you;
            let your_avatar = this.your_avatar;
            let from = this.id_from;
            let to = this.id_to;
            let opponent = this.opponent;
            let opponents_avatar = this.opponents_avatar;

            let link = window.location.protocol + '//' + window.location.host + '/' + 'users/' + opponent;
            let set_link = document.getElementById('link');
            set_link.setAttribute('href', link);

            // get connection to web-socket server (in server side we use ratchet)
            let conn = new WebSocket('ws://localhost:8081/?from=' + from + '&to=' + to);

            conn.onopen = function() {
                document.getElementById('send-msg').addEventListener('click', sendMessage);

                let textarea = document.getElementById('textarea');
                textarea.addEventListener("keyup", (event) => {
                    if (event.keyCode === 13) {
                        event.preventDefault();
                        document.getElementById("send-msg").click();
                    }
                });

                let box = {
                    'action': 'status',
                    'to': to,
                };

                conn.send(JSON.stringify(box));
            };

            // check opponent's status (every 10 sec)
            setInterval(() => {

                let box = {
                    'action': 'status',
                    'to': to,
                };

                conn.send(JSON.stringify(box));
            }, 10000);

            conn.onmessage = function(e) {
                let msg = JSON.parse(e.data);

                if (msg['chat'] === true) {
                    if (msg['blocked'] === true && msg['msg'] === 'blocked') {
                        document.getElementById('send-msg').removeEventListener('click', sendMessage);
                        let chat = document.getElementById('chat');
                        chat.removeChild(chat.lastChild);
                        addBlockedMessage('conversation is no longer available because of blocking');
                    }
                    else if (msg['not-connected'] === true && msg['msg'] === 'not-connected') {
                        document.getElementById('send-msg').removeEventListener('click', sendMessage);
                        let chat = document.getElementById('chat');
                        chat.removeChild(chat.lastChild);
                        addBlockedMessage('you do not have connection anymore');
                    }
                    else if (msg['status'] === true) {
                        let status = document.getElementById('status');
                        status.innerHTML = opponent + ' ' + msg['data'];
                    }
                    else
                        addMessageFromUser(self.escapeHTML(msg['msg']));
                }
                else if (msg['chat'] === false) {
                    self.show_notification(msg);
                }
            };

            function sendMessage () {
                let textarea = document.getElementById('textarea');
                let msg = textarea.value.trim().replace(/\s\s+/g, ' ');

                if (msg.length === 0 || msg.length > 500)
                    return;

                textarea.value = "";

                let box = {
                    'action': 'chat',
                    'to': to,
                    'login': you,
                    'msg': msg,
                    'chat': true
                };

                addMessageFromMe(self.escapeHTML(msg));

                conn.send(JSON.stringify(box));
            }

            function addMessageFromMe (msg) {
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
                let now = new moment();
                time_tag.innerHTML = now.format("HH:mm:ss");

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

            function addMessageFromUser (msg) {
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
                h4.className = "m-0 float-right";
                h4.innerHTML = opponent;

                let time_tag = document.createElement('time');
                time_tag.className = 'text-grey ml-3 float-right';
                let now = new moment();
                time_tag.innerHTML = now.format("HH:mm:ss");

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

            function addBlockedMessage(msg) {
                let main_div = document.createElement('div');
                main_div.className = 'row comments mb-2';

                let div_for_message = document.createElement('div');
                div_for_message.id = 'opponents_block';
                div_for_message.className = 'col-md-9 col-sm-9 col-9 comment rounded mb-2';
                div_for_message.style.background = '#ff9393';

                let p = document.createElement('p');
                p.className = 'mb-0 text-black';
                p.innerHTML = msg;

                div_for_message.append(document.createElement('br'), p);
                main_div.append(div_for_message);

                let ul = document.createElement('ul');
                ul.className = 'p-0';
                let li = document.createElement('li');

                document.getElementById('chat').appendChild(ul.appendChild(li.appendChild(main_div)));
                let chat = document.getElementById("chat");
                chat.scrollTop = chat.scrollHeight;
            }

            this.scrollToBottom();
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
            'your_avatar',
        ],
        methods : {
            scrollToBottom: function () {
                let chat = document.getElementById('chat');
                chat.scrollTop = chat.scrollHeight;
            },
            escapeHTML: function (msg) {
                return msg.replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;")
                    .replace(/"/g, "&quot;")
                    .replace(/'/g, "&#039;");
            },
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
    #chat::-webkit-scrollbar { width: 0 !important }
    #chat {
        overflow: -moz-scrollbars-none;
        scrollbar-width: none;
        overflow: auto;
        max-height: 60vh;
        overflow-x: hidden;
    }

</style>