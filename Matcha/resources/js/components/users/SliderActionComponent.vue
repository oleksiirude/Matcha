<template>
    <div id="parent_popup">
        <div id="popup"></div>
        <div id="photo_slide" hidden>
            <input type="button" id="btnClose" value="X" class="close_btn" title="close" @click="close">
            <img id="current_img" class="slider_photo">
            <a class="p_n prev" id="prev" @click="plusSlides(-1, $event)">❮</a>
            <a class="p_n next" id="next" @click="plusSlides(1,  $event)">❯</a>
        </div>
    </div>
</template>

<script>

    export default {
        mounted() {
            let prev = document.getElementById('prev');
            let next =  document.getElementById('next');
            let photos = document.getElementsByClassName('usr_photo');
            document.getElementById('popup').addEventListener('click', function (e) {
                if (e.target !== this)
                    return;
                document.getElementById('photo_slide').hidden = true;
                document.getElementById('parent_popup').style.display='none';
            });

            if (photos.length < 2)
            {
                prev.hidden = true;
                next.hidden = true;
            }
            Array.from(photos). forEach(function (item, i, arr) {
                item.addEventListener('click', function () {
                    document.getElementById('parent_popup').style.display='block';
                    let div = document.getElementById('photo_slide');
                    div.hidden = false;
                    let img = document.getElementById('current_img');
                    img.src = this.src;
                    img.name = i;
                });
            });
        },
        data: function () {
            return {
                mutableParam: document.getElementsByClassName('usr_photo'),
                mutableI: ''
            }
        },
        methods: {
            close: function () {
                document.getElementById('photo_slide').hidden = true;
                document.getElementById('parent_popup').style.display='none';
            },
            plusSlides: function (action, e) {
                let path = e.path || (e.composedPath && e.composedPath()) || composedPath(e.target);
                let img = path[1].children[1];
                let i = img.name * 1;
                let b = action * 1;
                let length = this.mutableParam.length;
                if ((i + b >= 0) && (i + b < length))
                {
                    let img = document.getElementById('current_img');
                    img.src = this.mutableParam[i + b].src;
                    img.name = i + b;
                }
                else if (i + b == length)
                {
                    let img = document.getElementById('current_img');
                    img.src = this.mutableParam[0].src;
                    img.name = 0;
                }
                else if (i + b == -1)
                {
                    let img = document.getElementById('current_img');
                    img.src = this.mutableParam[length - 1].src;
                    img.name = length - 1;
                }
            },
        }
    }
</script>

<style scoped>
    #photo_slide {
        display: flex;
        background-color: white;
        position: fixed;
        width: 50%;
        top:15%;
        left:15%;
        z-index:999;
        height: 500px;
        box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
    }
    .slider_photo {
        max-width: 90%;
        max-height:90%;
        margin: auto;
    }
    .close_btn {
        position: absolute;
        right: 0px;
        background-color: white;
        border: none;
        color: rgba(68, 79, 87, 0.8);
    }
    .close_btn:hover {
        font-weight: bolder;
        color: rgba(68, 79, 87, 1);
    }
    .p_n {
        position: absolute;
        top: 45%;
        font-size: 40px;
        margin: 10px;
    }
    .p_n:hover {
        cursor: pointer;
    }
    .prev {

    }
    .next {
        right:0px;
    }
</style>