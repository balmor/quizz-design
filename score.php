<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Quizz Time</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Quizz">
    <meta name="author" content="Damian Duda, Karol Górecki, Mariusz Maroń">

    <!-- Styles -->
    <link rel="stylesheet/less" type="text/css" href="less/main.less">

    <script>less = {}; less.env = 'development';</script>
    <script src="js/less-1.5.0.min.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link href='http://fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Basic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- Fav Icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body id="game-wrap">

    <div class="container em-based">
        <div class="top-navbar">
            <a href="#" title="Full Screen on/off" id="fullscreen-button"><div class="monitor"><span class="hide">Full Screen on/off</span></div></a>
        </div>
        <section>

        <h1 class="complate">GAME COMPLATE!</h1>

        <div class="score">
            <div class="player">
                <div class="avatar">
                    <div class="image"><img src="http://www.gravatar.com/avatar/<?php echo md5('dduda@nexway.com') ?>?s=100" alt=""></div>
                </div>                  
                <div class="info-player">
                    <div class="name">balmor</div>
                    <div class="points">11000</div>
                </div> 
                <div class="status">
                    <div class="result"><span>1<em>st</em></span></div>
                </div>                             
            </div>
        </div>


        </section>

    </div>

    <script src="//code.jquery.com/jquery.min.js" type="text/javascript"></script>
    <script src="//code.jquery.com/ui/1.9.0/jquery-ui.js" type="text/javascript"></script>

    <script src="js/custom.js" type="text/javascript"></script>

</body>
</html>