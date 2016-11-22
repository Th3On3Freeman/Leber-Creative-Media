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
        <meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/feature-films/thumbnail.jpg">
        <meta property="og:image:height" content="451">
        <meta property="og:image:width" content="800">
        <meta property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/feature-films.php">
        <meta property="og:type" content="portfolio"/>
        <meta property="fb:app_id" content="APPID"/>
        <link rel="image_src" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/feature-films/thumbnail.PNG" />

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
            //Mobile Test
            require_once ("http://".$_SERVER["SERVER_NAME"]."/includes/Mobile_Test/mobileTest.php");
        ?>
            
            <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php">Leber Creative Media</a>
                    </div>
            
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="menu-item dropdown">
                                
                                <?php 
                                
                                    $useragent=$_SERVER['HTTP_USER_AGENT'];
                                    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
                                    {
                                        //echo "<script>alert('MOBILE DEVICE');</script>";
                                ?>
                                
                                <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php#film">Film</span></a>
                                <ul>
                                    <li class="selectedRow indentedRows">
                                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/feature-films.php">Feature Films</a>
                                    </li>
                                    <li class="indentedRows">
                                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/short-films.php">Short Films</a>
                                    </li>
                                    <li class="indentedRows">
                                        <a href="#">Trailers</a>
                                    </li>
                                    <li class="indentedRows">
                                        <a href="#">Demo Reels</a>
                                    </li>
                                </ul>
                                
                                <?php        
                                    } //end if
                                    else
                                    {
                                        //echo "<script>alert('DESKTOP DEVICE');</script>";
                                ?>
                                
                                <a class="dropdown-toggle" data-toggle="dropdown" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php#film">Film</span></a>
                                <ul class="dropdown-menu submenuBegin">
                                    <li class="menu-item submenu">
                                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/feature-films.php">Feature Films</a>
                                    </li>
                                    <li class="menu-item submenu">
                                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/short-films.php">Short Films</a>
                                    </li>
                                    <li class="menu-item submenu">
                                        <a href="#">Trailers</a>
                                    </li>
                                    <li class="menu-item submenu">
                                        <a href="#">Demo Reels</a>
                                    </li>
                                </ul>
                                
                                <?php
                                    } //end else
                                
                                ?>
                            </li>
                            <li>
                                <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php#videography">Videography</a>
                            </li>
                            <li>
                                <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php#musicVideos">Music Videos</a>
                            </li>
                            <li>
                                <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php#popSpectrum">Pop Spectrum</a>
                            </li>
                            <li>
                                <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php#blog">Blog</a>
                            </li>
                            <li>
                                <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
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