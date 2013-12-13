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

    <div class="container em-based">
        <div class="top-navbar">
            <a href="#" title="Full Screen on/off" id="fullscreen-button"><div class="monitor"><span class="hide">Full Screen on/off</span></div></a>
        </div>
        <section>

            <div class="question-container">
                <div class="question">
                    <span class="text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, id, ea, et deserunt numquam atque ullam rem explicabo sint quibusdam quasi libero tempora qui? Quaerat id odit earum nisi consectetur. Ipsam nesciunt laudantium blanditiis inventore! Dolorum, odit, tempore, sint, placeat porro fugit expedita voluptatibus tenetur deserunt nihil quae corrupti libero error impedit a quam officiis provident voluptatum inventore autem quos sunt repellat! Sequi, explicabo, corporis.
                    </span>
                </div>
            </div>

            <div class="timer-container">
                <div class="time-left"></div>
            </div>

            <div class="spacer-v-2"></div>

            <div class="content">
                <div class="wrapper-answers">
                    <ul class="answers">
                        <li class="blue incorrect">ANSWER</li>
                        <li class="orange incorrect">ANSWER</li>
                        <li class="green correct">ANSWER</li>
                        <li class="yellow incorrect">ANSWER</li>
                    </ul>
                </div>
                <div class="wrapper-players">
                    <ul class="players">
                        <li class="player">
                            <div class="status">
                                <div class="checked"><span></span></div>
                            </div>
                            <div class="info-player">
                                <div class="name">balmor</div>
                                <div class="points">11000</div>
                            </div>
                            <div class="avatar">
                                <div class="image"><img src="http://www.gravatar.com/avatar/<?php echo md5('dduda@nexway.com') ?>?s=100" alt=""></div>
                            </div>
                        </li>
                        <li class="player">
                            <div class="status selected green correct">
                                <div class="checked"><span></span></div>
                            </div>
                            <div class="info-player">
                                <div class="name">mariusz</div>
                                <div class="points">9200</div>
                            </div>
                            <div class="avatar">
                                <div class="image"><img src="http://www.gravatar.com/avatar/<?php echo md5('maronmariusz@gmail.com') ?>?s=100" alt=""></div>
                            </div>                                
                        </li>
                        <li class="player">
                            <div class="status selected blue incorrect">
                                <div class="checked"><span></span></div>
                            </div>
                            <div class="info-player">
                                <div class="name">karol</div>
                                <div class="points">7000</div>
                            </div>
                            <div class="avatar">
                                <div class="image"><img src="http://www.gravatar.com/avatar/<?php echo md5('kgorecki@nexway.com') ?>?s=100" alt=""></div>
                            </div>                                
                        </li>
                        <li class="player">
                            <div class="status selected">
                                <div class="checked"><span></span></div>
                            </div>
                            <div class="info-player">
                                <div class="name">michal</div>
                                <div class="points">6300</div>
                            </div>
                            <div class="avatar">
                                <div class="image"><img src="http://www.gravatar.com/avatar/<?php echo md5('chajr@bluetree.pl') ?>?s=100" alt=""></div>
                            </div>                                
                        </li>                 
                    </ul>
                </div>
            </div>

        </section>

    </div>

    <script src="//code.jquery.com/jquery.min.js" type="text/javascript"></script>
    <script src="//code.jquery.com/ui/1.9.0/jquery-ui.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>

</body>
</html>