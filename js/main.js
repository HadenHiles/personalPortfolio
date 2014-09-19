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

});
