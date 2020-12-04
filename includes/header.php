<?php
require_once('common.php');
?>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="includes/style/slick.css"/>
    <link rel="stylesheet" type="text/css" href="includes/style/slick-theme.css"/>
    <link rel="stylesheet" href="includes/style/style.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <title>The Artisans of Christmas</title>
</head>

<body>
    <header>
        <div style="float: right;position: relative;top: 168px;">
            <button class="chooselanguage" data-lang="en">EN</button>
            <button class="chooselanguage" data-lang="fr">FR</button>
        </div>
        <div class="container-fluid colorGrey">
            <div class="row">
                <div class="col-sm offset-sm-11" style="padding-right: 0px;">
                    <span><img src="./includes/images/person-outline.svg" height="15px" width="15px"/>Log in</span> / 
                    <span><img src="./includes/images/shopping-cart-outline.png"height="15px" width="15px"/>Cart</span>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12 center">
                    <img src="./includes/images/header.png" height="150">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12 center">

                </div>
            </div>
            <br>
            <div class="row colorRed">
                <div class="col-sm-10 offset-sm-1">
                    <ul class="nav nav-fill colorRed nav_red tWhite">
                        <?php
                            foreach($page[(isset($_GET['lang']) ? $_GET['lang'] : 'EN' )] as $p){
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo $p['path'] .'?lang='. (isset($_GET['lang']) ? $_GET['lang'] : 'EN' );?>"><?php echo $p['title']; ?></a>
                                </li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>