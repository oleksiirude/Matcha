<template>
    <div id="crop_div" hidden>
        <p>
            <input type="button" id="btnCrop" value="Crop and download" />
            <input type="button" id="btnRestore" value="Restore" />
            <input type="button" id="btnRotate" value="Rotate" />
        </p>
        <div>
            <canvas id="canvas">
            </canvas>
        </div>
        <div id="result">
            <img id="result_img" src="">
        </div>
    </div>
</template>

<script>
    export default {
        // props: [
        //     // 'croppedImage',
        //     // 'canvasWidth',
        //     // 'canvasHeight',
        //     // 'roundCorners'
        // ],
        methods: {

            // selectFile: function (evt) {


        }
    }

</script>
