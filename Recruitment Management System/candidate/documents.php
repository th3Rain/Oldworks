<?php
////session_start();
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>

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
    <script src="../bundles/bootstrap-fileupload.js"></script>

    <script type="text/javascript">

        function DocCtrl($scope) {

            $scope.doc = '';

            $("#DocumentName").val("");
            
        }

        function doChangeHeader(bttn) {
            var header = $(bttn).data("current-modal-header");
            $("#courseModalLabel").html(header);
        }
        
        $(function () {

            $('#addSecondaryModal').on('hidden', function () {
                $(this).data('modal', null);
            });



        });

    </script>


<style>
form { display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px }
#progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
#bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
#percent { position:absolute; display:inline-block; top:3px; left:48%; }
</style>
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

    
    

    <div class="span9 ng-scope" style="margin-left: 10px; padding-left: 20px; max-width: 850px;" ng-app="" id="ng-app">

        <h3 class="title-divider" style="margin-bottom: 0;"><span>Documents</span> </h3>
        <div class="lead" style="margin-bottom: 40px;">
            Identify the documents you have from the list and upload 
them. Documents are expected to be either JPEG, MS Word (*.doc or 
*.docx) or PDF format and no larger than 500kb in size.
        </div>
        <div class="ng-scope" style="margin-bottom: 40px;" ng-controller="DocCtrl">
<form id="myForm" novalidate="novalidate" action="documentsUpload.php" class="form-medium form-horizontal ng-pristine ng-valid" enctype="multipart/form-data" method="post" style="max-width: 1125px;"><input name="__RequestVerificationToken" value="BOqGGDHfDOdOLOLyEK-2aUq6Y_pwbRW32yHu0svGmIpSQvWglHnc32xf4YJGfM6lLoUKAImjAmCZWOgzZySpNQlyfNdt-gZzXkcjeDjabrdQWo6Pxnrhs_bqRFB22fcW0" type="hidden"><input data-val="true" data-val-number="The field CandidateId must be a number." data-val-required="The CandidateId field is required." id="CandidateId" name="CandidateId" value="142166" type="hidden">                <div class="control-group">
                    <label class="control-label" for="DocId">Document</label>
                    <div class="controls">
                        <select class="span7 ng-pristine ng-valid" data-val="true" data-val-required="The field Document Name must not be empty." data-val-required="The Document Name field is required." id="DocId" name="DocId" ng-model="doc"><option selected="selected" value="">Select Document To Upload --</option>
<option value="NYSC Discharge Certificate">NYSC Discharge Certificate</option>
<option value="Waec Certificate">Waec Certificate</option>
<option value="Birth Certificate">Birth Certificate</option>
<option value="International Passport">International Passport</option>
<option value="Marriage Certificate">Marriage Certificate</option>
<option value="Age Declaration Document">Age Declaration Document</option>
<option value="Proof of Local Government Area of Origin">Proof of Local Government Area of Origin</option>
<option value="Letter of Admission">Letter of Admission</option>
<option value="School ID Card">School ID Card</option>
<option value="Valid ID Card">Valid ID Card</option>
<option value="First Degree Certificate">First Degree Certificate</option>
<option value="Curriculum Vitae (CV)">Curriculum Vitae (CV)</option>
<option value="Bank Account Verification Document"> Bank Account Verification Document</option>
<option value="Letter of identification from Community">Letter of identification from Community </option>
<option value="A' Level/OND/NCE Certificate">A' Level/OND/NCE Certificate</option>
<option value="JAMB (UTME) Result">JAMB (UTME) Result</option>
<option value="Letter of Identification from Oba">Letter of Identification from Oba</option>
<option value="LASSRA Document">LASSRA Document</option>
<option value="LASSRA Registration Card">LASSRA Registration Card</option>
<option value="First School Leaving Certificate">First School Leaving Certificate</option>
<option value="National Identification Number Card (NIN)">National Identification Number Card (NIN)</option>
<option value="Direct Entry Result">Direct Entry Result</option>
<option value="Letter of Identification from Community Paramount Ruler">Letter of Identification from Community Paramount Ruler</option>
<option value="Letter of Identification from Chairman of Community Development or Executive Council (CDC or CEC)">Letter of Identification from Chairman of Community Development or Executive Council (CDC or CEC)</option>
<option value="Transcript or Signed Statement of Result">Transcript or Signed Statement of Result</option>
<option value="Scholarship Declaration Form">Scholarship Declaration Form</option>
<option value="Compliance Declaration Form">Compliance Declaration Form</option>
<option value="0">Other / Not listed</option>
</select>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="DocId" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div style="display: none;" ng-hide="doc == ''">
                    <div class="control-group" ng-show="doc == 0">
                        <label class="control-label" for="DocumentName">Document Name</label>
                        <div class="controls">
                            <input class="span7" data-val="true" data-val-required="The Document Name field is required." id="DocumentName" name="DocumentName" type="text">
                            <span class="field-validation-valid help-inline error" data-valmsg-for="DocumentName" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="UploadedFile">Document File</label>
                        <div class="controls">
                            <div class="pull-left" style="margin-right: 20px;">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="input-append">
                                        <div class="uneditable-input span4"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input name="UploadedFile" accept="image/jpeg, application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document" type="file"></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="control-group">
                        <div class="controls">
                            <button class="btn" type="submit">Upload File</button>

                        </div>

                    </div>
                </div>
</form>        </div>
<div id="progress">
        <div id="bar"></div>
        <div id="percent">0%</div >
</div>
<br/>
 
<div id="message"></div>
 
<script>
$(document).ready(function()
{
 
    var options = { 
    beforeSend: function() 
    {
        $("#progress").show();
        //clear everything
        $("#bar").width('0%');
        $("#message").html("");
        $("#percent").html("0%");
    },
    uploadProgress: function(event, position, total, percentComplete) 
    {
        $("#bar").width(percentComplete+'%');
        $("#percent").html(percentComplete+'%');
 
    },
    success: function() 
    {
        $("#bar").width('100%');
        $("#percent").html('100%');
 
    },
    complete: function(response) 
    {
        $("#message").html("<font color='green'>"+response.responseText+"</font>");
    },
    error: function()
    {
        $("#message").html("<font color='red'> ERROR: unable to upload files</font>");
 
    }
 
}; 
 
     $("#myForm").ajaxForm(options);
 
});
 
</script>

        <h4 class="title-divider"><span>Documents Uploaded</span></h4>

        <!-- Modal -->
<div id="addSecondaryModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="courseModalLabel" aria-hidden="true" style="width: 800px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="courseModalLabel">Document View</h3>
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
                <th>Document Name</th>
                <th style="width: 60px;"></th>
                <th style="width: 70px;"></th>

            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>JAMB (UTME) Result</td>

                        <td>
                            <button type="button" data-toggle="modal" data-target="#addSecondaryModal" data-current-modal-header="JAMB (UTME) Result" onclick="doChangeHeader(this)" class="btn" data-remote="/documents/document/410347">View</button>
                        </td>


                    <td><a class="btn" data-ajax="true" data-ajax-confirm="Delete this document?" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#itemsList" href="https://scholastica.ng/documents/delete/410347">Delete</a></td>
                </tr>
                <tr>
                    <td>Waec Certificate</td>

                        <td>
                            <button type="button" data-toggle="modal" data-target="#addSecondaryModal" data-current-modal-header="Waec Certificate" onclick="doChangeHeader(this)" class="btn" data-remote="/documents/document/410372">View</button>
                        </td>


                    <td><a class="btn" data-ajax="true" data-ajax-confirm="Delete this document?" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#itemsList" href="https://scholastica.ng/documents/delete/410372">Delete</a></td>
                </tr>
                <tr>
                    <td>School ID Card</td>

                        <td>
                            <button type="button" data-toggle="modal" data-target="#addSecondaryModal" data-current-modal-header="School ID Card" onclick="doChangeHeader(this)" class="btn" data-remote="/documents/document/410529">View</button>
                        </td>


                    <td><a class="btn" data-ajax="true" data-ajax-confirm="Delete this document?" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#itemsList" href="https://scholastica.ng/documents/delete/410529">Delete</a></td>
                </tr>
                <tr>
                    <td>Proof of Local Government Area of Origin</td>

                        <td>
                            <button type="button" data-toggle="modal" data-target="#addSecondaryModal" data-current-modal-header="Proof of Local Government Area of Origin" onclick="doChangeHeader(this)" class="btn" data-remote="/documents/document/428657">View</button>
                        </td>


                    <td><a class="btn" data-ajax="true" data-ajax-confirm="Delete this document?" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#itemsList" href="https://scholastica.ng/documents/delete/428657">Delete</a></td>
                </tr>
                <tr>
                    <td>Letter of Admission</td>

                        <td>
                            <button type="button" data-toggle="modal" data-target="#addSecondaryModal" data-current-modal-header="Letter of Admission" onclick="doChangeHeader(this)" class="btn" data-remote="/documents/document/410603">View</button>
                        </td>


                    <td><a class="btn" data-ajax="true" data-ajax-confirm="Delete this document?" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#itemsList" href="https://scholastica.ng/documents/delete/410603">Delete</a></td>
                </tr>
                <tr>
                    <td>Birth Certificate</td>

                        <td>
                            <button type="button" data-toggle="modal" data-target="#addSecondaryModal" data-current-modal-header="Birth Certificate" onclick="doChangeHeader(this)" class="btn" data-remote="/documents/document/428731">View</button>
                        </td>


                    <td><a class="btn" data-ajax="true" data-ajax-confirm="Delete this document?" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#itemsList" href="https://scholastica.ng/documents/delete/428731">Delete</a></td>
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