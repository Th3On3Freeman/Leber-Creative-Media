<!--Leber Creative Media - DEMO REELS
    Author: Michael A. Leber
    Date: 12/6/16 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Leber Creative Media</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:site_name" content="Leber Creative Media"/>
        <meta property="og:title" content="Demo Reels"/>
        <meta property="og:description" name="description" content="Leber Creative Media" />
        <meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Film/demo-reels/thumbnail.jpg">
        <meta property="og:image:height" content="453">
        <meta property="og:image:width" content="800">
        <meta property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/demo-reels.php">
        <meta property="og:type" content="portfolio"/>
        <meta property="fb:app_id" content="APPID"/>
        <link rel="image_src" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Film/demo-reels/thumbnail.jpg" />

        <?php
            //Styles
            require_once ($_SERVER["DOCUMENT_ROOT"]."/styles/styles.php");
        ?>
        
        <!--Hover Dropdown CSS-->
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/styles/hoverDropdown.css?d=<?php echo time(); ?>" rel="stylesheet">
        
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
                                <span class="name">Demo Reels</span>
                                <hr class="star-light">
                            </div>         
                            
                            <div class="pillContainer">
                                <ul class="nav nav-pills center-pills">
                                    <li class="active"><a data-toggle="pill" href="#intro" class="btn btn-default pillTabs">About</a></li>
                                    <li><a data-toggle="pill" href="#bAnderson" class="btn btn-default pillTabs">Make Up Effects</a></li>
                                    <li><a data-toggle="pill" href="#mLeber" class="btn btn-default pillTabs">Video Editing</a></li>
                                </ul>
                            </div>
                                <br>
                            <div class="tab-content">
                                <div id="intro" class="tab-pane fade in active">
                                    <h2>About</h2>
                                    <hr class="star-light">
                                    <p>Over the years, I've created several demo reels to showcase my work to potential clients. I have also recently begun making demo reels to showcase other people's work as well.</p>
                                </div>
                                <div id="bAnderson" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe src="//player.vimeo.com/video/184450137"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Make-up Effects: Barry Anderson (2016)</h2>
                                            <hr class="star-light">
                                            <span class="skills">Song: In the House - In a Heartbeat (John Murphy) </span>
                                            
                                            <p class="mediaDesc">While I was working as a software engineer at <b>Simetri, Inc.</b> I had the pleasure of meeting and getting to know <i>Barry Anderson</i>, whom has worked on many films over the past 30 years. So when he graciously gave me the opportunity to create a demo reel so that he could show his work to others, I wrote up a contract and got to work. Having worked on films such as <b>Day of the Dead (1985), Jeepers Creepers and Hairspray (2007)</b>, Mr. Anderson is a very accomplished Make Up Effects Artist.</p>
                                            
                                            <p>This demo reel features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=WNwhUJQi7pM" target="_blank"><p class="list-group-item-text">Busch Gardens Howl-O-Scream (2015)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.imdb.com/title/tt2966874/" target="_blank"><p class="list-group-item-text">Fiend Fatale (2013)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.imdb.com/title/tt1850418/" target="_blank"><p class="list-group-item-text">To Write Love on Her Arms (2012)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.imdb.com/title/tt1568802/" target="_blank"><p class="list-group-item-text">As Night Falls (2010)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.imdb.com/title/tt0427327/" target="_blank"><p class="list-group-item-text">Hairspray (2007)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.imdb.com/title/tt0263488/" target="_blank"><p class="list-group-item-text">Jeepers Creepers (2001)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.imdb.com/title/tt0246124/" target="_blank"><p class="list-group-item-text">Oliver Twisted (2000)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.imdb.com/title/tt0113175/" target="_blank"><p class="list-group-item-text">The Girl with the Hungry Eyes (1995)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.imdb.com/title/tt0107612/" target="_blank"><p class="list-group-item-text">Mr. Nanny (1993)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.imdb.com/title/tt0099440/" target="_blank"><p class="list-group-item-text">The Disturbance (1990)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.imdb.com/title/tt0096340/" target="_blank"><p class="list-group-item-text">The Unholy (1988)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.imdb.com/title/tt0088993/" target="_blank"><p class="list-group-item-text">Day of the Dead (1985)</p></a></li>  
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                <div id="mLeber" class="tab-pane fade">
                                    
                                    <!--Demo Reel 2014-->
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
                                            <h2>Video Editing - Michael Leber (2014)</h2>
                                            <hr class="star-light">
                                            <span class="skills">Song: Dov's Goodbye (Matt Bukaty)</span>
                                            
                                            <p class="mediaDesc">After having worked on several short films, and a feature film, I decided it was time to make a proper demo reel featuring my work. Unfortunately, since the footage for <b>The Tailor's Apprentice</b> hasn't been made publicly available yet, I've had to make do with footage from an older version of the trailer. In order to accomodate this limitation, and since I wanted to use dialogue from the film, I decided to structure the reel around the the music used in the trailer for The Tailor's Apprentice. This resulted in a mixture of the trailer audio, and the correlating song from the soundtrack.</p>
                                            
                                            <p>This demo reel features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="http://www.imdb.com/title/tt3512652/" target="_blank"><p class="list-group-item-text">MIA-mi (2015)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.imdb.com/title/tt2195998/" target="_blank"><p class="list-group-item-text">The Tailor's Apprentice (2014)</p></a></li>
                                                <li class="list-group-item"><a href="https://vimeo.com/195050184" target="_blank"><p class="list-group-item-text">Wedding: Phil & Laurel (2014)</p></a></li>
                                                <li class="list-group-item"><a href="#"><p class="list-group-item-text">Seaway (2014)</p></a></li>
                                                <li class="list-group-item"><a href="https://vimeo.com/194995594" target="_blank"><p class="list-group-item-text">Wedding: John & Gretchen</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=stgnvkLCNEk" target="_blank"><p class="list-group-item-text">Bsteps Revolution (2014)</p></a></li>
                                                <li class="list-group-item"><a href="https://vimeo.com/192630228" target="_blank"><p class="list-group-item-text">The Book & The Black Dove (2012)</p></a></li>
                                                <li class="list-group-item"><a href="https://vimeo.com/192634827" target="_blank"><p class="list-group-item-text">A Brother's Conflict (2011)</p></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <!--Demo Reel 2011-->
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe src="//www.youtube.com/embed/dRQNOTuDvxU" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2>Video Editing - Michael Leber (2011)</h2>
                                            <hr class="star-light">
                                            <span class="skills">Song: Freedom Fighters (Two Steps From Hell)</span>
                                            
                                            <p class="mediaDesc">When I first showed interest in working on <b>The Tailor's Apprentice</b>, I was advised by Director <i>Jeff Lehman</i> to create a demo reel from my previous work. Since I had never edited anything except for some music videos and a mock trailer for the television show <i>Lost</i>, I centered my reel around the mock trailer I had made, and sprinkled in footage from each of the music videos I had edited throughout.</p>
                                            
                                            <p>This demo reel features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=Nv6-kAzraUg" target="_blank"><p class="list-group-item-text">Fight the Power (2011)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.dailymotion.com/video/xcnrng_epic-lost-trailer-v3_shortfilms" target="_blank"><p class="list-group-item-text">Mock-up Lost Trailer (2010)</p></a></li>
                                                <li class="list-group-item"><a href="#" target="_blank"><p class="list-group-item-text">Accidentally in Love (2006)</p></a></li>
                                                <li class="list-group-item"><a href="#" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2006)</p></a></li>
                                            </ul>
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
            $("#drRow").addClass("selectedRow");
        </script>
        
        
    </body>
    
</html>