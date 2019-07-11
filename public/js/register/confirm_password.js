let check = function() {
    let register_button = document.getElementById('register_button');
    if (document.getElementById('password').value ==
        document.getElementById('password-confirm').value &&
        document.getElementById('password').value != 0) {
        document.getElementById('message_error').style.color = 'green';
        document.getElementById('message_error').innerHTML = '';
        register_button.type="submit";
        register_button.classList.remove('disabled');
    } else {
        document.getElementById('message_error').style.color = '#D76D77';
        document.getElementById('message_error').innerHTML = 'Confirm your password!';
        register_button.classList.add('disabled');
        register_button.type="button";
    }
}
