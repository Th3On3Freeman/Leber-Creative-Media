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
                <li>
                    <a href="/#videography">Videography</a>
                </li>
                <li>
                    <a href="/#musicVideos">Music Videos</a>
                </li>
                <li>
                    <a href="/#popSpectrum">Pop Spectrum</a>
                </li>
                    <?php 
                    
                        $useragent=$_SERVER['HTTP_USER_AGENT'];
                        if(preg_match($mobileTestPartOne,$useragent)||preg_match($mobileTestPartTwo,substr($useragent,0,4)))
                        {
                            //echo "<script>alert('MOBILE DEVICE');</script>";
                            ?>
                            <li class="menu-item">  
                              <a href="/#blog">Blog</span></a>
                            </li>
                            <li id="bt13Row" class="menu-item subIndent">
                              <a href="http://dexterous-theshapeofthingstocome.blogspot.com/2013/12/my-20-favorite-shows-of-2013-ongoing.html">- TV 2013</a> <!--http://<?php //echo $_SERVER['SERVER_NAME']; ?>/Blog/Best of Television/2013.php-->
                            </li>
                            <li id="bt14Row" class="menu-item subIndent">
                              <a href="http://dexterous-theshapeofthingstocome.blogspot.com/2016/01/my-20-favorite-shows-of-2014.html">- TV 2014</a> <!--http://<?php //echo $_SERVER['SERVER_NAME']; ?>/Blog/Best of Television/2014.php-->
                            </li>
                            <li id="bt15Row" class="menu-item subIndent">
                              <a href="http://dexterous-theshapeofthingstocome.blogspot.com/2016/03/my-20-favorite-shows-of-2015.html">- TV 2015</a> <!--http://<?php //echo $_SERVER['SERVER_NAME']; ?>/Blog/Best of Television/2015.php-->
                            </li>
                            <li id="bt16Row" class="menu-item subIndent">
                              <a href="/blog/best-of-television/2016.php">- TV 2016</a>
                            </li>
                            <li id="bt17Row" class="menu-item subIndent">
                              <a href="/blog/best-of-television/2017.php">- TV 2017</a>
                            </li>
                            <li id="bf21Row" class="menu-item subIndent">
                              <a href="/blog/best-of-film/21st-century.php">- Film</a>
                            </li>
                            
                        <?php        
                            } //end if
                            else
                            {
                                //echo "<script>alert('DESKTOP DEVICE');</script>";
                        ?>
                            <li class="menu-item dropdown"> 
                                <a class="dropdown-toggle" data-toggle="dropdown" href="/#blog">Blog</span></a>
                                <ul class="dropdown-menu submenuBegin">
                                    <li class="menu-item submenu">
                                        <a href="http://dexterous-theshapeofthingstocome.blogspot.com/2013/12/my-20-favorite-shows-of-2013-ongoing.html">TV 2013</a> <!--http://<?php //echo $_SERVER['SERVER_NAME']; ?>/Blog/Best of Television/2013.php-->
                                    </li>
                                    <li class="menu-item submenu">
                                        <a href="http://dexterous-theshapeofthingstocome.blogspot.com/2016/01/my-20-favorite-shows-of-2014.html">TV 2014</a> <!--http://<?php //echo $_SERVER['SERVER_NAME']; ?>/Blog/Best of Television/2014.php-->
                                    </li>
                                    <li class="menu-item submenu">
                                        <a href="http://dexterous-theshapeofthingstocome.blogspot.com/2016/03/my-20-favorite-shows-of-2015.html">TV 2015</a> <!--http://<?php //echo $_SERVER['SERVER_NAME']; ?>/Blog/Best of Television/2015.php-->
                                    </li>
                                    <li class="menu-item submenu">
                                        <a href="/blog/best-of-television/2016.php">TV 2016</a>
                                    </li>
                                    <li class="menu-item submenu">
                                        <a href="/blog/best-of-television/2017.php">TV 2017</a>
                                    </li>
                                    <li class="menu-item submenu">
                                        <a href="/blog/best-of-film/21st-century.php">Film</a>
                                    </li>
                                    
                                </ul>
                            </li>   
                        <?php
                            } //end else
                        ?>
                <li>
                    <a href="/#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>