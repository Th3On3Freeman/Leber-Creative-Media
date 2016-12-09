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
        <meta property="og:title" content="Trailers"/>
        <meta property="og:description" name="description" content="Leber Creative Media" />
        <meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Film/trailers/thumbnail.jpg">
        <meta property="og:image:height" content="451">
        <meta property="og:image:width" content="800">
        <meta property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/feature-films.php">
        <meta property="og:type" content="portfolio"/>
        <meta property="fb:app_id" content="APPID"/>
        <link rel="image_src" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Film/trailers/thumbnail.PNG" />

        <?php
            //Styles
            require_once ($_SERVER["DOCUMENT_ROOT"]."/styles/styles.php");
        ?>
        
        <!--Hover Dropdown CSS-->
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/styles/hoverDropdown.css" rel="stylesheet">
        
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/styles/hoverDropdownModified.css" rel="stylesheet">
        
    </head>
    
    <body id="page-top" class="index">
        
        <?php
            //Mobile Test
            require_once ($_SERVER["DOCUMENT_ROOT"]."/includes/Mobile_Test/mobileTest.php");
        
            //Navigation (Film)
            require_once ($_SERVER["DOCUMENT_ROOT"]."/nav/filmNav.php");
        ?>
            
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="intro-text">
                                <span class="name">Trailers</span>
                                <hr class="star-light">
                            </div>         
                            
                            <div class="pillContainer">
                                <ul class="nav nav-pills center-pills">
                                    <li class="active"><a data-toggle="pill" href="#intro" class="btn btn-default pillTabs">About</a></li>
                                    <li><a data-toggle="pill" href="#miamiPromoTeaser" class="btn btn-default pillTabs">MIA-mi Promo Teaser</a></li>
                                    <li><a data-toggle="pill" href="#miamiTeaserTrailer" class="btn btn-default pillTabs">MIA-mi Teaser Trailer</a></li>
                                </ul>
                            </div>
                                <br>
                            <div class="tab-content">
                                <div id="intro" class="tab-pane fade in active">
                                    <h2>About</h2>
                                    <hr class="star-light">
                                    <p>Throughout my time working as an assistant editor on MIA-mi, I was given the opportunity to edit multiple trailers for the film. These were a rewarding experience that gave me the opportunity to experiment and build new skills.</p>
                                </div>
                                <div id="miamiPromoTeaser" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe src="//player.vimeo.com/video/96714779"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>MIA-mi Promo Teaser (2015)</h2>
                                            <hr class="star-light">
                                            <span class="skills">Credit: Editor</span>
                                            
                                            <p class="mediaDesc">When I first began working on MIA-mi, our director <i>Yesenia Lima</i> gave me a chance to prove myself by having me edit a short teaser promotional video for her film. This was made in order to give an idea of the character of the city of Miami.</p>
                                        </div>
                                    </div>
                                        <br>
                                    
                                    <?php
                                        //MIA-mi Social Links
                                        require_once ($_SERVER["DOCUMENT_ROOT"]."/social-links/miami.php");
                                    ?>
                                    
                                </div>
                                <div id="miamiTeaserTrailer" class="tab-pane fade">
                                    
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
                                            <h2>MIA-mi Teaser Trailer (2015)</h2>
                                            <hr class="star-light">
                                            <span class="skills">Credit: Editor</span>
                                            
                                            <p class="mediaDesc">While working on an Assembly Cut of the film MIA-mi, I was given the opportunity to edit a proper teaser trailer for the film. I went through various iterations of this trailer, both incorporating footage from the short film that was made before the film, and the film itself. It was interesting to have to look at the film as a whole and try to pick out key moments to both draw the audience in, and at the same time making sure to give moments to each of the primary characters.</p>
                                        </div>
                                    </div>
                                        <br>
                                    <?php
                                        //MIA-mi Social Links
                                        require_once ($_SERVER["DOCUMENT_ROOT"]."/social-links/miami.php");
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

        <?php
            //Scripts
            require_once ($_SERVER["DOCUMENT_ROOT"]."/scripts/scripts.php");
        ?>
        <script>
            //Highlight nav row
            $("#tRow").addClass("selectedRow");
        </script>
        
        
    </body>
    
</html>