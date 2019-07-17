<template>
    <div>
        <canvas id="imageCanvas"></canvas>
        <button class="btn-primary reset" id="reset_btn">Reset</button>
        <button class="btn-primary crop" id="crop_btn">Crop</button>
        <div class="crop-wrapper">
            <div class="top-overlay">
            </div>
            <div class="bottom-overlay">
            </div>
            <div class="left-overlay">
            </div>
            <div class="right-overlay">
            </div>
            <div class="overlay">
                <div class="overlay-inner">
                </div>
            </div>
            <img class="resize-image" src="" alt="image for resizing" id="resize_image" @click="resizeableImage()">
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'image'
        ],
        data: function () {
            return {
                mutableValue: this.image
            }
        },
        // mounted () {
        //     this.resizeableImage(document.getElementById('resize-image'));
        // },
        methods: {
            cropImage: function(image, croppingCoords) {
                console.log('image', image);
                var cc = croppingCoords;
                var workCan = document.createElement("canvas"); // create a canvas
                workCan.width = Math.floor(cc.width);  // set the canvas resolution to the cropped image size
                workCan.height = Math.floor(cc.height);
                var ctx = workCan.getContext("2d");    // get a 2D rendering interface
                ctx.drawImage(image, -Math.floor(cc.x), -Math.floor(cc.y)); // draw the image offset to place it correctly on the cropped region
                image.src = workCan.toDataURL();       // set the image source to the canvas as a data URL
                return image;
            },
            crop: function () {
                let file = document.getElementById("avatar_input").files[0];
                console.log('file', file);
                if (file.size > 5000000)
                {
                    document.getElementById('avatar_errormsg').innerHTML = '&#9755; ERROR: Too big image';
                }
                else
                {
                    console.log('CROP');
                    var image = new Image();
                    image.src = document.getElementById("avatar_input").files[0]; // load the image
                        this.cropImage(
                            this, {
                                x : this.width / 4,     // crop keeping the center
                                y : this.height / 4,
                                width : this.width / 2,
                                height : this.height / 2,
                            });
                        document.body.appendChild(this);  // Add the image to the DOM
                }
            }


            // resizeableImage : function() {
            //     this.mutableValue = document.getElementById('resize_image');
            //     console.log('image_target', this.image);
            //     let $container,
            //         orig_src = new Image(),
            //         image = $this.mutableValue,
            //         event_state = {},
            //         constrain = false,
            //         min_width = 60, // Change as required
            //         min_height = 60,
            //         max_width = 1800, // Change as required
            //         max_height = 1900,
            //         init_height=500,
            //         resize_canvas = document.createElement('canvas');
            //     imageData=null;
            //
            //     // init = function(){
            //     //
            //     //     //add the reset evewnthandler
            //     //     $('.reset').click(function() {
            //     //         if(imageData)
            //     //             loadData();
            //     //     });
            //     //
            //     //
            //     //     // When resizing, we will always use this copy of the original as the base
            //     //     orig_src.src=this.mutableValue.src;
            //     //
            //     //     // Wrap the image with the container and add resize handles
            //     //     $(image).height(init_height)
            //     //         .wrap('<div class="resize-container"></div>')
            //     //         .before('<span class="resize-handle resize-handle-nw"></span>')
            //     //         .before('<span class="resize-handle resize-handle-ne"></span>')
            //     //         .after('<span class="resize-handle resize-handle-se"></span>')
            //     //         .after('<span class="resize-handle resize-handle-sw"></span>');
            //     //
            //     //     // Assign the container to a variable
            //     //     $container =  $('.resize-container');
            //     //
            //     //     $container.prepend('<div class="resize-container-ontop"></div>');
            //     //
            //     //     // Add events
            //     //     $container.on('mousedown touchstart', '.resize-handle', startResize);
            //     //     $container.on('mousedown touchstart', '.resize-container-ontop', startMoving);
            //     //     $('.crop').on('click', crop);
            //     // };
            //     //
            //     // loadData = function() {
            //     //
            //     //     //set the image target
            //     //     image.src=imageData;
            //     //     orig_src.src=image.src;
            //     //
            //     //     //set the image tot he init height
            //     //     $(image).css({
            //     //         width:'auto',
            //     //         height:init_height
            //     //     });
            //     //
            //     //
            //     //     //resize the canvas
            //     //     $(orig_src).bind('load',function() {
            //     //         resizeImageCanvas($(image).width(),$(image).height());
            //     //     });
            //     // };
            //     //
            //     // startResize = function(e){
            //     //     e.preventDefault();
            //     //     e.stopPropagation();
            //     //     saveEventState(e);
            //     //     $(document).on('mousemove touchmove', resizing);
            //     //     $(document).on('mouseup touchend', endResize);
            //     // };
            //     //
            //     // endResize = function(e){
            //     //     resizeImageCanvas($(image).width(), $(image).height())
            //     //     e.preventDefault();
            //     //     $(document).off('mouseup touchend', endResize);
            //     //     $(document).off('mousemove touchmove', resizing);
            //     // };
            //     //
            //     // saveEventState = function(e){
            //     //     // Save the initial event details and container state
            //     //     event_state.container_width = $container.width();
            //     //     event_state.container_height = $container.height();
            //     //     event_state.container_left = $container.offset().left;
            //     //     event_state.container_top = $container.offset().top;
            //     //     event_state.mouse_x = (e.clientX || e.pageX || e.originalEvent.touches[0].clientX) + $(window).scrollLeft();
            //     //     event_state.mouse_y = (e.clientY || e.pageY || e.originalEvent.touches[0].clientY) + $(window).scrollTop();
            //     //
            //     //     // This is a fix for mobile safari
            //     //     // For some reason it does not allow a direct copy of the touches property
            //     //     if(typeof e.originalEvent.touches !== 'undefined'){
            //     //         event_state.touches = [];
            //     //         $.each(e.originalEvent.touches, function(i, ob){
            //     //             event_state.touches[i] = {};
            //     //             event_state.touches[i].clientX = 0+ob.clientX;
            //     //             event_state.touches[i].clientY = 0+ob.clientY;
            //     //         });
            //     //     }
            //     //     event_state.evnt = e;
            //     // };
            //     //
            //     // resizing = function(e){
            //     //     var mouse={},width,height,left,top,offset=$container.offset();
            //     //     mouse.x = (e.clientX || e.pageX || e.originalEvent.touches[0].clientX) + $(window).scrollLeft();
            //     //     mouse.y = (e.clientY || e.pageY || e.originalEvent.touches[0].clientY) + $(window).scrollTop();
            //     //
            //     //     // Position image differently depending on the corner dragged and constraints
            //     //     if( $(event_state.evnt.target).hasClass('resize-handle-se') ){
            //     //         width = mouse.x - event_state.container_left;
            //     //         height = mouse.y  - event_state.container_top;
            //     //         left = event_state.container_left;
            //     //         top = event_state.container_top;
            //     //     } else if($(event_state.evnt.target).hasClass('resize-handle-sw') ){
            //     //         width = event_state.container_width - (mouse.x - event_state.container_left);
            //     //         height = mouse.y  - event_state.container_top;
            //     //         left = mouse.x;
            //     //         top = event_state.container_top;
            //     //     } else if($(event_state.evnt.target).hasClass('resize-handle-nw') ){
            //     //         width = event_state.container_width - (mouse.x - event_state.container_left);
            //     //         height = event_state.container_height - (mouse.y - event_state.container_top);
            //     //         left = mouse.x;
            //     //         top = mouse.y;
            //     //         if(constrain || e.shiftKey){
            //     //             top = mouse.y - ((width / orig_src.width * orig_src.height) - height);
            //     //         }
            //     //     } else if($(event_state.evnt.target).hasClass('resize-handle-ne') ){
            //     //         width = mouse.x - event_state.container_left;
            //     //         height = event_state.container_height - (mouse.y - event_state.container_top);
            //     //         left = event_state.container_left;
            //     //         top = mouse.y;
            //     //         if(constrain || e.shiftKey){
            //     //             top = mouse.y - ((width / orig_src.width * orig_src.height) - height);
            //     //         }
            //     //     }
            //     //
            //     //     // Optionally maintain aspect ratio
            //     //     if(constrain || e.shiftKey){
            //     //         height = width / orig_src.width * orig_src.height;
            //     //     }
            //     //
            //     //     if(width > min_width && height > min_height && width < max_width && height < max_height){
            //     //         // To improve performance you might limit how often resizeImage() is called
            //     //         resizeImage(width, height);
            //     //         // Without this Firefox will not re-calculate the the image dimensions until drag end
            //     //         $container.offset({'left': left, 'top': top});
            //     //     }
            //     // }
            //     //
            //     // resizeImage = function(width, height){
            //     //     $(image).width(width).height(height);
            //     // };
            //     //
            //     // resizeImageCanvas = function(width, height){
            //     //     resize_canvas.width = width;
            //     //     resize_canvas.height = height;
            //     //     resize_canvas.getContext('2d').drawImage(orig_src, 0, 0, width, height);
            //     //     $(image).attr('src', resize_canvas.toDataURL("image/png"));
            //     //     //$(image_target).width(width).height(height);
            //     // };
            //     //
            //     // startMoving = function(e){
            //     //     e.preventDefault();
            //     //     e.stopPropagation();
            //     //     saveEventState(e);
            //     //     $(document).on('mousemove touchmove', moving);
            //     //     $(document).on('mouseup touchend', endMoving);
            //     // };
            //     //
            //     // endMoving = function(e){
            //     //     e.preventDefault();
            //     //     $(document).off('mouseup touchend', endMoving);
            //     //     $(document).off('mousemove touchmove', moving);
            //     // };
            //     //
            //     // moving = function(e){
            //     //     var  mouse={}, touches;
            //     //     e.preventDefault();
            //     //     e.stopPropagation();
            //     //
            //     //     touches = e.originalEvent.touches;
            //     //
            //     //     mouse.x = (e.clientX || e.pageX || touches[0].clientX) + $(window).scrollLeft();
            //     //     mouse.y = (e.clientY || e.pageY || touches[0].clientY) + $(window).scrollTop();
            //     //     $container.offset({
            //     //         'left': mouse.x - ( event_state.mouse_x - event_state.container_left ),
            //     //         'top': mouse.y - ( event_state.mouse_y - event_state.container_top )
            //     //     });
            //     //     // Watch for pinch zoom gesture while moving
            //     //     if(event_state.touches && event_state.touches.length > 1 && touches.length > 1){
            //     //         var width = event_state.container_width, height = event_state.container_height;
            //     //         var a = event_state.touches[0].clientX - event_state.touches[1].clientX;
            //     //         a = a * a;
            //     //         var b = event_state.touches[0].clientY - event_state.touches[1].clientY;
            //     //         b = b * b;
            //     //         var dist1 = Math.sqrt( a + b );
            //     //
            //     //         a = e.originalEvent.touches[0].clientX - touches[1].clientX;
            //     //         a = a * a;
            //     //         b = e.originalEvent.touches[0].clientY - touches[1].clientY;
            //     //         b = b * b;
            //     //         var dist2 = Math.sqrt( a + b );
            //     //
            //     //         var ratio = dist2 /dist1;
            //     //
            //     //         width = width * ratio;
            //     //         height = height * ratio;
            //     //         // To improve performance you might limit how often resizeImage() is called
            //     //         resizeImage(width, height);
            //     //     }
            //     // };
            //     //
            //     // crop = function(){
            //     //     //Find the part of the image that is inside the crop box
            //     //     var crop_canvas,
            //     //         left = $('.overlay').offset().left- $container.offset().left,
            //     //         top =  $('.overlay').offset().top - $container.offset().top,
            //     //         width = $('.overlay').width(),
            //     //         height = $('.overlay').height();
            //     //
            //     //     crop_canvas = document.createElement('canvas');
            //     //
            //     //     crop_canvas.width = width;
            //     //     crop_canvas.height = height;
            //     //
            //     //     crop_canvas.getContext('2d').drawImage(image, left, top, width, height, 0, 0, width, height);
            //     //     var dataURL=crop_canvas.toDataURL("image/png");
            //     //     image.src=dataURL;
            //     //     orig_src.src=image.src;
            //     //
            //     //
            //     //     $(image).bind("load",function() {
            //     //         $(this).css({
            //     //             width:width,
            //     //             height:height
            //     //         }).unbind('load').parent().css({
            //     //             top:$('.overlay').offset().top- $('.crop-wrapper').offset().top,
            //     //             left:$('.overlay').offset().left- $('.crop-wrapper').offset().left
            //     //         })
            //     //     });
            //         //window.open(crop_canvas.toDataURL("image/png"));
            //     }
            //
            // }
        }
    }

</script>

<style scoped>

</style>