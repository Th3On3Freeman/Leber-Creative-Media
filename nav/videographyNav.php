<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/">Leber Creative Media</a>
        </div>
            
        <div class="collapse navbar-collapse modNavBar" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/#film">Film</a>
                </li>                
                    <?php 
                    
                        $useragent=$_SERVER['HTTP_USER_AGENT'];
                        if(preg_match($mobileTestPartOne,$useragent)||preg_match($mobileTestPartTwo,substr($useragent,0,4)))
                        {
                            //echo "<script>alert('MOBILE DEVICE');</script>";
                            ?>
                            <li class="menu-item">  
                              <a href="/#videography">Videography</span></a>
                            </li>
                            <li id="aRow" class="menu-item subIndent">
                              <a href="/videography/commercials.php">- Advertising</a>
                            </li>
                            <li id="wRow" class="menu-item subIndent">
                              <a href="/videography/weddings.php">- Weddings</a>
                            </li>
                        <?php        
                            } //end if
                            else
                            {
                                //echo "<script>alert('DESKTOP DEVICE');</script>";
                        ?>
                            <li class="menu-item dropdown"> 
                                <a class="dropdown-toggle" data-toggle="dropdown" href="/#videography">Videography</span></a>
                                <ul class="dropdown-menu submenuBegin">
                                    <li class="menu-item submenu">
                                        <a href="/videography/commercials.php">Advertising</a>
                                    </li>
                                    <li class="menu-item submenu">
                                        <a href="/videography/weddings.php">Weddings</a>
                                    </li>
                                </ul>
                            </li>   
                        <?php
                            } //end else
                        ?>
                <li>
                    <a href="/#musicVideos">Music Videos</a>
                </li>
                <li>
                    <a href="/#popSpectrum">Pop Spectrum</a>
                </li>
                <li>
                    <a href="/#blog">Blog</a>
                </li>
                <li>
                    <a href="/#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>