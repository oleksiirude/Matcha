<template>

    <div class="container" id="main_container">
        <h3 class="text-center"><span class="badge badge-secondary">Private chat with {{ opponent }}</span></h3>
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">
                <ul class="p-0" v-for="item in mutableHistory">

                    <li v-if="item.sender.toString() === id_from">
                        <div class="row comments mb-2">
                            <div class="col-md-2 col-sm-2 col-3 text-center user-img">
                                <img :src="your_avatar" class="rounded-circle" />
                            </div>
                            <div id="my_block" class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
                                <h4 class="m-0 float-left"><span>{{ you }}</span></h4>
                                <time class="text-grey ml-3 float-left">{{ item.date }}</time><br>
                                <p class="mb-0 text-black">{{ item.message }}</p>
                            </div>
                        </div>
                    </li>
                    <li v-else>
                        <div class="row comments mb-2">
                            <div class="col-md-9 col-sm-9 col-9 comment rounded mb-2" id="opponents_block">
                                <h4 class="m-0 float-right"><span>{{ opponent }}</span></h4>
                                <time class="text-grey ml-3 float-right">{{ item.date }}</time><br>
                                <p class="mb-0 text-black">{{ item.message }}</p>
                            </div>
                            <div class="col-md-2 col-sm-2 col-3 text-center user-img">
                                <img :src="opponents_avatar" class="rounded-circle" />
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="row comment-box-main p-3 rounded-bottom">
                    <div class="col-md-9 col-sm-9 col-9 pr-0 comment-box">
                        <input type="text" class="form-control" placeholder="Type here..." />
                    </div>
                    <div class="col-md-3 col-sm-2 col-2 pl-0 text-center send-btn">
                        <button id="btn-send" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--    <div class="container" id="main_container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-md-8">-->
<!--                <div class="card">-->
<!--                    <div class="card-header">Chat between</div>-->
<!--                    <div class="card-header">{{ opponent }}  and  {{ you }}</div>-->

<!--                    <div class="card-body">-->
<!--                        <p>HERE WILL BE THE BEST CHATROOM EVER :D</p>-->
<!--                        <textarea id="textarea"></textarea><br><br>-->
<!--                        <button type="button" id="send-msg">Send</button>-->
<!--                        <span v-for="item in mutableHistory">-->
<!--                            {{ item.message }} {{ item.date }}-->
<!--                        </span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</template>

<script>
    export default {
        mounted () {

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
            'history',
            'opponents_avatar',
            'your_avatar'
        ],
        methods : {

        }
    }
</script>

<style scoped>
    body{
        font-family: 'Raleway', sans-serif;
        background: #E9ECE9;
    }
    .comments-main{
        background: #DDD;
    }
    .comment time, .comment:hover time {
        -webkit-transition: .25s opacity linear;
        transition: .25s opacity linear;
    }
    .comments-main ul li{
        list-style: none;
    }
    .comments .comment {
        padding: 5px 10px;
        background: #FFF;
        margin-left: 4%;
        margin-right: 4%;
    }
    .comments .comment:hover time{
        opacity: 1;
        margin-right: 4%;
    }
    .comments .user-img img {
        width: 50px;
        height: 50px;
    }
    .comments .comment h4 {
        display: inline-block;
        font-size: 16px;
    }
    .comments .comment h4 a {
        color: #404040;
        text-decoration: none;
    }
    .comments .comment {
        color: #545454;
        font-size: .85rem;
    }

    .comments .comment time,.comments .comment ,.comments .comment {
        font-size: .75rem;
        opacity: 0;
        margin-right: 4%;
    }
    .comments .comment time, .comments .comment {
        font-weight: 300;
    }
    .comments .comment p {
        font-size: 13px;
    }
    .comments .comment p {
        color: black;
        cursor: pointer;
    }
    .comments .comment {
        opacity: 1;
    }
    .comments .comment:hover .comments .comment:hover {
        opacity: 1;
    }
    .comment-box-main{
        background: #A1A1A1;
    }
    @media (min-width: 320px) and (max-width: 480px) {
        .comments .comment h4 {
            font-size: 12px;
        }
        .comments .comment p{
            font-size: 11px;
        }
        .comment-box-main .send-btn button{
            margin-left: 5px;
        }
    }

    #btn-send:active {
        background-color: #00AF90;
        box-shadow: 0 5px #666;
        transform: translateY(2px);
    }

    #opponents_block {
        background: #f2ffec;
    }

</style>