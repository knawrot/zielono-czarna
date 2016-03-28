<!doctype html>
<html>

<head>
    <!-- meta section -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
    <!-- TODO: add desc here -->
    <meta name="author" content="Krzysztof Nawrot">

    <title>Zielono-Czarna.pl</title>


    <!-- LESS development compiling -->
<!--
    <link rel="stylesheet/less" type="text/css" href="less/styles.less" />
    <script type="text/javascript">
        /* Put Less in development mode */
        less = {};
        less.env = 'development';
    </script>
    <script src="less.min.js"></script>
-->


    <!-- site dependencies -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' type='text/css' href="http://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    
     <link rel="stylesheet" href="css/styles.css"> 
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
    <link href="css/video-js-customized.css" rel="stylesheet">


    <!-- scripts basis -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//vjs.zencdn.net/4.12/video.js"></script>

</head>

<body>
    <!-- header and stuff -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="img/logo2.png" class="logo" alt="Logo" />
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li <?php if(!empty($_GET[ 'page']) && strcmp(basename($_GET[ 'page']), "home")==0 ){?>class="active"
                        <?php } ?>><a href="#">Aktualności</a>
                    </li>
                    <li class="dropdown <?php if(!empty($_GET[ 'page']) && strcmp(basename($_GET['page']), " ? ") == 0){?>active<?php } ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Poznaj nas <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="?page=about">O nas</a>
                            </li>
                            <li><a href="#">Nasza tworczość</a>
                            </li>
                            <li><a href="?page=traditions">Nasze tradycje</a>
                            </li>
                            <li><a href="#">Osobistości</a>
                            </li>
                            <li><a href="#">Opowieści ze szlaku</a>
                            </li>
                        </ul>
                    </li>
                    <li <?php if(!empty($_GET[ 'page']) && strcmp(basename($_GET[ 'page']), "?")==0 ){?>class="active"
                        <?php } ?>><a href="#">Galeria</a>
                    </li>
                    <li <?php if(!empty($_GET[ 'page']) && strcmp(basename($_GET[ 'page']), "enrollment")==0 ){?>class="active"
                        <?php } ?>><a href="?page=enrollment">Zapisy</a>
                    </li>
                    <li <?php if(!empty($_GET[ 'page']) && strcmp(basename($_GET[ 'page']), "?")==0 ){?>class="active"
                        <?php } ?>><a href="blog.html">Blog</a>
                    </li>
                    <li <?php if(!empty($_GET[ 'page']) && strcmp(basename($_GET[ 'page']), "?")==0 ){?>class="active"
                        <?php } ?>><a href="?page=advices">Strefa pielgrzyma</a>
                    </li>
                    <li <?php if(!empty($_GET[ 'page']) && strcmp(basename($_GET[ 'page']), "contact")==0 ){?>class="active"
                        <?php } ?>><a href="?page=contact">Kontakt</a>
                    </li>
                    <!--                        <li><button type="button" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-log-in"></span> Zaloguj</button></li>-->
                </ul>
            </div>
        </div>
    </nav>



    <!--    <div id="main">-->
    <?php 
    if (!empty($_GET[ 'page'])) { 
        $page=basename($_GET[ 'page']); 
        if (file_exists($page . ".php") && strcmp($page, "index")) 
            include($page . ".php"); 
        else include( 'home.php'); 
    } 
    else { include( 'traditions.php'); } 
    ?>
    <!--    </div>-->



    <footer>
        <div class="container">
            <div class="row">
                <div class="panel panel-default col-sm-4">
                    <div class="panel-heading">
                        <h2 class="text-center">Kim jesteśmy?</h2>
                    </div>
                    <div class="panel-body">
                        <div>
                            <h5>Grupa Sosnowieckiej Pieszej Pielgrzymki na Jasną Gorę</h5>
                            <p>Jestesmy jedną z kilku grup Sosnowieckiej Pieszej Pielgrzymki na Jasną Gorę, ktora pielgrzymuje w terminie 8-13 sierpnia każdego roku. Mimo, iż wyruszamy z Będzina, lączymy ludzi z miast i powiatow sąsiadujących, takich jak Sosnowiec, Dąbrowa Gornicza, Czeladź, Slawkow, Wojkowice i inne. Nie ma znaczenia skąd pochodzisz - u nas zawsze jest dla Ciebie miejsce.</p>
                            <p><a href="#" class="pull-right"><span class="glyphicon glyphicon-question-sign"></span> Dowiedz się więcej</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default col-sm-4">
                    <div class="panel-heading">
                        <h2 class="text-center">Co o nas mówią?</h2>
                    </div>
                    <div class="panel-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/J-DhiYtQOxk"></iframe>
                        </div>
<!--                        <img src="img/grupowe_bledow.JPG" alt="" class="img-responsive">-->
                    </div>
                </div>
                <div class="panel panel-default col-sm-3">
                    <div class="panel-heading">
                        <h2 class="text-center">Gdzie nas znajdziesz?</h2>
                    </div>
                    <div class="panel-body">
                        <address>
                             <div class="contact-detail row">
<!--                                 <i class="fa fa-home fa-2x col-sm-1"></i>-->
                                <span class="fa-stack col-sm-1">
                                    <i class="fa fa-square fa-stack-2x"></i>
                                    <i class="fa fa-home fa-stack-1x fa-inverse"></i>
                                </span>
                                 <ul class="list-unstyled col-sm-11">
                                         <li>Parafia Świętej Trójcy</li>
                                         <li>ul. Plebańska 2</li>
                                         <li>42-500 Będzin</li>                      
                                 </ul>
                             </div>
                             <div class="contact-detail row">
                                 <i class="fa fa-phone-square fa-2x col-sm-1"></i>
                                 <ul class="list-unstyled col-sm-11">
                                         <li>(+48) 733 890 050</li>
                                 </ul>
                             </div>
                             <div class="contact-detail row">
                                 <i class="fa fa-envelope-square fa-2x col-sm-1"></i>
                                 <ul class="list-unstyled col-sm-11">
                                         <li>sekretariat@zielono-czarna.pl</li>
                                 </ul>
                             </div>
                            <div class="contact-detail row">
                                <i class="fa fa-facebook-square fa-2x col-sm-1"></i>
                                <ul class="list-unstyled col-sm-11">
                                         <li>facebook.com/Zielono-Czarna</li>
                                 </ul>
                            </div>
<!--
                            <div class="contact-detail row">
                                <i class="fa fa-youtube-square fa-2x col-sm-1"></i>
                                <ul class="list-unstyled col-sm-11">
                                         <li>youtube.com/Zielonoczarnapl</li>
                                 </ul>
                            </div>
                            <div class="contact-detail row">
                                <i class="fa fa-picture-o fa-2x col-sm-1"></i>
                                <ul class="list-unstyled col-sm-11">
                                         <li>picassa.com/Zielono-Czarna</li>
                                 </ul>
                            </div>
-->
                        </address>
                        <!--
                        <ul class="list-unstyled">
                            <li><a href="#">Aktualności</a></li>
                            <li><a href="#">Galeria</a></li>
                            <li><a href="#">Zapisy</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Kontakt</a></li>
                        </ul>
-->
                        <!--
                                              <h1>Przeszukaj stronę</h1>
                      <form class="form-inline pull-right" role="search">
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Szukaj...">
                          </div>
                          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>

                      </form>
-->
                    </div>


                </div>
            </div>
        </div>
        <div class="footer-ending row-fluid">
            <h6>&copy;2016 Zielono-Czarna.pl. Kopiowanie lub udostępnianie jakichkolwiek treści (w szczególności zdjęć i filmów) po uprzednim pozwoleniu ich właścicieli lub twórców.</h6>
        </div>
    </footer>


</body>

</html>