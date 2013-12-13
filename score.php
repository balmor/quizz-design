<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nexway Quizz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nexway Quizz">
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

    <ul id="verdade">
        <li class="photo"></li>
        <li class="photo"></li>
    </ul>

    <div class="container em-based">
        <div class="top-navbar">
            <a href="#" title="Full Screen on/off" id="fullscreen-button"><div class="monitor"><span class="hide">Full Screen on/off</span></div></a>
        </div>
        <section>

        <h2 class="complate">QUIZZ COMPLATE! <span class="try">Try again</span></h2>

        <table class="table table-bordered score">
            <tr class="player first">
                <td class="avatar">
                    <div class="image">
                        <img src="http://www.gravatar.com/avatar/<?php echo md5('dduda@nexway.com') ?>?s=80" alt="">
                        <div class="shadow"></div>
                    </div>
                </td>                  
                <td class="name">balmor</td>
                <td class="points">11000</td>
                <td class="result"><span>1<em>st</em></span></td>                            
            </tr>
            <tr class="player second">
                <td class="avatar">
                    <div class="image">
                        <img src="http://www.gravatar.com/avatar/<?php echo md5('maronmariusz@gmail.com') ?>?s=80" alt="">
                        <div class="shadow"></div>
                    </div>
                </td>                  
                <td class="name">mariusz</td>
                <td class="points">9200</td>
                <td class="result"><span>2<em>nd</em></span></td>                            
            </tr>   
            <tr class="player third">
                <td class="avatar">
                    <div class="image">
                        <img src="http://www.gravatar.com/avatar/<?php echo md5('kgorecki@nexway.com') ?>?s=80" alt="">
                        <div class="shadow"></div>
                    </div>
                </td>                  
                <td class="name">karol</td>
                <td class="points">7000</td>
                <td class="result"><span>3<em>rd</em></span></td>                            
            </tr>
            <tr class="player fourth">
                <td class="avatar">
                    <div class="image">
                        <img src="http://www.gravatar.com/avatar/<?php echo md5('chajr@bluetree.pl') ?>?s=80" alt="">
                        <div class="shadow"></div>
                    </div>
                </td>                  
                <td class="name">michal</td>
                <td class="points">6300</td>
                <td class="result"><span>4<em>th</em></span></td>                            
            </tr>                                  
        </table>


        </section>

    </div>

    <script src="//code.jquery.com/jquery.min.js" type="text/javascript"></script>
    <script src="//code.jquery.com/ui/1.9.0/jquery-ui.js" type="text/javascript"></script>

    <script src="js/custom.js" type="text/javascript"></script>

</body>
</html>