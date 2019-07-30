<template>
    <button type="submit" class="btn btn-primary"  id="">
        Register
    </button>

</template>

<script>
    export default {
        mounted() {
            $("#registerform").submit(function(e) {

                e.preventDefault(); // avoid to execute the actual submit of the form.

                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    // success: function(data)
                    // {
                    //     console.log(data.result);
                    //     if (data.result === true){
                    //         document.getElementById('registercard').style.display = "none";
                    //         console.log('OKOKOK',document.getElementById('registercard'));
                    //
                    //     }
                    // },
                    error :function( data ) {
                        if( data.status === 422 ) {
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function (key, value) {
                                // console.log(key+ " " +value);
                                $('#response').addClass("alert alert-danger");

                                if($.isPlainObject(value)) {
                                    $.each(value, function (key, value) {
                                        console.log(key+ " " +value);
                                        $('#response').show().append(value+"<br/>");

                                    });
                                }else{
                                    $('#response').show().append(value+"<br/>"); //this is my div with messages
                                }
                            });
                        }}
                    // error: function(data) {
                    //     console.log('error', data);
                    //     // location.reload();
                    // }
                });


            });

        // e.preventDefault();
    },
        methods: {
            // registerajax: function (e) {
            //     e.preventDefault();
            // console.log('ajax');
            //     let form = document.getElementById('registerform');
            //     console.log('registerform', form);
            //
            //     $.ajax({
            //         type: "POST",
            //         url: '/register',
            //         data: form.serialize(), // serializes the form's elements.
            //         success: function(data)
            //         {
            //             alert(data); // show response from the php script.
            //         }
            //     });




        }
    }
</script>
