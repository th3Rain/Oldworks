<?php
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

    <style type="text/css">
        .form-horizontal .control-label {
            width: 170px !important;

        }
    </style>




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
    <script src="../bundles/undergradlevel.js"></script>

    <script type="text/javascript">


        $(function () {

            $("#candidate_nav").css("min-height", "800px");

            $("#StateId").change(DoLoadInstitutions);

            $("#InstitutionId").change(DoLoadCourses);

            $("#CourseOfStudyId").change(ChangeCGPA);

            $("#CurrentLevel").change(ShowHideCGPA);

            

            ShowHideCGPA();

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
    <div style="min-height: 1656px;" id="content">
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

        <h3 class="title-divider" style="margin-bottom: 0;"><span>Undergraduate Level</span> </h3>
        <div class="lead" style="margin-bottom: 40px;">
            Details of your undergraduate education including entry details and current status.
        </div>

        <div style="margin-bottom: 50px;">
<form novalidate="novalidate" action="undergraduateProcessing.php" class="form-medium form-horizontal ng-pristine ng-valid" data-ajax="true" data-ajax-loading="#undergraduateLoader" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#undergraduateView" id="form0" method="post" style="max-width: 1125px;"><input name="__RequestVerificationToken" value="K0e4q-UuNIQrg31t_w3mBZOG8lYj6psETEHkr97TGbh8sTAsExCKZKeQS0t7y1F_CeujLRllsbG7xj1CG6T9leQxqQZH--Cz0YF9D8d0R72LH713wEXw3SjEUFpNj_gZ0" type="hidden"><input data-val="true" data-val-number="The field CandidateId must be a number." data-val-required="The CandidateId field is required." id="CandidateId" name="CandidateId" value="142166" type="hidden">                <div id="undergraduateLoader" style="width: 800px; height: 200px; margin: 0 auto; background-color: #fff; filter: alpha(opacity=70); -ms-opacity: 0.7; opacity: 0.7; display: none; text-align: center; z-index: 2000; position: absolute;">
                    <img src="../bundles/loading.gif">
                </div>
                <div class="ng-scope" ng-controller="GradCtr">

                    <div id="divDisable">
                        <h4 class="title-divider"><span>Entry Details</span></h4>


                        <div class="control-group nullable">
                            <label class="control-label" for="Domiciliation">Location of Institution</label>
                            <div class="controls">

                                <select class="ng-pristine ng-valid" data-val="true" data-val-number="The field Domiciliation must be a number." data-val-required="The Domiciliation field is required." id="Domiciliation" name="Domiciliation" ng-change="LoadAllCourses()" ng-model="domi"><option value="1">Nigeria</option>
<option value="2">Foreign</option>
</select>

                                <span class="field-validation-valid help-inline error" data-valmsg-for="Domiciliation" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div ng-show="domi == '1'">

                            <div class="control-group">
                                <label class="control-label" for="StateId">Institution State</label>
                                <div class="controls">
                                    <select data-val="true" data-val-number="The field Institution State must be a number." data-val-required="The Institution State field is required." id="StateId" name="StateId"><option value="">Select --</option>
<option value="45">Abia</option>
<option value="46">Adamawa</option>
<option value="47">Akwa Ibom</option>
<option value="48">Anambra</option>
<option value="49">Bauchi</option>
<option value="50">Bayelsa</option>
<option value="51">Benue</option>
<option value="52">Borno</option>
<option value="53">Cross River</option>
<option value="54">Delta</option>
<option value="55">Ebonyi</option>
<option value="56">Edo</option>
<option value="57">Ekiti</option>
<option value="58">Enugu</option>
<option value="59">FCT</option>
<option value="60">Gombe</option>
<option value="61">Imo</option>
<option value="62">Jigawa</option>
<option value="63">Kaduna</option>
<option value="64">Kano</option>
<option value="65">Katsina</option>
<option value="66">Kebbi</option>
<option value="67">Kogi</option>
<option value="68">Kwara</option>
<option value="69">Lagos</option>
<option value="70">Nassarawa</option>
<option value="71">Niger</option>
<option value="72">Ogun</option>
<option value="73">Ondo</option>
<option value="74">Osun</option>
<option value="75">Oyo</option>
<option value="76">Plateau</option>
<option value="77">Rivers</option>
<option value="78">Sokoto</option>
<option value="79">Taraba</option>
<option value="80">Yobe</option>
<option value="81">Zamfara</option>
</select>
                                    <span class="field-validation-valid help-inline error" data-valmsg-for="StateId" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="InstitutionId">Institution</label>
                                <div class="controls">
<input data-val="true" data-val-required="The Institution field is required." id="InstitutionNamea" name="InstitutionNamea" type="text">
                                    <span class="field-validation-valid help-inline error" data-valmsg-for="InstitutionId" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                        </div>

                        <div style="display: none;" class="control-group" ng-show="domi == '2'">
                            <label class="control-label" for="InstitutionName">Institution</label>
                            <div class="controls">
                                <input class="span7" data-val="true" data-val-required="The Institution field is required." id="InstitutionName" name="InstitutionName" type="text">
                                <span class="field-validation-valid help-inline error" data-valmsg-for="InstitutionName" data-valmsg-replace="true"></span>
                            </div>
                        </div>



                        <div class="control-group">
                            <label class="control-label" for="StudyTime">Study Time</label>
                            <div class="controls">
                                <select data-val="true" data-val-number="The field StudyTime must be a number." id="StudyTime" name="StudyTime"><option value="1">Full Time</option>
<option value="2">Part Time</option>
</select>
                                <span class="field-validation-valid help-inline error" data-valmsg-for="StudyTime" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div ng-hide="domi == 2">
                            <div class="control-group nullable">
                                <label class="control-label" for="EntryMode">Entry Mode</label>
                                <div class="controls">
                                    <select class="ng-pristine ng-valid" data-val="true" data-val-number="The field EntryMode must be a number." data-val-required="The EntryMode field is required." id="EntryMode" name="EntryMode" ng-model="entry"><option value="1">UTME</option>
<option value="2">Direct Entry/ Pre Degree/ NCE</option>
</select>
                                    <span class="field-validation-valid help-inline error" data-valmsg-for="EntryMode" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="control-group" ng-show="entry == '1'">
                                <label class="control-label" for="EntryRegistrationNumber">Jamb/Poly Reg Number</label>
                                <div class="controls">
                                    <input data-val="true" data-val-regex="Registration number should be 10 characters in all (8 digits and 2 letters)" data-val-regex-pattern="^\d{8}[a-zA-Z]{2}$" data-val-required="The Registration Number field is required." id="EntryRegistrationNumber" name="EntryRegistrationNumber" type="text">
                                    <span class="field-validation-valid help-inline error" data-valmsg-for="EntryRegistrationNumber" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            
                                    <span class="field-validation-valid help-inline error" data-valmsg-for="EntryScore" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div style="display: none;" class="control-group" ng-show="entry == '2'">
                                <label class="control-label" for="DirectEntryRegNumber">Direct Entry Reg Number</label>
                                <div class="controls">
                                    <input data-val="true" data-val-regex="Direct Entry Registration number should be 10 characters in all (8 digits and 2 letters)" data-val-regex-pattern="^\d{8}[a-zA-Z]{2}$" id="DirectEntryRegNumber" name="DirectEntryRegNumber" type="text">
                                    <span class="field-validation-valid help-inline error" data-valmsg-for="DirectEntryRegNumber" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div style="display: none;" class="control-group" ng-show="entry == '2'">
                                <label class="control-label" for="DirectEntryGrade">Direct Entry Grade</label>
                                <div class="controls">
                                    <input id="DirectEntryGrade" name="DirectEntryGrade" type="text">
                                    <span class="field-validation-valid help-inline error" data-valmsg-for="DirectEntryGrade" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="YearOfEntry">Year of Admission</label>
                            <div class="controls">
                                <select data-val="true" data-val-number="The field Year of Admission must be a number." data-val-required="The Year of Admission field is required." id="YearOfEntry" name="YearOfEntry"><option value="">Year</option>
<option value="1957">1957</option>
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
<option value="2017">2017</option>
</select>
                                <span class="field-validation-valid help-inline error" data-valmsg-for="YearOfEntry" data-valmsg-replace="true"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="MatricNumber">Matric Number</label>
                            <div class="controls">
                                <input data-val="true" data-val-required="The Matric Number field is required." id="MatricNumber" name="MatricNumber" type="text">
                                <span class="field-validation-valid help-inline error" data-valmsg-for="MatricNumber" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                    


                    <h4 class="title-divider"><span>Current Details</span></h4>

                <div class="control-group">
                            <label class="control-label" for="CourseOfStudy">Course of Study</label>
                            <div class="controls">
                                <input data-val="true" data-val-required="The Course of Study field is required." id="CourseOfStudy" name="CourseOfStudy" type="text">
                                <span class="field-validation-valid help-inline error" data-valmsg-for="CourseOfStudy" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                    

                    <div class="control-group nullable">
                        <label class="control-label" for="CourseDurationYears">Course Duration</label>
                        <div class="controls">
                            <select data-val="true" data-val-number="The field CourseDurationYears must be a number." id="CourseDurationYears" name="CourseDurationYears"><option selected="selected" value="">Select --</option>
<option value="2"> 2 Years</option>
<option value="3"> 3 Years</option>
<option value="4"> 4 Years</option>
<option value="5"> 5 Years</option>
<option value="6"> 6 Years</option>
<option value="7"> 7 Years</option>
</select>
                            <span class="field-validation-valid help-inline error" data-valmsg-for="CourseDurationYears" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                <div class="control-group nullable">
                    <label class="control-label" for="CurrentLevel">Current Level</label>
                    <div class="controls">
                        <select class="ng-pristine ng-valid" data-val="true" data-val-number="The field CurrentLevel must be a number." data-val-required="The CurrentLevel field is required." id="CurrentLevel" name="CurrentLevel" ng-model="level"><option value="1">Level 100</option>
<option value="2">Level 200</option>
<option value="3">Level 300</option>
<option value="4">Level 400</option>
<option value="5">Level 500</option>
<option value="6">Level 600</option>
<option value="7">Level 700</option>
<option value="9">ND 1</option>
<option value="10">ND 2</option>
<option value="11">HND 1</option>
<option value="12">HND 2</option>
<option value="8">Graduated</option>
</select>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="CurrentLevel" data-valmsg-replace="true"></span>
                    </div>
                </div>

                    <div id="divCGPA">
                        <div class="control-group" ng-show="domi == '1'">
                            <label class="control-label" for="CGPAScale">CGPA Scale</label>
                            <div class="controls">
                                <span class="uneditable-input span1"><strong id="CGPAScale">5.00</strong></span>
                            </div>
                        </div>

                        <div class="control-group" ng-hide="level == '8' || level == null">
                            <label class="control-label" for="CurrentCGPA">Current CGPA</label>
                            <div class="controls">
                                <input class="span2" data-val="true" data-val-number="The field Current CGPA must be a number." data-val-required="The Current CGPA field is required." id="CurrentCGPA" name="CurrentCGPA" value="" type="text">
                                <span class="field-validation-valid help-inline error" data-valmsg-for="CurrentCGPA" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                    </div>


                    <div id="divPassFail" style="display: none;">
                        <div class="control-group">
                            <label class="control-label" for="CGPAScale">CGPA Scale</label>
                            <div class="controls">
                                <span class="uneditable-input span1"><strong id="CGPA_NA">N/A</strong></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="CurrentCGPA">Pass / Fail Status</label>
                            <div class="controls">
                                <select class="span2" data-val="true" data-val-required="The Pass/Fail Status field is required." id="CGPA_PASS_FAIL" name="CGPA_PASS_FAIL"><option selected="selected" value="">Select --</option>
<option value="PASS">PASS</option>
<option value="FAIL">FAIL</option>
</select>
                                <span class="field-validation-valid help-inline error" data-valmsg-for="CGPA_PASS_FAIL" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                    </div>

                    <div class="control-group" ng-hide="level == '8' || level == null">
                        <label class="control-label" for="ExpectedYearOfGraduation">Expected Year of Graduation</label>
                        <div class="controls">
                            <select data-val="true" data-val-number="The field Expected Year of Graduation must be a number." data-val-required="The Expected Year of Graduation field is required." id="ExpectedYearOfGraduation" name="ExpectedYearOfGraduation"><option value="">Year</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
</select>
                            <span class="field-validation-valid help-inline error" data-valmsg-for="ExpectedYearOfGraduation" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div style="display: none;" ng-show="level == '8'">
                        <div class="control-group">
                            <label class="control-label" for="YearOfGraduation">Year of Graduation</label>
                            <div class="controls">
                                <select data-val="true" data-val-number="The field Year of Graduation must be a number." data-val-required="The Year of Graduation field is required." id="YearOfGraduation" name="YearOfGraduation"><option selected="selected" value="">Year</option>
<option value="1957">1957</option>
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
<option value="2017">2017</option>
</select>
                                <span class="field-validation-valid help-inline error" data-valmsg-for="YearOfGraduation" data-valmsg-replace="true"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="GraduatingCGPA">Graduating CGPA</label>
                            <div class="controls">
                                <input class="span2" data-val="true" data-val-number="The field Graduating CGPA must be a number." data-val-required="The Graduating CGPA field is required." id="GraduatingCGPA" name="GraduatingCGPA" type="text">
                                <span class="field-validation-valid help-inline error" data-valmsg-for="GraduatingCGPA" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="DegreeClassId">Degree Class</label>
                            <div class="controls">
                                <select data-val="true" data-val-number="The field DegreeClassId must be a number." id="DegreeClassId" name="DegreeClassId"><option selected="selected" value="">Select --</option>
<option value="1">First Class</option>
<option value="2">Second Class Upper Division</option>
<option value="3">Second Class Lower Division</option>
<option value="4">Third Class</option>
<option value="5">Pass</option>
</select>
                                <span class="field-validation-valid help-inline error" data-valmsg-for="DegreeClassId" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="CompletedNysc">Completed NYSC?</label>
                            <div class="controls">
                                <select class="ng-pristine ng-valid" data-val="true" data-val-required="The CompletedNysc field is required." id="CompletedNysc" name="CompletedNysc" ng-model="nysc"><option selected="selected" value="False">NO</option>
<option value="True">YES</option>
</select>
                                <span class="field-validation-valid help-inline error" data-valmsg-for="CompletedNysc" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div style="display: none;" ng-show="nysc == 'True'">
                            <div class="control-group">
                                <label class="control-label" for="NyscCallUpNumber">NYSC Callup Number</label>
                                <div class="controls">
                                    <input id="NyscCallUpNumber" name="NyscCallUpNumber" type="text">
                                    <span class="field-validation-valid help-inline error" data-valmsg-for="NyscCallUpNumber" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="NyscCertificateNumber">NYSC Certificate Number</label>
                                <div class="controls">
                                    <input id="NyscCertificateNumber" name="NyscCertificateNumber" type="text">
                                    <span class="field-validation-valid help-inline error" data-valmsg-for="NyscCertificateNumber" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button class="btn" type="submit">Update</button>

                        </div>

                    </div>

                    <div id="undergraduateView">
                    </div>
                    <div id="loader" data-request-url-allcourses="/undergraduate/allcourses"></div>
                    <div id="loader2" data-request-url-courses="/undergraduate/courseslist"></div>
                    <div id="loader3" data-request-url-institutions="/undergraduate/institutions"></div>
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