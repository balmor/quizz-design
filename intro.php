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
    <link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
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
        <section class="intro">
            <div class="intro-text">
                <span>N</span>
                <span>e</span>
                <span>x</span>
                <span>w</span>
                <span>a</span>
                <span>y</span>
                <span>&nbsp;</span>
                <span>Q</span>
                <span>u</span>
                <span>i</span>
                <span>z</span>

            </div>
            <div class="spacer-v-3"></div>
            <div class="spacer-v-3"></div>
            <div class="spacer-v-3"></div>
            <h3>press a key</h3>
        </section>

    </div>

    <audio autoplay="true" src="https://dl.dropboxusercontent.com/u/41442178/nyancat.ogg" loop="loop">
        <script>
            document.getElementsByTagName('audio')[0].addEventListener('ended', function(){
                this.currentTime = 0;
            }, false);
    </script>

    </audio>
    <script src="//code.jquery.com/jquery.min.js" type="text/javascript"></script>
    <script src="//code.jquery.com/ui/1.9.0/jquery-ui.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>

    <script>
        // =================================================================
        //     Nexway Lab anim
        // =================================================================

        $(function(){
            console.log("xxx");
                
                setTimeout(function(){
                    $(".intro-text span").each(function(i,e){

                        var timeout = i * 300;
                        $(e).css({
                            "-moz-animation-delay": timeout+"ms",
                            "-webkit-animation-delay": timeout+"ms",
                        }).addClass("up");
                    });
                }, 1000);
            
        });

    </script>


</body>
</html>