<template>
    <div>
        <button type="submit" class="btn btn-outline-secondary" @click="read_notifications($event)">
            Notifications
            <span id="counter"></span>
        </button>
        <div id="parent_popup_notification">
            <div id="popup_notification"></div>
            <div id="unread_notifications" hidden>
                <input type="button" id="btnClose_notifications" value="X" class="close_btn" title="close" @click="close">
                <h2 id="unread_notifications_title">Your unread notifications</h2>
                <div id="msg_div">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted  (  )
        {
            this.count_notifications();
            document.getElementById('popup_notification').addEventListener('click', function (e) {
                if (e.target !== this)
                    return;
                document.getElementById('unread_notifications').hidden = true;
                document.getElementById('parent_popup_notification').style.display='none';
                let msg = document.getElementById('msg_div').children;
                if (msg.length != 0)
                {
                    msg[0].remove();
                }
                // console.log(document.getElementById('msg_div').children);
            });
        },
        props: [
            'url',
            'csrf',
            'read_url',
        ],
        methods: {
            count_notifications: function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': this.csrf
                    }
                });
                jQuery.ajax({
                    url: this.url,
                    method: 'POST',
                    contentType: 'application/json; charset=utf-8',
                    responseType: 'json',
                    success: function(result){
                        let res = result.count;
                        if (res != 0)
                        {
                            document.getElementById('counter').hidden = false;
                            document.getElementById('counter').innerHTML = res;
                        }
                        else {
                            document.getElementById('counter').innerHTML = '';
                            document.getElementById('counter').hidden = true;

                        }
                        // console.log('count result', result.count);
                    }});
            },
            read_notifications: function (e) {
                e.preventDefault();
                let div = document.getElementById('unread_notifications');
                document.getElementById('parent_popup_notification').style.display='block';
                let self = this;
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': this.csrf
                    }
                });
                jQuery.ajax({
                    url: this.read_url,
                    method: 'POST',
                    contentType: 'application/json; charset=utf-8',
                    responseType: 'json',
                    success: function(result){
                        let notifications = result.notifications;
                        if (notifications.length != 0)
                        {
                            document.getElementById('unread_notifications_title').innerHTML = "Your unread notifications"
                            // console.log('notifications', notifications);
                            div.hidden = false;
                            let msg_div = document.getElementById('msg_div');
                            // div.appendChild(msg_div);
                            let ul = document.createElement('ul');
                            msg_div.appendChild(ul);

                            notifications.forEach(function(item, i, arr) {
                                let li = document.createElement('li');
                                ul.appendChild(li);
                                li.innerHTML = '<a href="'+ item.link +'" target=\"_blank\">'+ item.login + '</a> ' + item.title;
                                    // alert( i + ": " + item + " (массив:" + arr + ")" );
                                });

                            self.count_notifications();
                        }
                        else {
                            div.hidden = false;
                            document.getElementById('unread_notifications_title').innerHTML = "You don't have unread messages";
                            console.log('NULL notifications', notifications);
                        }
                        console.log('count result', notifications);
                    }});
            }, 
            close: function () {
                document.getElementById('unread_notifications').hidden = true;
                document.getElementById('parent_popup_notification').style.display='none';
                // console.log(document.getElementById('msg_div').children);
                let msg = document.getElementById('msg_div').children;
                if (msg.length != 0)
                {
                    msg[0].remove();
                }
            }
        }

    }
</script>

<style scoped>
    .close_btn {
        position: absolute;
        right: 0px;
        top:0px;
        background-color: white;
        border: none;
        color: rgba(68, 79, 87, 0.8);
    }
    .close_btn:hover {
        font-weight: bolder;
        color: rgba(68, 79, 87, 1);
    }
    #counter {
        display:inline-block;
        position: relative;
        bottom: 10px;
        width: 23px;
        height: 23px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 1px 2px;
        font-weight: bold;
        line-height: 21px;
        color: #fff;
        text-align: center;
        background: #FFAF7B;
        border-radius: 12px;
    }
    #unread_notifications {
        padding: 20px;
        background-color: white;
        position: fixed;
        width: 40%;
        top:15%;
        right:15%;
        z-index:999;
        border-radius: 20px;
        box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
    }
    #parent_popup_notification {
        display: none;
        height: 100%;
        /*opacity: 0.9;*/
        position: fixed;
        width: 100%;
        z-index: 9999;
        top: 0;
        left: 0;
    }
    #popup_notification {
        background-color: grey;
        opacity: 0.7;
        height: 100%;
        width: 100%;
    }
</style>