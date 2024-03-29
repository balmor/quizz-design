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

    <div class="container">

        <header>
                <h1>Quizz Time</h1>
        </header>
        <section>

                <div class="wrapper-question">
                    SELECT YOURSELF
                </div>

                <div class="content">
                    <div class="choose-player">
                        <div data-number="" class="person normal active">
                            <div class="image"><img src="http://www.gravatar.com/avatar/<?php echo md5('maronmariusz@gmail.com') ?>?s=200" alt=""></div>
                        </div>
                        <div data-number="" class="person normal chosen">
                            <div class="image"><img src="http://www.gravatar.com/avatar/<?php echo md5('karol.gorecki@o2.pl') ?>?s=200" alt=""></div>
                        </div>
                         <div data-number="" class="person normal">
                            <div class="image"><img src="http://www.gravatar.com/avatar/<?php echo md5('dduda@nexway.com') ?>?s=200" alt=""></div>
                        </div>
                         <div data-number="" class="person normal">
                            <div class="image"><img src="http://www.gravatar.com/avatar/<?php echo md5('robakking@gmail.com') ?>?s=200" alt=""></div>
                        </div>
                        <div data-number="" class="person normal">
                            <div class="image"><img src="http://www.gravatar.com/avatar/<?php echo md5('alpherz@gmail.com') ?>?s=200" alt=""></div>
                        </div>
                        <div data-number="" class="person normal">
                            <div class="image"><img src="http://www.gravatar.com/avatar/<?php echo md5('chajr@bluetree.pl') ?>?s=200" alt=""></div>
                        </div>
                        <div data-number="" class="person normal">
                            <div class="image"><img src="http://www.gravatar.com/avatar/<?php echo md5('mtasak@o2.pl') ?>?s=200" alt=""></div>
                        </div>
                        <div data-number="" class="person normal">
                            <div class="image"><img src="http://www.gravatar.com/avatar/<?php echo md5('dawidpiotrowski@o2.pl') ?>?s=200" alt=""></div>
                        </div>
                        <div data-number="" class="person normal">
                            <div class="image"><img src="http://www.gravatar.com/avatar/<?php echo md5('llach@nexway.com') ?>?s=200" alt=""></div>
                        </div>
                        <div data-number="" class="person normal">
                            <div class="image"><img src="http://www.gravatar.com/avatar/<?php echo md5('gpawlik@nexway.com') ?>?s=200" alt=""></div>
                        </div>
                    </div>
                </div>
        </section>

    </div>

    <script src="//code.jquery.com/jquery.min.js" type="text/javascript"></script>
    <script src="//code.jquery.com/ui/1.9.0/jquery-ui.js" type="text/javascript"></script>



</body>
</html>