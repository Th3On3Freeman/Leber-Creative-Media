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
                <li>
                    <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php#film">Film</a>
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
                    <?php 
                    
                        $useragent=$_SERVER['HTTP_USER_AGENT'];
                        if(preg_match($mobileTestPartOne,$useragent)||preg_match($mobileTestPartTwo,substr($useragent,0,4)))
                        {
                            //echo "<script>alert('MOBILE DEVICE');</script>";
                            ?>
                            <li class="menu-item">  
                              <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php#blog">Blog</span></a>
                            </li>
                            <li id="bt13Row" class="menu-item subIndent">
                              <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Blog/Best of Television/2013.php">- 2013</a>
                            </li>
                            <li id="bt14Row" class="menu-item subIndent">
                              <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Blog/Best of Television/2014.php">- 2014</a>
                            </li>
                            <li id="bt15Row" class="menu-item subIndent">
                              <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Blog/Best of Television/2015.php">- 2015</a>
                            </li>
                            <li id="bt16Row" class="menu-item subIndent">
                              <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Blog/Best of Television/2016.php">- 2016</a>
                            </li>
                            
                        <?php        
                            } //end if
                            else
                            {
                                //echo "<script>alert('DESKTOP DEVICE');</script>";
                        ?>
                            <li class="menu-item dropdown"> 
                                <a class="dropdown-toggle" data-toggle="dropdown" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php#blog">Blog</span></a>
                                <ul class="dropdown-menu submenuBegin">
                                    <li class="menu-item submenu">
                                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Blog/Best of Television/2013.php">2013</a>
                                    </li>
                                    <li class="menu-item submenu">
                                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Blog/Best of Television/2014.php">2014</a>
                                    </li>
                                    <li class="menu-item submenu">
                                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Blog/Best of Television/2015.php">2015</a>
                                    </li>
                                    <li class="menu-item submenu">
                                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/Blog/Best of Television/2016.php">2016</a>
                                    </li>
                                    
                                </ul>
                            </li>   
                        <?php
                            } //end else
                        ?>
                <li>
                    <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>