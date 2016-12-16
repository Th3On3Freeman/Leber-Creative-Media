<!--Leber Creative Media - BEST OF TELEVISION 2016
    Author: Michael A. Leber
    Date: 11/4/16 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Leber Creative Media</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:site_name" content="Leber Creative Media"/>
        <meta property="og:title" content="Best of TV 2016"/>
        <meta property="og:description" name="description" content="Leber Creative Media" />
        <meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Blog/Best of Television/2016/thumbnail.jpg">
        <meta property="og:image:height" content="451">
        <meta property="og:image:width" content="800">
        <meta property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Blog/Best of Television/2016.php">
        <meta property="og:type" content="portfolio"/>
        <meta property="fb:app_id" content="APPID"/>
        <link rel="image_src" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Blog/Best of Television/2016/thumbnail.PNG" />

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
        
            //Navigation (Blog)
            require_once ($_SERVER["DOCUMENT_ROOT"]."/nav/blogNav.php");
        ?>
            
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="intro-text">
                                <span class="name">Best of Television 2016</span>
                                <hr class="star-light">
                            </div>
                            
                            <div class="pillContainer">
                                <ul class="nav nav-pills center-pills">
                                    <li class="active"><a data-toggle="pill" href=".intro" class="btn btn-default pillTabs">About</a></li>
                                    <li><a data-toggle="pill" href=".honMention" class="btn btn-default pillTabs">Honorable Mention</a></li>
                                    <li><a data-toggle="pill" href=".top20" class="btn btn-default pillTabs">The Top 20</a></li>
                                </ul>
                            </div>
                                <br>
                            <div class="tab-content">
                                <div class="tab-pane fade intro in active">
                                    <h2>About</h2>
                                    <hr class="star-light">
                                    <p>When I first got involved with the Film department at the University of Central Florida, I attended a Meet and Greet event where people could meet up and coming student directors for a chance to work on their projects. One of the directors I talked to (<i>Rohan Khublall</i>) offered me the chance to be an editor on a couple of short films with him.</p>
                                </div>
                                <div class="tab-pane fade honMention">
                                    <h2>Honorable Mention</h2>
                                    <hr class="star-light">
                                    <p>These are the shows from this year that didn't make the cut. Some of these were good, but may have had too many flaws in their storytelling to justify a place on the list while others were just okay. These are in no particular order.</p>
                                </div>
                                <div class="tab-pane fade top20">
                                    <h2>The Top 20</h2>
                                    <hr class="star-light">
                                    <p>These are the shows from this year that didn't make the cut. Some of these were good, but may have not innovated enough in their storytelling to justify a place on the list while others were just okay. These are in no particular order.</p>
                                </div>
                            </div>         
                        </div>
                    </div>
                </div>
            </header>
            <div class="tab-content">
                <div class="tab-pane fade intro in active">
                </div>
                
                <div class="tab-pane fade honMention">
                    
                    <!--Honorable Mention-The Path-->
                    <section class="portfolio tvEntry">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 portfolio-item">
                                    <a href="http://www.imdb.com/title/tt4789576/" class="portfolio-link" target="_blank">
                                        <div class="caption">
                                            <div class="caption-content">
                                                <i class="fa fa-search-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Blog/Best of Television/2016/Honorable Mention/the-path.jpg?d=<?php echo time(); ?>" class="img-responsive" alt="">
                                    </a>
                                </div>                    
                                <div class="col-lg-12 text-center">
                                    <div class="intro-text">
                                        <h2>The Path</h2>
                                        <hr class="star-primary">
                                        <span class="skills">Hulu</span>
                                        <p class="mainText">One of the more interesting new premiere seasons from this year, <i>The Path</i> (formerly known as <i>The Way</i>) had a lot riding on it. It was pushed as Hulu's first big scripted show, featuring <a href="http://www.imdb.com/name/nm0666739/" target="_blank">Aaron Paul</a> (<i>Breaking Bad</i>), <a href="http://www.imdb.com/name/nm0199215/" target="_blank">Hugh Dancy</a> (<i>Hannibal</i>) and <a href="http://www.imdb.com/name/nm1157358/" target="_blank">Michelle Monaghan</a> (<i>True Detective</i>) in the lead roles. Did it succeed? well...</p>
                                        
                                        <p class="mainText">This show is different. It presents the viewer with a cult called The Movement that follows a lifestyle centered around The Ladder. The closest entry point the audience has is Eddie (Aaron Paul), who seems to be the only down to earth person within The Movement that understands how strange it all is and has serious doubts regarding it's newly appointed leader Cal (Hugh Dancy).</p>
                                        
                                        <p class="mainText">While there are some supporting characters that are either investigating or trying to escape from The Movement, most of the scenes take place within the cult itself, which can lead to the viewer constantly feeling out of place, surrounded by true believers. Episodes such as <i>The Shore</i> feel like a breath of fresh air because so many episodes take place outside of the cult environment. There are also confusing repeated visions throughout the show that can make it hard to interpret.</p>
                                        
                                        <p class="mainText">That being said, as the season continues <i>The Path</i> begins to find its footing, unfortunately ending right as things start to get interesting. Hopefully Season 2 lands on more solid ground.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!--Honorable Mention-Orphan Black-->
                    <section class="portfolio tvEntry tvEntryOdd">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 portfolio-item">
                                    <a href="http://www.imdb.com/title/tt2234222/" class="portfolio-link" target="_blank">
                                        <div class="caption">
                                            <div class="caption-content">
                                                <i class="fa fa-search-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Blog/Best of Television/2016/Honorable Mention/orphan-black.jpg?d=<?php echo time(); ?>" class="img-responsive" alt="">
                                    </a>
                                </div>                    
                                <div class="col-lg-12 text-center">
                                    <div class="intro-text">
                                        <h2>Orphan Black</h2>
                                        <hr class="star-light">
                                        <span class="skills">BBC America</span>
                                        <p class="mainText">This year had a promising start, with the twist of reintroducing the long forgotten Beth clone, but it dropped that intriguing plot point fairly early in the season in favor of more convoluted storylines for a show long past it's prime.</p>
                                        
                                        <p class="mainText"><a href="http://www.imdb.com/name/nm1137209/" target="_blank">Tatiana Maslany</a> is still doing wonderful work here in all of her various roles and I'm <i>thrilled</i> that she finally won an emmy for her work, but the writing just isn't as good as it used to be.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!--Honorable Mention-American Horror Story-->
                    <section class="portfolio tvEntry">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 portfolio-item">
                                    <a href="http://www.imdb.com/title/tt1844624/" class="portfolio-link" target="_blank">
                                        <div class="caption">
                                            <div class="caption-content">
                                                <i class="fa fa-search-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Blog/Best of Television/2016/Honorable Mention/american-horror-story.jpg?d=<?php echo time(); ?>" class="img-responsive" alt="">
                                    </a>
                                </div>                    
                                <div class="col-lg-12 text-center">
                                    <div class="intro-text">
                                        <h2>American Horror Story</h2>
                                        <hr class="star-primary">
                                        <span class="skills">FX</span>
                                        <p class="mainText">This was the first time that the big theme for the season was kept a secret. Usually the FX marketing team announces the <i>American Horror Story</i> theme for each year fairly early on, but this time they decided to switch it up and released a slew of misleading teasers, with only one of them turning out to be the right one (though others would rear their head in the premiere briefly to keep people guessing).</p>
                                        
                                        <p class="mainText">Once the premiere had aired and the theme became clear, this season showed some promise with an interesting change in format (a trend that would continue throughout the season at various times). Unfortunately, although the sum total is a definite improvement over most of the <a href="http://www.imdb.com/name/nm3078932/" target="_blank">Lady Gaga</a> filled mess that was <i>Hotel</i>, it just can't match up to the abyss of seasons like <i>Asylum</i>.</p>
                                        
                                        <p class="mainText">There was strong acting here from <a href="http://www.imdb.com/name/nm0000870/" target="_blank">Kathy Bates</a> and most surprisingly this year from <a href="http://www.imdb.com/name/nm0692013/" target="_blank">Adina Porter</a>, but too much of this show isn't dramatically interesting or scary anymore; instead going for shocks above all else.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!--Honorable Mention-Luke Cage-->
                    <section class="portfolio tvEntry tvEntryOdd">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 portfolio-item">
                                    <a href="http://www.imdb.com/title/tt3322314/" class="portfolio-link" target="_blank">
                                        <div class="caption">
                                            <div class="caption-content">
                                                <i class="fa fa-search-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Blog/Best of Television/2016/Honorable Mention/luke-cage.jpg?d=<?php echo time(); ?>" class="img-responsive" alt="">
                                    </a>
                                </div>                    
                                <div class="col-lg-12 text-center">
                                    <div class="intro-text">
                                        <h2>Luke Cage</h2>
                                        <hr class="star-light">
                                        <span class="skills">Netflix</span>
                                        <p class="mainText">As the Netflix Marvel slate continues to grow, the next Defender enters the ring and the world is more welcome for it. <a href="http://www.imdb.com/name/nm1591496/" target="_blank">Mike Colter</a> may have already been introduced in last year's stellar <i>Jessica Jones</i>, but that was only through Jessica's point of view. In <i>Luke Cage</i> is where we really learn about his way of life, and more specifically <b>Harlem</b>.</p>
                                        
                                        <p class="mainText"><b>Hell's Kitchen</b> may have been the setting of <i>Daredevil</i> and <i>Jessica Jones</i>, but it was mainly just a reference point. Harlem feels like an actual character in this show, from the way that people talk about it, down to the community that lives in it. Colter is serviceable enough for the lead role, but the soul of Harlem really lies in the supporting cast.</p>
                                        
                                        <p class="mainText">Specifically, I'm talking about <a href="http://www.imdb.com/name/nm0991810/" target="_blank">Mahershala Ali</a> and <a href="http://www.imdb.com/name/nm0005569/" target="_blank">Alfre Woodard</a>. Ali has a magnetic presence throughout most of the first season, as the owner of <b>Harlem's Paradise</b>, a front for the local mob. Meanwhile, Woodard's political presence is a huge part of what makes the city of Harlem sing, and her role only gets more interesting as the season progresses.</p>
                                        
                                        <p class="mainText">Executive Producer <a href="http://www.imdb.com/name/nm1854539/" target="_blank">Cheo Hodari Coker</a> uses music in an interesting way throughout the season, punctuating action beats and utilizing the club's locale to showcase the singers just as much as our hero. It's an interesting mix of standard comic book fare with the culture of this side of New York.</p>
                                        
                                        <p class="mainText">Unfortunately, the second half of the season doesn't fare quite as well. Once Ali's Cottonmouth plays his role during the season, a new villain is introduced that just isn't nearly as engaging. Woodard's Mariah continues to build her character throughout the season in interesting ways, but is sidelined for a more traditional confrontation that is disappointing mainly because the actor playing the new villain just isn't that engaging. However, the ending of the season sets up an intriguing future storyline that I just wish had played out this year instead.</p>
                                        
                                        <p class="mainText">Overall, what you have here is a flawed first season that has a lot of good ideas in place, but just spent a little too long getting there. <a href="http://www.imdb.com/name/nm1395855/" target="_blank">Simone Missick</a> and <a href="http://www.imdb.com/name/nm0744331/" target="_blank">Theo Rossi</a> round out the cast nicely, with both having the potential to step forward in the coming seasons.</p>
                                        
                                        <p class="centerText"><b><i>Always Forward, Forward Always</i></b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!--Honorable Mention-It's Always Sunny in Philadelphia-->
                    <section class="portfolio tvEntry">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 portfolio-item">
                                    <a href="http://www.imdb.com/title/tt0472954/" class="portfolio-link" target="_blank">
                                        <div class="caption">
                                            <div class="caption-content">
                                                <i class="fa fa-search-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Blog/Best of Television/2016/Honorable Mention/its-always-sunny-in-philadelphia.jpg?d=<?php echo time(); ?>" class="img-responsive" alt="">
                                    </a>
                                </div>                    
                                <div class="col-lg-12 text-center">
                                    <div class="intro-text">
                                        <h2>It's Always Sunny in Philadelphia</h2>
                                        <hr class="star-primary">
                                        <span class="skills">FXX</span>
                                        <p class="mainText">Sunny is starting to show it's age. Going into it's 11th season, this cast just isn't putting out quite as many great episodes per year as they used to. While there are some clear highlights, such as <i>Mac & Dennis Move to the Suburbs</i> and <i>Being Frank</i> (primarily for it's inventiveness), most of the rest of this season is filled with jokes that don't hit as well as they should, and a disappointing two-part finale.</p>
                                        
                                        <p class="mainText">Hopefully the Gang gets back on the wagon next time.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                </div>
                
                <div class="tab-pane fade top20">
                    <!--The Top 20-20. Black Mirror-->
                    <section class="portfolio tvEntry">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 portfolio-item">
                                    <a href="http://www.imdb.com/title/tt2578560/" class="portfolio-link" target="_blank">
                                        <div class="caption">
                                            <div class="caption-content">
                                                <i class="fa fa-search-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Blog/Best of Television/2016/Honorable Mention/broad-city.jpg?d=<?php echo time(); ?>" class="img-responsive" alt="">
                                    </a>
                                </div>                    
                                <div class="col-lg-12 text-center">
                                    <div class="intro-text">
                                        <h2>20. Black Mirror</h2>
                                        <hr class="star-primary">
                                        <span class="skills">Netflix</span>
                                        <p class="mainText">This year had a promising start, with the twist of reintroducing the long forgotten Beth clone, but it dropped that intriguing plot point fairly early in the season in favor of more convoluted storylines for a show long past it's prime.</p>
                                        
                                        <p class="mainText"><a href="http://www.imdb.com/name/nm1137209/" target="_blank">Tatiana Maslany</a> is still doing wonderful work here in all of her various roles and I'm <i>thrilled</i> that she finally won an emmy for her work, but the writing just isn't as good as it used to be.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--The Top 20-19. Broad City-->
                    <section class="portfolio tvEntryOdd">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 portfolio-item">
                                    <a href="http://www.imdb.com/title/tt2578560/" class="portfolio-link" target="_blank">
                                        <div class="caption">
                                            <div class="caption-content">
                                                <i class="fa fa-search-plus fa-3x"></i>
                                            </div>
                                        </div>
                                        <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/images/Blog/Best of Television/2016/The List/broad-city.jpg?d=<?php echo time(); ?>" class="img-responsive" alt="">
                                    </a>
                                </div>                    
                                <div class="col-lg-12 text-center">
                                    <div class="intro-text">
                                        <h2>19. Broad City</h2>
                                        <hr class="star-light">
                                        <span class="skills">Comedy Central</span>
                                        <p class="mainText"><i>Broad City</i> stars two of the strangest, charming and relatable (can I say that as a man?) women in the current television landscape, and continues to stroll along despite dipping in the ratings this year. <a href="http://www.imdb.com/name/nm3434305/" target="_blank">Abbi Jacobson</a> continues to portray one of the most awkward people on television while <a href="http://www.imdb.com/name/nm4477261/" target="_blank">Ilana Glazer's</a> expressions and reactions are still some of the funniest to hit the small screen.</p>
                                        
                                        <p class="mainText">While some of these episodes aren't as strong as previous years, the writing is still on point and any episode featuring <a href="http://www.imdb.com/name/nm2868110/" target="_blank">Hannibal Buress</a> is always guaranteed to have a good line.</p>
                                        
                                        <p class="mainText">Standout episodes this year include <i>Philadelphia</i> and <i>Burning Bridges</i>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            
        
        <?php
            //Scripts
            require_once ($_SERVER["DOCUMENT_ROOT"]."/scripts/scripts.php");
        ?>
        <script>
            //Highlight nav row
            $("#bt16Row").addClass("selectedRow");
        </script>
        
        <h2>Honorable Mentions</h2>
        
        //1-The Path (Hulu)
        //2-Orphan Black (BBC America)
        //3-American Horror Story (FX)
        //4-Luke Cage (Netflix)
        5-Fear The Walking Dead (AMC)
        6-It's Always Sunny in Philadelphia (FXX)
        7-Designated Survivor (ABC)
        
        <h2>The Top 20</h2>
        
        20-Black Mirror (Netflix)
        //19-Broad City (Comedy Central)
        18-House of Cards (Netflix)
        17-Daredevil (Netflix)
        16-The Walking Dead (AMC)
        15-Mr. Robot (USA)
        14-Outlander (Starz)
        13-Stranger Things (Netflix)
        12-The 100 (CW)
        11-Bates Motel (A&E)
        10-Person of Interest (CBS)
        9-Rectify (Sundance)
        8-Better Call Saul (AMC)
        7-Orange is the New Black (Netflix)
        6-Game of Thrones (HBO)
        5-American Crime Story (FX)
        4-Halt & Catch Fire (AMC)
        3-The Night Of (HBO)
        2-The Americans (FX)
        1-Westworld (HBO)
    </body>
    
</html>