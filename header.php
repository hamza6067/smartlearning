<div class="header">
    <div class="logo">
        <h1><a href="index.php">Smart<br /><span style="color:aqua;">Learning</span></a></h1>
    </div>	
    <!-- start header menu -->
    <div class="header-top">
        <div class="head-nav">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Home </a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="course.php">Topics</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="search-box">
            <div id="sb-search" class="sb-search">
                <form action="course.php">
                    <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="q" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"> </span>
                </form>
            </div>
        </div>
        <div class="clearfix"> </div>
        <!-- search-scripts -->
        <script src="js/classie.js"></script>
        <script src="js/uisearch.js"></script>
        <script>
            new UISearch( document.getElementById( 'sb-search' ) );
        </script>
        <!-- //search-scripts -->
    </div>
    <div class="clearfix"> </div>
</div>