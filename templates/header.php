<!--
File Name: Header
Author: Haden Hiles
Website: Haden - Personal Portfolio
File Description: this page is used to provide the navigation as well as cycling pictures of me and some biography text
-->
<header>
</header>
<div class="navbar navbar-inverse" id="navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" onclick="$('html, body').animate({scrollTop: $('body').offset().top}, 1000);"><img alt="" src="../images/logo/stamp-light-bevel.png" class="img-responsive large_logo" /><img alt="" src="../images/logo/stamp-small-bevel-light.png" class="img-responsive small_logo" /></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a onclick="$('html, body').animate({scrollTop: $('body').offset().top}, 1000);">Home</a></li>
                <li><a onclick="$('html, body').animate({scrollTop: $('#portfolio').offset().top - 80}, 1000);">Portfolio</a></li>
                <li><a onclick="$('html, body').animate({scrollTop: $('#about').offset().top - 80}, 1000);">About</a></li>
<!--                <li><a onclick="$('html, body').animate({scrollTop: $('#services').offset().top - 80}, 1000);">Services</a></li>-->
                <li><a href="http://everythingweb.moonrockfamily.ca">Blog</a></li>
                <li><a onclick="$('html, body').animate({scrollTop: $('#contact').offset().top - 80}, 1000);">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right icon-nav">
                <li><a onclick="$('html, body').animate({scrollTop: $('body').offset().top}, 1000);"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a onclick="$('html, body').animate({scrollTop: $('#portfolio').offset().top - 110}, 1000);"><span class="glyphicon glyphicon-folder-open"></span></a></li>
                <li><a onclick="$('html, body').animate({scrollTop: $('#about').offset().top - 80}, 1000);"><span class="glyphicon glyphicon-question-sign"></span></a></li>
<!--                <li><a onclick="$('html, body').animate({scrollTop: $('#services').offset().top - 80}, 1000);"><span class="glyphicon glyphicon-ok-sign"></span></a></li>-->
                <li><a href="http://everythingweb.moonrockfamily.ca"><i class="fa fa-wordpress"></i></a></li>
                <li><a onclick="$('html, body').animate({scrollTop: $('#contact').offset().top - 80}, 1000);"><span class="glyphicon glyphicon-envelope"></span></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="bio">
    <h3 class="welcome">Hi! My name is Haden<br />
    and I love the web!</h3>
    <div class="bio-image">
        <img alt="" src="../images/me/haden.jpg" class="img-responsive" />
        <img alt="" src="../images/me/crazy-me-small.jpg" class="img-responsive" />
        <img alt="" src="../images/me/golf.jpg" class="img-responsive" />
        <img alt="" src="../images/me/cartoon-me.png" class="img-responsive" />
        <img alt="" src="../images/me/k+h-family-day.jpg" class="img-responsive" />
        <img alt="" src="../images/me/me+bro.JPG" class="img-responsive" />
        <img alt="" src="../images/me/coldwater2.JPG" class="img-responsive" />
        <img alt="" src="../images/me/haden-guitar2.JPG" class="img-responsive" />
    </div>
</div>
<div class="intro-message">
    <div class="col-sm-12 col-md-10 col-lg-6">
        <p style="height: 150px; float: left;"></p>
<!--        <p>I'm trying to fill up the internet.. but lets hope that I don't.</p><br />-->
<!--        <p>My goal is to keep learning. Whether it be improving my skills in sports like hockey and golf, getting better-->
<!--        at guitar, or by pumping out websites week after week. I love building and designing websites because it gives me a rewarding-->
<!--        feeling as I do it. Web design and development is my tool for creativity and I believe that it is continually moving forward,-->
<!--        which is reason enough for me to invest my time in.</p>-->
    </div>
</div>
<div class="social-modal-button">
    <h3><a data-toggle="modal" data-target="#myModal" href="#myModal">C O N N E C T</a></h3>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Connect With Me</h4>
            </div>
            <div class="modal-body">
                <ul>
                    <li><a href="https://github.com/HadenHiles"><i class="fa fa-github-square"></i></a></li>
                    <li><a href="https://www.linkedin.com/pub/haden-hiles/82/108/676"><i class="fa fa-linkedin-square"></i></a></li>
                    <li><a href="https://twitter.com/HadenHiles1"><i class="fa fa-twitter-square"></i></a></li>
                    <!--<li><a href="https://www.facebook.com/haden.hiles"><i class="fa fa-facebook-square"></i></a></li>-->
                    <li><a href="https://plus.google.com/106821251778382631071/"><i class="fa fa-google-plus-square"></i></a></li>
                    <li><a href="http://www.pinterest.com/hadenhiles/"><i class="fa fa-pinterest-square"></i></a></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-top: 10px;">Close</button>
            </div>
        </div>
    </div>
</div>