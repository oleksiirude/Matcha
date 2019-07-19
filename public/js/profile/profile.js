

let canvas  = document.getElementById('canvas'),
    context = canvas.getContext("2d"),
    result = document.getElementById('result');

let check_photo = function() {
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
                document.getElementById('avatar_errormsg').innerHTML = '';
                console.log('ajax', string.result);
                return true;
            } else if (string.result == false) {
                document.getElementById('avatar_errormsg').innerHTML = '&#9755; ERROR: ' + string.error;
                console.log('error', string.error);
                return false;
            }
        }

    };
    xhr.send(formData);
};

let upload = function(){
    let file = document.getElementById("avatar_input").files[0];
    if (file) {
        if ( file.type.match(/^image\//) ) {
            if (file.size > 5000000)
            {
                document.getElementById('avatar_errormsg').innerHTML = '&#9755; ERROR: Too big image';
            }
            else if (!check_photo()){
                console.log('TTT');
                document.getElementById('crop_div').hidden = false;
                let reader = new FileReader();
                reader.onload = function (evt) {
                    let img = new Image();
                    img.onload = function () {
                        context.canvas.height = img.height;
                        context.canvas.width = img.width;
                        context.drawImage(img, 0, 0);
                        const cropper = new Cropper(document.getElementById('canvas'), {
                            aspectRatio: 1 / 1,
                            rotatable: true,
                            crop(event) {
                                // console.log(event.detail.x);
                                // console.log(event.detail.y);
                                // console.log(event.detail.width);
                                // console.log(event.detail.height);
                                // console.log(event.detail.rotate);
                                // console.log(event.detail.scaleX);
                                // console.log(event.detail.scaleY);
                            },
                        });
                        document.getElementById('btnCrop').addEventListener('click', function () {
                            let croppedImageDataURL = cropper.getCroppedCanvas().toDataURL('image/jpeg');
                            document.getElementById('result_img').src = croppedImageDataURL;
                            // document.getElementById('avatar').src = croppedImageDataURL;
                        });
                        document.getElementById('btnRestore').addEventListener('click', function () {
                            cropper.reset();
                            document.getElementById('result_img').src = '';
                        });
                        document.getElementById('btnRotate').addEventListener('click', function () {
                            cropper.rotate(-90);
                            document.getElementById('result_img').src = '';
                        });
                    };
                    img.src = evt.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
        else {
            alert("Invalid file type! Please select an image file.");
        }
    }
    else {
        alert('No file(s) selected.');
    }
};




let choose_file = function (label_name) {
    // console.log('LABEL', document.getElementById(label_name));
    document.getElementById(label_name).click();
};
let avatar = document.getElementById('avatar').src;
// console.log('avatar', avatar);

if (avatar.indexOf('images/service/default_avatar.png') !== -1) {
    document.getElementById('delete_btn').hidden = true;
};

let update_raiting = function (raiting) {
    document.getElementById('rating').innerHTML =  raiting;
    document.getElementById('rating_progress').value =  raiting;
};


// let textarea = document.querySelector('textarea');
//
// textarea.addEventListener('keyup', function(){
//     if(this.scrollTop > 0){
//         this.style.height = this.scrollHeight + "px";
//     }
// });

// document.body.onclick = function(e) {
//     if(e.target != document.getElementById('bio') &&  e.target != document.getElementById('bio_edit')) {
//         document.getElementById('bio_btn').hidden = true;
//     }
// }

document.addEventListener('DOMContentLoaded', function() {
    let gallery = document.getElementsByClassName('usr_photo');
    console.log('gallery', gallery);
    console.log('bio', document.getElementById('bio').innerHTML);
    if (document.getElementById('bio').innerHTML != '')
    {
        document.getElementById('deletebio_btn').hidden = false;
    }
    let count = 1;

});
