/**
 * Created with IntelliJ IDEA.
 * User: HandsHiles
 * Date: 2014-09-19
 * Time: 3:38 PM
 * To change this template use File | Settings | File Templates.
 */

$(document).ready(function(){

    /* CYCLE JS */
    $('.bio-image').cycle({
        fx:         'fade',
        timeout:    200,
        speed:      200
    }).cycle("pause").hover(function() {
            $(this).cycle('resume');
       },
        function(){
            $(this).cycle('pause');
        });

    /* PARALAX SCROLLING */
    ( function( $ ) {
        //only initialize skrollr if it is not a mobile device (i found scrollr to be too sketchy on mobile to trust for reliability)
        if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)) {
            // Initialize Skrollr
            var s = skrollr.init({
                forceHeight: false,
                render: function(data) {
                    //Debugging - Log the current scroll position.
                    console.log(data.curTop);
                }
            });
        }
    } )( jQuery );
    $("#skrollr-body").css("height", "100%");
    /* ANIMATIONS ACCORDING TO ELEMENT POSITION FROM TOP */
//    if($('.about').scrollTop() < 600){
//        (function(event){
//
//            // Set the effect type
//            var effect = 'bounce';
//
//            // Set the options for the effect type chosen
//            var options = { direction: 'bottom' };
//
//            // Set the duration
//            var duration = 500;
//
//            // Execute the effect on desired element
//            $('.hide_template').toggle(effect, options, duration);
//        });
//    }
});
