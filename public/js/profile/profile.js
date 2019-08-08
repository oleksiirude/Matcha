let canvas  = document.getElementById('canvas'),
    context = canvas.getContext("2d"),
    result = document.getElementById('result');
let i = 0;

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
        }
    };
    xhr.send(form);
}

let upload_crop_avatar = function() {
    let formData = new FormData(document.forms.useravatar_form);
    let XHR = "onload" in new XMLHttpRequest() ? XMLHttpRequest : XDomainRequest;
    let xhr = new XHR();
    xhr.responseType = 'json';
    xhr.open('POST', '/upload/avatar', true);

    xhr.onreadystatechange = () => {
        if (xhr.readyState !== 4) {
            return;
        }
        if (xhr.status === 200) {
            let string = xhr.response;
            if (string.result == true) {
                document.getElementById('avatar').src = string.path + '?ver=' + i;
                i++;
                document.getElementById('avatar_errormsg').innerHTML = '';
                document.getElementById('delete_btn').hidden = false;
                update_raiting(string.rating);
                document.getElementById('crop_div').hidden = true;
                document.getElementById('parent_popup').style.display='none';
                document.getElementById('avatar_input').value = '';
                update_fill_profile(string.empty);
            } else if (string.result == false) {
                document.getElementById('avatar_errormsg').innerHTML = '&#9755; ERROR: ' + string.error;
            }
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

    xhr.onreadystatechange = () => {
        if (xhr.readyState !== 4) {
            return ;
        }
        if (xhr.status === 200) {
            let string = xhr.response;
            if (string.result == true) {
                document.getElementById('avatar_errormsg').innerHTML = '';
                crop_prepare();
            } else if (string.result == false) {
                document.getElementById('avatar_errormsg').innerHTML = '&#9755; ERROR: ' + string.error;
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
    document.getElementById(label_name).click();
};
let avatar = document.getElementById('avatar').src;

if (avatar.indexOf('images/service/default_avatar.png') !== -1) {
    document.getElementById('delete_btn').hidden = true;
};

let update_raiting = function (raiting) {
    document.getElementById('rating').innerHTML =  raiting;
    document.getElementById('rating_progress').value =  raiting;
};

let update_fill_profile = function(text_fill) {
    let div = document.getElementById('fill_profile');
    let div_body = document.getElementById('fill_profile_body');
    if (text_fill == false)
    {
        div_body.innerHTML = "";
        div.hidden = true;
    }
    else {
        document.getElementById('fill_profile').hidden = false;
        div_body.innerHTML = "";
        div_body.innerHTML = "&#9758; Hey! For more efficient search <b>you should</b>:";
        let ul = document.createElement('ul');
        div_body.appendChild(ul);
        if (text_fill.upload) {
            text_fill.upload.forEach(function(item) {
                let li = document.createElement('li');
                ul.appendChild(li);
                li.innerHTML = 'upload ' + item;
            });
        }
        if (text_fill.fill) {
            text_fill.fill.forEach(function(item) {
                let li = document.createElement('li');
                ul.appendChild(li);
                li.innerHTML = 'fill ' + item;
            });
        }
        div.hidden = false;
    }

};


document.addEventListener('DOMContentLoaded', function() {
    let gallery = document.getElementsByClassName('usr_photo');
    if (document.getElementById('bio').innerHTML != '')
    {
        document.getElementById('deletebio_btn').hidden = false;
    }
    if (document.getElementById('fill_profile').innerHTML == '')
    {
        document.getElementById('fill_profile').hidden = true;
    }
    let count = 1;
});
