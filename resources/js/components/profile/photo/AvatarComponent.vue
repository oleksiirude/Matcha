<template>
    <div>

        <input type="file" accept=".jpg, .jpeg" name="avatar" @change='crop' id="avatar_input" class="photo_input"/>
        <label for="avatar_input" id="avatar_label">Выберите файл</label>
        <input name="crop" id="crop_avatar" hidden/>

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
        }
    }
</script>

<style scoped>

</style>