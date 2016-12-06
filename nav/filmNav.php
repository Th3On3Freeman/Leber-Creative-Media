<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php">Leber Creative Media</a>
                    </div>
            
                    <div class="collapse navbar-collapse modNavBar" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                                <?php 
                                
                                    $useragent=$_SERVER['HTTP_USER_AGENT'];
                                    if(preg_match($mobileTestPartOne,$useragent)||preg_match($mobileTestPartTwo,substr($useragent,0,4)))
                                    {
                                        //echo "<script>alert('MOBILE DEVICE');</script>";
                                ?>
                              <li class="menu-item">  
                                <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php#film">Film</span></a>
                              </li>
                                    <li id="ffRow" class="menu-item subIndent">
                                      <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/feature-films.php">- Feature Films</a>
                                    </li>
                                    <li id="sfRow" class="menu-item subIndent">
                                      <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/short-films.php">- Short Films</a>
                                    </li>
                                    <li id="tRow" class="menu-item subIndent">
                                      <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/trailers.php">- Trailers</a>
                                    </li>
                                    <li id="drRow" class="menu-item subIndent">
                                      <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/demo-reels.php">- Demo Reels</a>
                                    </li>
                                      
                                <?php        
                                    } //end if
                                    else
                                    {
                                        //echo "<script>alert('DESKTOP DEVICE');</script>";
                                ?>
                            <li class="menu-item dropdown"> 
                                <a class="dropdown-toggle" data-toggle="dropdown" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php#film">Film</span></a>
                                <ul class="dropdown-menu submenuBegin">
                                    <li class="menu-item submenu">
                                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/feature-films.php">Feature Films</a>
                                    </li>
                                    <li class="menu-item submenu">
                                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/short-films.php">Short Films</a>
                                    </li>
                                    <li class="menu-item submenu">
                                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/trailers.php">Trailers</a>
                                    </li>
                                    <li class="menu-item submenu">
                                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Film/demo-reels.php">Demo Reels</a>
                                    </li>
                                </ul>
                            </li>   
                                <?php
                                    } //end else
                                
                                ?>
                            
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