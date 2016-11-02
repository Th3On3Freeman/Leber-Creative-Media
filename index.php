<!--Leber Creative Media
    Author: Michael A. Leber
    Date: 10/28/16 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Leber Creative Media</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Leber Creative Media</title>
        <meta property="og:site_name" content="Leber Creative Media"/>
        <meta property="og:title" content="Leber Creative Media"/>
        <meta property="og:description" name="description" content="Web Developer - Video Editor" />
        <meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/thumbnail.jpg">
        <meta property="og:image:height" content="1083">
        <meta property="og:image:width" content="1920">
        <meta property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/">
        <meta property="og:type" content="portfolio"/>
        <meta property="fb:app_id" content="APPID"/>
        <link rel="image_src" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/thumbnail.PNG" />



        <?php
        
            //Styles
            require_once ("http://".$_SERVER["SERVER_NAME"]."/styles/home_styles.php");
        ?>
    </head>
    
    <body id="page-top" class="index">
        
        <!--Navigation-->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#page-top">Leber Creative Media</a>
                </div>
    
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="#film">Film</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#videography">Videography</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#musicVideos">Music Videos</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#popSpectrum">Pop Spectrum</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#blog">Blog</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        
        <!--Header-->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="//player.vimeo.com/video/106132665"></iframe>
                        </div>
                        
                        <!--
                        <img class="img-responsive" src="img/profile.png" alt="">
                        -->
                        <div class="intro-text">
                            <span class="name">Leber Creative Media</span>
                            <hr class="star-light">
                            <span class="skills">Video Editor - Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!--Film-->
        <section id="film" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Film</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 portfolio-item">
                        <a href="#filmModal1" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/home/feature-films.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 portfolio-item">
                        <a href="#filmModal2" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/home/short-films.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 portfolio-item">
                        <a href="#filmModal3" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/home/trailers.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 portfolio-item">
                        <a href="#filmModal4" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/home/demo-reels.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!--Videography-->
        <section id="videography" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Videography</h2>
                        <hr class="star-light">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 portfolio-item">
                        <a href="#videographyModal1" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/home/weddings.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 portfolio-item">
                        <a href="#videographyModal2" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/home/commercials.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!--Music Videos-->
        <section id="musicVideos" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Music Videos</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 portfolio-item">
                        <a href="#musicVideosModal1" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/home/AMV.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 portfolio-item">
                        <a href="#musicVideosModal2" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/home/live-action.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                    <!--
                    <div class="col-sm-4 portfolio-item">
                        <a href="#musicVideosModal3" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="http://<?php //echo $_SERVER['SERVER_NAME']; ?>/images/filmedTEST.png" class="img-responsive" alt="">
                        </a>
                    </div>
                    -->
                </div>
            </div>
        </section>
        
        <!--Pop Spectrum-->
        <section id="popSpectrum" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Pop Spectrum</h2>
                        <hr class="star-light">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 portfolio-item">
                        <a href="#popSpectrumModal1" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/home/reviews.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 portfolio-item">
                        <a href="#popSpectrumModal2" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/home/reactions.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!--Blog-->
        <section id="blog" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Blog</h2>
                        <hr class="star-primary">
                        <h3>Best of Television</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 portfolio-item">
                        <a href="#blogModal1" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/home/2013.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="#blogModal2" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/home/2014.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="#blogModal3" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/home/2015.jpg" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
        <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
            <a class="btn btn-primary" href="#page-top">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
        
        <?php
            //Scripts
            require_once ("http://".$_SERVER["SERVER_NAME"]."/scripts/home_scripts.php");
        ?>
        
            <!--<p>A subsidiary of Leber Creative LLC</p>-->
            
            
            <!--footer with copywrite
            <footer role="contentinfo">
                <p><small>Copyright &copy; 2016 Michael Leber</small></p><br>
            </footer>-->
    </body>
    
    
    
</html>