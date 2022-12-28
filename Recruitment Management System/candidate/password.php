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
    <div style="min-height: 676px;" id="content">
        <div class="container">
            <div class="form-wrapper" style="max-width: 1125px; min-height: 500px;">
                

<h3 class="title-divider"><span>Change Password</span> </h3>





    <form novalidate="novalidate" class="form-medium form-horizontal" style="max-width: 1125px; min-height: 500px;" action="passwordProcess.php" method="POST">
        <input name="__RequestVerificationToken" value="XJuM3no-guoIW5JC_h97fUk62W0Y7cJkOlzAHU5-xKd53lxp6efBHbAjFuChkLmQPXt8NIXlXw23zv3fdhlfx5lTt5Wsrl_4hPYmHpUfVndjQ36Ms1RjkUsqfJpwtoex0" type="hidden">
        
        <div class="control-group">

            <label class="control-label" for="OldPassword">Old Password</label>
            <div class="controls">

                <input data-val="true" data-val-required="The OldPassword field is required." id="OldPassword" name="OldPassword" type="password">
                <span class="field-validation-valid help-inline error" data-valmsg-for="OldPassword" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="NewPassword">New Password</label>
            <div class="controls">
                <input data-val="true" data-val-length="The NewPassword must be at least 6 characters long." data-val-length-max="100" data-val-length-min="6" data-val-required="The NewPassword field is required." id="NewPassword" name="NewPassword" type="password">
                <span class="field-validation-valid help-inline error" data-valmsg-for="NewPassword" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="ConfirmPassword">Confirm New Password</label>
            <div class="controls">
                <input data-val="true" data-val-equalto="'ConfirmPassword' and 'NewPassword' do not match." data-val-equalto-other="*.NewPassword" data-val-required="The ConfirmPassword field is required." id="ConfirmPassword" name="ConfirmPassword" type="password">
                <span class="field-validation-valid help-inline error" data-valmsg-for="ConfirmPassword" data-valmsg-replace="true"></span>
            </div>
        </div>
        
          <div class="control-group">
                    <label class="control-label" for="RelatedToOfficial">Security Question?</label>
                    <div class="controls">
                        <select class="ng-valid ng-dirty" data-val="true" data-val-required="The RelatedToOfficial field is required." id="RelatedToOfficial" name="RelatedToOfficial" ng-model="related"><option value=""></option>
<option value="true">My best friend's name?</option>
<option selected="selected" value="true">Name of my child?</option>
</select>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="RelatedToOfficial" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div style="display: none;" ng-show="related == 'true'">
                    <div class="control-group">
                        <label class="control-label" for="OfficialName">Name of Official</label>
                        <div class="controls">
                            <input data-val="true" data-val-required="The OfficialName field is required." id="OfficialName" name="OfficialName" type="text">
                            <span class="field-validation-valid help-inline error" data-valmsg-for="OfficialName" data-valmsg-replace="true"></span>
                        </div>
                    </div>
        </div>
         <div class="control-group">
            <div class="controls">
                <button class="btn" type="submit">Update</button>

            </div>

        </div>

     

    </form>




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