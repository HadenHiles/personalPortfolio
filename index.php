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
    <div class="social">
        <ul>
            <li><a href="https://github.com/HadenHiles"><i class="fa fa-github-square"></i></a></li>
            <li><a href="https://www.linkedin.com/pub/haden-hiles/82/108/676"><i class="fa fa-linkedin-square"></i></a></li>
            <li><a href="https://twitter.com/HadenHiles"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="https://www.facebook.com/haden.hiles"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="https://plus.google.com/106821251778382631071/"><i class="fa fa-google-plus-square"></i></a></li>
            <li><a href="http://www.pinterest.com/hadenhiles/"><i class="fa fa-pinterest-square"></i></a></li>
        </ul>
    </div>
    <?
        include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php');
        include($_SERVER['DOCUMENT_ROOT'].'/templates/portfolio.php');
        include($_SERVER['DOCUMENT_ROOT'].'/templates/about.php');
    ?>
</body>
</html>