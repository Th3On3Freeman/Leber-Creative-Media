<!--Leber Creative Media - SHORT FILMS
    Author: Michael A. Leber
    Date: 11/16/16 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Leber Creative Media</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Leber Creative Media</title>
        <meta property="og:site_name" content="Leber Creative Media"/>
        <meta property="og:title" content="Short Films"/>
        <meta property="og:description" name="description" content="Leber Creative Media" />
        <meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Film/short-films/thumbnail.jpg">
        <meta property="og:image:height" content="450">
        <meta property="og:image:width" content="800">
        <meta property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/short-films.php">
        <meta property="og:type" content="portfolio"/>
        <meta property="fb:app_id" content="APPID"/>
        <link rel="image_src" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Film/short-films/thumbnail.PNG" />

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
            require_once ("http://".$_SERVER["SERVER_NAME"]."/includes/Mobile_Test/mobileTest.php");
            //Navigation (Film)
            require_once ($_SERVER["DOCUMENT_ROOT"]."/nav/filmNav.php");
        ?>
            
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="intro-text">
                                <span class="name">Short Films</span>
                                <hr class="star-light">
                            </div>         
                            
                            <div class="pillContainer">
                                <ul class="nav nav-pills center-pills">
                                    <li class="active"><a data-toggle="pill" href="#intro" class="btn btn-default pillTabs">About</a></li>
                                    <li><a data-toggle="pill" href="#brotherConflict" class="btn btn-default pillTabs">A Brother's Conflict</a></li>
                                    <li><a data-toggle="pill" href="#blackDove" class="btn btn-default pillTabs">The Book & The Black Dove</a></li>
                                </ul>
                            </div>
                                <br>
                            <div class="tab-content">
                                <div id="intro" class="tab-pane fade in active">
                                    <h2>About</h2>
                                    <hr class="star-light">
                                    <p>When I first got involved with the Film department at the University of Central Florida, I attended a Meet and Greet event where people could meet up and coming student directors for a chance to work on their projects. One of the directors I talked to (<i>Rohan Khublall</i>) offered me the chance to be an editor on a couple of short films with him.</p>
                                </div>
                                <div id="brotherConflict" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe src="//player.vimeo.com/video/192634827?quality=720p"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>A Brother's Conflict (2011)</h2>
                                            <hr class="star-light">
                                            <span class="skills">Credit: Editor</span>
                                            
                                            <p class="mediaDesc">This was the first film I ever edited, which made it an interesting experience. I had never collaborated with a director before, so working in tandem with him throughout the creative process was a rewarding chance for me to learn how to construct scenes that followed the original script, but also find the little moments that occurred during the filming process that weren't necessarily part of the original plan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="blackDove" class="tab-pane fade">
                                    
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe src="//player.vimeo.com/video/192630228?quality=720p"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2>The Book & The Black Dove (2012)</h2>
                                            <hr class="star-light">
                                            <span class="skills">Credit: Editor</span>
                                            
                                            <p class="mediaDesc">The second time I worked with <i>Rohan Khublall</i> we already had a rapport, so we were able to dive right in. This film presented a lot of interesting challenges, such as having to find ideal performances from the actors in some scenes. This script was more ambitious than the previous one, and a big part of the editing process involved building tension and then releasing it afterwards in the correct way.</p>
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
            $("#sfRow").addClass("selectedRow");
        </script>
    </body>
    
</html>