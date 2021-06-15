<!--Leber Creative Media - AMV
    Author: Michael A. Leber
    Date: 12/17/16 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lightning Bear Studios</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:site_name" content="Leber Creative Media"/>
        <meta property="og:title" content="Lightning Bear Studios"/>
        <meta property="og:description" name="description" content="Currently I edit AMVs with Adobe Creative Cloud's version of Adobe Premiere." />
        <meta property="og:image" content="/images/music-videos/lightning-bear-studios/thumbnail.jpg">
        <meta property="og:image:height" content="448">
        <meta property="og:image:width" content="800">
        <meta property="og:url" content="/music-videos/lightning-bear-studios.php">
        <meta property="og:type" content="portfolio"/>
        <meta property="fb:app_id" content="APPID"/>
        <link rel="image_src" href="/images/music-videos/lightning-bear-studios/thumbnail.jpg" />

        <?php
            //Styles
            require_once ($_SERVER["DOCUMENT_ROOT"]."/styles/styles.php");
        ?>
        
        <!--Hover Dropdown CSS-->
        <link href="/styles/hoverDropdown.css" rel="stylesheet">
        
        <link href="/styles/hoverDropdownModified.css" rel="stylesheet">
        
    </head>
    
    <body id="page-top" class="index">
        
        <?php
            //Mobile Test
            require_once ($_SERVER["DOCUMENT_ROOT"]."/includes/mobile-test/mobileTest.php");
        
            //Navigation (Film)
            require_once ($_SERVER["DOCUMENT_ROOT"]."/nav/musicVideosNav.php");
        ?>
            
            <header class="yellowLinks">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="intro-text">
                                <h1 class="name">Lightning Bear Studios (LBS)</h1>
                                <hr class="star-light">
                            </div>         
                            
                            <div class="pillContainer">
                                <ul class="nav nav-pills center-pills">
                                    <li class="active"><a data-toggle="pill" href="#intro" class="btn btn-default pillTabs">About</a></li>
                                </ul>
                            </div>
                                <br>
                            <div class="tab-content">
                                <div id="intro" class="tab-pane fade in active">
                                    <h2>About Lightning Bear Studios</h2>
                                    <hr class="star-light">
                                    
                                    <p class="mediaDesc">I had a college study group 10 years ago in my Discrete Structures class and we came up with the name Team Lightning Bear.</p>

                                    <p class="mediaDesc">Then at Anime Weekend Atlanta they had an event called the Thunderdome and you had to have a team name for that. The first year we had Sarah Sannoune (SasukeChanx) among other former team members. Then the year after that Will Whaley (Speedy180) joined and we all started talking after that.</p>

                                    <p class="mediaDesc">Finally in 2019 we recruited Parker Doss (TwigglyFiggly) and decided to announce the creation of the studio at the con and we won the Thunderdome that year too.</p>
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
            $("#aRow").addClass("selectedRow");
        </script>
        <!--
        <script type="text/javascript">
            function downloadJSAtOnload() {
                var element = document.createElement("script");
                element.src = "/scripts/music-videos/amv/videoLoader.js?d=<?php echo time(); ?>";
                document.body.appendChild(element);
            }
            if (window.addEventListener)
                window.addEventListener("load", downloadJSAtOnload, false);
            else if (window.attachEvent)
                window.attachEvent("onload", downloadJSAtOnload);
            else window.onload = downloadJSAtOnload;
        </script>
        -->
    </body>
    
</html>