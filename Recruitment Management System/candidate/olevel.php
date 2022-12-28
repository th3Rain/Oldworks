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

    

    <script type="text/javascript" src="../bundles/resume_nav.js"></script>




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
    <div style="min-height: 751px;" id="content">
        <div class="container">
            <div class="form-wrapper" style="max-width: 1125px; min-height: 500px;">
                <div class="row-fluid">


<div class="span3 sidebar" style="margin-left: 0;">
    <div class="section-menu">
        <ul class="nav nav-list" style="min-height: 600px;" id="candidate_nav">
            <li class="active" id="candidate_profile"><a href="profile.php" class="first">Personal Information <i class="icon-angle-right"></i></a></li>
            <li id="candidate_additional"><a href="additional.php">Additional Information <i class="icon-angle-right"></i></a></li>
            <li id="candidate_photo"><a href="photo.php">Passport Photograph<i class="icon-angle-right"></i></a></li>
            <li id="candidate_secondary"><a href="secondary.php">Secondary Level <i class="icon-angle-right"></i></a></li>
            <li id="candidate_olevel"><a href="olevel.php">O-Level Details <i class="icon-angle-right"></i></a></li>
            <li id="candidate_undergrad"><a href="undergraduate.php">Undergraduate Level <i class="icon-angle-right"></i></a></li>
            <li id="candidate_postgrad"><a href="postgraduate.php">Post Graduate Level <i class="icon-angle-right"></i></a></li>
            <li id="candidate_documents"><a href="documents.php">Documents <i class="icon-angle-right"></i></a></li>
            <li id="candidate_banks"><a href="bank.php">Bank Details <i class="icon-angle-right"></i></a></li>
            <li id="active_scholarships"><a href="activeApplications.php">Active Applications <i class="icon-angle-right"></i></a></li>
        </ul>
    </div>
</div>


    <div class="span9" style="margin-left: 10px; padding-left: 20px; max-width: 850px;">

        <h3 class="title-divider" style="margin-bottom: 0;"><span>O-Level Details</span> </h3>
        <div class="lead" style="margin-bottom: 40px;">
            Provide details of at least 5 credits minimum of your O-Level result.<br>
            Type the subject name followed by a space and the grade. <br>
            An example would be in the form of 'Biology A1'. <br>
            The first and second entries are for Mathematics and English Language respectively.
        </div>


        <div style="margin-bottom: 50px;">
<form novalidate="novalidate" action="/updateolevel.php" class="form-medium form-horizontal" data-ajax="true" data-ajax-loading="#myBasicInfoLoader" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#messageView" id="form0" method="post" style="max-width: 1125px;">                <div class="control-group">
                    <label class="control-label" for="Subject1">Mathematics</label>
                    <div class="controls">
                        <input class="span7" data-val="true" data-val-required="The Subject1 field is required." id="Subject1" name="Subject1"  type="text">
                        <span class="field-validation-valid help-inline error" data-valmsg-for="Subject1" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="Subject2">English Language</label>
                    <div class="controls">
                        <input class="span7" data-val="true" data-val-required="The Subject2 field is required." id="Subject2" name="Subject2" type="text">
                        <span class="field-validation-valid help-inline error" data-valmsg-for="Subject2" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="Subject3">Subject 3</label>
                    <div class="controls">
                        <input class="span7" data-val="true" data-val-required="The Subject3 field is required." id="Subject3" name="Subject3" type="text">
                        <span class="field-validation-valid help-inline error" data-valmsg-for="Subject3" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="Subject4">Subject 4</label>
                    <div class="controls">
                        <input class="span7" data-val="true" data-val-required="The Subject4 field is required." id="Subject4" name="Subject4" type="text">
                        <span class="field-validation-valid help-inline error" data-valmsg-for="Subject4" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="Subject5">Subject 5</label>
                    <div class="controls">
                        <input class="span7" data-val="true" data-val-required="The Subject5 field is required." id="Subject5" name="Subject5" type="text">
                        <span class="field-validation-valid help-inline error" data-valmsg-for="Subject5" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="Subject6">Subject 6</label>
                    <div class="controls">
                        <input class="span7" id="Subject6" name="Subject6" type="text">
                        <span class="field-validation-valid help-inline error" data-valmsg-for="Subject6" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="Subject7">Subject 7</label>
                    <div class="controls">
                        <input class="span7" id="Subject7" name="Subject7" type="text">
                        <span class="field-validation-valid help-inline error" data-valmsg-for="Subject7" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button class="btn" type="submit">Update</button>

                    </div>

                </div>
                <div id="messageView">
                </div>
</form>
        </div>





    </div>


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