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
                    //Log the current scroll position for debugging.
                    //console.log(data.curTop);
                }
            });
        }
    } )( jQuery );

    /* MAKE THE NAVBAR STICK TO THE TOP OF THE SCREEN */
    //set up variables to improve performance/speed
    var $window = $(window);
    var $stickyElement = $('#navbar');
    var elementTop = $stickyElement.offset().top;

    //when the user scrolls to the correct point add/remove appropriate classes to the sticky element
    $window.scroll(function() {
        $stickyElement.toggleClass('sticky-nav', $window.scrollTop() > elementTop);
        $('.bio').toggleClass('new-margin', $window.scrollTop() > elementTop);
    });
});
