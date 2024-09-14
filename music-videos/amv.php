<!--Leber Creative Media - AMV
    Author: Michael A. Leber
    Date: 12/17/16 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Anime Music Videos</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:site_name" content="Leber Creative Media"/>
        <meta property="og:title" content="Anime Music Videos"/>
        <meta property="og:description" name="description" content="Currently I edit AMVs with Adobe Creative Cloud's version of Adobe Premiere." />
        <meta property="og:image" content="/images/music-videos/amv/thumbnail.jpg">
        <meta property="og:image:height" content="453">
        <meta property="og:image:width" content="800">
        <meta property="og:url" content="/music-videos/amv.php">
        <meta property="og:type" content="portfolio"/>
        <meta property="fb:app_id" content="APPID"/>
        <link rel="image_src" href="/images/music-videos/amv/thumbnail.jpg" />

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
                                <h1 class="name">Anime Music Videos (AMV)</h1>
                                <hr class="star-light">
                            </div>         
                            
                            <div class="pillContainer">
                                <ul class="nav nav-pills center-pills">
                                    <li class="active"><a data-toggle="pill" href="#intro" class="btn btn-default pillTabs">About</a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle btn btn-default pillTabs" data-toggle="dropdown" href="#">2011-2021 <span class="caret"></span></a>
                                        <ul class="dropdown-menu">   
                                            <li><a data-toggle="pill" href="#tbyo" class="fullWidthDropdown theBloodYouOwe">The Blood You Owe</a></li>
                                            <li><a data-toggle="pill" href="#tm" class="fullWidthDropdown them">Them</a></li>
                                            <li><a data-toggle="pill" href="#ds" class="fullWidthDropdown dynamicStruggle">Dynamic Struggle</a></li>
                                            <li><a data-toggle="pill" href="#conv" class="fullWidthDropdown convergence">Convergence</a></li>
                                            <li><a data-toggle="pill" href="#ht" class="fullWidthDropdown theHeart">The Heart</a></li>
                                            <li><a data-toggle="pill" href="#lpdbz" class="fullWidthDropdown linkinParkDBZ">Linkin Park DBZ</a></li>
                                            <li><a data-toggle="pill" href="#al" class="fullWidthDropdown arsonistLullaby">Arsonist's Lullabye</a></li>
                                            <li><a data-toggle="pill" href="#gs" class="fullWidthDropdown genesisSkyfall">Genesis Skyfall</a></li>
                                            <li><a data-toggle="pill" href="#cos" class="fullWidthDropdown codeOfSwords">Code of Swords</a></li>
                                            <li><a data-toggle="pill" href="#r" class="fullWidthDropdown revolution">Revolution</a></li>
                                            <li><a data-toggle="pill" href="#otos" class="fullWidthDropdown onTheOtherSide">On the Other Side</a></li>
                                            <li><a data-toggle="pill" href="#goanw" class="fullWidthDropdown godOfANewWorld">God of a New World</a></li>
                                            <li><a data-toggle="pill" href="#007X" class="fullWidthDropdown XIII">007: XIII</a></li>
                                            <li><a data-toggle="pill" href="#afw" class="fullWidthDropdown aFullmetalWorld">A Fullmetal World</a></li>
                                            <li><a data-toggle="pill" href="#tcatd" class="fullWidthDropdown theCatAndTheDevil">The Cat & The Devil</a></li>
                                            <li><a data-toggle="pill" href="#ftp" class="fullWidthDropdown fightThePower">Fight the Power</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle btn btn-default pillTabs" data-toggle="dropdown" href="#">2006-2007 <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a data-toggle="pill" href="#fa" class="fullWidthDropdown fullmetalAlchemist">Fullmetal Alchemist</a></li>
                                            <li><a data-toggle="pill" href="#s" class="fullWidthDropdown scar">Scar</a></li>
                                            <li><a data-toggle="pill" href="#hi" class="fullWidthDropdown homunculi">Homunculi</a></li>
                                            <li><a data-toggle="pill" href="#fl" class="fullWidthDropdown fifthLab">Fifth Lab</a></li>
                                            <li><a data-toggle="pill" href="#b" class="fullWidthDropdown brother">Brother</a></li>
                                            <li><a data-toggle="pill" href="#d" class="fullWidthDropdown death">Death</a></li>
                                            <li><a data-toggle="pill" href="#w" class="fullWidthDropdown wrath">Wrath</a></li>
                                            <li><a data-toggle="pill" href="#dtth" class="fullWidthDropdown deathToTheHomunculi">Death to the Homunculi</a></li>
                                            <li><a data-toggle="pill" href="#fm" class="fullWidthDropdown fullmetalMemories">Fullmetal Memories</a></li>
                                            <li><a data-toggle="pill" href="#rm" class="fullWidthDropdown royMustang">Roy Mustang</a></li>
                                            <li><a data-toggle="pill" href="#tfoe" class="fullWidthDropdown theFacesOfEvil">The Faces of Evil</a></li>
                                            <li><a data-toggle="pill" href="#wri" class="fullWidthDropdown winryRizaIzumi">Winry Riza Izumi!</a></li>
                                            <li><a data-toggle="pill" href="#sof" class="fullWidthDropdown summaryOfFMA">Summary of FMA</a></li>
                                            <li><a data-toggle="pill" href="#ail" class="fullWidthDropdown accidentallyInLove">Accidentally in Love</a></li>
                                            <li><a data-toggle="pill" href="#ngu" class="fullWidthDropdown noGivingUp">No Giving Up</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                                <br>
                            <div class="tab-content">
                                <div id="intro" class="tab-pane fade in active">
                                    <h2>About AMVs</h2>
                                    <hr class="star-light">
                                    
                                    <p class="mediaDesc">I first began editing Animated Music Videos (AMVs) with <a href="https://support.microsoft.com/en-us/help/14220/windows-movie-maker-download" target="_blank">Windows Movie Maker</a> in 2006. I went to anime conventions and saw a community of people who made them and I thought I'd give it a try. None of them were all that great or won any awards but it was interesting. During this time I switched from using Windows Movie Maker to <a href="http://www.techspot.com/downloads/5727-adobe-premiere-free.html" target="_blank">Adobe Premiere Pro 2.0</a>. I stopped making them in 2007.</p>
                                    
                                    <p class="mediaDesc">Then when I got into college in 2011 I thought I'd give it another shot. This time I started with <a href="https://www.bhphotovideo.com/c/product/765427-REG/Adobe_65107693_Premiere_Pro_CS5_5_for.html" target="_blank">Adobe Premiere CS5.5</a>, and the first video I made won runner up at a contest for an award and I realized I must have improved. So I've kept making them and over the past five years I've won several awards and continued to immerse myself in this community of video editors.</p>
                                    
                                    <p class="mediaDesc">One thing you will notice here is that in addition to the youtube links I will provide, there are also links to a site called <a href="http://www.animemusicvideos.org/home/home.php" target="_blank">AnimeMusicVideos.org</a>. This is the primary hub and community for AMVs and I'm an active member within this community. You must have an account in order to access videos from this site, but it is the central location where most people put their AMVs online.</p>
                                    
                                    <p class="centerText">Currently I edit AMVs with <a href="http://www.adobe.com/creativecloud.html" target="_blank">Adobe Creative Cloud's</a> version of Adobe Premiere.</p>
                                </div>
                                
                                <div id="tbyo" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="theBloodYouOweVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>The Blood You Owe (2021)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">AWA 2021 Pro-Best Drama Nomination</span>
                                            
                                            <p class="centerText"><a href="https://www.animemusicvideos.org/members/members_videoinfo.php?v=208967" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="mediaDesc">This is an AMV I submitted to <a href="http://awa-con.com/" target="_blank">Anime Weekend Atlanta's</a> <a href="https://awa-con.com/the-video-art-track/" target="_blank">Peer Review Online (PRO)</a> Contest in 2021 and it was nominated for the <i>Best Drama</i> Award.</p>
                                            
                                            <p class="mediaDesc"></p>

                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=BboMpayJomw" target="_blank"><p class="list-group-item-text">Billie Eilish - No Time To Die</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=8423" target="_blank"><p class="list-group-item-text">Evangelion: 3.0+1.0 Thrice Upon a Time</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=8422" target="_blank"><p class="list-group-item-text">Evangelion: 3.0 You Can (Not) Redo</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=8421" target="_blank"><p class="list-group-item-text">Evangelion: 2.0 You Can (Not) Advance</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=8420" target="_blank"><p class="list-group-item-text">Evangelion: 1.0 You Are (Not) Alone</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="tm" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="themVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Them (2020)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">Webcon 2020-Best Trailer</span>
                                            
                                            <p class="centerText"><a href="https://www.animemusicvideos.org/members/members_videoinfo.php?v=206250" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="mediaDesc">This is an AMV that I submitted to <a href="https://www.instagram.com/webcon_2020/?hl=fr" target="_blank">Webcon's</a> <a href="https://youtube.com/playlist?list=PLt1RS-qW_0QiW5SndPhRx_oTC3edQrMtV" target="_blank">AMV contest</a> in 2020 and it won the <i>Best Trailer</i> Award.</p>
                                            
                                            <p class="mediaDesc">So this is actually a subset of a previous video I made <a href="https://youtu.be/2bDG_4Y20IE" target="_blank">Convergence</a>, that I extracted for multiple reasons. First off, it works perfectly great on its own as a standalone piece, especially compared to the far more experimental nature of the video it was originally a part of. Second, I was told by more than one person that it was the most compelling part of <i>Convergence</i> and who am I to deny that? Finally, more than one person has mentioned that Convergence as it is is quite long, so much so that I was unable to submit it to a lot of contests back in 2020 so I had to create this almost out of necessity in order to compete.</p>
                                            
                                            <p class="mediaDesc">Most of the content is the same, the <i>Invasion</i> text has been taken out due to it's lack of relevance in this version of the product, as has the <i>1</i> that was part of the 3...2...1...Convergence countdown in the original piece. The shot of the Rei dolls at <a href="https://youtu.be/BE4R7-I3iHI?t=92" target="_blank">1:32</a> has been switched to the edited barbie-doll counterpart version from the TV-edit due to numerous complaints about nudity (which is silly given the rest of the violent content in the video). Lastly, the shot of the rei clones that was at <a href="https://youtu.be/2bDG_4Y20IE?t=196" target="_blank">3:16</a> in the original <i>Convergence</i> edit (now at <a href="https://youtu.be/BE4R7-I3iHI?t=77" target="_blank">1:17</a> in <i>Them</i>) has been switched to a shot of the Evangelion having a convulsion so that the rei clones shot could be added as a coda at the end.</p>
                                            
                                            <p class="mediaDesc">I still prefer <i>Convergence</i> as a whole, but I recognize that this piece of it has artistic value and was worth releasing separately. Oh and if it wasn't clear, <i>Them</i> is a parody on the original trailer's movie title <i>Us</i>, since the Rei clones aren't copies of the people they're killing like they are in the film.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=hNCmb-4oXJA" target="_blank"><p class="list-group-item-text">Universal - Us Trailer (Original)</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=49" target="_blank"><p class="list-group-item-text">Neon Genesis Evangelion</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=419" target="_blank"><p class="list-group-item-text">End of Evangelion</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="ds" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="dynamicStruggleVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Dynamic Struggle (2019)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">Youmacon 2019 Entry</span>
                                            
                                            <p class="centerText"><a href="https://www.animemusicvideos.org/members/members_videoinfo.php?v=206248" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="mediaDesc">This is an AMV that I submitted to <a href="https://www.youmacon.com/" target="_blank">Youmacon's</a> <a href="https://fanarttheater.com/" target="_blank">Fan Art Theater</a> contest in 2019. I also submitted this to <a href="http://awa-con.com/" target="_blank">Anime Weekend Atlanta's</a> <a href="https://awa-con.com/the-video-art-track/" target="_blank">Expo</a> Contest in 2020.</p>
                                            
                                            <p class="mediaDesc">I was inspired to make this video one time when I was watching the <a href="https://www.youtube.com/watch?v=HZ7PAyCDwEg" target="_blank">Hobbs and Shaw trailer</a>, and I knew it was the perfect tone for a Dragonball Z (DBZ) video. In the past I'd only done <a href="https://www.youtube.com/watch?v=BzwUEYyrPWE" target="_blank">this video</a> a couple years earlier, but that was a parody/homage. This was my first actual attempt at making a DBZ video taken seriously.</p>
                                            
                                            <p class="mediaDesc">I knew from the beginning I wanted to do an old vs new aesthetic, combining the earliest fight scenes from DBZ with the newest film released to date. So that influenced a lot of the shot comparisons that I have throughout. I also tried to match the lyrics as much as I could, which I think is pretty atypical for an action video at least in this community, but given that's not my usual forte anyways I wanted to try to stand out a bit more in that respect. I know the first half is stronger than the second, though I think it's pretty balanced overall - I still cut a pretty sizeable chunk of the song out to get this down to a manageable length for this type of video. </p>
                                            
                                            <p class="mediaDesc">I still have other DBZ ideas for videos in the future, so this is just the first of many that I plan to create.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=jWA7cqv02Ig" target="_blank"><p class="list-group-item-text">TheUnder - Fight Ft. Panther</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=244" target="_blank"><p class="list-group-item-text">Dragonball Z</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=20750" target="_blank"><p class="list-group-item-text">Dragonball Super: Broly</p></a></li> 
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=133" target="_blank"><p class="list-group-item-text">Dragonball Z: The History of Trunks</p></a></li> 
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="conv" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="convergenceVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Convergence (2019)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">AWA 2019 Masters Entry</span>
                                            
                                            <p class="centerText"><a href="https://www.animemusicvideos.org/members/members_videoinfo.php?v=206249" target="_blank">AMV.org Link</a></p>
                                            <!--
                                            <img src="/images/music-videos/amv/afo-2013-best-drama.jpg" class="img-responsive" alt="Anime Festival Orlando 'Best Drama' award plaque for 'God of a New World' in 2013">
                                            -->
                                            <p class="mediaDesc">This is an AMV that I submitted to <a href="http://awa-con.com/" target="_blank">Anime Weekend Atlanta's</a> <a href="https://awa-con.com/the-video-art-track/" target="_blank">Masters</a> Contest in 2019.</p>
                                            
                                            <p class="mediaDesc">This is the first video I've made that feels like a spiritual sequel to <a href="https://www.youtube.com/watch?v=qzPjsh7ODRE" target="_blank">On the Other Side</a>, due to the skit-like nature of the way the video is organized. Though this is a more focused version of that idea it's still very experimental and definitely skew more towards Drama and Horror rather than Comedy.</p>
                                            
                                            <h3><u>Character Breakdown</u></h3>
                                            
                                            <p class="mediaDesc">The video focuses on three characters: Shinji, Asuka and Rei; the climax brings them all together in a <i>convergence</i> that changes them forever. Each of the character sections has a name that is in theme with the subject matter at hand: Isolation, Innocence and Invasion. There is also numbers seen over the course of the video signifying the countdown to convergence.</p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://youtu.be/2bDG_4Y20IE?t=11" target="_blank"><p class="list-group-item-text">Isolation-Shinji (0:12-1:12)</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/2bDG_4Y20IE?t=73" target="_blank"><p class="list-group-item-text">Innocence-Asuka (1:13-1:54)</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/2bDG_4Y20IE?t=115" target="_blank"><p class="list-group-item-text">Invasion-Rei (1:55-3:43)</p></a></li> 
                                                <li class="list-group-item"><a href="https://youtu.be/2bDG_4Y20IE?t=224" target="_blank"><p class="list-group-item-text">Convergence (3:44-5:36)</p></a></li>
                                            </ul>
                                            
                                            <h3><u>Video/Audio Analysis</u></h3>
                                            
                                            <p class="mediaDesc">This was originally going to just be a music video set to the song that bookends the video, but over time I decided to make the character focused sections more distinct.</p>
                                                
                                            <p class="mediaDesc">The <b>Isolation (Shinji)</b> section is a mix of the song composed for the epilogue of Caprica mixed with dialogue from Ender's Game which is optimal due to the dual focus on child soldiers.</p> 
                                            
                                            <p class="mediaDesc">The <b>Innocence (Asuka)</b> section is a mix of the song composed for the climax of Carrie mixed with dialogue from the same film but from the sequences where Carrie is in conflict with her mother which works really well in my opinion since Asuka has her troubled backstory with her mother as well.</p> 
                                            
                                            <p class="mediaDesc">The <b>Invasion (Rei)</b> section is a change of pace because it actually takes the trope of turning movie trailers into AMV parodies and turns it on it's head a bit by making it a character piece in this larger machine I'm building. Also beyond that I modified the <i>Us</i> trailer audio at times and interjected my own choices from the film (making it an alternate trailer of sorts). There is an aspect ratio shift at this point in the video, which I did because of the inclusion of End of Evangelion and Death & Rebirth, both of which are in 16:9. I tried to make this more natural through the use of the trailer titlecard.</p>
                                                
                                            <p class="mediaDesc">The <b>Climax (Convergence)</b> returns to the initial theme from Caprica and the use of Ender's Game and brings the children together in what I feel is the most effective pairing (and was the original idea/song for the video to begin with).</p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://youtu.be/2bDG_4Y20IE" target="_blank"><p class="list-group-item-text">Caprica epilogue w/Ender's Game dialogue (0:00-1:12)</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/2bDG_4Y20IE?t=73" target="_blank"><p class="list-group-item-text">Carrie Climax w/Carrie dialogue (1:13-1:54)</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/2bDG_4Y20IE?t=115" target="_blank"><p class="list-group-item-text">Modified <i>Us</i> Trailer (1:55-3:43)</p></a></li> 
                                                <li class="list-group-item"><a href="https://youtu.be/2bDG_4Y20IE?t=224" target="_blank"><p class="list-group-item-text">Return to Caprica/Ender's Game themes/dialogue (3:44-5:36)</p></a></li>
                                            </ul>
                                            
                                            <p class="mediaDesc">Overall this was an interesting experiment I attempted that was probably a bit too ambitious for it's own good, but I'm still proud of what I achieved with it.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://youtu.be/cq6d0QEsg9U" target="_blank"><p class="list-group-item-text">Bear McCreary - The Differently Sentient (Caprica)</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/M2FtkqthTC4" target="_blank"><p class="list-group-item-text">Pino Donaggio - Contest Winners (Carrie)</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/hNCmb-4oXJA" target="_blank"><p class="list-group-item-text">Universal - Us Trailer (Original)</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=49" target="_blank"><p class="list-group-item-text">Neon Genesis Evangelion</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=418" target="_blank"><p class="list-group-item-text">Neon Genesis Evangelion: Death & Rebirth</p></a></li>
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=419" target="_blank"><p class="list-group-item-text">End of Evangelion</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>

                                <div id="ht" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="theHeartVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>The Heart (2017)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">Youmacon 2017 - Best in Show && AWA 2017 Masters Entry</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=203066" target="_blank">AMV.org Link</a></p>
                                            <!--
                                            <img src="/images/music-videos/amv/afo-2013-best-drama.jpg" class="img-responsive" alt="Anime Festival Orlando 'Best Drama' award plaque for 'God of a New World' in 2013">
                                            -->
                                            <p class="mediaDesc">This is an AMV that I submitted to <a href="http://www.fanarttheater.com/" target="_blank">Youmacon's</a> Fan Art Theater contest in 2017 and it won the <i>Best in Show</i> Award. I also submitted this to <a href="http://awa-con.com/" target="_blank">Anime Weekend Atlanta's</a> <a href="https://awa-con.com/the-video-art-track/" target="_blank">Masters</a> Contest in 2017.</p>
                                            
                                            <p class="mediaDesc">This is the third video that I have made using a song from the Nier soundtrack since I began making Nier videos back in 2012 (the other two are <a href="https://www.youtube.com/watch?v=7cLub-nNiWs" target="_blank">A Fullmetal World</a> and <a href="https://www.youtube.com/watch?v=dFkLO1p-8bw" target="_blank">God of a New World</a>). While there is no direct connection between these three videos, I feel that it is the final piece in what I originally wanted to accomplish when I first heard the <a href="https://en.wikipedia.org/wiki/Nier_(video_game)" target="_blank">Nier</a> soundtrack.</p>
                                            
                                            <h3><u>Audio Section</u></h3>
                                            
                                            <p class="mediaDesc">I spent a lot of time setting up the audio for this because the sections of the songs I use are split all across the video: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=N6_U2znvrT8" target="_blank"><p class="list-group-item-text">The Dark Colossus Destroys All (0:00-0:13)</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?time_continue=14&v=N6_U2znvrT8" target="_blank"><p class="list-group-item-text">Song of the Ancients: Hollow Dreams (0:14-0:57)</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?time_continue=58&v=N6_U2znvrT8" target="_blank"><p class="list-group-item-text">Song of the Ancients: Fate (0:58-2:39)</p></a></li> 
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?time_continue=160&v=N6_U2znvrT8" target="_blank"><p class="list-group-item-text">Song of the Ancients: Atonement (2:40-2:42)</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?time_continue=163&v=N6_U2znvrT8" target="_blank"><p class="list-group-item-text">Song of the Ancients: Fate (2:43-3:42)</p></a></li> 
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?time_continue=223&v=N6_U2znvrT8" target="_blank"><p class="list-group-item-text">Song of the Ancients: Atonement (3:43-3:57)</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?time_continue=238&v=N6_U2znvrT8" target="_blank"><p class="list-group-item-text">Song of the Ancients: Fate (3:58-4:32)</p></a></li>
                                            </ul>
                                            
                                            <p class="mediaDesc">The first song was used in the opening to introduce the seven different pieces of source material, each featuring foreshadowing clips that are all purposefully used again later in the video. The other three songs are all different versions of the same song, known as "The Song of the Ancients." The first two were always part of my original plan, and the third is a new version from the sequel <a href="https://en.wikipedia.org/wiki/Nier:_Automata" target="_blank">Nier: Automata</a> that I incorporated after it released earlier in 2017.</p>
                                            
                                            <p class="mediaDesc">At some point when I was conceptualizing the video in my mind I remembered something from an AMV panel at a con called JACON that I went to back in 2006 when I first started editing. He told me that if you ever make a video with a foreign language, <i>you gotta have subtitles</i>. With most videos you have a song that has english lyrics, so even if they don't know what's going on they have something to help ground them and help make sense of the imagery.</p>
                                            
                                            <img src="/images/music-videos/amv/the-heart/fansub.jpg" class="img-responsive" alt="An example of a fansubbed anime opening">
                                            
                                            <p class="mediaDesc">Initially, I decided to take this one step further and in addition to having lyrics for the english subtitles, I added some karaoke as well for the original language. Now this was not a new idea: <a href="https://en.wikipedia.org/wiki/Fansub" target="_blank">fansubbers</a> have been doing this for a very long time, but I had no idea how complicated it actually is to create.</p> 
                                            
                                            <a href="/images/music-videos/amv/the-heart/original-images/aegisub.PNG" target="_blank">
                                                <img src="/images/music-videos/amv/the-heart/aegisub.jpg" class="img-responsive" alt="A screenshot of my project for creating the subtitles in Aegisub">
                                            </a>
                                            
                                            <p class="centerText">Click to see larger version</p>
                                            
                                            <p class="mediaDesc">A good friend of mine named <b>Alex Diaz</b> introduced me to a tool that I used for these subtitles called <a href="https://github.com/Aegisub/Aegisub" target="_blank">Aegisub</a>. He taught me how to use it to accomplish several different tasks, including: when the subtitles would begin/end and then specifically for the karaoke I had to time the beat for each individual syllable. There were lyrics online for the karaoke that someone had written, but when we tried to break these into syllables it didn't work; so we spent a really long time playing two seconds of the video, pausing it and wondering <i>what on earth was that?</i> So we basically had to completely rewrite the lyrics for a foreign language that doesn't exist.</p> 
                                                <br>
                                            <div class="row">
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-8">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <div id="theHeartKaraokeVideo"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div>
                                                <br>                                            
                                            <p class="mediaDesc">I was very excited when Alex and I first got this working, but I hadn't anticipated the primary problem: The viewer doesn't know where to look. The problem begins when you introduce the karaoke because the effects inherently draw your eyes away from the video itself and so you can't appreciate both at the same time.</p> 

                                            <p class="mediaDesc">So that didn't really work out as well as I intended, so I removed the karaoke and decided to focus on just the english subtitles. But I wanted to share this version of the video as well because I spent a long time on it and I think this version still has merit.</p>

                                            <p class="mediaDesc">The song of the ancients is in a forgotten language in the universe of Nier that is a composite language that takes elements from English, Japanese, Spanish, Portuguese, Italian and French. Because of this there is no official english translation for this song. I adapted the lyrics from a fan translation written by <a href="https://www.youtube.com/watch?v=htv6B-K_jOc" target="_blank">Cheryl Starr</a>. The lyrics were heavily rewritten from her version compared to the version that is currently in the video now.</p>
                                            
                                            <h3><u>Video Section</u></h3>
                                            
                                            <p class="centerText">The video is split into seven different parts:</p> 

                                            <p class="centerText"><a href="https://www.youtube.com/watch?v=N6_U2znvrT8" target="_blank">0:00-0:13 Relationship Introductions/Foreshadowing</a></p>
                                            
                                            <p class="mediaDesc">The first section is dedicated to introducing the six different relationships depicted in the video between:</p> 
                                                
                                            <ul class="list-group">
                                                <li class="list-group-item cursorFix"><p class="list-group-item-text"><b>Naruto/Sasuke/Sakura</b> in <i>Naruto</i></p></li>
                                                <li class="list-group-item cursorFix"><p class="list-group-item-text"><b>Ichigo/Ulquiorra/Orihime</b> in <i>Bleach</i></p></li>
                                                <li class="list-group-item cursorFix"><p class="list-group-item-text"><b>Ed/Mother</b> in <i>Fullmetal Alchemist</i></p></li>
                                                <li class="list-group-item cursorFix"><p class="list-group-item-text"><b>Simon/Nia</b> in <i>Gurren Lagann</i></p></li>
                                                <li class="list-group-item cursorFix"><p class="list-group-item-text"><b>Kirito/Asuna</b> in <i>Sword Art Online</i></p></li>
                                                <li class="list-group-item cursorFix"><p class="list-group-item-text"><b>Kaede/Asa/Rin</b> in <i>Shuffle!</i></p></li>
                                                <li class="list-group-item cursorFix"><p class="list-group-item-text"><b>Kaito/Ichika</b> in <i>Waiting in the Summer</i></p></li>
                                            </ul>
                                            
                                            <p class="mediaDesc">In addition to introducing these relationships, this section also includes foreshadowing: each clip in this opening segment will be used again at a future point in the video once the appropriate context has been reached.</p> 

                                            <p class="centerText"><a href="https://youtu.be/N6_U2znvrT8?t=14s" target="_blank">0:14-0:57 Expressed Intimacy/Initial Conflicts</a></p>
                                            
                                            <p class="mediaDesc">This next section is focused around showcasing each couple during the calm before the approaching storm and showing their partner's initial issues (or lack thereof). For example, in <i>Naruto</i> Sakura wants Naruto and Sasuke to stop fighting; in <i>Fullmetal Alchemist</i> Ed is lonely because of the loss of his mother; and in <i>Bleach</i> Orihime wishes Ichigo wouldn't keep putting himself in dangerous situations. Then the following moments are happier, such as Simon's first wonderous introduction to Nia in <i>Gurren Lagann</i>; Kirito and Asuna relaxing in <i>Sword Art Online</i>; Asa teasing Rin in <i>Shuffle!</i>; and Ichika expressing herself to Kaito in <i>Waiting in the Summer</i>. This section concludes the way it began with <i>Naruto</i>, however it's focused around Sakura wanting Sasuke to let her get closer to him. How he responds is what leads into the next section.</p> 
                                            
                                            <p class="mediaDesc">It's also at this point that the aforementioned subtitles are introduced. These will continue to be used throughout the video to help establish a thoroughline between these complex narratives.</p>

                                            <p class="centerText"><a href="https://youtu.be/N6_U2znvrT8?t=58s" target="_blank">0:58-1:12 Kidnapping and Betrayal</a></p>
                                           
                                            <p class="mediaDesc">The next section begins with a bang, with <i>Naruto</i> as Sasuke shatters his relationship with Naruto and Sakura by leaving. From there we move into <i>Bleach</i> as Orihime is captured by Ulquiorra because of Ichigo's negligence towards her. <i>Fullmetal Alchemist's</i> expression of conflict is more of a dive into the past as we witness Ed's first attempt to bring his mother back which forces him into the gate. Coming back to <i>Gurren Lagann</i>, it becomes clear that Simon and his friends are being locked away and Nia is regretful that she can't do anything to help them. Once we return to <i>Sword Art Online</i>, it appears that Asuna has been trapped in a world of fairies, a bird in the cage as it seems. Once we're back in <i>Shuffle!</i>, Asa has noticed that Kaede is just a bit too familiar with Rin and expresses affirmative action; Kaede sees this and is horrified. Finally returning to <i>Waiting in the Summer</i>, Ichika has been captured by a mysterious life form, and this leads into the next section.</p> 

                                            <p class="centerText"><a href="https://youtu.be/N6_U2znvrT8?t=1m13s" target="_blank">1:13-2:13 Rescue and Conflict Complexity</a></p>
                                            
                                            <p class="mediaDesc">Now that all of these conflicts have been introduced I'm going to be a little less specific: this is the point at which all attempts at rescue begin. Everyone is beginning the journey to reclaim their loved ones or friends, and some are even reunited as early as this opening stage, while others are just beginning the long quest that lies before them. In addition to this, a few key moments occur: a recurring conflict is introduced between Orihime and Ulquiorra regarding the existence of the heart in a spiritual context; meanwhile, it's revealed that Asuna has actually been trapped in a coma ever since she was separated from Kirito, and her coma is being visually illustrated through the previously mentioned fairy world.</p>
                                            
                                            <p class="mediaDesc">The conclusion of this section establishes a few more important things. A passage of time is reflected as Simon and Nia are shown to have grown up, and the climax of Kaito and Ichika's story occurs as they are separated and henceforth become star-crossed lovers. The ending of this section is effectively the halfway point of the video as well. </p> 

                                            <p class="centerText"><a href="https://youtu.be/N6_U2znvrT8?t=2m14s" target="_blank">2:14-3:11 Contemplation and Renewed Vigor</a></p> 

                                            <p class="mediaDesc">By moving forward, we actually begin to move backwards now. The first part of this portion is all about memories and childhood relationships. Kaito looks back on old videos of Ichika, heartbroken now that she is gone forever. Kaede's feelings continue to boil over the budding relationship between Rin and Asa, even though she's the one that grew up with Rin. Sakura and Naruto both look back upon their bonds with Sasuke, and the conflict between Naruto and Sasuke begins.
                                                
                                            <p class="mediaDesc">The second part of this portion continues the conflicts that have already been established. Ichigo continues to hold steadfast against Ulquiorra and all Orihime can do is watch the chaos unfold. Similarly, Nia begins to lose herself to forces out of her control, and all Simon can do is watch as she is whisked away. The climax of Ed and his mother's story occurs now as we witness the moment of her death and the pain and torment Ed goes through in his mind after losing her.</p>
                                            
                                            <p class="centerText"><a href="https://youtu.be/N6_U2znvrT8?t=3m12s" target="_blank">3:12-4:12 Climax on top of Climax</a></p> 

                                            <p class="mediaDesc">It is now that we enter the climax of the entire video itself, ushered in by the epic sweep of Gurren Lagann. All the rest of the climaxes now occur in subsequent fashion: Nia is rescued by Simon and Kaede finally confronts Asa about her relationship with Rin. The differences between Ichigo and Ulquiorra begin to blend together for Orihime as she reaches out for Ulquiorra's hand once more. The childhood bond between Sasuke and Naruto is shattered forever as Naruto attacks Sasuke. Kirito, realizing he is now within reach of the man that has caused Asuna so much pain lashes out to destroy him. Finally, Sakura attempts to stop Naruto and Sasuke once more, just as in the beginning, before they destroy each other; meanwhile, Ichigo and Ulquiorra's conflict comes to an end and Ulquiorra reaches out for Orihime one last time before he fades away forever.</p>
                                            
                                            <p class="centerText"><a href="https://youtu.be/N6_U2znvrT8?t=4m13s" target="_blank">4:13-4:32 Epilogue</a></p> 

                                            <p class="mediaDesc">We now come to the end, the fighting is over and everyone is at rest. For better or worse, their lives will go on and they will have to face each other for what they've done, but hopefully now they can remember the reason why all of this started in the first place: all of the pain, all of the hardship they faced. It was all for the one thing that connects our relationships each and every day: the heart.</p>
                                            
                                            
                                            
                                            <a href="/images/music-videos/amv/the-heart/original-images/the-heart.jpg" target="_blank">
                                                <img src="/images/music-videos/amv/the-heart/the-heart.jpg" class="img-responsive" alt="A shot from the manga for Bleach that inspired my video depicting the debate between Ulquiorra and Orihime about the heart"> 
                                            </a>
                                            
                                            <p class="centerText">Click to see larger version</p>
                                            
                                            <p class="centerText"><a href="https://youtu.be/N6_U2znvrT8?t=4m33s" target="_blank">4:33-5:56 Credits</a></p>
                                            
                                            <p class="mediaDesc">This is a pretty big project that I've been wanting to make for four years, and this time I thought I'd try something a little different. I know that credits are generally frowned upon in the AMV community, but this portion isn't meant for competition: simply the way I wanted to close things out. The track that is used is a retro version of the primary song that is in the video and the visuals reflect this as such. I found a retro theme online called and paid for the rights to use it for a single project. I integrated and modified these titles in After Effects to suit my purposes for this video. I am pleased with the results.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=sh0k6SUE4Ow" target="_blank"><p class="list-group-item-text">Keiichi Okabe - The Dark Colossus Destroys All</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=V8geJKhhIQ4" target="_blank"><p class="list-group-item-text">Keiichi Okabe & Emi Evans - Song of the Ancients: Hollow Dreams</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=5FaEtvA_11A" target="_blank"><p class="list-group-item-text">Keiichi Okabe & Emi Evans - Song of the Ancients: Fate</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=QNmui0Prrls" target="_blank"><p class="list-group-item-text">Keiichi Okabe & Emi Evans - Song of the Ancients: Atonement</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=m1oFz-dDIXM" target="_blank"><p class="list-group-item-text">Keiichi Okabe - Hacking Track-Song of the Ancients: Atonement</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=4240" target="_blank"><p class="list-group-item-text">Bleach</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=10216" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist: Brotherhood</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=6698" target="_blank"><p class="list-group-item-text">Gurren Lagann</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=1825" target="_blank"><p class="list-group-item-text">Naruto</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=5375" target="_blank"><p class="list-group-item-text">Shuffle!</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=13448" target="_blank"><p class="list-group-item-text">Waiting in the Summer</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="lpdbz" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="linkinParkDBZVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Linkin Park DBZ (2017)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">AWA 2017 Pro-Troll entry</span>
                                            
                                            <p class="centerText"><a href="https://www.animemusicvideos.org/members/members_videoinfo.php?v=203060" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="mediaDesc">This is an AMV that I submitted to <a href="http://awa-con.com/" target="_blank">Anime Weekend Atlanta's</a> <a href="https://awa-con.com/the-video-art-track/" target="_blank">Professional Awards</a> Contest in 2017 and it was a joke entry.</p>
                                            
                                            <p class="mediaDesc">In the 1990s, it became very common in AMV contests for people to pair a popular fighting anime called Dragonball Z with songs from Linkin Park. Since my early editing years were filled with Fullmetal Alchemist, I never had even considered making one of these videos.</p>

                                            <p class="mediaDesc">So now that Dragonball has come back into the spotlight with the newer movies and <a href="http://www.imdb.com/title/tt4644488/" target="_blank">Dragonball Super</a>, it seemed like an appropriate time for me to make a video parodying those older videos that used to be so prevalent. The unfortunate death of Linkin Park singer Chester Bennington only made the idea more relevant, although I had planned on making it before that happened.</p>
                                            
                                            <p class="mediaDesc">Originally this was just going to feature random fight scenes, but while making it I realized it worked best as a Frieza character profile/action mashup with a twist ending. This is not intended to be a serious video.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=eVTXPUF4Oz4" target="_blank"><p class="list-group-item-text">Linkin Park - In the End</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=14887" target="_blank"><p class="list-group-item-text">Dragon Ball Z: Battle of Gods</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=16549" target="_blank"><p class="list-group-item-text">Dragon Ball Z: Resurrection 'F'</p></a></li>
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
                                            <span class="skills">AWA 2016 Pro-Best Character Profile Nomination && Agamacon 2017-Best Drama</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=201570" target="_blank">AMV.org Link</a></p>
                                            
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <img src="/images/music-videos/amv/awa-pro-2016-best-character-profile.jpg" class="img-responsive" alt="Anime Weekend Atlanta Professional Awards 'Best Character Profile' nomination card in 2016">
                                                </div>
                                                
                                                <div class="col-lg-4">
                                                    <img src="/images/music-videos/amv/agamacon-2017-best-drama.jpg" class="img-responsive" alt="Agamacon 'Best Drama' award trophy in 2017">
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            <p class="mediaDesc">This is an AMV that I submitted to <a href="https://x.com/agamacon" target="_blank">Agamacon's</a> AMV Contest in 2017 and it won the <i>Best Drama</i> award. I also submitted this to <a href="http://awa-con.com/" target="_blank">Anime Weekend Atlanta's</a> <a href="https://awa-con.com/the-video-art-track/" target="_blank">Professional Awards</a> Contest in 2016 and it was nominated for the <i>Best Character Profile</i> Award.</p>
                                            
                                            <p class="mediaDesc">I've had this idea in mind ever since I first heard this song in the <a href="https://www.youtube.com/watch?v=Va1UPrFXHKA" target="_blank">Walking Dead Comic Con trailer for season six</a>, and I thought it was the perfect fit for a Mustang video. Originally it was going to be more about the Ishval war, but as I began incorporating Hughes, I realized the emotional core of the video clearly had to be about the friendship between Mustang and Hughes, and how Mustang dealt with his guilt after the tragedy of what happened.</p>

                                            <p class="mediaDesc">Because of this, after initiating their relationship, it became about Mustang tracking down everyone who was involved, from Lieutenant Maria Ross (though "his senses fooled him"), Lust and finally the fuhrer. I decided against involving Envy because I thought it would be too confusing to people who haven't seen the show, and that his final form would have lessened the dramatic impact of the climax. Because of this I combined the final fight with the fuhrer from the original with Mustang's descent into revenge from Brotherhood.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=XoQvbDROucQ" target="_blank"><p class="list-group-item-text">Hozier - Arsonist's Lullabye</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=10216" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist: Brotherhood</p></a></li> 
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=14079" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist: Brotherhood OVA 4: Yet Another Man's Battlefield</p></a></li> 
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
                                                    <img src="/images/music-videos/amv/awa-pro-2014-best-artistic-endeavor.jpg" class="img-responsive" alt="Anime Weekend Atlanta 'Best Artistic Endeavor' award card with photo for 'Genesis Skyfall' in 2014">
                                                </div>
                                                
                                                <div class="col-lg-3">
                                                    <img src="/images/music-videos/amv/awa-pro-2014-best-artistic-endeavor-award.jpg" class="img-responsive" alt="Anime Weekend Atlanta 'Best Artistic Endeavor' award trophy from Video Art Track in 2014">
                                                </div>
                                            </div>
                                            <a href="/pdf/music-videos/amv/shaken-not-stirred.pdf" target="_blank">
                                                <img src="/images/music-videos/amv/youmacon-2016-shaken-not-stirred.jpg" class="img-responsive" alt="Youmacon 'Shaken Not Stirred' award photo from Fan Art Theater for 'Genesis Skyfall' in 2016">
                                            </a>
                                            
                                            <p class="centerText">Click to see larger version</p>
                                            
                                            <p class="mediaDesc">This is an AMV that I submitted to <a href="http://awa-con.com/" target="_blank">Anime Weekend Atlanta's</a> (AWA) <a href="https://awa-con.com/the-video-art-track/" target="_blank">Professional Awards</a> Contest in 2014 and <a href="http://www.youmacon.com/" target="_blank">Youmacon's</a> <a href="http://www.fanarttheater.com/" target="_blank">Fan Art Theater Contest</a> in 2016. It won the <i>Best Artistic Endeavor</i> Award at AWA and the <i>Shaken Not Stirred</i> award at Youmacon.</p>
                                            
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
                                            
                                            <p class="mediaDesc">This is an AMV that I submitted to <a href="http://awa-con.com/" target="_blank">Anime Weekend Atlanta's</a> <a href="https://awa-con.com/the-video-art-track/" target="_blank">Professional Awards</a> Contest in 2014. Most of this was an experiment in seeing how exactly I could mimic each shot from the trailer.</p>
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
                                                    <img src="/images/music-videos/amv/code-of-swords/got-daenerys-targaryen.jpg" class="img-responsive imgFix" alt="Daenerys Targaryen from 'Game of Thrones' in a blue robe">
                                                    <h3>Daenerys Targaryen</h3>
                                                </div>
                                                <div class="col-lg-3 col-xs-6">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-mance-rayder.jpg" class="img-responsive imgFix" alt="Mance Rayder from 'Game of Thrones' in a dark fur coat">
                                                    <h3>Mance Rayder</h3>
                                                </div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-xs-4 hidden-sm hidden-md hidden-lg"></div>
                                                <div class="col-lg-2 col-xs-4">      
                                                    <img src="/images/music-videos/amv/code-of-swords/sao-asuna.jpg" class="img-responsive imgFix" alt="Asuna from 'Sword Art Online' in a white top with a red skirt">
                                                    <h3>Asuna (SAO)</h3>
                                                </div>
                                                <div class="col-lg-2 col-xs-4"></div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-tyrion-lannister.jpg" class="img-responsive imgFix" alt="Tyrion Lannister from 'Game of Thrones' with a big scar across his face">
                                                    <h3>Tyrion Lannister</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/sao-kirito.jpg" class="img-responsive imgFix" alt="Kirito from 'Sword Art Online' in a dark blue outfit">
                                                    <h3>Kirito (SAO)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-1 hidden-xs"></div>
                                                <div class="col-lg-3 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-cersei-lannister.jpg" class="img-responsive imgFix" alt="Cersei Lannister from 'Game of Thrones' in a red dress">
                                                    <h3>Cersei Lannister</h3>
                                                </div>
                                                <div class="col-lg-1 hidden-xs"></div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-1 col-xs-2"></div>
                                                <div class="col-lg-3 col-xs-8">      
                                                    <img src="/images/music-videos/amv/code-of-swords/sao-leafa.jpg" class="img-responsive imgFix" alt="Leafa from 'Sword Art Online' in a green dress">
                                                    <h3>Leafa (SAO)</h3>
                                                </div>
                                                <div class="col-lg-1 col-xs-2"></div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-1 col-xs-2"></div>
                                                <div class="col-lg-3 col-xs-8">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-robb-stark.jpg" class="img-responsive" alt="Robb Stark from 'Game of Thrones' in a dark brown tunic">
                                                    <h3>Robb Stark</h3>
                                                </div>
                                                <div class="col-xs-2 hidden-sm hidden-md hidden-lg"></div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-3 hidden-xs"></div>
                                                <div class="col-lg-4 col-xs-12">
                                                    <img src="/images/music-videos/amv/code-of-swords/cg-suzaku.jpg" class="img-responsive imgFix" alt="Suzaku from 'Code Geass' in a white coat">
                                                    <h3>Suzaku (CG)</h3>
                                                              
                                                    <img src="/images/music-videos/amv/code-of-swords/sao-kirito.jpg" class="img-responsive imgFix" alt="Kirito from 'Sword Art Online' in a dark blue outfit">
                                                    <h3>Kirito (SAO)</h3>
                                                </div>
                                                <div class="col-lg-2 hidden-xs"></div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-tywin-lannister.jpg" class="img-responsive imgFix" alt="Tywin Lannister from 'Game of Thrones' in a black tunic">
                                                    <h3>Tywin Lannister</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-joffrey-baratheon.jpg" class="img-responsive imgFix" alt="King Joffrey Baratheon from 'Game of Thrones' in a golden tunic">
                                                    <h3>Joffrey Baratheon</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-commander-mormont.jpg" class="img-responsive imgFix" alt="Commander Mormont from 'Game of Thrones' in a black fur coat">
                                                    <h3>Commander Mormont</h3>
                                                </div>
                                                <div class="col-lg-2 hidden-xs"></div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-6 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/cg-lelouch.jpg" class="img-responsive imgFix" alt="Lelouch from 'Code Geass' with a magic red eye">
                                                    <h3>Lelouch (CG)</h3>
                                                </div>
                                                <div class="col-lg-2 hidden-xs"></div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-arya-stark.jpg" class="img-responsive imgFix" alt="Arya Stark from 'Game of Thrones' in a brown tunic">
                                                    <h3>Arya Stark</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/sao-silica.jpg" class="img-responsive imgFix" alt="Silica from Sword Art Online in a red and white outfit">
                                                    <h3>Silica (SAO)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-stannis-baratheon.jpg" class="img-responsive imgFix" alt="Stannis Baratheon from 'Game of Thrones' in a dark blue tunic">
                                                    <h3>Stannis Baratheon</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/cg-vv.jpg" class="img-responsive imgFix" alt="V.V. from 'Code Geass' in a purple outfit">
                                                    <h3>V.V. (CG)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-melisandre.jpg" class="img-responsive imgFix" alt="Melisandre from 'Game of Thrones' with red hair">
                                                        <h3>Melisandre</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/cg-cc.jpg" class="img-responsive imgFix" alt="C.C. from 'Code Geass' with green hair in a white outfit">
                                                    <h3>C.C. (CG)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-brienne.jpg" class="img-responsive imgFix" alt="Brienne of Tarth from 'Game of Thrones' in a black suit of armor">
                                                    <h3>Brienne of Tarth</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/sao-heathcliff.jpg" class="img-responsive imgFix" alt="Heathcliff from 'Sword Art Online' in a red suit of armor">
                                                    <h3>Heathcliff (SAO)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-daario-naharis.jpg" class="img-responsive imgFix" alt="Daario Naharis from 'Game of Thrones' in a dark brown tunic">
                                                    <h3>Daario Naharis</h3>
                                                </div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-3 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/sao-kuradeel.jpg" class="img-responsive imgFix" alt="Kuradeel from 'Sword Art Online' in a black tunic">
                                                    <h3>Kuradeel (SAO)</h3>
                                                </div>
                                                <div class="col-lg-3 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/sao-kirito.jpg" class="img-responsive imgFix" alt="Kirito from 'Sword Art Online' in a dark blue outfit">
                                                    <h3>Kirito (SAO)</h3>
                                                </div>
                                            </div>    
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-3 col-xs-6">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-catelyn-tully.jpg" class="img-responsive imgFix" alt="Catelyn Tully from 'Game of Thrones' in a dark outfit">
                                                    <h3>Catelyn Tully</h3>
                                                </div>
                                                <div class="col-lg-3 col-xs-6">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-talisa-stark.jpg" class="img-responsive imgFix" alt="Talisa Stark from 'Game of Thrones' in a dark dress">
                                                    <h3>Talisa Stark</h3>
                                                </div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/sao-sugu.jpg" class="img-responsive imgFix" alt="Sugu from 'Sword Art Online' in a light purple outfit with a red scarf">
                                                    <h3>Sugu (SAO)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-tormund-giantsbane.jpg" class="img-responsive imgFix" alt="Tormund Giantsbane from 'Game of Thrones' in a grey coat">
                                                    <h3>Tormund Giantsbane</h3>
                                                </div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-3 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/sao-klein.jpg" class="img-responsive imgFix" alt="Klein from 'Sword Art Online' in a red and black outfit">
                                                    <h3>Klein (SAO)</h3>
                                                </div>
                                                <div class="col-lg-3 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/sao-kirito.jpg" class="img-responsive imgFix" alt="Kirito from 'Sword Art Online' in a dark blue outfit">
                                                    <h3>Kirito (SAO)</h3>
                                                </div>
                                            </div>    
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-ygritte.jpg" class="img-responsive imgFix" alt="Ygritte from 'Game of Thrones' in a grey and brown fur coat">
                                                    <h3>Ygritte</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/cg-kallen.jpg" class="img-responsive imgFix" alt="Kallen from 'Code Geass' in a red and purple outfit">
                                                    <h3>Kallen (CG)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-3 col-xs-6">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-jon-snow.jpg" class="img-responsive imgFix" alt="Jon Snow from 'Game of Thrones' in a black fur coat">
                                                    <h3>Jon Snow</h3>
                                                </div>
                                                <div class="col-lg-3 col-xs-6">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-jaime-lannister.jpg" class="img-responsive imgFix" alt="Jaime Lannister from 'Game of Thrones' with a beard looking upset">
                                                    <h3>Jaime Lannister</h3>
                                                </div>
                                                <div class="col-lg-2 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-xs-4 hidden-sm hidden-md hidden-lg"></div>
                                                <div class="col-lg-4 col-xs-12">
                                                    <img src="/images/music-videos/amv/code-of-swords/sao-kirito.jpg" class="img-responsive imgFix" alt="Kirito from 'Sword Art Online' in a dark blue outfit">
                                                    <h3>Kirito (SAO)</h3>
                                                              
                                                    <img src="/images/music-videos/amv/code-of-swords/cg-lelouch.jpg" class="img-responsive imgFix" alt="Lelouch from 'Code Geass' with a magic red eye">
                                                    <h3>Lelouch (CG)</h3>
                                                </div>
                                                <div class="col-xs-4 hidden-sm hidden-md hidden-lg"></div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-bran-stark.jpg" class="img-responsive imgFix" alt="Bran Stark from 'Game of Thrones' in a dark tunic">
                                                    <h3>Bran Stark</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/cg-nunnally-lamperouge.jpg" class="img-responsive imgFix" alt="Nunnally from 'Code Geass' in a pink and white outfit with her eyes closed">
                                                    <h3>Nunnally (CG)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-margaery-tyrell.jpg" class="img-responsive imgFix" alt="Margaery Tyrell from 'Game of Thrones' in a tan dress showing cleavage">
                                                    <h3>Margaery Tyrell</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/cg-euphemia-li-britannia.jpg" class="img-responsive imgFix" alt="Euphy from 'Code Geass' in a white outfit looking solemn">
                                                    <h3>Euphy (CG)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-yara-greyjoy.jpg" class="img-responsive imgFix" alt="Yara Greyjoy from 'Game of Thrones' in a dark outfit looking troubled">
                                                    <h3>Yara Greyjoy</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/cg-villetta.jpg" class="img-responsive imgFix" alt="Villetta from 'Code Geass' with silver shining hair looking upset">
                                                    <h3>Villetta (CG)</h3>
                                                </div>
                                            </div>
                                                <hr>
                                            <div class="row">
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/got-myranda.jpg" class="img-responsive imgFix" alt="Myranda from 'Game of Thrones' in a dark blue dress with someone else's hand pulling at the dress">
                                                    <h3>Myranda</h3>
                                                </div>
                                                <div class="col-lg-4 col-xs-12 textContainer"><h3 class="valign">played by</h3></div>
                                                <div class="col-lg-4 col-xs-12">      
                                                    <img src="/images/music-videos/amv/code-of-swords/cg-cornelia-li-britannia.jpg" class="img-responsive imgFix" alt="Cornelia from 'Code Geass' with long purple hair looking confident">
                                                    <h3>Cornelia (CG)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="r" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="revolutionVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Revolution (2013)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">Knightrokon 2014-Best Editing && Mythicon 2013-Best Drama</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=194190" target="_blank">AMV.org Link</a></p>
                                            
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <img src="/images/music-videos/amv/knightrokon-2014-best-editing.jpg" class="img-responsive" alt="Knightrokon 'Best Editing' award certificate for 'Revolution' in 2014">
                                                </div>
                                                
                                                <div class="col-lg-5">
                                                    <img src="/images/music-videos/amv/mythicon-2013-best-drama.jpg" class="img-responsive" alt="Mythicon 'Best Drama' award plaque for 'Revolution' in 2013">
                                                </div>
                                            </div>
                                            
                                            <p class="mediaDesc">This is an AMV that I submitted to <a href="https://www.facebook.com/Knightrokon/" target="_blank">Knightrokon's</a> AMV Contest in 2014 and Mythicon's AMV Contest in 2013. It won the <i>Best Editing</i> Award at Knightrokon and the <i>Best Drama</i> award at Mythicon.</p>
                                            
                                            <p class="mediaDesc">I've used this song before, but I knew I wanted to combine Code Geass with the <a href="https://www.youtube.com/watch?v=Kq5KWLqUewc" target="_blank">trailer for Deus Ex: Human Revolution</a>, so I decided it was worth using again. The video begins similarly to the trailer, with a prologue featuring a different musical track (though for this one I pulled a track from the Code Geass series to achieve the effect I wanted), and then continues into the <i>Icarus</i> theme from Deus Ex afterwards. I decided against using the entirety of the trailer dialogue and only chose specific portions to be interspersed throughout that I deemed relevant to the story I was trying to tell.</p>

                                            <p class="mediaDesc">The biggest techniques I focused on in this video were smooth transitions with continuous fluid motion. Examples of these can be seen at the following times:</p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://youtu.be/yDI4vCm2DcE?t=4s" target="_blank"><p class="list-group-item-text">0:04-0:06</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/yDI4vCm2DcE?t=1m4s" target="_blank"><p class="list-group-item-text">1:04-1:07</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/yDI4vCm2DcE?t=2m1s" target="_blank"><p class="list-group-item-text">2:01-2:03</p></a></li> 
                                                <li class="list-group-item"><a href="https://youtu.be/yDI4vCm2DcE?t=2m37s" target="_blank"><p class="list-group-item-text">2:37-2:46-KEY EXAMPLE</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/yDI4vCm2DcE?t=2m49s" target="_blank"><p class="list-group-item-text">2:49-3:03-KEY EXAMPLE</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/yDI4vCm2DcE?t=3m13s" target="_blank"><p class="list-group-item-text">3:13-3:18</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/yDI4vCm2DcE?t=3m44s" target="_blank"><p class="list-group-item-text">3:44-3:46</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/yDI4vCm2DcE?t=3m50s" target="_blank"><p class="list-group-item-text">3:50-3:52</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/yDI4vCm2DcE?t=4m3s" target="_blank"><p class="list-group-item-text">4:03-4:07</p></a></li>
                                            </ul>
                                            
                                            <p class="mediaDesc">Other techniques I attempted to implement include matching segments from the original Deus Ex trailer and lip synching.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=AH3-nPoFIfI" target="_blank"><p class="list-group-item-text">Nakagawa Kotaru - Siegfried</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=can0xuO9IvE" target="_blank"><p class="list-group-item-text">Michael McCann - Icarus (Main Theme)</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features trailer audio from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=Kq5KWLqUewc" target="_blank"><p class="list-group-item-text">Deus Ex: Human Revolution - Cinematic Trailer</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=6704" target="_blank"><p class="list-group-item-text">Code Geass: Lelouch of the Rebellion</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=9173" target="_blank"><p class="list-group-item-text">Code Geass: Lelouch of the Rebellion R2</p></a></li> 
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="otos" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="onTheOtherSideVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>On the Other Side (2013)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">Florida Supercon 2013-Second Place && Mythicon 2013-Best Comedy</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=192474" target="_blank">AMV.org Link</a></p>
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="/images/music-videos/amv/florida-supercon-2013-second-place.jpg" class="img-responsive" alt="Florida Supercon 'Second Place' award certificate for 'On the Other Side' in 2013">
                                                </div>
                                                
                                                <div class="col-lg-6">
                                                    <img src="/images/music-videos/amv/mythicon-2013-best-comedy.jpg" class="img-responsive" alt="Mythicon 'Best Comedy' award plaque for 'On the Other Side' in 2013">
                                                </div>
                                            </div>
                                            
                                            <p class="mediaDesc">This is an AMV that I submitted to <a href="http://floridasupercon.com/" target="_blank">Florida Supercon's</a> AMV Contest in 2013 and Mythicon's AMV Contest in 2013. It won the <i>Second Place</i> Award at Knightrokon and the <i>Best Comedy</i> award at Mythicon.</p>
                                            
                                            <p class="mediaDesc">This is the first and only comedy video I've ever made, combining a variety of skits and ideas I had to make a longer-form version of the typical <a href="http://tvtropes.org/pmwiki/pmwiki.php/WebVideo/AMVHell" target="_blank">AMV Hell</a> style video that has by now become such a widespread trend that any AMV contest is almost guaranteed to have one.</p>

                                            <p class="centerText"><i>On the Other Side</i> consists of an intro, six skits and a conclusion:</p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=qzPjsh7ODRE" target="_blank"><p class="list-group-item-text">Introduction (0:00-0:38)</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/qzPjsh7ODRE?t=39s" target="_blank"><p class="list-group-item-text">Skit 1: Untitled (0:39-1:11)</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/qzPjsh7ODRE?t=1m12s" target="_blank"><p class="list-group-item-text">Skit 2: Circle of Outsiders (1:12-1:54)</p></a></li> 
                                                <li class="list-group-item"><a href="https://youtu.be/qzPjsh7ODRE?t=1m55s" target="_blank"><p class="list-group-item-text">Skit 3: An Outsider's Day (1:55-2:48)</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/qzPjsh7ODRE?t=2m49s" target="_blank"><p class="list-group-item-text">Skit 4: Outsider...in Denial (2:49-3:12)</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/qzPjsh7ODRE?t=3m13s" target="_blank"><p class="list-group-item-text">Skit 5: Outside a Chip (3:13-3:51)</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/qzPjsh7ODRE?t=3m52s" target="_blank"><p class="list-group-item-text">Skit 6: The Final Outsiders (3:52-5:13)</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/qzPjsh7ODRE?t=5m14s" target="_blank"><p class="list-group-item-text">Conclusion (5:14-5:41)</p></a></li>
                                            </ul>
                                            
                                            <p class="mediaDesc"><i>Introduction</i> initiates the core concept of a group of Outsiders, with a narrator who lulls the viewer into a false sense of security, leading them to believe that this will be a dramatic video when the next section reveals it to be anything but that. This section also introduces some of the source material that will be used throughout the rest of the video.</p>
                                            
                                            <p class="mediaDesc"><i>Skit 1</i> (which has no title), then subverts those expectations, switching to a chibi style of <i>Fullmetal Alchemist</i> animation with a ridiculous song that tells you that this is actually going to be a comedy video.</p>
                                            
                                            <p class="mediaDesc"><i>Skit 2: Circle of Outsiders</i> continues to keep the viewer on their toes by abruptly cutting to a laptop screen that will be continuously used after this point to emphasize when a new skit is about to be introduced. The first half features a serial killer monologue from <i>Dexter</i> is a direct parallel to the <i>Death Note</i> footage, though there are several jokes inserted as images during the monologue for comedic effect. The second half uses one of the more ridiculous looking characters from the anime, along with a change in music that ties to the final line from the monologue for more laughs. This is capped off by a clip of the <a href="https://www.youtube.com/watch?v=4LncVwUMcLU" target="_blank">rather funny and ridiculous laugh</a> from the english voice actor for the main character in Death Note, followed by an appropriate deadpan response from the same <i>Dexter</i> episode used in the beginning.</p>
                                            
                                            <p class="mediaDesc"><i>Skit 3: An Outsider's Day</i> chronicles a day in the life of a more silly Outsider from <i>Cowboy Bebop</i> with a fitting Western musical accompaniment. I mixed some of the character's voiceovers from the japanese and english voice actors, even in some cases reversing the audio to achieve different effects.</p>
                                            
                                            <p class="mediaDesc"><i>Skit 4: Outsider...in Denial</i> takes advantage of the song from the extremely popular <a href="https://www.youtube.com/watch?v=9bZkp7q19f0" target="_blank">Gangnam Style</a> music video (which was still at the height of it's appeal at this time). I used a cutscene from the video game <i>Naruto Ultimate Ninja Storm: Generations</i>, which happened to feature a rapping sequence with an uncanny resemblance in dancing style and rhythm to the popular song.</p>
                                            
                                            <p class="mediaDesc"><i>Skit 5: Outside a Chip</i> capitalizes on the popular <a href="https://knowyourmeme.com/memes/ill-take-a-potato-chip-and-eat-it" target="_blank">I'll Take a Potato Chip and EAT IT!</a> meme and cranks it up to 11, with some torturous screaming noises I found to emphasize the chip's predicament. The conclusion of this skit also initially appears to be the conclusion of the entire video, but I had one more trick up my sleeve...</p>
                                            
                                            <p class="mediaDesc"><i>Skit 6: The Final Outsiders</i> subverts expectations again in multiple ways, first by bringing back the narrator from the beginning and building up the greatest group of outsiders to be introduced yet. Expectations are subverted again when suddenly a new lip-synch introduces a dubstep song that transforms the skit into a full-fledged music video featuring a band of characters from <i>The Melancholy of Haruhi Suzumiya</i>, as well as a correlating cosplaying band of fans from <i>Lucky Star</i>. All of this is intercut with dramatic footage from the former anime for maximum impact for the first half of this skit. The second half begins with a huge dose of nostalgia by pulling footage from the original opening for <i>Pokemon</i>, while continuing the music video and bringing back some of the other Outsiders previously introduced.</p>
                                            
                                            <p class="mediaDesc"><i>Conclusion</i> ties everything back together, bringing back the narrator, featuring more of the Outsiders and building to a climax that leads into the credits.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=Alegof-51pU" target="_blank"><p class="list-group-item-text">DJ Shadow - Outsider Intro</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=bqksRIE-_8g" target="_blank"><p class="list-group-item-text">Aya Hirano, Emiri Katou, Kaori Fukuhara, Aya Endo - Motteke Sailor Fuku</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=wS3yQMvzNhA" target="_blank"><p class="list-group-item-text">Jason Graves - Titan Station Elementary</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=1QmpQi_7oBM" target="_blank"><p class="list-group-item-text">Daniel Licht - Untitled Dexter Music</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=d4WlqxPzQ28" target="_blank"><p class="list-group-item-text">Clutch - The Regulator</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=9bZkp7q19f0" target="_blank"><p class="list-group-item-text">PSY - Gangnam Style</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=ohq_j5jsbYc" target="_blank"><p class="list-group-item-text">Jason Graves - You go to my Head</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=je8UCmQ45h4" target="_blank"><p class="list-group-item-text">Modestep - Show me a Sign</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features a monologue voiceover from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://iframe.tvfanatic.com/quotes/shows/dexter/season-1/page-3.html" target="_blank"><p class="list-group-item-text">Michael C. Hall - Dexter Season 1: Episode 7-Circle of Friends</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=6704" target="_blank"><p class="list-group-item-text">Code Geass: Lelouch of the Rebellion</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=13" target="_blank"><p class="list-group-item-text">Cowboy Bebop</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=353" target="_blank"><p class="list-group-item-text">Cowboy Bebop: The Movie</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=6592" target="_blank"><p class="list-group-item-text">Death Note</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=891" target="_blank"><p class="list-group-item-text">Kiddy Grade</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2004)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=10216" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist: Brotherhood (2009)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=7222" target="_blank"><p class="list-group-item-text">Lucky Star</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=1825" target="_blank"><p class="list-group-item-text">Naruto</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=ZT5ccCjKrB0" target="_blank"><p class="list-group-item-text">Naruto Ultimate Ninja Storm: Generations</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=270" target="_blank"><p class="list-group-item-text">Pokemon</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=6430" target="_blank"><p class="list-group-item-text">The Melancholy of Haruhi Suzumiya</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=11120" target="_blank"><p class="list-group-item-text">The Disappearance of Haruhi Suzumiya</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="goanw" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="godOfANewWorldVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>God of a New World (2013)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">AFO 2013-Best Drama</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=192747" target="_blank">AMV.org Link</a></p>
                                            
                                            <img src="/images/music-videos/amv/afo-2013-best-drama.jpg" class="img-responsive" alt="Anime Festival Orlando 'Best Drama' award plaque for 'God of a New World' in 2013">
                                            
                                            <p class="mediaDesc">This is an AMV that I submitted to <a href="http://animefestivalorlando.com/" target="_blank">Anime Festival Orlando's</a> AMV Contest in 2013 and it won the <i>Best Drama</i> Award.</p>
                                            
                                            <h3><u>Audio Section</u></h3>
                                            
                                            <p class="mediaDesc">I spent a lot of time setting up the audio for this because the sections of the song I use are split all across the video: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=dFkLO1p-8bw" target="_blank"><p class="list-group-item-text">White-Note Remix Version (0:00-0:20)</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/dFkLO1p-8bw?t=21s" target="_blank"><p class="list-group-item-text">Original Song (0:21-2:40)</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/dFkLO1p-8bw?t=2m41s" target="_blank"><p class="list-group-item-text">White-Note Remix Version (2:41-3:23)</p></a></li> 
                                                <li class="list-group-item"><a href="https://youtu.be/dFkLO1p-8bw?t=3m24s" target="_blank"><p class="list-group-item-text">Sound mix of both Versions (3:24-4:16)</p></a></li>
                                                <li class="list-group-item"><a href="https://youtu.be/dFkLO1p-8bw?t=4m17s" target="_blank"><p class="list-group-item-text">Original Song (4:17-4:28)</p></a></li>
                                            </ul>
                                            
                                            <p class="mediaDesc">Also, at <a href="https://youtu.be/dFkLO1p-8bw?t=2m3s" target="_blank">2:03</a> I cut out 30 seconds to simplify the video between when it initially premiered at <a href="https://twitter.com/floridaanime?lang=en" target="_blank">Florida Anime Experience (FAE)</a> and when I had submitted it to <a href="http://floridasupercon.com/" target="_blank">Florida Supercon (FSC)</a>.</p>
                                            
                                            <p class="mediaDesc">The whole point of the first half is to lull the viewer into a false sense of security, and then to upend the rug on them when the White-Note Remix kicks in at <a href="https://youtu.be/dFkLO1p-8bw?t=2m41s" target="_blank">2:41</a>; and by the time the Sound mix kicks in at <a href="https://youtu.be/dFkLO1p-8bw?t=3m24s" target="_blank">3:24</a>, it's a roller coaster.</p>
                                            
                                            <p class="mediaDesc">I worked closely with an anonymous (by his wishes) friend of mine who helped me combine the two songs together to create a harmony between the piano and the choir for the finale. Most of it is simply combining the two songs so that it sounds seamless, however there's a few portions where I specifically had things done to emphasize the piano, such as the moment at <a href="https://youtu.be/dFkLO1p-8bw?t=3m36s" target="_blank">3:36</a> when I sped up the video and brought the piano to the forefront.</p> 
                                                
                                            <p class="mediaDesc">Another example of this is from <a href="https://youtu.be/dFkLO1p-8bw?t=3m52s" target="_blank">3:52-4:16</a>, the piano has been emphasized more, but you can still hear the choir in the background; until <a href="https://youtu.be/dFkLO1p-8bw?t=4m17s" target="_blank">4:17</a> where the original version comes back in for the final moments.</p>
                                            
                                            <h3><u>Video Section</u></h3>
                                            
                                            <p class="mediaDesc">The video itself is a character relationship piece between Light and L, so I have the video divided into different sections:</p> 

                                            <p class="centerText"><a href="https://www.youtube.com/watch?v=dFkLO1p-8bw" target="_blank">0:00-0:20 Character Introductions (Light, Misa, Ryuk, L, Creed [The Devil])</a></p>

                                            <p class="mediaDesc">The piano representative of the Devil's influence, and so it's inclusion at the beginning ending with the apple is symbolic of the seed (Ryuk) being planted in Light's mind that will be triggered by the Death Note to create Kira.</p>
                                            
                                            <p class="centerText"><a href="https://youtu.be/dFkLO1p-8bw?t=21s" target="_blank">0:21-0:54 Light (Solo)</a></p>
                                            
                                            <p class="centerText"><a href="https://youtu.be/dFkLO1p-8bw?t=55s" target="_blank">0:55-1:21 L (Solo)</a></p>
                                            
                                            <p class="mediaDesc">These first two sections are here to illustrate the social differences between Light & L, showing Light is surrounded by friends: Misa (Light) and Ryuk (Darkness); while L is surrounded by no one, with only Watari to console him.</p>
                                            
                                            <p class="centerText"><a href="https://youtu.be/dFkLO1p-8bw?t=1m22s" target="_blank">1:22-1:50 Light & L (First Meeting)</a></p>

                                            <p class="mediaDesc">This next section is the beginning of a friendship between Light and L that is born when they are brought together by the Death Note's entry into this world.</p>
                                            
                                            <p class="centerText"><a href="https://youtu.be/dFkLO1p-8bw?t=1m51s" target="_blank">1:51-2:01 Light (The God Complex)</a></p>
                                            
                                            <p class="mediaDesc">Once Light is given the power of life and death by the Devil's servant (Ryuk), he begins to get these ambitions in his head about what he could do with it and builds his own God Complex.</p>
                                            
                                            <p class="centerText"><a href="https://youtu.be/dFkLO1p-8bw?t=2m2s" target="_blank">2:02-2:40 Light & L (Light's First Kill/First Step into Corruption by the Devil/L begins to suspect Light)</a></p>

                                            <p class="mediaDesc">This next section is showing Light stalking his first kill, contrasted with Watari and L discovering that there is a serial killer named Kira that will soon become a threat. The music builds in intensity as it builds to the moment that Light kills her.</p>
                                            
                                            <p class="mediaDesc">After this, the piano becomes a dominant force in the music and is representative of how Light's first kill has now let the Devil into his mind and his music is in his ears to transform him into Kira (symbolized by the piano moments). So everything from here on out is of a completely different tone, and looked at from within a different "light."</p>
                                            
                                            <p class="centerText"><a href="https://youtu.be/dFkLO1p-8bw?t=2m41s" target="_blank">2:41-3:23 The Tennis Match</a></p>

                                            <p class="mediaDesc">Now this next sequence is mostly internal, the tennis game is simply a metaphor for the Cat & Mouse Investigation/Killings going on between Light/Kira and L. There are small moments when what is actually going on peeks its way through:</p>
                                            
                                            <p class="centerText"><a href="https://youtu.be/dFkLO1p-8bw?t=2m55s" target="_blank">2:55 L witnesses a murder by Kira/Light</a></p>
                                            
                                            <p class="centerText"><a href="https://youtu.be/dFkLO1p-8bw?t=3m0s" target="_blank">3:00 Light murders another innocent victim</a></p>
                                            
                                            <p class="centerText"><a href="https://youtu.be/dFkLO1p-8bw?t=3m8s" target="_blank">3:08 L is still investigating Kira/Light</a></p>

                                            <p class="mediaDesc">Beginning at <a href="https://youtu.be/dFkLO1p-8bw?t=3m11s" target="_blank">3:11</a>, the serial killings have begun to interfere with Light's personal life, shown by the argument between Light and Misa, that leads Light to decide that he no longer needs her (the light in his life) and decides to kill her and falls into darkness. This stroke is what leads to Light winning the tennis game/competition between Light and L, and this is why the music kicks into overdrive once Light has led Misa to commit suicide by jumping (symbolized by Light's fall at <a href="https://youtu.be/dFkLO1p-8bw?t=3m22s" target="_blank">3:22</a>, the shot of "Misa's" body at <a href="https://youtu.be/dFkLO1p-8bw?t=3m26s" target="_blank">3:26</a>, and the shot of Misa's innocence at <a href="https://youtu.be/dFkLO1p-8bw?t=3m28s" target="_blank">3:28</a>).</p> 

                                            <p class="mediaDesc">From here on out, Kira has won and everything is thrown into chaos as the devil's corruption of Light has completely taken over. Light killing Misa has revealed to L that Light is Kira and completely destroyed the bond they had formed throughout the rest of the video. The killings have turned into mass murder and from here on out the video is essentially a celebration by the Devil of what he has created in Kira.</p>
                                            
                                            <p class="mediaDesc">The video comes full circle at <a href="https://youtu.be/dFkLO1p-8bw?t=4m6s" target="_blank">4:06</a> where the images of L's loneliness from the beginning (<a href="https://youtu.be/dFkLO1p-8bw?t=55s" target="_blank">0:55</a>) being transformed into color are showing the friendship the beauty of the friendship that was born between Light and L was destroyed by the Devil (<a href="https://youtu.be/dFkLO1p-8bw?t=4m9s" target="_blank">4:09</a>).</p> 
                                                
                                            <p class="mediaDesc">At <a href="https://youtu.be/dFkLO1p-8bw?t=4m10s" target="_blank">4:10</a>, the devil's original servant (Ryuk) is celebrating his success, leading to the final moments where Kira is unveiled as the Devil's servant in all his glory, as the "God" of his false new world, and the final piano strike shutting off the music is showing how Light is truly under the Devil's control and he can be stopped by him at any time.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=9vZUbyM5PxY" target="_blank"><p class="list-group-item-text">Keiichi Okabe & Emi Evans - Shadowlord</p></a></li>
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=hsO1-9v68as" target="_blank"><p class="list-group-item-text">Keiichi Okabe & Emi Evans - Shadowlord White-Note Remix</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=6592" target="_blank"><p class="list-group-item-text">Death Note</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="007X" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="XIIIVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>007: XIII (2012)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">AFO 2012-Best Action</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=188453" target="_blank">AMV.org Link</a></p>
                                            
                                            <img src="/images/music-videos/amv/afo-2012-best-action.jpg" class="img-responsive" alt="Anime Festival Orlando 'Best Action' award plaque for '007: XIII' in 2012">
                                            
                                            <p class="mediaDesc">This is an AMV that I submitted to <a href="http://animefestivalorlando.com/" target="_blank">Anime Festival Orlando's</a> AMV Contest in 2012 and it won the <i>Best Action</i> Award.</p>
                                                <br>
                                            <div class="row">
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-8">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <div id="XIIIComparisonVideo"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div>
                                                <br>
                                            <p class="mediaDesc">This used a trailer from <i>007: Quantum of Solace</i>, and I wanted to try a few new things with this so not only did I do quite a bit of lip synching, but I delved into Adobe After Effects for the first time for that title at the end (which took about five hours for me to figure out how to put together).</p>
                                            
                                            <p class="mediaDesc">The lip synching was something I've toyed around with in earlier videos but this is the first time that I grabbed all the different types of mouth flaps (closed/slightly open/completely open) and reconstructed words with them. I was able to do it most of the time except whenever the frame/camera is moving, but it appears to have worked out rather well for the most part.</p>
                                            
                                            <p class="mediaDesc">There's actually quite a few similarities not just in content but also in framing if you compare the two trailers. It worked out really well that the main character from both properties were assassins with code names that were seeking revenge over the loss of a loved one.</p>
                                            
                                            <p>This AMV features trailer audio from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=f6acw690AqQ" target="_blank"><p class="list-group-item-text">007: Quantum of Solace Official Trailer</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=5245" target="_blank"><p class="list-group-item-text">Black Cat</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="afw" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="aFullmetalWorldVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>A Fullmetal World (2012)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">FAE 2012 Entry</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=187367" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I submitted to the <a href="https://twitter.com/floridaanime?lang=en" target="_blank">Florida Anime Experience (FAE)</a> AMV Contest in 2012.</p>
                                            
                                            <p class="mediaDesc">This was an idea I came up with about one week before the contest deadline, to combine the original <i>Fullmetal Alchemist</i> series with <i>Fullmetal Alchemist: Brotherhood</i>. So you'll notice throughout that much of this video is an experiment, comparing and contrasting different moments from the series. I also came up with the idea to incorporate <i>The Sacred Star of Milos</i> (recently released at the time) since it added a third art style to the mix.</p>
                                            
                                            <p class="mediaDesc">This song didn't have a true ending, so because of this I came up with the idea to fade back to the beginning of the song and to cut to black to make the viewer think the video was over. After this, then the video blasts back in with what is the best way to end the video with that portion of the song. This clearly worked at FAE 2012's contest, because the audience started applauding and then laughed/cheered when Ed punches his hand back through the gate.</p>
                                            
                                            <p class="mediaDesc">The primary issue I faced during the editing of this video was the different aspect ratios. <i>Fullmetal Alchemist (2003)</i> has a 4:3 aspect ratio, while <i>Fullmetal Alchemist: Brotherhood's</i> is 16:9 (as is <i>Sacred Star of Milos'</i>). So in order to resolve this I had to resize the 4:3 footage to match the 16:9 window.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=_NwYIkPiCus" target="_blank"><p class="list-group-item-text">Keiichi Okabe & Emi Evans - Gods Bound By Rules</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=10216" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist: Brotherhood</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=12180" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist: The Sacred Star of Milos</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="tcatd" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="theCat&TheDevilVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>The Cat & The Devil (2012)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">FAE 2012-Best in Show</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=187369" target="_blank">AMV.org Link</a></p>
                                            
                                            <img src="/images/music-videos/amv/fae-2012-best-in-show.jpg" class="img-responsive" alt="Florida Anime Experience 'Best in Show' award plaque for 'The Cat & The Devil' in 2012">
                                            
                                            <p class="mediaDesc">This is an AMV that I submitted to the <a href="https://twitter.com/floridaanime?lang=en" target="_blank">Florida Anime Experience (FAE)</a> AMV Contest in 2012 and it won the <i>Best in Show</i> Award.</p>
                                                
                                            <p class="mediaDesc">When I was editing this video I actually didn't initially intend for Train to be the sinner, Creed the Devil, and Saya the Lord (albeit briefly) but it worked out perfectly.</p>
                                            
                                            <p class="mediaDesc">The biggest techniques I focused on in this video were splitscreen effects and the effect known as "piano keys" (at least where I heard of it) since it fit the tone of the song and this is one of the reasons I wanted to do this video in the first place, along with the <i>Black Cat</i> character's piano key hits.</p>
                                            
                                            <p class="mediaDesc">Also, this song is actually almost 10 minutes long, and extremely repetitive at times. To counter this I attempted to do a little sound editing and shortened it considerably (It's less than half as long as that now).</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=QH3Fx41Jpl4" target="_blank"><p class="list-group-item-text">Nina Simone - Sinnerman</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=5245" target="_blank"><p class="list-group-item-text">Black Cat</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="ftp" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <div id="fightThePowerVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Fight the Power (2011)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">FAE 2011 Best Action Runner Up</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=182402" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I submitted to the <a href="https://twitter.com/floridaanime?lang=en" target="_blank">Florida Anime Experience (FAE)</a> AMV Contest in 2011.</p>
                                            
                                            <p class="mediaDesc">This was the first music video I had made in four years, ever since I had largely given up on the idea. I hadn't had much success at conventions with my work, so I decided I must not be very good at it.</p>
                                            
                                            <p class="mediaDesc">That all changed starting with this video, which reignited my interest in making AMVs when I heard about a new convention called <i>Florida Anime Experience</i> that would be the spiritual successor to JACON, the contest I used to attend four years previously.</p>
                                            
                                            <p class="mediaDesc">Having switched to Adobe Premiere CS5.5, I took the recent more accurate reinterpretation of <i>Fullmetal Alchemist</i> and combined it with a well known song from an anime I had recently gotten into called <i>Gurren Lagann</i>.</p>
                                            
                                            <p class="mediaDesc">Although I didn't win an award at the contest, apparently I came very close. There was a part near the end when the judges played a random video and had to "debate something" and I asked afterwards and it turned out they were debating between mine and the video that won the "best action" award (which was a Blue Gender video).</p>
                                            <!--
                                            <p class="mediaDesc">The version shown above is a slightly modified version of the video that contains more rowing moments. The original is shown here below.</p>
                                            
                                            <div class="row">
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-8">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <div id="fightThePowerOGVideo"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div>
                                            -->
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=VT6LFOIofRE" target="_blank"><p class="list-group-item-text">Tarantula - Libera me from Hell</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=10216" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist: Brotherhood</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="fa" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <div id="fullmetalAlchemistVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Fullmetal Alchemist (2006)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">JACON 2006 Entry</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=202068" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I submitted to the <a href="https://www.facebook.com/JACONconvention/" target="_blank">JACON</a> AMV Contest in 2006.</p>
                                            
                                            <p class="mediaDesc">This is the first music video and AMV that I ever made, it has a lot of problems, some glimmers of merit throughout and absolutely no relevance to the song.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=PYw0mg8RPKA" target="_blank"><p class="list-group-item-text">Crossfade - Colors</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="s" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <div id="scarVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Scar (2006)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">No Contest Entered</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=202069" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I made in 2006.</p>
                                            
                                            <p class="mediaDesc">This is the second AMV I ever made and it's a character profile video for Scar from Fullmetal Alchemist. Given the lyrics are in japanese and I had no idea what they were saying at the time, I clearly just chose it because I thought it sounded cool.</p>
                                            
                                            <p class="mediaDesc">This video has a lot of slow moments throughout, lip flap and it's way too long. There are at least a few moments where it seemed like I knew what I was doing, but this could have been far shorter.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=xrjUj-FRorY" target="_blank"><p class="list-group-item-text">Arimachi Masahiko - Through the Night</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="hi" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <div id="homunculiVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Homunculi (2006)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">JACON 2006 Entry</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=202070" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I submitted to the <a href="https://www.facebook.com/JACONconvention/" target="_blank">JACON</a> AMV Contest in 2006.</p>
                                            
                                            <p class="mediaDesc">This is an abomination, something that I once promised myself I would never let see the light of day ever again. A compilation of the Homunculi from Fullmetal Alchemist, it is full of bad timing, huge spoilers and horrible title effects.</p>
                                            
                                            <p class="mediaDesc">It hurts just looking at it. There's only one moment of merit in it (the perfectly timed punch at <a href="https://youtu.be/AtoT5Q6Uq24?t=2m23s" target="_blank">2:23</a>).</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=gti2z5Z8JqU" target="_blank"><p class="list-group-item-text">Crossfade - Disco</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="fl" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <div id="fifthLabVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Fifth Lab (2006)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">No Contest Entered</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=202071" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I made in 2006.</p>
                                            
                                            <p class="mediaDesc">This is a video focused on the Fifth Lab arc from Fullmetal Alchemist. It starts with some cringe-worthy use of audio inserted from the dub as exposition and continues into a video that once again has nothing to do with the song being used. This is basically a summary of the Fifth Lab arc and nothing more.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=Vrr3lRLjZ1Y" target="_blank"><p class="list-group-item-text">Crossfade - Cold</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="b" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <div id="brotherVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Brother (2006)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">JACON 2006 Entry</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=202072" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I submitted to the <a href="https://www.facebook.com/JACONconvention/" target="_blank">JACON</a> AMV Contest in 2006.</p>
                                            
                                            <p class="mediaDesc">One of my few older videos that has merit to it, this is a video that actually has a semblance of a story to it. Though it uses a cringe-worthy cover of the song "Brothers" from Fullmetal Alchemist by Vic Mignogna 
                                                                 (also the voice actor for Ed in the Fullmetal Alchemist dub) 
                                                                 [<a href="https://variety.com/2019/gaming/news/vic-mignogna-sues-funimation-1203193225/" target="_blank">also has been cancelled at this point for morally reprehensible actions</a>].</p>
                                            
                                            <p class="mediaDesc">The insertion of the dub voices halfway through was a mistake, but the rest of the video is at least coherent.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=FfAEMal84ag" target="_blank"><p class="list-group-item-text">Vic Mignogna/Michiru Oshima - Brothers</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="d" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <div id="deathVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Death (2006)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">No Contest Entered</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=202074" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I made in 2006.</p>
                                            
                                            <p class="mediaDesc">This is a video that focused on the death of many characters over the course of Fullmetal Alchemist. As you can gather from that, it is full of spoilers and is highly depressing.</p>
                                            
                                            <p class="mediaDesc">I was clearly trying to do some experimentation with transitions at the time, though they're mostly terrible.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=ZLpnRaaQvCI" target="_blank"><p class="list-group-item-text">Michiru Oshima - Homunculus</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="w" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <div id="wrathVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Wrath (2006)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">No Contest Entered</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=202075" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I made in 2006.</p>
                                            
                                            <p class="mediaDesc">This is a character profile video for Wrath from Fullmetal Alchemist. Given the lyrics are in japanese and I had no idea what they were saying at the time, I clearly just chose it because I thought it sounded cool.</p>
                                            
                                            <p class="mediaDesc">I can tell that I was trying to chronicle the story of this character's transformation from innocence to corruption, There's some good buil-up but is very long and quite slow at times. Moments in it have merit but it really needed to be trimmed down.</p>
                                            
                                            <p class="mediaDesc">There's also just not a lot of editing. I let a lot of scenes play out longer than I should have. Lastly there's some bad source material inconsistency that I was forced to use at the time.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=EIVgSuuUTwQ" target="_blank"><p class="list-group-item-text">Yoko Kanno/Origa - Inner Universe</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="dtth" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <div id="deathToTheHomunculiVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Death to the Homunculi (2006)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">No Contest Entered</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=202076" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I made in 2006.</p>
                                            
                                            <p class="mediaDesc">This is a video that was supposed to compile all of the Homunculi death scenes, though it appears I never finished it.</p>
                                            
                                            <p class="mediaDesc">There's not much unique or noteworthy to this video, though the musical choice I went with was a little different than normal.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=4tEj6gXA_eA" target="_blank"><p class="list-group-item-text">Michiru Oshima - Dance</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="fm" class="tab-pane fade">
                                    <div class="row">
                                        <img src="/images/music-videos/video_takedown.jpg" class="img-responsive" alt="Photo of Edward Elric looking frustrated">
                                        <p class="centerText">No video embed available due to copyright claim by Sony - check it out at the AMV.org link below</p>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Fullmetal Memories (2006)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">No Contest Entered</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=202077" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I made in 2006.</p>
                                            
                                            <p class="mediaDesc">This is the second video I've made focused on the relationship between Edward and Alphonse in Fullmetal Alchemist, however as has often been the case the song has no relevance to what's going on in the video.</p>
                                            
                                            <p class="mediaDesc">There's a lot of lip flap in this video and not much momentum throughout, but there are certain moments that click. This is also a video that just has too many scenes without much editing.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=ne49DaLbo2I" target="_blank"><p class="list-group-item-text">Crossfade - So Far Away</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="rm" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <div id="royMustangVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Roy Mustang (2006)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">No Contest Entered</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=202078" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I made in 2006.</p>
                                            
                                            <p class="mediaDesc">This is the first Roy Mustang video I made (long before my far more recent and significantly better <a href="https://www.youtube.com/watch?v=tB4sMWJwMoM" target="_blank">Arsonist's Lullaby</a> video). There's a lot of tonal change throughout this, switching from being an action video to a comedy video to a drama video and then back to an action video.</p>
                                            
                                            <p class="mediaDesc">The ending is also missing, I finished most of the video but I guess I never got around to capping it off. There's also a ridiculous amount of lip flap throughout this video that makes it pretty painful to watch.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=FiyU3EJmhxI" target="_blank"><p class="list-group-item-text">Taku Iwasaki - Theme of R.O.D. (Long Version)</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="tfoe" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <div id="theFacesOfEvilVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>The Faces of Evil (2006)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">No Contest Entered</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=202080" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I made in 2006.</p>
                                            
                                            <p class="mediaDesc">This literally only exists because I wanted to make an epic video to the "Requiem for a Dream" theme. I have no idea why there's a minute of black at the end.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=yVIRcnlRKF8" target="_blank"><p class="list-group-item-text">Clint Mansell - Requiem for a Dream</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="wri" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <div id="winryRizaIzumiVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Winry Riza Izumi! (2006)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">No Contest Entered</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=202081" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I made in 2006.</p>
                                            
                                            <p class="mediaDesc">This is a triple character profile video focused on Winry Rockbell, Riza Hawkeye and Izumi Curtis from Fullmetal Alchemist. Given the lyrics are in japanese and I had no idea what they were saying at the time, I clearly just chose it because I thought it sounded cool.</p>
                                            
                                            <p class="mediaDesc">This contains some terrible effects, a lot of lip flap, and it's also apparently unfinished.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=-rFW2Df5iRs" target="_blank"><p class="list-group-item-text">Yoko Kanno/Origa - Rise</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="sof" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <div id="summaryOfFMAVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Summary of FMA (2006)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">No Contest Entered</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=202082" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I made in 2006.</p>
                                            
                                            <p class="mediaDesc">This is actually a summary of the entire series of Fullmetal Alchemist. I apparently wanted to make an epic to a classical song. Unfortunately there's not much creative about it, there's a lot of lip flap and an overuse of fade transitions. There are a few nice moments every once in a while though.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=kwY4lilrJv4" target="_blank"><p class="list-group-item-text">Beethoven - 5th Symphony/Unmei</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="ail" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <div id="accidentallyInLoveVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>Accidentally in Love (2006)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">No Contest Entered</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=202083" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I made in 2006.</p>
                                            
                                            <p class="mediaDesc">This is the closest I've ever come to making a romantic comedy. This actually isn't terrible, a mixup of Fullmetal Alchemist and Final Fantasy VII: Advent Children that has several redeeming qualities throughout including some relatively good lip-synching, well-timed moments and direct relevance to the song.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=22bK0C2obFc" target="_blank"><p class="list-group-item-text">Counting Crows - Accidentally in Love</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.animenewsnetwork.com/encyclopedia/anime.php?id=2960" target="_blank"><p class="list-group-item-text">Fullmetal Alchemist (2003)</p></a></li>
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=3344" target="_blank"><p class="list-group-item-text">Final Fantasy VII: Advent Children</p></a></li>
                                            </ul>
                                        </div>
                                    </div>      
                                </div>
                                
                                <div id="ngu" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <div id="noGivingUpVideo"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>    
                                        <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                            <h2>No Giving Up (2007)</h2>
                                            <hr class="star-light">                                            
                                            <span class="skills">JACON 2007 Entry</span>
                                            
                                            <p class="centerText"><a href="http://www.animemusicvideos.org/members/members_videoinfo.php?v=202084" target="_blank">AMV.org Link</a></p>
                                            
                                            <p class="centerText">This is an AMV that I submitted to the <a href="https://www.facebook.com/JACONconvention/" target="_blank">JACON</a> AMV Contest in 2007.</p>
                                            
                                            <p class="mediaDesc">This is the last AMV I created while I was in high school, and the only Naruto AMV I have ever made. Going back to my use of Crossfade songs, this is one of my few older videos where the song lyrics had relevance to the material.</p>
                                            
                                            <p class="mediaDesc">There's some bad effects throughout this and slow moments but a good overall focus in my opinion. Since it didn't win anything at JACON, that was what convinced me to stop editing at the time.</p>
                                            
                                            <p>This AMV features music from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=iqB_cZq7Clw" target="_blank"><p class="list-group-item-text">Crossfade - No Giving Up</p></a></li>
                                            </ul>
                                            
                                            <p>This AMV features footage from: </p>
                                            
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="http://www.animenewsnetwork.com/encyclopedia/anime.php?id=1825" target="_blank"><p class="list-group-item-text">Naruto</p></a></li>
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
            $("#aRow").addClass("selectedRow");
        </script>
        
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
        
    </body>
    
</html>