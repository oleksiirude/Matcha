let check = function(e) {
    console.log('change', e.id);
    let register_button = document.getElementById('register_button');
    if (document.getElementById('password').value ==
        document.getElementById('password-confirm').value &&
        document.getElementById('password').value != 0) {
        document.getElementById('message_error').style.color = 'green';
        document.getElementById('message_error').innerHTML = '';
        console.log('gender', document.getElementById('gender').value);
        if (document.getElementById('login').value != '' &&
            document.getElementById('email').value != '' &&
            document.getElementById('name').value != '' &&
            document.getElementById('surname').value != '' &&
            document.getElementById('gender').value != '')
            {
                register_button.type="submit";
                register_button.classList.remove('disabled');
                register_button.disabled = false;
            }
    } else {
        if (e.id == 'password-confirm') {
            document.getElementById('message_error').style.color = '#D76D77';
            document.getElementById('message_error').innerHTML = 'Confirm your password!';
        }
        register_button.classList.add('disabled');
        register_button.disabled = true;
        register_button.type="button";
    }
};