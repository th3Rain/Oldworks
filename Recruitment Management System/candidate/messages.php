<?php
//session_start();
include 'include.php';
require 'sessions.php';
?>
<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>R.M.S  solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="accept-language" content="en-GB">

   <link rel="shortcut icon" href="../favicon.png">
    
   <link href="../bundles/css_002.css" rel="stylesheet">

    <script src="../bundles/modernizr.txt"></script>



    <link href="../bundles/css.css" rel="stylesheet" type="text/css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="/js/html5shim.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
      <script src="/js/json2.js"></script>
    <![endif]-->
    

    <link href="../bundles/bootstrap-fileupload.css" rel="stylesheet">





    <!--Scripts -->
    <script src="../bundles/jquery.txt"></script>

    <script src="../bundles/jqueryval.txt"></script>

    <script src="../bundles/bootstrap.txt"></script>


    <script type="text/javascript">

        $(function () {


            resizeWindow();
            $(window).resize(resizeWindow);



        });



        function resizeWindow() {

            var winHeight = $(document).height();

            var otherHeight = 275;


            // $('#myContainer').height(winHeight - otherHeight);
            $('#content').css("min-height", (winHeight - otherHeight));
        }


    </script>

    

    <script src="../bundles/mypager.js"></script>
    

    <script type="text/javascript">

  

        $(function () {

            $('#viewMessageModal').on('hidden', function () {
                $(this).data('modal', null);
            });


        });

        function RefreshGrid() {

            var page = $("ul.pagination li.active > a").html();

            if (page == undefined) page = 1;

            $.get('/messages?page=' + page + '&usePartial=true', function (data) {

                $('#itemsList').html(data);

            });


        }


    </script>




</head>

<body class="page">
    <div id="navigation" class="wrapper">
        <div class="navbar  navbar-static-top">



            <!--Header & Branding region-->
             <div class="header">
                <div class="header-inner container">
                    <div class="row-fluid">
                        <div class="span7">
                            <!--branding/logo-->
                             <a class="brand" href="../index.php" title="Home">
                                <h1>
                                    <img src="img/rms_logo.png" />
                                </h1>
                            </a>
                            <div class="slogan hidden-tablet hidden-phone">RMS JOB <small><sub><i>SOLUTIONS.</i></sub></small></div>
                        </div>


                        <!--header rightside-->
                        <div class="span5">


                            <!--social media icons-->
                            <div class="social-media pull-right hidden-phone">
                                    <?php echo "<span>". $firstname ." ". $lastname . "[ <strong>".$email. "</strong> ]</span>" ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="navbar-inner">

                   <!--mobile collapse menu button-->
                    <a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>

                    <!--user menu-->
                   <ul class="nav user-menu pull-right">
                            <li><a href="logoff.php" class="btn btn-success signup">Logout</a></li>
                    </ul>

                    <!--everything within this div is collapsed on mobile-->
                    <div class="nav-collapse collapse">

                        <!--main navigation-->
                         <ul class="nav" id="main-menu">
                            <li class="home-link"><a href="../index.php"><i class="icon-home hidden-phone"></i><span class="visible-phone">Home</span></a></li>

                           <li><a href="../index.php" class="menu-item">Home Page</a></li>
                            <li><a href="../about.html" class="menu-item">About</a></li>
                            <li><a href="../faq.html" class="menu-item">FAQ</a></li>
                            <li><a href="../contact.html" class="menu-item">Contact us</a></li>


                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" id="pages-drop" data-toggle="dropdown">My Account +</a>
                                    <!-- Dropdown Menu -->
                                    <ul class="dropdown-menu pull-left" role="menu" aria-labelledby="pages-drop">
                                        <li role="menuitem"><a href="overview.php" tabindex="-1" class="menu-item">Overview</a></li>
                                        <li role="menuitem"><a href="profile.php" tabindex="-1" class="menu-item">My Profile</a></li>
                                        <li role="menuitem"><a href="applications.php" tabindex="-1" class="menu-item">My Applications</a></li>
                                        <li role="menuitem"><a href="messages.php" tabindex="-1" class="menu-item">My Messages</a></li>
                                        <li role="menuitem"><a href="password.php" tabindex="-1" class="menu-item">Change Password</a></li>
                                    </ul>
                                </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </div>
    <div style="min-height: 591px;" id="content">
        <div class="container">
            <div class="form-wrapper" style="max-width: 1125px; min-height: 500px;">
                


<h3 class="title-divider"><span>My Messages</span> </h3>




<div>


    <!-- Modal -->
    <div id="viewMessageModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="stateModalLabel" aria-hidden="true" style="width: 800px;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="stateModalLabel">Message Details</h3>
        </div>
        <div class="modal-body" style="max-height: 550px;">

        </div>
        <div class="modal-footer">
        </div>
    </div>
</div>


<div>
<iframe width="92%" height="500px" src="../NewPM/pm_inbox.php" name="iframe_a"></iframe>
</div>






            </div>
        </div>
    </div>
    <div id="content-below" class="wrapper">
        <div class="container">
            <div class="row-fluid">
            </div>
        </div>
    </div>

 <!-- FOOTER -->
    <footer id="footer" style="padding-bottom: 5px; padding-top: 5px;">
        <div class="container">

            <div class="row-fluid">

                <div class="subfooter" style="padding-bottom: 5px; padding-top: 5px;">
                    <div class="span8">
                        <p>Copyright 2017 &copy; RMS <small>solutions.</small> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://www.facebook.com/oyeyemi.gabriel1" target="_blank" style="text-decoration: underline">Oyeyemi Gabriel</a></p>
                    </div>
                    <div class="span4">
                        <ul class="inline pull-right">
                            <li><a href="terms.html">Terms</a></li>
                            <li><a href="privacy.html">Privacy</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>




</body></html>