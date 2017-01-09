<!--Leber Creative Media - AMV
    Author: Michael A. Leber
    Date: 12/17/16 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Leber Creative Media</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:site_name" content="Leber Creative Media"/>
        <meta property="og:title" content="Anime Music Videos"/>
        <meta property="og:description" name="description" content="Leber Creative Media" />
        <meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/thumbnail.jpg">
        <meta property="og:image:height" content="453">
        <meta property="og:image:width" content="800">
        <meta property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Music-Videos/amv.php">
        <meta property="og:type" content="portfolio"/>
        <meta property="fb:app_id" content="APPID"/>
        <link rel="image_src" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/thumbnail.jpg" />

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
            require_once ($_SERVER["DOCUMENT_ROOT"]."/nav/musicVideosNav.php");
        ?>
            
            <header class="yellowLinks">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="intro-text">
                                <span class="name">Anime Music Videos (AMV)</span>
                                <hr class="star-light">
                            </div>         
                            
                            <div class="pillContainer">
                                <ul class="nav nav-pills center-pills">
                                    <li class="active"><a data-toggle="pill" href="#intro" class="btn btn-default pillTabs">About</a></li>
                                    <li class="dropdown mobileDropdown">
                                        <a class="dropdown-toggle btn btn-default pillTabs" data-toggle="dropdown" href="#">2011-2016 <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a data-toggle="pill" href="#i" class="fullWidthDropdown">Inbound</a></li>
                                            <li><a data-toggle="pill" href="#al" class="fullWidthDropdown">Arsonist's Lullabye</a></li>
                                            <li><a data-toggle="pill" href="#gs" class="fullWidthDropdown">Genesis Skyfall</a></li>
                                            <li><a data-toggle="pill" href="#cos" class="fullWidthDropdown">Code of Swords</a></li>
                                            <li><a data-toggle="pill" href="#r" class="fullWidthDropdown">Revolution</a></li>
                                            <li><a data-toggle="pill" href="#otos" class="fullWidthDropdown">On the Other Side</a></li>
                                            <li><a data-toggle="pill" href="#goanw" class="fullWidthDropdown">God of a New World</a></li>
                                            <li><a data-toggle="pill" href="#0" class="fullWidthDropdown">007: XIII</a></li>
                                            <li><a data-toggle="pill" href="#tc&td" class="fullWidthDropdown">The Cat & The Devil</a></li>
                                            <li><a data-toggle="pill" href="#ftp" class="fullWidthDropdown">Fight the Power</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle btn btn-default pillTabs" data-toggle="dropdown" href="#">2006-2009 <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a data-toggle="pill" href="#" class="fullWidthDropdown">Placeholder</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                                <br>
                            <div class="tab-content">
                                <div id="intro" class="tab-pane fade in active">
                                    <h2>About</h2>
                                    <hr class="star-light">
                                    
                                    <p class="mediaDesc">I first began editing Animated Music Videos (AMVs) with <a href="https://support.microsoft.com/en-us/help/14220/windows-movie-maker-download" target="_blank">Windows Movie Maker</a>. I went to anime conventions and saw a community of people who made them and I thought I'd give it a try. None of them were all that great or won any awards but it was interesting. During this time I switched from using Windows Movie Maker to <a href="http://www.techspot.com/downloads/5727-adobe-premiere-free.html" target="_blank">Adobe Premiere Pro 2.0</a></p>
                                    
                                    <p class="mediaDesc">Then when I got into college I thought I'd give it another shot. This time I started with <a href="https://www.amazon.com/Premiere-Pro-CS5-5-Win-Upgrade/dp/B005381RR4/" target="_blank">Adobe Premiere CS5.5</a>, and the first video I made won runner up at a contest for an award and I realized I must have improved. So I've kept making them and over the past five years I've won several awards and continued to immerse myself in this community of video editors.</p>
                                    
                                    <p class="mediaDesc">One thing you will notice here is that in addition to the youtube links I will provide, there are also links to a site called <a href="http://www.animemusicvideos.org/" target="_blank">AnimeMusicVideos.org</a>. This is the primary hub and community for AMVs and I'm an active member within this community. You must have an account in order to access videos from this site, but it is the central location where most people put their AMVs online.</p>
                                    
                                    <p class="centerText">Currently I edit AMVs with <a href="http://www.adobe.com/creativecloud.html" target="_blank">Adobe Creative Cloud's</a> version of Adobe Premiere.</p>
                                </div>
                                <div id="i" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="inboundVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Inbound (2016)</h2>
                                            <hr class="star-light">
                                            <span class="skills">AWA Thunderdome 2016-Team Lightning Bear</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=201575" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="mediaDesc">This was a video that I made for <a href="http://awa-con.com/" target="_blank">Anime Weekend Atlanta's</a> <a href="http://thunderdome.videoarttrack.com/" target="_blank">Thunderdome Event</a> in 2016 with <a href="http://www.animemusicvideos.org/members/members_myprofile.php?user_id=1087909" target="_blank">SasukeChanX</a>, <a href="http://www.animemusicvideos.org/members/members_myprofile.php?user_id=712944" target="_blank">Hamstar138</a>, Troubleclef and <a href="http://www.animemusicvideos.org/members/members_myprofile.php?user_id=1020675" target="_blank">Potato Baron</a>.</p>

                                            <p class="mediaDesc">As per the rules, four of us were given one hour each alone in the Thunderdome to work on the video. Since the event coordinator allowed me to suggest a song, I decided upon a compilation of the opening theme from <a href="https://www.blackmesasource.com/" target="_blank">Black Mesa</a>, for a mod that updated the game <a href="https://en.wikipedia.org/wiki/Half-Life_(video_game)" target="_blank">Half-Life</a>. And to make it a little more interesting we decided that we would not discuss the theme or the anime that we would use in the video so that each of our own styles and ideas could proliferate instead. Afterwards, our fifth team member had two hours to try and pull it all together. It's rough, and could definitely use some improvement in places (give or take the several <b>4:3</b> shots that should have been scaled in on to fill the <b>16:9</b> video; as well as some miscommunication about intentional cuts to black); but overall I'm proud of what our team was able to accomplish.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=SFKBP5hWuSA" target="_blank"><p class="list-group-item-text">Joel Nielsen - Inbound Part 1</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=JgXret8NA-4" target="_blank"><p class="list-group-item-text">Joel Nielsen - Inbound Part 2</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=gCI43CkUrnQ" target="_blank"><p class="list-group-item-text">Joel Nielsen - Inbound Part 3</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=13" target="_blank"><p class="list-group-item-text">Cowboy Bebop</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=8420" target="_blank"><p class="list-group-item-text">Evangelion 1.0 You Are (Not) Alone</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=8421" target="_blank"><p class="list-group-item-text">Evangelion 2.0 You Can (Not) Advance</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=8422" target="_blank"><p class="list-group-item-text">Evangelion 3.0 You Can (Not) Redo</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=465" target="_blank"><p class="list-group-item-text">Ghost in the Shell (1996)</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=180" target="_blank"><p class="list-group-item-text">Nausicaä of the Valley of the Wind</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=14195" target="_blank"><p class="list-group-item-text">Psycho-Pass</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=17360" target="_blank"><p class="list-group-item-text">Re:Zero-Starting Life in Another World</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=166" target="_blank"><p class="list-group-item-text">Serial Experiments Lain</p></a></li> 
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="al" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="arsonistLullabyVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Arsonist's Lullabye (2016)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">AWA 2016 Pro-Best Character Profile Nomination</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=201570" target="_blank">AMV.org Link</a></p>
                                            
                                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/awa-pro-2016-best-character-profile.jpg?d=<?php echo time(); ?>" class="img-responsive" alt="">
                                            
                                            <p class="mediaDesc">This is an AMV that I submitted to <a href="http://awa-con.com/" target="_blank">Anime Weekend Atlanta's</a> <a href="http://awa-con.com/events/vat/" target="_blank">Professional Awards</a> Contest in 2016 and it was nominated for the Best Character Profile Award.</p>
                                            
                                            <p class="mediaDesc">I've had this idea in mind ever since I first heard this song in the <a href="https://www.youtube.com/watch?v=Va1UPrFXHKA" target="_blank">Walking Dead Comic Con trailer for season six</a>, and I thought it was the perfect fit for a Mustang video. Originally it was going to be more about the Ishval war, but as I began incorporating Hughes, I realized the emotional core of the video clearly had to be about the friendship between Mustang and Hughes, and how Mustang dealt with his guilt after the tragedy of what happened. </p>

                                            <p class="mediaDesc">Because of this, after initiating their relationship, it became about Mustang tracking down everyone who was involved, from Lieutenant Maria Ross (though "his senses fooled him"), Lust and finally the fuhrer. I decided against involving Envy because I thought it would be too confusing to people who haven't seen the show, and that his final form would have lessened the dramatic impact of the climax. Because of this I combined the final fight with the fuhrer from the original with Mustang's descent into revenge from Brotherhood.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=XoQvbDROucQ" target="_blank"><p class="list-group-item-text">Hozier - Arsonist's Lullabye</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=10216" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist: Brotherhood</p></a></li> 
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="gs" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="genesisSkyfallVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Genesis Skyfall (2014)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">AWA 2014 Pro-Best Artistic Endeavor && Youmacon 2016-Shaken Not Stirred</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=196714" target="_blank">AMV.org Link</a></p>
                                            
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/awa-pro-2014-best-artistic-endeavor.jpg?d=<?php echo time(); ?>" class="img-responsive" alt="">
                                                </div>
                                                
                                                <div class="col-lg-3">
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/awa-pro-2014-best-artistic-endeavor-award.jpg?d=<?php echo time(); ?>" class="img-responsive" alt="">
                                                </div>
                                            </div>
                                            <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/pdf/Music-Videos/amv/shaken-not-stirred.pdf" target="_blank">
                                                <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/youmacon-2016-shaken-not-stirred.jpg?d=<?php echo time(); ?>" class="img-responsive" alt="">
                                            </a>
                                            
                                            <p class="centerText">Click to see larger version</p>
                                            
                                            <p class="mediaDesc">This is an AMV that I submitted to <a href="http://awa-con.com/" target="_blank">Anime Weekend Atlanta's</a> (AWA) <a href="http://awa-con.com/events/vat/" target="_blank">Professional Awards</a> Contest in 2014 and Youmacon Fan Art Theater Contest in 2016. It won the Best Artistic Endeavor Award at AWA and the <i>Shaken Not Stirred</i> award at Youmacon.</p>
                                            
                                            <p class="mediaDesc">I began this video about a year beforehand with the concept for the climax roughly completed long before the rest of the video. Later on closer to the contest deadline I got most of it finished in a single weekend before getting some reactions to it and tightening other aspects of it up to submit to AWA for the premiere.</p>

                                            <p class="mediaDesc">This was the first time I used a bluray anime source to make an AMV, since everything else I always used DVD sources. I couldn't figure out how to get rid of some of the apparent visual issues at some points (though it looks better in my far less uncompressed version).</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=DeumyOzKqgI" target="_blank"><p class="list-group-item-text">Adele - Skyfall</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=8420" target="_blank"><p class="list-group-item-text">Evangelion 1.0 You Are (Not) Alone</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=8421" target="_blank"><p class="list-group-item-text">Evangelion 2.0 You Can (Not) Advance</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=8422" target="_blank"><p class="list-group-item-text">Evangelion 3.0 You Can (Not) Redo</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="cos" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="codeOfSwordsVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Code of Swords (2014)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">AWA 2014 Pro Entry</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=201573" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="mediaDesc">This is an AMV that I submitted to <a href="http://awa-con.com/" target="_blank">Anime Weekend Atlanta's</a> <a href="http://awa-con.com/events/vat/" target="_blank">Professional Awards</a> Contest in 2014. Most of this was an experiment in seeing how exactly I could mimic each shot from the trailer.</p>
                                                <br>
                                            <div class="row">
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-8">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <div id="codeOfSwordsComparisonVideo"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div>
                                                <br>
                                            <p class="centerText">This used a trailer from <i>Game of Thrones</i> season three, and the characters imitated are shown at the bottom of the page (throughout this list, <b>SAO</b> is short for <i>Sword Art Online</i>, while <b>CG</b> is short for <i>Code Geass</i>)</p>
                                            
                                            <p>This AMV features trailer audio from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=p4iljcuzjG8" target="_blank"><p class="list-group-item-text">Game of Thrones: Season 3-Trailer 2</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=13858" target="_blank"><p class="list-group-item-text">Sword Art Online</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=6704" target="_blank"><p class="list-group-item-text">Code Geass: Lelouch of the Rebellion</p></a></li> 
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=9173" target="_blank"><p class="list-group-item-text">Code Geass: Lelouch of the Rebellion R2</p></a></li> 
                                            </ul>
                                            
                                            <div class="row">
                                                <div class="col-lg-3 col-xs-6">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-daenerys-targaryen.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Daenerys Targaryen</h3>
                                                </div>
                                                <div class="col-lg-3 col-xs-6">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-mance-rayder.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Mance Rayder</h3>
                                                </div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-xs-4 hidden-sm hidden-md hidden-lg"></div>
                                                <div class="col-lg-2 col-xs-4">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/sao-asuna.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Asuna (SAO)</h3>
                                                </div>
                                                <div class="col-lg-2 col-xs-4"></div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-tyrion-lannister.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Tyrion Lannister</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/sao-kirito.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Kirito (SAO)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-1 hidden-xs"></div>
                                                <div class="col-lg-3 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-cersei-lannister.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Cersei Lannister</h3>
                                                </div>
                                                <div class="col-lg-1 hidden-xs"></div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-1 col-xs-2"></div>
                                                <div class="col-lg-3 col-xs-8">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/sao-leafa.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Leafa (SAO)</h3>
                                                </div>
                                                <div class="col-lg-1 col-xs-2"></div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-1 col-xs-2"></div>
                                                <div class="col-lg-3 col-xs-8">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-robb-stark.jpg?d=<?php echo time(); ?>" class="img-responsive" alt="">
                                                    <h3>Robb Stark</h3>
                                                </div>
                                                <div class="col-xs-2 hidden-sm hidden-md hidden-lg"></div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-3 hidden-xs"></div>
                                                <div class="col-lg-4 col-xs-12">
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/cg-suzaku.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Suzaku (CG)</h3>
                                                              
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/sao-kirito.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Kirito (SAO)</h3>
                                                </div>
                                                <div class="col-lg-2 hidden-xs"></div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-tywin-lannister.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Tywin Lannister</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-joffrey-baratheon.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Joffrey Baratheon</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-commander-mormont.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Commander Mormont</h3>
                                                </div>
                                                <div class="col-lg-2 hidden-xs"></div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-6 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/cg-lelouch.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Lelouch (CG)</h3>
                                                </div>
                                                <div class="col-lg-2 hidden-xs"></div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-arya-stark.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Arya Stark</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/sao-silica.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Silica (SAO)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-stannis-baratheon.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Stannis Baratheon</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/cg-vv.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>V.V. (CG)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-melisandre.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                        <h3>Melisandre</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/cg-cc.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>C.C. (CG)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-brienne.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Brienne of Tarth</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/sao-heathcliff.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Heathcliff (SAO)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-daario-naharis.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Daario Naharis</h3>
                                                </div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-3 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/sao-kuradeel.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Kuradeel (SAO)</h3>
                                                </div>
                                                <div class="col-lg-3 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/sao-kirito.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Kirito (SAO)</h3>
                                                </div>
                                            </div>    
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-3 col-xs-6">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-catelyn-tully.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Catelyn Tully</h3>
                                                </div>
                                                <div class="col-lg-3 col-xs-6">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-talisa-stark.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Talisa Stark</h3>
                                                </div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/sao-sugu.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Sugu (SAO)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-tormund-giantsbane.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Tormund Giantsbane</h3>
                                                </div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-3 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/sao-klein.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Klein (SAO)</h3>
                                                </div>
                                                <div class="col-lg-3 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/sao-kirito.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Kirito (SAO)</h3>
                                                </div>
                                            </div>    
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-ygritte.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Ygritte</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/cg-kallen.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Kallen (CG)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-3 col-xs-6">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-jon-snow.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Jon Snow</h3>
                                                </div>
                                                <div class="col-lg-3 col-xs-6">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-jaime-lannister.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Jaime Lannister</h3>
                                                </div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-xs-4 hidden-sm hidden-md hidden-lg"></div>
                                                <div class="col-lg-4 col-xs-12">
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/sao-kirito.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Kirito (SAO)</h3>
                                                              
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/cg-lelouch.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Lelouch (CG)</h3>
                                                </div>
                                                <div class="col-xs-4 hidden-sm hidden-md hidden-lg"></div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-bran-stark.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Bran Stark</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/cg-nunnally-lamperouge.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Nunnally (CG)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/got-margaery-tyrell.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Margaery Tyrell</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Music-Videos/amv/code-of-swords/cg-euphemia-li-britannia.jpg?d=<?php echo time(); ?>" class="img-responsive imgFix" alt="">
                                                    <h3>Euphy (CG)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <p class="centerText">Asha Greyjoy - Villetta (CG)</p>
                                            <p class="centerText">Myranda - Cornelia (CG)</p>
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
            $("#aRow").addClass("selectedRow");
        </script>
        
        <script type="text/javascript">
            function downloadJSAtOnload() {
                var element = document.createElement("script");
                element.src = "http://<?php echo $_SERVER['SERVER_NAME']; ?>/scripts/Music Videos/amv/youtubeEmbed.js?d=<?php echo time(); ?>";
                document.body.appendChild(element);
            }
            if (window.addEventListener)
                window.addEventListener("load", downloadJSAtOnload, false);
            else if (window.attachEvent)
                window.attachEvent("onload", downloadJSAtOnload);
            else window.onload = downloadJSAtOnload;
        </script>
        
    </body>
    
</html>