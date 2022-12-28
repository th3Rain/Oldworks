

<?php
//session_start();
include 'include.php';
require 'sessions.php';
//include '../NewPm/pm_check.php';
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

    

    <script src="../bundles/jquery.js"></script>
    <script src="../bundles/bootstrap-fileupload.js"></script>


    <script type="text/javascript">

        $(function () {
            $("abbr.timeago").timeago();


            $('#addSecondaryModal').on('hidden', function () {
                $(this).data('modal', null);
            });


        });



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
                                    <?php echo "<span>". $firstname ." ". $lastname . "[ <strong>".$email. "</strong> ]</span>"?>
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
    <div style="min-height: 1111px;" id="content">
        <div class="container">
            <div class="form-wrapper" style="max-width: 1125px; min-height: 500px;">
                




<h3 class="title-divider"><span>Account Overview</span> </h3>

        <div class="row-fluid" style="margin-bottom: 40px;">
            Last Login Date: <?php echo "<strong>".$login_date. "</strong>&nbsp;&nbsp;"; ?>
        (<abbr class="timeago" title="months ago">months ago</abbr>)
        </div>




<div class="row-fluid" style="margin-bottom: 20px;">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th style="width: 200px; background-color: #f9f9f9;" class="lead myLead">Applications / Campaigns</th>
                <td class="lead myLead"><span>Applied Jobs</span>&nbsp;&nbsp;<span class="badge mylargeBadge">None</span>&nbsp;&nbsp;<a href="../cms/catalog.php">View Job Catalog</a></td>
            </tr>
            <tr>
                <th style="width: 200px; background-color: #f9f9f9;" class="lead myLead">Messages</th>
                <td class="lead myLead"><span>Total Messages</span>&nbsp;&nbsp;<span class="badge mylargeBadge"><?php

                
                $sql="select id,username from account where username='".$_SESSION['username']."'";
                $query=mysqli_query($connection, $sql);
                while($row=mysqli_fetch_array($query)){
                    $pid=$row['id'];
                    $username=$row['username'];
                }

                $sqlCommand="select count(id) as numbers from pm_imbox where userid='$pid'" ;
                $query=mysqli_query($connection, $sqlCommand);
                $result=mysqli_fetch_assoc($query);
                $inboxMessagesTotal=$result['numbers'];



                if($inboxMessagesTotal>0)
{   echo $inboxMessagesTotal;}

    else{}?></span> &nbsp;&nbsp;&nbsp;&nbsp; <span>Unread Messages</span>&nbsp;&nbsp;<span class="badge mylargeBadge">0</span></td>
            </tr>
        </tbody>
    </table>
</div>



<div class="row-fluid">
    <h4>Profile Completion Status</h4>

    <table class="table table-bordered lead myLead">
        <tbody>
            <tr>
                <th style="width: 200px; background-color: #f9f9f9;"><a href="profile.php">Personal Details</a></th>
                <td>
                    <?php
                $sql="select middlename,birthdate from personal where id='".$id."'";
                $query=mysqli_query($connection, $sql);
                while($row=mysqli_fetch_array($query)){
                    $midname=$row['middlename'];
                    $bday=$row['birthdate'];
                }
                if (empty($midname) || empty ($bday)){
                    echo "<span class='label mylargeBadge'> Not Updated </span>";
                }
                    else{
                        echo "<span class='label label-success mylargeBadge'>Updated</span>";
                    }
                        ?>
                </td>
            </tr>
            <tr>
                <th style="width: 200px; background-color: #f9f9f9;"><a href="photo.php">Passport Photograph</a></th>
                <td>
                    <?php
                $sql="select passport_photo from documents where id='".$id."'";
                $query=mysqli_query($connection, $sql);
                while($row=mysqli_fetch_array($query)){
                    $passport=$row['passport_photo'];
                }
                if (empty($passport)){
                    echo "<span class='label mylargeBadge'> Not Uploaded </span>";
                }
                    else{
                        echo "<span class='label label-success mylargeBadge'>Uploaded</span>";
                    }
                        ?>
                </td>
            </tr>
            
            <tr>
                <th style="width: 200px; background-color: #f9f9f9;"><a href="undergraduate.php">Undergraduate Level</a></th>
                <td>
                    <?php
                $sql="select institution_name,current_level from `undergraduate` where id='".$id."'";
                $query=mysqli_query($connection, $sql);
                while($row=mysqli_fetch_array($query)){
                    $insitution_name=$row['institution_name'];
                    $current_level=$row['current_level'];
                }
                if (empty($insitution_name) || empty ($current_level)){
                    echo "<span class='label mylargeBadge'> Not Updated </span>";
                }
                    else{
                        echo "<span class='label label-success mylargeBadge'>Updated</span>";
                    }
                        ?>
                </td>
            </tr>
            <tr>
                <th style="width: 200px; background-color: #f9f9f9;"><a href="postgraduate.php">Postgraduate Level</a></th>
                <td>
                        <span class="label mylargeBadge">No Postgraduate Details Entered</span>
                </td>
            </tr>
            <tr>
                <th style="width: 200px; background-color: #f9f9f9;"><a href="documents.php">Documents</a></th>
                <td>
                        <span class="label mylargeBadge">6 Documents Uploaded</span>

                </td>
            </tr>
        </tbody>
    </table>
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