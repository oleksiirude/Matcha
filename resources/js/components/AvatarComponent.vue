<template>
    <div>

        <input type="file" accept=".jpg, .jpeg" name="avatar" @change='crop' id="avatar_input" class="photo_input"/>
        <label for="avatar_input" id="avatar_label">Выберите файл</label>
<!--        <input type="image" name="crop_avatar" id="cropavatar_input" hidden/>-->

    </div>
</template>

<script>
    export default {
        mounted() {


        },
        props: {

        },
        methods: {
            crop: function (e) {
                upload();
            },
            // crop: function (e) {
            //     let crop_div = document.getElementById('crop_div');
            //     let file = document.getElementById("avatar_input").files[0];
            //     if (file.size > 5000000)
            //     {
            //         document.getElementById('avatar_errormsg').innerHTML = '&#9755; ERROR: Too big image';
            //     }
            //     else {
            //         var canvas = document.getElementById('imageCanvas');
            //         var ctx = canvas.getContext('2d');
            //         handleImage(e);
            //
            //         function handleImage(e) {
            //             // const CIP = require('canvas_image_processing');
            //
            //             var reader = new FileReader();
            //             reader.onload = function (event) {
            //                 var img = new Image();
            //                 img.onload = function () {
            //                     canvas.width = img.width;
            //                     canvas.height = img.height;
            //                     ctx.drawImage(img, 0, 0);
            //                 }
            //                 img.src = event.target.result;
            //                 document.getElementById('resize_image').src = img.src;
            //                 crop_div.hidden = false;
            //
            //
            //                 // let base64_image = img.src;
            //
            //                 // CIP.cropImage64(base64_image, 0, 0, 400, 400).then(cropped_image => {
            //                 //     console.log('cropped base64 image: ', cropped_image);
            //                 //     document.getElementById('avatar').src = cropped_image;
            //                 // });
            //                 // CIP.resizeImage64(base64_image, 600, 600).then(cropped_image => {
            //                 //     console.log('resized base64 image: ', cropped_image);
            //                 //     document.getElementById('avatar').src = cropped_image;
            //                 // });
            //
            //
            //
            //                 resizeableImage(document.getElementsByClassName('resize-image'));
            //                 // console.log('canvas', img.src);
            //             }
            //             reader.readAsDataURL(e.target.files[0]);
            //
            //             // var url = canvas.toDataURL();
            //             //
            //             // var newImg = document.createElement("img"); // create img tag
            //             // newImg.src = url;
            //             // document.body.appendChild(newImg);
            //             // document.getElementById('resize_image').src = canvas.toDataURL();
            //         }
            //     }
            //
            //     // let file = document.getElementById("avatar_input").files[0];
            //     // console.log('file', file);
            //     // if (file.size > 5000000) {
            //     //     document.getElementById('avatar_errormsg').innerHTML = '&#9755; ERROR: Too big image';
            //     // } else {
            //     //     this.processImage();
            //     //     console.log('CROP');
            //     //     var image = new Image();
            //     //     image.src = file.name; // load the image
            //     //     this.cropImage(
            //     //         this, {
            //     //             x: this.width / 4,     // crop keeping the center
            //     //             y: this.height / 4,
            //     //             width: this.width / 2,
            //     //             height: this.height / 2,
            //     //         });
            //     //     document.body.appendChild(this);  // Add the image to the DOM
            //     // }
            // },

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