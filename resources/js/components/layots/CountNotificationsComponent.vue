<template>
    <button type="submit" class="btn btn-outline-secondary">
        Notifications
        <span id="counter"></span>
    </button>
</template>

<script>
    export default {
        mounted  (  )
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': this.csrf
                }
            });
            jQuery.ajax({
                url: this.url,
                method: 'POST',
                contentType: 'application/json; charset=utf-8',
                responseType: 'json',
                success: function(result){
                    let res = result.count;
                    if (res != 0)
                    {
                        document.getElementById('counter').hidden = false;
                        document.getElementById('counter').innerHTML = res;
                    }
                    else {
                        document.getElementById('counter').innerHTML = '';
                        document.getElementById('counter').hidden = true;

                    }
                    console.log('count result', result.count);
                }});
        },
        props: [
            'url',
            'csrf'
        ],
        methods: {
        
        }

    }
</script>

<style scoped>
#counter {
    display:inline-block;
    position: relative;
    bottom: 10px;
    width: 23px;
    height: 23px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 1px 2px;
    font-weight: 17px;
    line-height: 21px;
    color: #fff;
    text-align: center;
    background: #FFAF7B;
    border-radius: 12px;
}
</style>