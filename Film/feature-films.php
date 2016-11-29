<!--Leber Creative Media - FEATURE FILMS
    Author: Michael A. Leber
    Date: 11/4/16 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Leber Creative Media</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Leber Creative Media</title>
        <meta property="og:site_name" content="Leber Creative Media"/>
        <meta property="og:title" content="Feature Films"/>
        <meta property="og:description" name="description" content="Leber Creative Media" />
        <meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Film/feature-films/thumbnail.jpg">
        <meta property="og:image:height" content="451">
        <meta property="og:image:width" content="800">
        <meta property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/feature-films.php">
        <meta property="og:type" content="portfolio"/>
        <meta property="fb:app_id" content="APPID"/>
        <link rel="image_src" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Film/feature-films/thumbnail.PNG" />

        <?php
            //Styles
            require_once ("http://".$_SERVER["SERVER_NAME"]."/styles/styles.php");
        ?>
        
        <!--Hover Dropdown CSS-->
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/styles/hoverDropdown.css" rel="stylesheet">
        
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/styles/hoverDropdownModified.css" rel="stylesheet">
        
    </head>
    
    <body id="page-top" class="index">
        
        <?php
            //Config File
            require_once ("http://".$_SERVER["SERVER_NAME"]."/config.php");
        
            //Navigation Bar
            require_once ("http://".$_SERVER["SERVER_NAME"]."/nav/filmNav.php");
        ?>
            
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="intro-text">
                                <span class="name">Feature Films</span>
                                <hr class="star-light">
                            </div>         
                            
                            <div class="pillContainer">
                                <ul class="nav nav-pills">
                                    <li class="active"><a data-toggle="pill" href="#intro" class="btn btn-default">Intro</a></li>
                                    <li><a data-toggle="pill" href="#tta" class="btn btn-default">The Tailor's Apprentice</a></li>
                                    <li><a data-toggle="pill" href="#miami" class="btn btn-default">MIA-mi</a></li>
                                </ul>
                            </div>
                                <br>
                            <div class="tab-content">
                                <div id="intro" class="tab-pane fade in active">
                                    <h2>Introduction</h2>
                                    <hr class="star-light">
                                    <p>During my time as a student at the University of Central Florida (UCF), I had the pleasure of working with the UCF Film community on two feature films. Both were directed by graduate students working on their Masters of Fine Arts (MFA) degrees. Currently these are the two largest projects I have worked on yet.</p>
                                </div>
                                <div id="tta" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe src="//player.vimeo.com/video/76286456"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>The Tailor's Apprentice</h2>
                                            <hr class="star-light">
                                            <span class="skills">Credit: Editor - Casting Assistant</span>
                                            
                                            <p class="mediaDesc">I began my time working on this film as a <b>Casting Assistant</b> while I was in college. I would sit in front of the audition room and tell people when they could go in. Sometimes I would even get to sit in during the auditions, and watch the actors prove themselves to our director <i>Jeff Lehman</i>. After working on several short films I was interviewed for the opportunity to become an <b>Assistant Editor</b> on the film. After filming was completed, I met with Jeff and was asked to edit a scene of the film. After seeing what I could do, he promoted me to an <b>Editor</b> position and I edited the first three cuts of the entire film.</p>
                                        </div>
                                    </div>
                                        <br>
                                    <p>Follow The Tailor's Apprentice on these media platforms:</p>
                                    
                                    <!--Official Website-->
                                    <div class="www">
                                        <a class="btn btn-social-icon btn-lg" target="_blank" href="http://www.tailorsapprentice.com/" style="background: url(http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/icons/www.png) no-repeat 0 0;">
                                        </a>
                                    </div>
                                    
                                    <!--Facebook-->
                                    <a class="btn btn-social-icon btn-lg btn-facebook" target="_blank" href="https://www.facebook.com/TailorsApprentice/?fref=ts">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                    
                                    <!--IMDB-->
                                    <div class="imdb">
                                        <a class="btn btn-social-icon btn-lg" target="_blank" href="http://www.imdb.com/title/tt2195998/?ref_=fn_al_tt_1" style="background: url(http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/icons/imdb.png) no-repeat 0 0;">
                                        </a>
                                    </div>
                                    
                                    
                                    <!--LinkedIn-->
                                    <a class="btn btn-social-icon btn-lg btn-linkedin" target="_blank" href="https://www.linkedin.com/company/10660400?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10660400%2Cidx%3A2-1-2%2CtarId%3A1478818329383%2Ctas%3ABespoke%20Pictures">
                                        <span class="fa fa-linkedin"></span>
                                    </a>
                                    
                                    <!--Vimeo-->
                                    <a class="btn btn-social-icon btn-lg btn-vimeo" target="_blank" href="https://vimeo.com/jefflehman">
                                        <span class="fa fa-vimeo"></span>
                                    </a>
                                    
                                    
                                </div>
                                <div id="miami" class="tab-pane fade">
                                    
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe src="//player.vimeo.com/video/119817822"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2>MIA-mi</h2>
                                            <hr class="star-light">
                                            <span class="skills">Credit: Assistant Editor</span>
                                            
                                            <p class="mediaDesc">I met <i>Yesenia Lima</i> at a Film Meet & Greet event at the University of Central Florida and learned about her passion for making this film. Afterwards, we got in contact and since she already had an Editor (<i>Tricia Connelly</i>) I was offered the <b>Assistant Editor position</b> for the film. During the course of my time working on the film, I performed all <b>Digital Asset Management</b> duties for the project, edited multiple <b>Teaser Trailers</b> and a finished <b>Assembly Cut</b> for the film that had portions worked into the final product.</p>
                                        </div>
                                    </div>
                                        <br>
                                    <p>Follow MIA-mi on these media platforms:</p>
                                    
                                    <!--Official Website-->
                                    <div class="www">
                                        <a class="btn btn-social-icon btn-lg" target="_blank" href="http://www.mia-mi.com/" style="background: url(http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/icons/www.png) no-repeat 0 0;">
                                        </a>
                                    </div>
                                    
                                    
                                    
                                    <!--Facebook-->
                                    <a class="btn btn-social-icon btn-lg btn-facebook" target="_blank" href="https://www.facebook.com/MiAmiMovie/?fref=ts">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                    
                                    <!--Google Plus-->
                                    <a class="btn btn-social-icon btn-lg btn-google" target="_blank" href="https://plus.google.com/113900561514350471636">
                                        <span class="fa fa-google"></span>
                                    </a>
                                    
                                    <!--IMDB-->
                                    <div class="imdb">
                                        <a class="btn btn-social-icon btn-lg" target="_blank" href="http://www.imdb.com/title/tt3512652/?ref_=nm_knf_t2" style="background: url(http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/icons/imdb.png) no-repeat 0 0;">
                                        </a>
                                    </div>
                                    
                                    <!--Tumblr-->
                                    <a class="btn btn-social-icon btn-lg btn-tumblr" target="_blank" href="http://miamimovie.tumblr.com/">
                                        <span class="fa fa-tumblr"></span>
                                    </a>

                                    <!--Twitter-->
                                    <a class="btn btn-social-icon btn-lg btn-twitter" target="_blank" href="https://twitter.com/MIAmiMovie">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                    
                                    <!--Vimeo-->
                                    <a class="btn btn-social-icon btn-lg btn-vimeo" target="_blank" href="https://vimeo.com/miamimovie">
                                        <span class="fa fa-vimeo"></span>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

        <?php
            //Scripts
            require_once ("http://".$_SERVER["SERVER_NAME"]."/scripts/scripts.php");
        ?>
        
    </body>
    
</html>