<!DOCTYPE html>
<html>
<head>
    <title>Haden Hiles | Portfolio</title>
    <?
        require_once($_SERVER['DOCUMENT_ROOT'].'/includes/css-icons-metatags.php');
        require_once($_SERVER['DOCUMENT_ROOT'].'/includes/support_files.php');
    ?>
</head>
<body>
    <?
        require_once($_SERVER['DOCUMENT_ROOT'].'/templates/header.php');
        require_once($_SERVER['DOCUMENT_ROOT'].'/templates/bio.php');
        require_once($_SERVER['DOCUMENT_ROOT'].'/templates/carousel.php');
    ?>
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
          <img src="http://placehold.it/1200x315" alt="...">
          <div class="carousel-caption">
              <h3>Caption Text</h3>
          </div>
        </div>
        <div class="item">
          <img src="http://placehold.it/1200x315" alt="...">
          <div class="carousel-caption">
              <h3>Caption Text</h3>
          </div>
        </div>
        <div class="item">
          <img src="http://placehold.it/1200x315" alt="...">
          <div class="carousel-caption">
              <h3>Caption Text</h3>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div> <!-- Carousel -->
</body>
</html>