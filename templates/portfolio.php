<!--
File Name: portfolio
Author: Haden Hiles
Website: Haden - Personal Portfolio
File Description: this section will highlight some of the projects that I have completed over the past year or two
-->
<div class="portfolio" id="portfolio">
    <section id="slide-1" class="homeSlide">
        <div class="bcg"
            data-center="background-position: 50% 0px;"
            data-top-bottom="background-position: 50% -100px;"
            data-anchor-target="#slide-1"
        >
            <div class="hsContainer"
                data--240-bottom="opacity: 0"
                data-0-top="opacity: 1"
                data-anchor-target="#slide-1"
            >
                <h2>Portfolio</h2>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <a style="color: #fff;" onclick="$('html, body').animate({scrollTop: $('#sugarRush').offset().top - 90}, 1000);">
                                <img alt="Sugar Rush" src="/images/content/sugarRush.jpg" />
                                <div class="carousel-caption">
                                    <h3>Sugar Rush</h3>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a style="color: #fff;" onclick="$('html, body').animate({scrollTop: $('#arnott').offset().top - 90}, 1000);">
                                <img alt="Arnott Construction" src="/images/content/arnott-image.jpg" />
                                <div class="carousel-caption">
                                    <h3>Arnott Construction</h3>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a style="color: #fff;" onclick="$('html, body').animate({scrollTop: $('#baseballSlots').offset().top - 90}, 1000);">
                                <img alt="Baseball Slots" src="/images/content/baseballSlots.jpg" />
                                <div class="carousel-caption">
                                    <h3>Baseball Slots</h3>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a style="color: #fff;" onclick="$('html, body').animate({scrollTop: $('#hgame').offset().top - 90}, 1000);">
                                <img alt="HGame" src="/images/content/mygames-image.jpg" />
                                <div class="carousel-caption">
                                    <h3>HGame</h3>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a style="color: #fff;" onclick="$('html, body').animate({scrollTop: $('#everythingweb').offset().top -90}, 1000);">
                                <img alt="Everything Web" src="/images/content/everythingweb1.jpg">
                                <div class="carousel-caption">
                                    <h3>Everything Web</h3>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="portfolio_section">
    <section id="slide-5" class="homeSlide">
        <div class="hsContainer">
            <div class="hsContent">
                <div id="sugarRush" class="portfolio_sections">
                    <h3><a style="color: #fff" href="/sugarRush">Sugar Rush</a></h3>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a style="color: #fff" href="/sugarRush"><img alt="Sugar Rush" src="/images/content/sugarRush1.jpg" class="img-responsive" /></a>
                    </div>
                    <div class="col-sm-6 col-md-8 col-lg-8">
                        <p>
                            This funky looking game is one that I built for my advanced web class in college.  I used html5 canvas
                            and a framework suite called createjs to build it.  I generated my own sounds, found a soundtrack, and altered images
                            to make them my own for this game.  It was a great learning experience as there is a lot more involved with creating
                            html5 canvas javascript games than you may think. Feel free to check it out and show your friends by clicking the title
                            or image. It is actually pretty fun!
                        </p>
                    </div>
                </div>
            </div>
            <div class="hsContent">
                <div id="everythingweb" class="portfolio_sections">
                    <h3><a style="color: #fff" href="http://everythingweb.moonrockfamily.ca">Everything Web</a></h3>
                    <div class="col-sm-6 col-md-8 col-lg-8">
                        <p>
                            This website was my first Wordpress blog that I migrated to a new blogging/cms platform I am beginning to enjoy for it's simple management and developer flexibility. It's called PencilBlue and I am on board with everything they are doing.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a style="color: #fff" href="http://everythingweb.moonrockfamily.ca"><img alt="Everything Web" src="/images/content/everythingweb1.jpg" class="img-responsive" /></a>
                    </div>
                </div>
            </div>
            <div class="hsContent">
                <div id="arnott" class="portfolio_sections">
                    <h3><a style="color: #fff" href="http://arnottgroup.com">Arnott Construction</a></h3>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a style="color: #fff" href="http://arnottgroup.com"><img alt="Arnott Construction" src="/images/content/arnott1.jpg" class="img-responsive" /></a>
                    </div>
                    <div class="col-sm-6 col-md-8 col-lg-8">
                        <p>
                            This is a project that I completed over the course of a couple weeks for Arnott Construction Ltd.
                            In order to re-do their old website and make it look newer as well as organize their desired content I had
                            to meet with the President and CEO to discuss what their needs and desires were. Although this project was
                            meant to be a simple revamp of the old site, it turned out to be a great learning experience for making website design
                            and layout decisions, as well as some content organization using javascript with help from my dad. On the tech side I
                            used some simple javascript to create a "sticky" navigation as well as CSS media queries to make the website look good
                            on all screen sizes. As a result of my hard work, the President and CEO of Arnott Construction are very happy with
                            the end result of their new website, and I am proud to have recieved that recognition from them.
                        </p>
                    </div>
                </div>
            </div>
            <div class="hsContent">
                <div id="hgame" class="portfolio_sections">
                    <h3><a style="color: #fff" href="http://mygames.moonrockfamily.ca">MyGames</a></h3>
                    <div class="col-sm-6 col-md-8 col-lg-8">
                        <p>
                            This was a project I worked on for my own enjoyment and as a learning experience. I like to believe that one day someone will find it as useful and awesome as I feel it is.
                            This website is basically a flash game website where you can create an account and control what flash games you want to play. You can favourite existing flash games on the site, or add your own by simply providing the original game page url, a title, and an optional image.
                            The site has admin management features as well as some cool game playing experience enhancements. It is not responsive like most of my work on the web, but that is on purpose because you can't really play flash games on mobile devices.
                            Creating the feature to "find your game" within any url was by far the most challenging.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a style="color: #fff" href="http://mygames.moonrockfamily.ca"><img alt="MyGames" src="/images/content/mygames-image.jpg" class="img-responsive" /></a>
                    </div>
                </div>
            </div>
            <div class="hsContent">
                <div id="baseballSlots" class="portfolio_sections">
                    <h3><a style="color: #fff" href="/baseballSlots">Baseball Slots</a></h3>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a style="color: #fff" href="/baseballSlots"><img alt="Baseball Slots" src="/images/content/baseballSlots1.jpg" class="img-responsive" /></a>
                    </div>
                    <div class="col-sm-6 col-md-8 col-lg-8">
                        <p>
                            This game is the first game that I built for my advanced web class in my 3rd term of college.
                            It is a neat twist on your usual slot machine, it combines the game of baseball with the odds
                            of a slot machine, which when you think about it, doesn't make that much sense... But hey, I
                            think I pieced it together quite nicely! Check it out by clicking the title or image and let me
                            know what you think!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>