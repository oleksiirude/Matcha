<template>
    <div>
        <input type="file" accept=".jpg, .jpeg" name="avatar" @change='crop' id="avatar_input" class="photo_input"/>
        <label for="avatar_input" id="avatar_label">Выберите файл</label>
    </div>
</template>

<script>
    export default {
        mounted() {


        },
        props: {

        },
        methods: {
            // processImage: function () {
            //     var FR= new FileReader();
            //     FR.onload = function(e) {
            //         var img = new Image();
            //         img.addEventListener("load", function() {
            //             context.drawImage(img, 0, 0);
            //         });
            //         img.src = e.target.result;
            //     };
            //     FR.readAsDataURL( this.files[0] );
            // },
            cropImage: function(image, croppingCoords) {
                console.log('image', image);
                var cc = croppingCoords;
                var workCan = document.createElement("canvas"); // create a canvas
                workCan.width = Math.floor(cc.width);  // set the canvas resolution to the cropped image size
                workCan.height = Math.floor(cc.height);
                var ctx = workCan.getContext("2d");    // get a 2D rendering interface
                ctx.drawImage(image, -Math.floor(cc.x), -Math.floor(cc.y)); // draw the image offset to place it correctly on the cropped region
                image.src = workCan.toDataURL();       // set the image source to the canvas as a data URL
                return image;
            },
            crop: function (e) {
                var canvas = document.getElementById('imageCanvas');
                var ctx = canvas.getContext('2d');
                handleImage(e);

                function handleImage(e){
                    var reader = new FileReader();
                    reader.onload = function(event){
                        var img = new Image();
                        img.onload = function(){
                            canvas.width = img.width;
                            canvas.height = img.height;
                            ctx.drawImage(img,0,0);
                        }
                        img.src = event.target.result;
                        document.getElementById('resize_image').src = img.src;
                        resizeableImage($('.resize-image'));
                        console.log('canvas', img.src);
                    }
                    reader.readAsDataURL(e.target.files[0]);

                    // var url = canvas.toDataURL();
                    //
                    // var newImg = document.createElement("img"); // create img tag
                    // newImg.src = url;
                    // document.body.appendChild(newImg);
                    // document.getElementById('resize_image').src = canvas.toDataURL();
                }

                // let file = document.getElementById("avatar_input").files[0];
                // console.log('file', file);
                // if (file.size > 5000000) {
                //     document.getElementById('avatar_errormsg').innerHTML = '&#9755; ERROR: Too big image';
                // } else {
                //     this.processImage();
                //     console.log('CROP');
                //     var image = new Image();
                //     image.src = file.name; // load the image
                //     this.cropImage(
                //         this, {
                //             x: this.width / 4,     // crop keeping the center
                //             y: this.height / 4,
                //             width: this.width / 2,
                //             height: this.height / 2,
                //         });
                //     document.body.appendChild(this);  // Add the image to the DOM
                // }
            },

            downloadphoto : function () {
                let file = document.getElementById("avatar_input").files[0];
                console.log('file', file);
                if (file.size > 5000000)
                {
                    document.getElementById('avatar_errormsg').innerHTML = '&#9755; ERROR: Too big image';
                }
                else {
                    let formData = new FormData(document.forms.useravatar_form);
                    let XHR = "onload" in new XMLHttpRequest() ? XMLHttpRequest : XDomainRequest;
                    let xhr = new XHR();
                    xhr.responseType = 'json';
                    xhr.open('POST', '/upload/avatar', true);
                    console.log('res', xhr, formData);

                    xhr.onreadystatechange = () => {
                        if (xhr.readyState !== 4) {
                            return;
                        }
                        if (xhr.status === 200) {
                            let string = xhr.response;
                            if (string.result == true) {
                                document.getElementById('avatar').src = string.path;
                                document.getElementById('avatar_errormsg').innerHTML = '';
                                document.getElementById('delete_btn').hidden = false;
                                update_raiting(string.rating);
                                console.log('ajax', string.path);
                            } else if (string.result == false) {
                                document.getElementById('avatar_errormsg').innerHTML = '&#9755; ERROR: ' + string.error;
                                console.log('error', string.error);
                            }
                            console.log('res', string);
                        }

                    };
                    xhr.send(formData);
                }

            },
        }
    }
</script>

<style scoped>

</style>