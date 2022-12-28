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
    <script src="../bundles/angular.js"></script><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak{display:none;}ng\:form{display:block;}</style>

    <script type="text/javascript">


        $(function () {

            $("#candidate_nav").css("min-height", "600px");

            $("#CurrentClass").change(HideShowDate);


            $('#addSecondaryModal').on('loaded', function () {
                $.validator.unobtrusive.parse($(this));
            });


            HideShowDate();
        });


        function HideShowDate() {

            var entry = $("#CurrentClass  option:selected").text();

            if (entry === 'Graduated') {

                $("#rowGraduated").show();
            }
            else {
                $("#rowGraduated").hide();
            }
        }

        function RefreshSecondaryGrid() {

            $.get('/secondary/institutions', function (data) {

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
    <div style="min-height: 688px;" id="content">
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

        <h3 class="title-divider" style="margin-bottom: 0;"><span>Secondary Level</span> </h3>
        <div class="lead" style="margin-bottom: 40px;">
            Provide details of your secondary education status and institutions attended.
        </div>


        <div style="margin-bottom: 50px;">
<form novalidate="novalidate" action="/secondarylevelProcess.php" class="form-medium form-horizontal" data-ajax="true" data-ajax-loading="#myBasicInfoLoader" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#messageView" id="form0" method="post" style="max-width: 1125px;"><input name="__RequestVerificationToken" value="lAQA-tYNIcU-lUGOmKaG1ONodVFcQ287ZrpWKnZwZGXPQZBGjsioXjx29LzN2JCujcgsJTx2N8Z-i1l54AYlIa4vjxAi6oH5FPc7ShjCJEkjjj8VkxinO8TjenplmjTd0" type="hidden"><input data-val="true" data-val-number="The field CandidateId must be a number." data-val-required="The CandidateId field is required." id="CandidateId" name="CandidateId" value="142166" type="hidden">                <div id="myBasicInfoLoader" style="width: 800px; height: 200px; margin: 0 auto; background-color: #fff; filter: alpha(opacity=70); -ms-opacity: 0.7; opacity: 0.7; display: none; text-align: center; z-index: 2000; position: absolute;">
                    <img src="institutions_files/loading.gif">
                </div> 
                <div class="control-group">
                    <label class="control-label" for="CurrentClass">Current Class</label>
                    <div class="controls">
                        <select data-val="true" data-val-number="The field Current Class must be a number." data-val-required="The Current Class field is required." id="CurrentClass" name="CurrentClass"><option value="">Not Specified</option>
<option value="1">JSS 1</option>
<option value="2">JSS 2</option>
<option value="3">JSS 3</option>
<option value="4">SSS 1</option>
<option value="5">SSS 2</option>
<option value="6">SSS 3</option>
<option value="7">Graduated</option>
</select>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="CurrentClass" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group" id="rowGraduated">
                    <label class="control-label" for="MonthGraduated">Month / Year Graduated</label>
                    <div class="controls">
                        <select data-val="true" data-val-number="The field MonthGraduated must be a number." id="MonthGraduated" name="MonthGraduated" style="width: 90px;"><option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
                        <select data-val="true" data-val-number="The field YearGraduated must be a number." id="YearGraduated" name="YearGraduated" style="width: 70px;"><option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
</select>
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

        <h4 class="title-divider"><span>Institutions Attended</span></h4>




        <button type="button" data-toggle="modal" data-target="#addSecondaryModal" class="btn" data-remote="/secondary/addsecondaryinstitution">Add Institution</button>


        <!-- Modal -->
        <div id="addSecondaryModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="courseModalLabel" aria-hidden="true" style="width: 750px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="courseModalLabel">Add Secondary Institution</h3>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
            </div>
        </div>

          <div style="margin-top: 20px; margin-bottom: 50px;" id="itemsList">

    <table class="table table-bordered table-striped table-hover table-condensed">
        <thead>
            <tr>
                <th>Secondary Institution</th>
                <th style="width: 80px;">Entry Year</th>
                <th style="width: 70px;">Exit Year</th>
                 <th style="width: 70px;"></th>
                
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a class="btn" data-ajax="true" data-ajax-confirm="Remove this Institution?" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#itemsList" href="secondaryProcess.php">Remove</a></td>
                </tr>

        </tbody>
    </table>
 
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