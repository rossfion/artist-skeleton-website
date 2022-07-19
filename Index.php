<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <title>Artist Website Skeleton</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:title" content="">
        <meta property="og:type" content="">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="css/Basic.css">

        <meta name="theme-color" content="#fafafa">
    </head>

    <body>

        <!-- Add your site or application content here -->
        <div class="container">

            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Brand</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="Index.php">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="Index.php?PageName=CV">CV </a></li>
                            <li><a href="Index.php?PageName=About">About Us </a></li>
                            <li><a href="Index.php?PageName=Portfolio">Portfolio </a></li>

                            <li><a href="Index.php?PageName=Contact">Contact Us</a></li>
                            <li><a href="Index.php?PageName=Resources">Resources</a></li>

                        </ul>      
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <!-- Main Area Content Area -->
            <div class="col-md-8">
                <div id="main">
                    <div id="content">
                        <!-- to serve the pages into this space/content area -->
                        <?php
                        $PagesDirectory = 'Pages Folder';
                        if (!empty($_GET['PageName'])) {

                            $PagesFolder = scandir($PagesDirectory, 0);
//print_r($PagesFolder);die();
                            unset($PagesFolder[0], $PagesFolder[1]);
                            $PageName = $_GET['PageName'];
                            if (in_array($PageName . '.inc.php', $PagesFolder)) {
                                include($PagesDirectory . '/' . $PageName . '.inc.php');
                            } else {
                                echo '<h1 id="request">You are Lost..</h1>';
                                echo '<img src="Images/Lost.gif" width="680" height="430">';

                                echo '<h2>Sorry Page Not Found</h2>';
                            }
                        } else {
                            include($PagesDirectory . '/Home.inc.php');
                        }
                        ?>

                        <div class="clear"></div>	  	 

                    </div>
                </div>
            </div><!-- ./ col-md-8 -->

            <!-- Side Area -->
            <div class="col-md-4">
                <div id="side">
                    <section class="links">
                        <h2>Portfolio</h2>
                        <ul>
                            <li><a href="#">Project One</a></li>
                            <li><a href="#">Project Two</a></li>
                            <li><a href="#">Project Three</a></li>
                            <li><a href="#">Project Four</a></li>
                            <li><a href="#">Project Five</a></li>

                        </ul>
                    </section>
                    <h3 style="background: url(images/pattern.png);">Send us an email</h3>
                    <section class="sideimage">
                        <h3 style="background: url(images/pattern.png);">yourname@yourdomain.com</h3
                    </section>
                    <br>
                    <section>
                        <h3 class="contenthead">Follow Us</h3>
                            <div id="social">
                                <ul>
                                    <li><a href="#" target="_blank">Facebook</a></li>
                                    <li><a href="#" target="_blank">Twitter</a></li>
                                    <li><a href="#" target="_blank">LinkedIn</a></li>
                                    <li><a href="#" target="_blank">Instagram</a></li>
                                    <li><a href="#" target="_blank">Pinterest</a></li>
                                    <li><a href="#" target="_blank">Skype</a></li>
                                </ul>
                            </div>
                    </section>

                </div><!-- ./col-md-4 -->
                <!-- Footer Area -->
                <div id="footer"><hr><p>Dynamic Web Pages Project by | Fionn Ross | &copy; <?php echo date('Y'); ?> All right reserved.

                </div>


                <div style="height: 20px; background: rgb(200, 200, 200);"></div> 
            </div>


            <script src="js/vendor/modernizr-3.11.2.min.js"></script>
            <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

            <script src="js/bootstrap.min.js"></script>
            <script src="js/plugins.js"></script>
            <script src="js/main.js"></script>

            <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
            <script>
                window.ga = function () {
                    ga.q.push(arguments)
                };
                ga.q = [];
                ga.l = +new Date;
                ga('create', 'UA-XXXXX-Y', 'auto');
                ga('set', 'anonymizeIp', true);
                ga('set', 'transport', 'beacon');
                ga('send', 'pageview')
            </script>
            <script src="https://www.google-analytics.com/analytics.js" async></script>
        </div><!-- ./ container -->
    </body>

</html>
