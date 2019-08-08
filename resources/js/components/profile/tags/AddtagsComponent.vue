<template>
    <div id="add_interests_div" hidden>
        <form :action="url" method="POST" id="tag_form">
            <input type="hidden" name="_token" :value="csrf">
            <input type="hidden" name="_method" value="PUT">
            <input type="text" :name="name" :id="name" list="huge_list" @keyup="find_match" autocomplete="off">
            <datalist id="huge_list">
            </datalist>
            <button type="submit" class="btn edit_submit" id='tag_btn' @click="save" hidden>Add interest</button>
        </form>
        <form :action="urlmatch" method="POST" id="piece_form" hidden>
            <input type="hidden" name="_token" :value="csrf">
            <input type="text" name="piece" id="piece">
            <button type="submit">find matches</button>
        </form>
    </div>
</template>

<script>
    export default {
        props: [
            'csrf',
            'url',
            'urlmatch',
            'name'
        ],
        // data: function () {
        //     return {
        //         mutableValue: this.value
        //     }
        // },
        methods: {
            find_match: function(event){
                let input = event.target;
                let huge_list = document.getElementById('huge_list');
                $('#huge_list').empty();
                let min_characters = 2;
                document.getElementById('piece').value = input.value;
                let piece_form = new FormData(document.getElementById('piece_form'));
                let XHR = "onload" in new XMLHttpRequest() ? XMLHttpRequest : XDomainRequest;
                let xhr = new XHR();
                xhr.responseType = 'json';
                if (input.value.length < min_characters ) {
                    $('#huge_list').empty();
                    return;
                } else {
                    document.getElementById(this.name + '_btn').hidden = false;
                    xhr.abort();
                    xhr.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            let string = xhr.response;
                            if (string.result == true) {
                                let response = string.matches;
                                huge_list.innerHTML = "";

                                response.forEach(function (item) {
                                    let option = document.createElement('option');
                                    option.value = item;
                                    huge_list.appendChild(option);
                                });
                            }
                        }
                    };

                    xhr.open("POST", this.urlmatch, true);
                    xhr.send(piece_form)
                }
            },
            save: function (e) {
                e.preventDefault();
                let idform = this.name + '_form';
                let form = new FormData(document.getElementById(idform));
                let XHR = "onload" in new XMLHttpRequest() ? XMLHttpRequest : XDomainRequest;
                let xhr = new XHR();
                xhr.responseType = 'json';
                let url = this.url;
                xhr.open('POST', url, true);
                xhr.onreadystatechange = () => {
                    if (xhr.readyState !== 4) {
                        return;
                    }
                    if (xhr.status === 200) {
                        let string = xhr.response;
                        if (string.result == true) {
                            let text = document.getElementById(this.name).value;
                            this.mutableValue = document.getElementById(this.name).value;
                            document.getElementById(this.name + '_btn').hidden = true;
                            document.getElementById(this.name + '_error_msg').innerHTML = '';
                            document.getElementById(this.name + '_error_msg').hidden = true;
                            let ul = document.getElementById('interests_tags');
                            // ul.push({type: 'text', placeholder: 'Textbox ' + (++this.mutableValue)})
                            let li = document.createElement('li');
                            // li.addEventListener('click', this.delete_tag(this.mutableValue));
                            li.id = this.mutableValue + '_li';
                            li.title = "click to delete";
                            li.innerHTML = this.mutableValue;
                            let form = document.createElement('form');
                            form.id = this.mutableValue + '_form';
                            li.appendChild(form);

                            let inputcsrf = document.createElement('input');
                            form.appendChild(inputcsrf);
                            inputcsrf.name = '_token';
                            inputcsrf.value = this.csrf;
                            let inputdel = document.createElement('input');
                            form.appendChild(inputdel);
                            inputdel.name = '_method';
                            inputdel.value = 'DELETE';
                            form.hidden = true;
                            document.getElementById('add_interests_div').hidden = true;
                            document.getElementById(this.name).value = '';
                            update_raiting(string.rating);
                            update_fill_profile(string.empty);
                            ul.appendChild(li);
                            li.onclick = function () {
                                delete_tag(text)
                            };
                        } else if (string.result == false) {

                            document.getElementById(this.name).value = '';
                            document.getElementById(this.name + '_error_msg').hidden = false;
                            document.getElementById(this.name + '_error_msg').innerHTML = string.error;
                        }
                    }
                };
                xhr.send(form);

            },
        }

    }
</script>

<style scoped>

</style>