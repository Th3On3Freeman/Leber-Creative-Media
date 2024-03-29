<!--Leber Creative Media - HOME
    Author: Michael A. Leber
    Date: 10/28/16 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Leber Creative Media</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
        
        <meta property="og:site_name" content="Leber Creative Media"/>
        <meta property="og:title" content="Leber Creative Media"/>
        <meta property="og:description" name="description" content="Web Developer - Video Editor - Film - Videography - Music Videos - Pop Spectrum" />
        <meta property="og:image" content="/images/home/thumbnail.jpg">
        <meta property="og:image:height" content="451">
        <meta property="og:image:width" content="800">
        <meta property="og:url" content="/">
        <meta property="og:type" content="portfolio"/>
        <meta property="fb:app_id" content="APPID"/>
        <link rel="image_src" href="/images/home/thumbnail.PNG" />

        <?php
        
            //Styles
            //require_once ("http://".$_SERVER["SERVER_NAME"]."/styles/styles.php");
            require_once ($_SERVER['DOCUMENT_ROOT']."/styles/styles.php");
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
                        <div class="intro-text">
                            <h1 class="name">Leber Creative Media</h1>
                            <hr class="star-light">
                            <span class="skills">Video Editor - Web Developer</span>
                        </div>
                    </div>
                </div>
                    <br>
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="//player.vimeo.com/video/106132665?quality=720p"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                    <br>
                <div class="row">
                    <div class="col-lg-12">
                        
                        <!--Linkedin-->
                        <a class="btn btn-social-icon btn-lg btn-linkedin" target="_blank" href="https://www.linkedin.com/in/michael-leber-87b219b8/">
                            <span class="fa fa-linkedin"></span>
                        </a>
                        
                        <!--Github-->
                        <a class="btn btn-social-icon btn-lg btn-github" target="_blank" href="https://github.com/Th3On3Freeman/Leber-Creative-Media">
                            <span class="fa fa-github"></span>
                        </a>
                        
                        <!--IMDB-->
                        <div class="imdb">
                            <a class="btn btn-social-icon btn-lg" target="_blank" href="http://www.imdb.com/name/nm5290723/?ref_=fn_al_nm_2" style="background: url(/images/icons/imdb.png) no-repeat 0 0;">
                            </a>
                        </div>
                        
                        <!--Vimeo-->
                        <a class="btn btn-social-icon btn-lg btn-vimeo" target="_blank" href="https://vimeo.com/leber">
                            <span class="fa fa-vimeo"></span>
                        </a>
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
                        <a href="/film/feature-films.php" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/feature-films.jpg" class="img-responsive" alt="Feature Films with an actor from &quot;The Tailor's Apprentice&quot; in a subway station">
                        </a>
                    </div>
                    <div class="col-sm-6 portfolio-item">
                        <a href="/film/short-films.php" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/short-films.jpg" class="img-responsive" alt="Short Films with actors from 'The Book & The Black Dove' sitting at a table">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 portfolio-item">
                        <a href="/film/trailers.php" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/trailers.jpg" class="img-responsive" alt="Trailers with a woman walking down a sidewalk at night">
                        </a>
                    </div>
                    <div class="col-sm-6 portfolio-item">
                        <a href="/film/demo-reels.php" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/demo-reels.jpg" class="img-responsive" alt="Demo Reels with an actor from 'As Night Falls' being attacked by a zombie">
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
                        <a href="/videography/commercials.php" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/commercials.jpg" class="img-responsive" alt="Advertising with a backyard pool lit with a purple light at night">
                        </a>
                    </div>
                    <div class="col-sm-6 portfolio-item">
                        <a href="/videography/weddings.php" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/weddings.jpg" class="img-responsive" alt="A happy couple getting married on the beach">
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
                        <a href="/music-videos/amv.php" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/AMV.jpg" class="img-responsive" alt="Anime Music Videos with a mecha unit from 'Neon Genesis Evangelion' jumping off a cliff">
                        </a>
                    </div>
                    <div class="col-sm-6 portfolio-item">
                        <a href="/music-videos/live-action.php" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/live-action.jpg" class="img-responsive" alt="Live Action Music Videos with an actress from 'Person of Interest' on CBS holding a gun">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 portfolio-item">
                        <a href="/music-videos/lightning-bear-studios.php" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/lightning-bear-studios.jpg" class="img-responsive" alt="Lightning Bear Studios Music Videos with our studio logo of a bear surrounded by electrical imagery">
                        </a>
                    </div>
                   
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
                        <a href="/pop-spectrum/reviews.php" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/reviews.jpg" class="img-responsive" alt="Reviews with a pillar of body parts from 'Hannibal' on NBC in front of an approaching wave of water">
                        </a>
                    </div>
                    <div class="col-sm-6 portfolio-item">
                        <a href="#popSpectrumModal2" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/reactions.jpg" class="img-responsive" alt="Reactions with Robyn Barry-Cotter and Michael Leber sitting on a couch together">
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
                        <a href="http://dexterous-theshapeofthingstocome.blogspot.com/2013/12/my-20-favorite-shows-of-2013-ongoing.html" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/2013.jpg" class="img-responsive" alt="Best of TV List 2013 with an actor from 'Mad Men' on AMC looking towards the viewer incredulously">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="http://dexterous-theshapeofthingstocome.blogspot.com/2016/01/my-20-favorite-shows-of-2014.html" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/2014.jpg" class="img-responsive" alt="Best of TV List 2014 with actors from 'Rectify' on Sundance lying in bed together">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="http://dexterous-theshapeofthingstocome.blogspot.com/2016/03/my-20-favorite-shows-of-2015.html" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/2015.jpg" class="img-responsive" alt="Best of TV List 2015 with actors from 'The Leftovers' on HBO reaching for each other underwater">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 portfolio-item">
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="/blog/best-of-television/2016.php" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/2016.jpg" class="img-responsive" alt="Best of TV List 2016 with the two lead actors from 'The Americans' on FX looking at each other">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="/blog/best-of-television/2017.php" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/2017.jpg" class="img-responsive" alt="Best of TV List 2017 with the atom bomb exploding in 'Twin Peaks'">
                        </a>
                    </div>
                    <div class="col-sm-2 portfolio-item">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>Best of Film</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 portfolio-item">
                        <a href="/blog/best-of-film/21st-century.php" class="portfolio-link">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/images/home/21st-century.jpg" class="img-responsive" alt="Best Films list of the 21st century with ">
                        </a>
                    </div>
                </div>
                
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Contact Me</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Phone Number</label>
                                    <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Message</label>
                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg">Send</button>
                                </div>
                            </div>
                        </form>
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
            //require_once ("http://".$_SERVER["SERVER_NAME"]."/scripts/scripts.php");
            require_once ($_SERVER['DOCUMENT_ROOT']."/scripts/scripts.php");
        ?>
        
            <!--<p>A subsidiary of Leber Creative LLC</p>-->
            
            
            <!--footer with copywrite
            <footer role="contentinfo">
                <p><small>Copyright &copy; 2016 Michael Leber</small></p><br>
            </footer>-->
    </body>
    
    
    
</html>