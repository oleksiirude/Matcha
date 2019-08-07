<template>
    <div id="parent_popup">
        <div id="popup"></div>
        <div id="crop_div" hidden>
            <p>
                <button id="btnCrop" class="btn btn-primary">&#x2704; Crop and download</button>
                <button id="btnRestore" class="btn btn-primary">Restore</button>
                <button id="btnRotate" class="btn btn-primary">&#x21ba; Rotate</button>
                <input type="button" id="btnClose" class="close_btn" value="X" />
            </p>
            <div>
                <canvas id="canvas">
                </canvas>
            </div>
            <div id="result">
                <img id="result_img" src="">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        methods: {
            close_window: function () {
                document.getElementById('crop_div').hidden = true;
                cropper.destroy();
            }
        }
    }

</script>
