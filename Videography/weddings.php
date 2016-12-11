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
        <meta property="og:title" content="Weddings"/>
        <meta property="og:description" name="description" content="Leber Creative Media" />
        <meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Videography/weddings/thumbnail.jpg">
        <meta property="og:image:height" content="451">
        <meta property="og:image:width" content="800">
        <meta property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Videography/weddings.php">
        <meta property="og:type" content="portfolio"/>
        <meta property="fb:app_id" content="APPID"/>
        <link rel="image_src" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Videography/weddings/thumbnail.PNG" />

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
            require_once ($_SERVER["DOCUMENT_ROOT"]."/nav/videographyNav.php");
        ?>
            
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="intro-text">
                                <span class="name">Weddings</span>
                                <hr class="star-light">
                            </div>         
                            
                            <div class="pillContainer">
                                <ul class="nav nav-pills center-pills">
                                    <li class="active"><a data-toggle="pill" href="#intro" class="btn btn-default pillTabs">About</a></li>
                                    <li><a data-toggle="pill" href="#pl" class="btn btn-default pillTabs">Phil & Laurel</a></li>
                                    <li><a data-toggle="pill" href="#jg" class="btn btn-default pillTabs">John & Gretchen</a></li>
                                </ul>
                            </div>
                                <br>
                            <div class="tab-content">
                                <div id="intro" class="tab-pane fade in active">
                                    <h2>About</h2>
                                    <hr class="star-light">
                                    <p>After I acquired a Canon 7D camera and began experimenting with not only editing video, but filming it as well, it was suggested to me that I could film weddings to gain experience. These are the couples that have given me the privilege of working with them in order to preserve the happiest moment of their lives.</p>
                                </div>
                                <div id="pl" class="tab-pane fade">
                                    
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe src="//player.vimeo.com/video/195050184?quality=720p"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2>Phil and Laurel (2014)</h2>
                                            <hr class="star-light">
                                            <span class="skills">Credit: Videographer - Editor</span>
                                            
                                            <p class="mediaDesc">I've grown to know my Uncle over the past decade as a funny, kind-hearted and constantly entertaining member of the family, so when I was asked to be the videographer for their wedding, I was more than happy to have the opportunity. Filming outside on the beach was an interesting challenge; we used my <b>Canon 7D</b> for one of the angles, and a <b>Canon Vixia HF R400</b> for the other. Besides the wedding itself, I also filmed speeches from the Maid of Honor and the Best Man, as well as guitar playing and singing from Phil and Laurel during the reception, the moment when the cake was cut and their first dance. I compiled all of this on a Bluray disc for the couple, with some other features, including an edited video of the moment Phil proposed to Laurel, featured below.</p>
                                        </div>
                                    </div>
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="proposalVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        
                                </div>
                                <div id="jg" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <iframe src="//player.vimeo.com/video/194995594"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>John and Gretchen (2014)</h2>
                                            <hr class="star-light">
                                            <span class="skills">Credit: Videographer - Editor</span>
                                            
                                            <p class="mediaDesc">When John first approached me to film their wedding, I was intimidated. I had never filmed anything of significance before this, and this was something they were going to want to be able to watch for the rest of their lives. I decided to take on this challenge, and in order to acquire multiple camera angles, it was decided that I should use multiple cameras to film. One of these was my <b>Canon 7D</b>, while the other one was a <b>Sony Handycam</b>. Since the Sony camera could only record in <b>Standard Definition (SD)</b>, it was decided between the clients and I that I should film with both cameras at SD settings in order to avoid a drastic jarring difference in quality. In addition to the actual wedding ceremony, I also filmed <b>Private Testimonials</b> at the reception, and created <b>Blurays</b> and <b>DVDs</b> for the client that contained photo slideshows as well.</p>
                                        </div>
                                    </div>
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
            $("#ffRow").addClass("selectedRow");
        </script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/scripts/Videography/weddings/youtubeEmbed.js?d=<?php echo time(); ?>"></script>
        
    </body>
    
</html>