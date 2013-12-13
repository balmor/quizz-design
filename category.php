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
                    SELECT CATEGORY
                </div>

                <div class="content">
                    <div class="choose-category">
                        <ul class="category-selector level0">
                            <li class="category">
                                <a href="#">Back-end</a>
                                <ul class="level1">
                                    <li class="subcategory">
                                        <a href="#">php</a>
                                        <a href="#">mysql</a>
                                        <a href="#">magento</a>
                                        <a href="#">javascript</a>
                                        <a href="#">frameworks</a>
                                        <a href="#">unit tests</a>
                                    </li>
                                </ul>
                                
                            </li>
                            <li class="category">
                                <a href="#">Front-end</a>
                                <ul class="level1">
                                    <li class="subcategory">
                                        <a href="#">html</a>
                                        <a href="#">css</a>
                                        <a href="#">magento</a>
                                        <a href="#">javascript</a>
                                        <a href="#">rwd</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
        </section>

    </div>

    <script src="//code.jquery.com/jquery.min.js" type="text/javascript"></script>
    <script src="//code.jquery.com/ui/1.9.0/jquery-ui.js" type="text/javascript"></script>
    <script>
    $(document).ready(function() {
        $('.category').on('click', function(e){
            e.preventDefault();
            $(this)
                .find('.level1')
                .toggleClass('show');
        });
    });
    </script>


</body>
</html>