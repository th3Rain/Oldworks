<?php
//session_start();
include 'include.php';
require 'sessions.php';

/* $queryZ = "SELECT * FROM `additional_information` WHERE username='$username'";
 
$result2 = mysqli_query($connection, $query) or die("Error conecting with database... ". mysqli_error($connection));
while($row = mysqli_fetch_assoc($result2)){
        $_SESSION['address'] = $row["address"];
     $_SESSION['city'] = $row["city"];
    $_SESSION['country_residence'] = $row["country_residence"];
     $_SESSION['state_residence'] = $row["state_residence"];
   $_SESSION['country_origin'] = $row["country_origin"];
    $_SESSION['state_origin'] = $row['state_origin'];
    $_SESSION['lga_origin'] = $row["lga_origin"];
     $_SESSION['community'] = $row["community"];
   $_SESSION['next_of_kin'] = $row["next_of_kin"];
    $_SESSION['relationship_kin'] = $row['relationship_kin'];
    $_SESSION['mobile_kin'] = $row["mobile_kin"];
     $_SESSION['referee'] = $row["referee"];
  $_SESSION['mobile_referee'] = $row["mobile_referee"];
       $_SESSION['relationship_referee'] = $row["relationship_referee"];
    $_SESSION['working_status'] = $row['working_status'];
    $_SESSION['current_job'] = $row["current_job"];
     $_SESSION['year_of_service'] = $row["year_of_service"];
   $_SESSION['disability_status'] = $row["disability_status"];
    $_SESSION['disability'] = $row['disability'];
    $_SESSION['no_of_children'] = $row["no_of_children"];
}
*/

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
    <script src="../bundles/angular.js"></script><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak{display:none;}ng\:form{display:block;}</style><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak{display:none;}ng\:form{display:block;}</style>
    <script src="../bundles/profile.js"></script>



    <script type="text/javascript">

        $(function () {

            $("#candidate_nav").css("min-height", "600px");

            $("#DateOfBirth").keypress(function (evt) {
                var keycode = evt.charCode || evt.keyCode;
                if (keycode == 9) { //allow Tab through
                    return true;
                } else {
                    // Allow the datepicker to open instead
                    var datePicker = $("#DateOfBirth").data("kendoDatePicker");
                    datePicker.open();
                    return false;
                }
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
    <div style="min-height: 1191px;" id="content">
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


    <div class="span9 ng-scope" style="margin-left: 10px; padding-left: 20px; max-width: 850px;" ng-app="" id="ng-app">

        <h3 class="title-divider" style="margin-bottom: 0;"><span>Personal Information</span> </h3>
        <div class="lead" style="margin-bottom: 40px;">
            Provide basic personal information
        </div>

        <div class="ng-scope" ng-controller="ProfileCtrl" id="divDisable">
<form novalidate="novalidate" action="profileUpdate.php" class="form-medium form-horizontal ng-valid ng-dirty" method="post" style="max-width: 1125px; min-height: 500px;"><input name="__RequestVerificationToken" value="Vn-2rQ-JxyKAgSK78UmisDPNrfWnh3weLSo8u21XNGAX3L1RVM3EYm6Ie3bOVhzLDkaNVP3ISKuiz8piliGuFKNPwUaR8jK3Nqdo2IfQCjJCr-CjIzlwxXS5BWJ1pWiZ0" type="hidden"><input data-val="true" data-val-number="The field CandidateId must be a number." data-val-required="The CandidateId field is required." id="CandidateId" name="CandidateId" value="142166" type="hidden">                <div class="control-group">
                    <label class="control-label" for="FirstName">First Name</label>
                    <div class="controls">
                        <input data-val="true" data-val-required="The FirstName field is required." id="FirstName" name="FirstName"  type="text" <?php echo "value= ". $_SESSION['p_firstname'] ?> >
                        <span class="field-validation-valid help-inline error" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="MiddleName">Middle Name</label>
                    <div class="controls">
                        <input id="MiddleName" name="MiddleName" type="text" <?php echo "value= ". $_SESSION['p_middle'] ?> >
                        <span class="field-validation-valid help-inline error" data-valmsg-for="MiddleName" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="LastName">Surname</label>
                    <div class="controls">
                        <input data-val="true" data-val-required="The Surname field is required." id="LastName" name="LastName" type="text" <?php echo "value= ". $_SESSION['p_lastname'] ?> >
                        <span class="field-validation-valid help-inline error" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="LastName">Your NIN</label>
                    <div class="controls">
                        <input class="span2" data-val="true" data-val-regex="Enter a valid NIN (11 digits)" data-val-regex-pattern="^\d{11}$" id="NIN" name="NIN" type="text" <?php echo "value= ". $_SESSION['p_nin'] ?> >
                        <span class="field-validation-valid help-inline error" data-valmsg-for="NIN" data-valmsg-replace="true"></span>
                        <small>Visit <a href="http://ninenrol.gov.ng/" target="_blank">http://ninenrol.gov.ng</a> to learn more about the National Identity Number (NIN)</small>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="Day">Date of Birth</label>
                    <div class="controls">
                        <span class="k-widget k-datepicker k-header k-input" style="width: 100%;"><span class="k-picker-wrap k-state-default"><input aria-label="Current focused date is Saturday, May 03, 1997" aria-readonly="false" aria-disabled="false" aria-owns="DateOfBirth_dateview" aria-expanded="false" aria-haspopup="true" role="textbox" class="k-input" style="width: 100%;" data-role="datepicker" data-val="true" data-val-date="The field Date Of Birth must be a date." data-val-required="The Date Of Birth field is required." id="DateOfBirth" name="DateOfBirth"  type="text" <?php echo "value= ". $_SESSION['p_dob'] ?> ><span aria-controls="DateOfBirth_dateview" role="button" unselectable="on" class="k-select"><span unselectable="on" class="k-icon k-i-calendar">select</span></span></span></span><script>
	jQuery(function(){jQuery("#DateOfBirth").kendoDatePicker({"format":"yyyy-MM-dd","min":new Date(1900,0,1,0,0,0,0),"max":new Date(2099,11,31,0,0,0,0),"start":"decade"});});
</script>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="DateOfBirth" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="Gender">Gender</label>
                    <div class="controls">
                        <select class="ng-pristine ng-valid" data-val="true" data-val-number="The field Gender must be a number." data-val-required="The Gender field is required." id="Gender" name="Gender" ng-model="gender" <?php echo "value= ". $_SESSION['p_gender'] ?>><option value="">Not Specified</option>
<option selected="selected" value="1">Male</option>
<option value="2">Female</option>
</select>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="Gender" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="MaritalStatus">Marital Status</label>
                    <div class="controls">
                        <select class="ng-pristine ng-valid" data-val="true" data-val-number="The field Marital Status must be a number." data-val-required="The Marital Status field is required." id="MaritalStatus" name="MaritalStatus" ng-model="marital" <?php echo "value= ". $_SESSION['p_marital'] ?> ><option value="">Not Specified</option>
<option selected="selected" value="1">Single</option>
<option value="2">Married</option>
<option value="3">Divorced</option>
<option value="4">Widowed</option>
<option value="5">Seperated</option>
</select>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="MaritalStatus" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div style="display: none;" class="control-group" ng-show="gender == 2 &amp;&amp; marital &gt; 1">
                    <label class="control-label" for="MaidenName">Maiden Name</label>
                    <div class="controls">
                        <input id="MaidenName" name="MaidenName" type="text" <?php echo "value= ". $_SESSION['p_maiden'] ?>>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="MaidenName" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="Email">Email</label>
                    <div class="controls">
                        <span class="uneditable-input"><?php echo  $_SESSION['p_priemail']; ?></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="AlternateEmail">Alternate Email</label>
                    <div class="controls">
                        <input data-val="true" data-val-regex="Enter a valid alternate email" data-val-regex-pattern="([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})" id="AlternateEmail" name="AlternateEmail" type="text" <?php echo "value= ". $_SESSION['p_secemail'] ?>>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="AlternateEmail" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="MobileNo">Mobile Number</label>
                    <div class="controls">
                        <input data-val="true" data-val-regex="Enter a valid mobile number (GSM 11 digits)" data-val-regex-pattern="^\d{11}$" data-val-required="The MobileNo field is required." id="MobileNo" name="MobileNo" type="text" <?php echo "value= ". $_SESSION['p_primobile'] ?> >
                        <span class="field-validation-valid help-inline error" data-valmsg-for="MobileNo" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="AlternateMobileNo">Alternate Mobile</label>
                    <div class="controls">
                        <input data-val="true" data-val-regex="Enter a valid alternate mobile number (GSM 11 digits)" data-val-regex-pattern="^\d{11}$" id="AlternateMobileNo" name="AlternateMobileNo" type="text" <?php echo "value= ". $_SESSION['p_altmobile'] ?> >
                        <span class="field-validation-valid help-inline error" data-valmsg-for="AlternateMobileNo" data-valmsg-replace="true"></span>
                    </div>
                </div>
    <div class="control-group">

        <label class="control-label" for="Username">Preferred Email</label>
        <div class="controls">
            <span class="input-xxlarge uneditable-input" style="border:none; font-weight: bold; font-size: 16px;"><?php echo  $_SESSION['p_priemail']; ?></span>
        </div>
    </div>
    <div class="control-group">

        <label class="control-label" for="Username">Preferred Mobile</label>
        <div class="controls">
            <span class="input-xxlarge uneditable-input" style="border:none; font-weight: bold; font-size: 16px;"><?php echo $_SESSION['p_primobile']; ?></span>
        </div>
    </div>
               
                <div class="control-group">
                    <div class="controls">
                        <button class="btn" type="submit">Update</button>

                    </div>

                </div>
</form>        </div>

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



<div class="k-widget k-calendar" data-role="calendar" style="display: none;" id="b8757597-8eb4-4f0b-ac2c-970da9049852"><div class="k-header"><a aria-disabled="false" href="#" role="button" class="k-link k-nav-prev"><span class="k-icon k-i-arrow-w"></span></a><a aria-disabled="false" href="#" role="button" aria-live="assertive" aria-atomic="true" class="k-link k-nav-fast">May 2017</a><a aria-disabled="false" href="#" role="button" class="k-link k-nav-next"><span class="k-icon k-i-arrow-e"></span></a></div><table aria-activedescendant="b8757597-8eb4-4f0b-ac2c-970da9049852_cell_selected" tabindex="0" role="grid" class="k-content" cellspacing="0"><thead><tr role="row"><th scope="col" title="Sunday">Su</th><th scope="col" title="Monday">Mo</th><th scope="col" title="Tuesday">Tu</th><th scope="col" title="Wednesday">We</th><th scope="col" title="Thursday">Th</th><th scope="col" title="Friday">Fr</th><th scope="col" title="Saturday">Sa</th></tr></thead><tbody><tr role="row"><td class="k-other-month k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/3/30" title="Sunday, April 30, 2017">30</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/1" title="Monday, May 01, 2017">1</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/2" title="Tuesday, May 02, 2017">2</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/3" title="Wednesday, May 03, 2017">3</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/4" title="Thursday, May 04, 2017">4</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/5" title="Friday, May 05, 2017">5</a></td><td class="k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/6" title="Saturday, May 06, 2017">6</a></td></tr><tr role="row"><td class="k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/7" title="Sunday, May 07, 2017">7</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/8" title="Monday, May 08, 2017">8</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/9" title="Tuesday, May 09, 2017">9</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/10" title="Wednesday, May 10, 2017">10</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/11" title="Thursday, May 11, 2017">11</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/12" title="Friday, May 12, 2017">12</a></td><td class="k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/13" title="Saturday, May 13, 2017">13</a></td></tr><tr role="row"><td class="k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/14" title="Sunday, May 14, 2017">14</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/15" title="Monday, May 15, 2017">15</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/16" title="Tuesday, May 16, 2017">16</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/17" title="Wednesday, May 17, 2017">17</a></td><td id="b8757597-8eb4-4f0b-ac2c-970da9049852_cell_selected" aria-selected="true" class="k-today" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/18" title="Thursday, May 18, 2017">18</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/19" title="Friday, May 19, 2017">19</a></td><td class="k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/20" title="Saturday, May 20, 2017">20</a></td></tr><tr role="row"><td class="k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/21" title="Sunday, May 21, 2017">21</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/22" title="Monday, May 22, 2017">22</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/23" title="Tuesday, May 23, 2017">23</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/24" title="Wednesday, May 24, 2017">24</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/25" title="Thursday, May 25, 2017">25</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/26" title="Friday, May 26, 2017">26</a></td><td class="k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/27" title="Saturday, May 27, 2017">27</a></td></tr><tr role="row"><td class="k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/28" title="Sunday, May 28, 2017">28</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/29" title="Monday, May 29, 2017">29</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/30" title="Tuesday, May 30, 2017">30</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/31" title="Wednesday, May 31, 2017">31</a></td><td class="k-other-month" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/1" title="Thursday, June 01, 2017">1</a></td><td class="k-other-month" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/2" title="Friday, June 02, 2017">2</a></td><td class="k-other-month k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/3" title="Saturday, June 03, 2017">3</a></td></tr><tr role="row"><td class="k-other-month k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/4" title="Sunday, June 04, 2017">4</a></td><td class="k-other-month" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/5" title="Monday, June 05, 2017">5</a></td><td class="k-other-month" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/6" title="Tuesday, June 06, 2017">6</a></td><td class="k-other-month" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/7" title="Wednesday, June 07, 2017">7</a></td><td class="k-other-month" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/8" title="Thursday, June 08, 2017">8</a></td><td class="k-other-month" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/9" title="Friday, June 09, 2017">9</a></td><td class="k-other-month k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/10" title="Saturday, June 10, 2017">10</a></td></tr></tbody></table><div class="k-footer"><a title="Thursday, May 18, 2017" href="#" class="k-link k-nav-today">Thursday, May 18, 2017</a></div></div><div style="display: none; position: absolute;" data-role="popup" id="DateOfBirth_dateview" class="k-calendar-container k-popup k-group k-reset" aria-hidden="true"></div><div class="k-widget k-calendar" data-role="calendar" style="display: none;" id="a267f52c-9b84-47f5-808d-5ae33dad1c60"><div class="k-header"><a aria-disabled="false" href="#" role="button" class="k-link k-nav-prev"><span class="k-icon k-i-arrow-w"></span></a><a aria-disabled="false" href="#" role="button" aria-live="assertive" aria-atomic="true" class="k-link k-nav-fast">May 2017</a><a aria-disabled="false" href="#" role="button" class="k-link k-nav-next"><span class="k-icon k-i-arrow-e"></span></a></div><table aria-activedescendant="a267f52c-9b84-47f5-808d-5ae33dad1c60_cell_selected" tabindex="0" role="grid" class="k-content" cellspacing="0"><thead><tr role="row"><th scope="col" title="Sunday">Su</th><th scope="col" title="Monday">Mo</th><th scope="col" title="Tuesday">Tu</th><th scope="col" title="Wednesday">We</th><th scope="col" title="Thursday">Th</th><th scope="col" title="Friday">Fr</th><th scope="col" title="Saturday">Sa</th></tr></thead><tbody><tr role="row"><td class="k-other-month k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/3/30" title="Sunday, April 30, 2017">30</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/1" title="Monday, May 01, 2017">1</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/2" title="Tuesday, May 02, 2017">2</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/3" title="Wednesday, May 03, 2017">3</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/4" title="Thursday, May 04, 2017">4</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/5" title="Friday, May 05, 2017">5</a></td><td class="k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/6" title="Saturday, May 06, 2017">6</a></td></tr><tr role="row"><td class="k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/7" title="Sunday, May 07, 2017">7</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/8" title="Monday, May 08, 2017">8</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/9" title="Tuesday, May 09, 2017">9</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/10" title="Wednesday, May 10, 2017">10</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/11" title="Thursday, May 11, 2017">11</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/12" title="Friday, May 12, 2017">12</a></td><td class="k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/13" title="Saturday, May 13, 2017">13</a></td></tr><tr role="row"><td class="k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/14" title="Sunday, May 14, 2017">14</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/15" title="Monday, May 15, 2017">15</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/16" title="Tuesday, May 16, 2017">16</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/17" title="Wednesday, May 17, 2017">17</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/18" title="Thursday, May 18, 2017">18</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/19" title="Friday, May 19, 2017">19</a></td><td class="k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/20" title="Saturday, May 20, 2017">20</a></td></tr><tr role="row"><td id="a267f52c-9b84-47f5-808d-5ae33dad1c60_cell_selected" aria-selected="true" class="k-today k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/21" title="Sunday, May 21, 2017">21</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/22" title="Monday, May 22, 2017">22</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/23" title="Tuesday, May 23, 2017">23</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/24" title="Wednesday, May 24, 2017">24</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/25" title="Thursday, May 25, 2017">25</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/26" title="Friday, May 26, 2017">26</a></td><td class="k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/27" title="Saturday, May 27, 2017">27</a></td></tr><tr role="row"><td class="k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/28" title="Sunday, May 28, 2017">28</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/29" title="Monday, May 29, 2017">29</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/30" title="Tuesday, May 30, 2017">30</a></td><td role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/4/31" title="Wednesday, May 31, 2017">31</a></td><td class="k-other-month" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/1" title="Thursday, June 01, 2017">1</a></td><td class="k-other-month" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/2" title="Friday, June 02, 2017">2</a></td><td class="k-other-month k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/3" title="Saturday, June 03, 2017">3</a></td></tr><tr role="row"><td class="k-other-month k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/4" title="Sunday, June 04, 2017">4</a></td><td class="k-other-month" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/5" title="Monday, June 05, 2017">5</a></td><td class="k-other-month" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/6" title="Tuesday, June 06, 2017">6</a></td><td class="k-other-month" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/7" title="Wednesday, June 07, 2017">7</a></td><td class="k-other-month" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/8" title="Thursday, June 08, 2017">8</a></td><td class="k-other-month" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/9" title="Friday, June 09, 2017">9</a></td><td class="k-other-month k-weekend" role="gridcell"><a tabindex="-1" class="k-link" href="#" data-value="2017/5/10" title="Saturday, June 10, 2017">10</a></td></tr></tbody></table><div class="k-footer"><a title="Sunday, May 21, 2017" href="#" class="k-link k-nav-today">Sunday, May 21, 2017</a></div></div><div style="display: none; position: absolute;" data-role="popup" id="DateOfBirth_dateview" class="k-calendar-container k-popup k-group k-reset" aria-hidden="true">
    </div></body></html>