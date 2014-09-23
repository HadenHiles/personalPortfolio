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
            <li><a href=""><i class="fa fa-github-square"></i></a></li>
            <li><a href=""><i class="fa fa-linkedin-square"></i></a></li>
            <li><a href=""><i class="fa fa-twitter-square"></i></a></li>
            <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
            <li><a href=""><i class="fa fa-google-plus-square"></i></a></li>
            <li><a href=""><i class="fa fa-pinterest-square"></i></a></li>
        </ul>
    </div>
    <?
        include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php');
        include($_SERVER['DOCUMENT_ROOT'].'/templates/portfolio.php');
        include($_SERVER['DOCUMENT_ROOT'].'/templates/about.php');
    ?>
</body>
</html>