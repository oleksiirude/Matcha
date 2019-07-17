
let choose_file = function (label_name) {
    document.getElementById(label_name).click();
};
let avatar = document.getElementById('avatar').src;
console.log('avatar', avatar);

if (avatar.indexOf('images/service/default_avatar.png') !== -1) {
    document.getElementById('delete_btn').hidden = true;
};

let update_raiting = function (raiting) {
  document.getElementById('rating').innerHTML =  raiting;
    document.getElementById('rating_progress').value =  raiting;
};
let deletebio = function() {

}

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
