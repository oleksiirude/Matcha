let canvas  = document.getElementById('canvas'),
    context = canvas.getContext("2d"),
    result = document.getElementById('result');
let i = 0;
// let cropper;

let show_element = function(id, error) {
    if (document.getElementById(id).hidden == true) {
        document.getElementById(id).hidden = false;
        document.getElementById(error).hidden = true;
        if (id == 'add_interests_div')
        {
            let input = document.getElementById('tag');
            input.focus();
        }
    }
    else {
        if (id == 'add_interests_div')
        {
            let input = document.getElementById('tag');
            input.value = "";
            $('#huge_list').empty();
        }
        document.getElementById(id).hidden = true;
        document.getElementById(error).hidden = true;
    }
};

document.getElementById('fill_profile').addEventListener('click', function () {
    if (document.getElementById('fill_profile').hidden == true)
        document.getElementById('fill_profile').hidden = false;
    else
        document.getElementById('fill_profile').hidden = true;
});

let delete_tag =  function (tag) {
    console.log('DELETE', tag);
    let idform = tag + '_form';
    let form = new FormData(document.getElementById(idform));
    let XHR = "onload" in new XMLHttpRequest() ? XMLHttpRequest : XDomainRequest;
    let xhr = new XHR();
    xhr.responseType = 'json';
    let url = '/delete/tag/' + tag;
    xhr.open('POST', url, true);
    xhr.onreadystatechange = () => {
        if (xhr.readyState !== 4) {
            return;
        }
        if (xhr.status === 200) {
            let string = xhr.response;
            if (string.result == true) {
                document.getElementById(tag + '_li').remove();
                update_raiting(string.rating);
                update_fill_profile(string.empty);

            } else if (string.result == false) {


            }
            console.log('res', string);
        }
    };
    xhr.send(form);
}

let upload_crop_avatar = function() {
    // console.log('TTT', document.getElementById('crop_avatar').value);
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
                console.log('string', string.path);
                document.getElementById('avatar').src = string.path + '?ver=' + i;
                i++;
                console.log('string2', document.getElementById('avatar').src);
                document.getElementById('avatar_errormsg').innerHTML = '';
                document.getElementById('delete_btn').hidden = false;
                update_raiting(string.rating);
                document.getElementById('crop_div').hidden = true;
                document.getElementById('parent_popup').style.display='none';
                console.log('uploadajax', string.path);
                document.getElementById('avatar_input').value = '';
                update_fill_profile(string.empty);
            } else if (string.result == false) {
                document.getElementById('avatar_errormsg').innerHTML = '&#9755; ERROR: ' + string.error;
                console.log('uploaderror', string.error);
            }
            console.log('uploadres', string);
        }

    };
    xhr.send(formData);
};

let crop_prepare = function() {
    let file = document.getElementById("avatar_input").files[0];
    document.getElementById('crop_div').hidden = false;
    document.getElementById('parent_popup').style.display='block';

    let reader = new FileReader();
    reader.onload = function (evt) {
        let img = new Image();
        img.onload = function () {
            context.canvas.height = img.height;
            context.canvas.width = img.width;
            context.drawImage(img, 0, 0);
            const cropper = new Cropper(document.getElementById('canvas'), {
                viewMode: 1,
                aspectRatio: 1 / 1,
                center: false,
                rotatable: true,
                crop(event) {
                },
            });
            document.getElementById('btnClose').addEventListener('click', function () {
                document.getElementById('crop_div').hidden = true;
                cropper.destroy();
                document.getElementById('parent_popup').style.display='none';
                document.getElementById('avatar_input').value = '';
            });
            document.getElementById('popup').addEventListener('click', function (e) {
                if (e.target !== this)
                    return;
                document.getElementById('crop_div').hidden = true;
                cropper.destroy();
                document.getElementById('parent_popup').style.display='none';
                document.getElementById('avatar_input').value = '';
            });
            document.getElementById('btnCrop').addEventListener('click', function () {
                let tmp = cropper.getCroppedCanvas();
                console.log('tmp', tmp);
                if (tmp != null) {
                    let croppedImageDataURL = tmp.toDataURL('image/jpeg');
                    document.getElementById('crop_avatar').value = croppedImageDataURL;
                    upload_crop_avatar();
                    cropper.destroy();
                }
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
};

let check_photo = function() {
    let formData = new FormData(document.forms.useravatar_form);
    let XHR = "onload" in new XMLHttpRequest() ? XMLHttpRequest : XDomainRequest;
    let xhr = new XHR();
    xhr.responseType = 'json';
    xhr.open('POST', '/upload/check/avatar', true);
    console.log('res', xhr, formData);

    xhr.onreadystatechange = () => {
        if (xhr.readyState !== 4) {
            return ;
        }
        if (xhr.status === 200) {
            let string = xhr.response;
            if (string.result == true) {
                document.getElementById('avatar_errormsg').innerHTML = '';
                console.log('ajax', string.result);
                crop_prepare();
            } else if (string.result == false) {
                document.getElementById('avatar_errormsg').innerHTML = '&#9755; ERROR: ' + string.error;
                console.log('error', string.error);
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
                document.getElementById('avatar_errormsg').innerHTML = '&#9755; ERROR: Too big image';
            else
                check_photo();
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

let update_fill_profile = function(text_fill) {
    let div = document.getElementById('fill_profile');
    if (text_fill == false)
    {
        div.innerHTML = "";
        div.hidden = true;
    }
    else {
        document.getElementById('fill_profile').hidden = false;
        div.innerHTML = "";
        div.innerHTML = "&#9758; Hey! For more efficient search <b>you should</b>:";
        let ul = document.createElement('ul');
        div.appendChild(ul);
        if (text_fill.upload) {
            console.log('text_fill.upload', text_fill.upload);
            text_fill.upload.forEach(function(item, i, arr) {
                let li = document.createElement('li');
                ul.appendChild(li);
                li.innerHTML = 'upload ' + item;
                // alert( i + ": " + item + " (массив:" + arr + ")" );
            });
        }
        if (text_fill.fill) {
            console.log('text_fill.fill', text_fill.fill);
            text_fill.fill.forEach(function(item, i, arr) {
                let li = document.createElement('li');
                ul.appendChild(li);
                li.innerHTML = 'fill ' + item;
                // alert( i + ": " + item + " (массив:" + arr + ")" );
            });
        }
        div.hidden = false;
    }
    console.log('_______________div', div, text_fill);

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
    // console.log('gallery', gallery);
    // console.log('bio', document.getElementById('bio').innerHTML);
    if (document.getElementById('bio').innerHTML != '')
    {
        document.getElementById('deletebio_btn').hidden = false;
    }
    // console.log('tttt', document.getElementById('fill_profile').innerHTML)
    if (document.getElementById('fill_profile').innerHTML == '')
    {
        // console.log('ok');
        document.getElementById('fill_profile').hidden = true;
    }
    let count = 1;

});
