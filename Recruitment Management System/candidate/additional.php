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


    <script type="text/javascript">

        function AdditionalCtr($scope, $http) {

            //#region set current level or use selected
            var scholarship_selected = $("#CurrentJob option:selected").val();

            if (scholarship_selected) {
                $scope.scholarship = scholarship_selected;
            } else {
                $scope.scholarship = 'False';
            }

            var disability_selected = $("#HasDisability option:selected").val();

            if (disability_selected) {
                $scope.disability = disability_selected;
            } else {
                $scope.disability = 'False';
            }

            var community_selected = $("#CommunityId option:selected").val();



            if (community_selected) {
                $scope.community = community_selected;
            } else {

                $scope.community = '';
            }

        }


        $(function () {

            $("#candidate_nav").css("min-height", "600px");

            $("#CountryOfResidenceId").change(HideShowStateOfResidenceRow);
            $("#CountryOfOriginId").change(HideShowStateOfOriginAndLgaRow);
            $("#StateOfOriginId").change(GetLGA);

            $("#LgaOfOriginId").change(GetCommunities);

            HideShowStateOfResidenceRow();
            HideShowStateOfOriginAndLgaRow();

            

        });


        function HideShowStateOfOriginAndLgaRow() {

            var entry = $("#CountryOfOriginId option:selected").text();

            if (entry === 'Nigeria') {

                $("#rowStateOfOrigin").show();
                $("#rowLgaOfOrigin").show();
                $("#rowCommunity").show();
            } else {
                $("#rowStateOfOrigin").hide();
                $("#rowLgaOfOrigin").hide();
                $("#rowCommunity").hide();
            }
        }


        function HideShowStateOfResidenceRow() {

            var entry = $("#CountryOfResidenceId option:selected").text();

            if (entry === 'Nigeria') {

                $("#rowStateOfResidence").show();
            } else {
                $("#rowStateOfResidence").hide();
            }
        }


        function GetLGA() {

            var options = [];
            var stateId = $("#StateOfOriginId option:selected").val();

            $.getJSON('/candidate/getlgalist/' + stateId, function (result) {
                for (var i = 0; i < result.length; i++) {
                    options.push('<option value="',
                        result[i].LgaId, '">',
                        result[i].LgaName, '</option>');
                }
                $("#LgaOfOriginId").html(options.join(''));


                GetCommunities();

            });
        }

        function GetCommunities() {

            var options = [];

            options.push("<option value=''></option>");

            var lgaId = $("#LgaOfOriginId option:selected").val();

            $.getJSON('/candidate/getcommunitylist/' + lgaId, function (result) {
                for (var i = 0; i < result.length; i++) {
                    options.push('<option value="',
                        result[i].CommunityId, '">',
                        result[i].CommunityName, '</option>');
                }

                options.push("<option value='0'>&lt;Not Listed&gt;</option>");

                $("#CommunityId").html(options.join(''));
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
    <div style="min-height: 1735px;" id="content">
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

        <h3 class="title-divider" style="margin-bottom: 0;"><span>Additional Information</span> </h3>
        <div class="lead" style="margin-bottom: 40px;">
            Provide residential / nationality details
        </div>


        

<form novalidate="novalidate" action="additionalProcessing.php" class="form-medium form-horizontal ng-pristine ng-valid" method="post" style="max-width: 1125px; min-height: 500px;"><input name="__RequestVerificationToken" value="sQJ3EOuYl1E4kPDGLjVewH0L7UtW0oUCMjs7GRaziQ7yfH6-daeXusVVFqyk50JkE6nsd9qVNExIN_sam_TR0VnUB_J5PDtcKvfhEOJc8EGa0yT7UCqZTuwlav1JVrJ_0" type="hidden"><div class="validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div><input data-val="true" data-val-number="The field CandidateId must be a number." data-val-required="The CandidateId field is required." id="CandidateId" name="CandidateId" value="142166" type="hidden">            <div class="ng-scope" ng-controller="AdditionalCtr">

                <h4 class="title-divider"><span>Residential Details</span></h4>

                <div class="control-group">
                    <label class="control-label" for="Address">Address</label>
                    <div class="controls">
                        <textarea class="span9" cols="20" id="Address" name="Address" rows="2" ><?php echo $_SESSION['address'] ?></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="City">City</label>
                    <div class="controls">
                        <input id="City" name="City" type="text" <?php echo "value=".$_SESSION['city'] ?>>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="City" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="City">Country of Residence</label>
                    <div class="controls">
                        <select data-val="true" data-valmsg-for="The field CountryOfResidenceId must be a number." id="CountryOfResidenceId" name="CountryOfResidenceId">
                            <option value=$_SESSION['country_residence'] selected="selected"> <?php $_SESSION['country_residence'] ?> </option>
                            <option value="1">Afghanistan</option>
<option value="2">Aland Islands</option>
<option value="3">Albania </option>
<option value="4">Algeriaan Samoa</option>
<option value="5">American Samoa</option>
<option value="6">Andorra</option>
<option value="7">Angola</option>
<option value="8">Anguilla</option>
<option value="9">Antarctica</option>
<option value="10">Antigua and Barbuda </option>
<option value="11">Argentina</option>
<option value="12">Armenia</option>
<option value="13">Aruba </option>
<option value="14">Australia</option>
<option value="15">Austria </option>
<option value="16">Azerbaijan  </option>
<option value="17">Bahamas</option>
<option value="18">Bahrain</option>
<option value="19">Bangladesh</option>
<option value="20">Barbados</option>
<option value="21">Belarus</option>
<option value="22">Belgium</option>
<option value="23">Belize</option>
<option value="24">Benin</option>
<option value="25">Bermuda</option>
<option value="26">Bhutan</option>
<option value="27">Bolivia</option>
<option value="28">Bosnia and Herzegowina</option>
<option value="29">Botswana</option>
<option value="30">Bouvet Island</option>
<option value="31">Brazil</option>
<option value="32">British Indian Ocean Territory</option>
<option value="33">Brunei</option>
<option value="34">Bulgaria</option>
<option value="35">Burkina Faso</option>
<option value="36">Burundi</option>
<option value="37">Cambodia</option>
<option value="38">Cameroon</option>
<option value="39">Canada</option>
<option value="40">Cape Verde</option>
<option value="41">Cayman Islands</option>
<option value="42">Central African Republic</option>
<option value="43">Chad</option>
<option value="44">Chile</option>
<option value="45">China </option>
<option value="46">Christmas Island</option>
<option value="47">Cocos (Keeling) Islands</option>
<option value="48">Colombia</option>
<option value="49">Comoros</option>
<option value="50">Congo Democratic Republic</option>
<option value="51">Cook Islands</option>
<option value="52">Costa Rica</option>
<option value="53">Côte d'Ivoire</option>
<option value="54">Croatia   </option>
<option value="55">Cuba</option>
<option value="56">Cyprus</option>
<option value="57">Czech Republic</option>
<option value="58">Denmark</option>
<option value="59">Djibouti</option>
<option value="60">Dominica</option>
<option value="61">Dominican Republic</option>
<option value="62">Ecuador</option>
<option value="63">Egypt</option>
<option value="64">El Salvador</option>
<option value="65">Equatorial Guinea</option>
<option value="66">Eritrea</option>
<option value="67">Estonia</option>
<option value="68">Ethiopia</option>
<option value="69">Falkland Islands (Malvinas)</option>
<option value="70">Faroe Islands</option>
<option value="71">Fiji</option>
<option value="72">Finland</option>
<option value="73">France</option>
<option value="74">Gabon</option>
<option value="75">Gambia</option>
<option value="76">Georgia</option>
<option value="77">Germany</option>
<option value="78">Ghana</option>
<option value="79">Gibraltar</option>
<option value="80">Greece</option>
<option value="81">Greenland</option>
<option value="82">Grenada </option>
<option value="83">Guam</option>
<option value="84">Guatemala</option>
<option value="85">Guinea</option>
<option value="86">Guinea-Bissau</option>
<option value="87">Guyana</option>
<option value="88">Haiti</option>
<option value="89">Heard and Mc Donald Islands</option>
<option value="90">Honduras</option>
<option value="91">Hong Kong</option>
<option value="92">Hungary</option>
<option value="93">Iceland</option>
<option value="94">India</option>
<option value="95">Indonesia</option>
<option value="96">Iran</option>
<option value="97">Iraq</option>
<option value="98">Ireland</option>
<option value="99">Israel</option>
<option value="100">Italy</option>
<option value="101">Jamaica</option>
<option value="102">Japan</option>
<option value="103">Jordan</option>
<option value="104">Kazakhstan </option>
<option value="105">Kenya</option>
<option value="106">Kiribati</option>
<option value="107">Korea, North</option>
<option value="108">Korea, South</option>
<option value="109">Kuwait</option>
<option value="110">Kyrgyzstan</option>
<option value="111">Laos</option>
<option value="112">Latvia</option>
<option value="113">Lebanon</option>
<option value="114">lesotho</option>
<option value="115">Liberia</option>
<option value="116">Libya</option>
<option value="117">Liechtenstein</option>
<option value="118">Lithuania</option>
<option value="119">Luxembourg</option>
<option value="120">Macau</option>
<option value="121">Macedonia</option>
<option value="122">Madagascar</option>
<option value="123">Malawi</option>
<option value="124">Malaysia</option>
<option value="125">Maldives</option>
<option value="126">Mali</option>
<option value="127">Malta</option>
<option value="128">Mauritania</option>
<option value="129">Mauritius</option>
<option value="130">Mexico</option>
<option value="131">Micronesia </option>
<option value="132">Moldova</option>
<option value="133">Monaco</option>
<option value="134">Mongolia</option>
<option value="135">Montserrat</option>
<option value="136">Morocco</option>
<option value="137">Mozambique</option>
<option value="138">Myanmar</option>
<option value="139">Namibia</option>
<option value="140">Nauru</option>
<option value="141">Nepal</option>
<option value="142">Netherlands</option>
<option value="143">Netherlands Antilles</option>
<option value="144">New Zealand</option>
<option value="145">Nicaragua</option>
<option value="146">Niger</option>
<option selected="selected" value="147">Nigeria</option>
<option value="148">Niue</option>
<option value="149">Norfolk Island</option>
<option value="150">Northern Mariana Islands</option>
<option value="151">Norway</option>
<option value="152">Oman</option>
<option value="153">Pakistan</option>
<option value="154">Palau</option>
<option value="155">Palestinian Territory</option>
<option value="156">Panama</option>
<option value="157">Papua New Guinea</option>
<option value="158">Paraguay</option>
<option value="159">Peru</option>
<option value="160">Philippines</option>
<option value="161">Pitcairn</option>
<option value="162">Poland</option>
<option value="163">Portugal</option>
<option value="164">Puerto Rico</option>
<option value="165">Qatar</option>
<option value="166">Republic of Marshall Islands</option>
<option value="167">Republic of Serbia</option>
<option value="168">Romania</option>
<option value="169">Russian Federation</option>
<option value="170">Rwanda</option>
<option value="171">Saint Helena</option>
<option value="172">Saint Kitts and Nevis</option>
<option value="173">Saint Lucia</option>
<option value="174">Saint Vincent and The Grenadines</option>
<option value="175">Samoa</option>
<option value="176">San Marino</option>
<option value="177">Sao Tome and Principe</option>
<option value="178">Saudi Arabia</option>
<option value="179">Senegal</option>
<option value="180">Seychelles</option>
<option value="181">Sierra Leone</option>
<option value="182">Singapore</option>
<option value="183">Slovakia  </option>
<option value="184">Slovenia</option>
<option value="185">Solomon Islands</option>
<option value="186">Somalia</option>
<option value="187">South Africa</option>
<option value="188">South Georgia and The South Sandwich Islands</option>
<option value="189">Spain</option>
<option value="190">Sri Lanka</option>
<option value="191">Sudan </option>
<option value="192">Suriname</option>
<option value="193">Svalbard and Jan Mayen</option>
<option value="194">Swaziland</option>
<option value="195">Sweden</option>
<option value="196">Switzerland</option>
<option value="197">Syria</option>
<option value="198">Taiwan</option>
<option value="199">Tajikistan </option>
<option value="200">Tanzania</option>
<option value="201">Thailand</option>
<option value="202">Timor-Leste</option>
<option value="203">Togo</option>
<option value="204">Tokelau</option>
<option value="205">Tonga </option>
<option value="206">Trinidad and Tobago</option>
<option value="207">Tunisia</option>
<option value="208">Turkey</option>
<option value="209">Turkmenistan</option>
<option value="210">Turks and Caicos Islands</option>
<option value="211">Tuvalu</option>
<option value="212">Uganda</option>
<option value="213">Ukraine</option>
<option value="214">United Arab Emirates </option>
<option value="215">United Kingdom </option>
<option value="216">United States</option>
<option value="217">United States Minor Outlying Islands</option>
<option value="218">Uruguay</option>
<option value="219">Uzbekistan</option>
<option value="220">Vanuatu</option>
<option value="221">Vatican City State (Holy See)</option>
<option value="222">Venezuela</option>
<option value="223">Vietnam</option>
<option value="224">Virgin Islands, British</option>
<option value="225">Virgin Islands, U.S.</option>
<option value="226">Western Sahara</option>
<option value="227">Yemen  </option>
<option value="228">Zambia</option>
<option value="229">Zimbabwe</option>
</select>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="City" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div class="control-group" id="rowStateOfResidence">
                    <label class="control-label" for="StateOfResidenceId">State of Residence</label>
                    <div class="controls">
                        <select data-val="true" data-valmsg-for="The field State of Residence must be a number." data-val-required="The State of Residence field is required." id="StateOfResidenceId" name="StateOfResidenceId" >
<option value=<?php echo $_SESSION['state_residence'] ?> selected="selected"> <?php echo $_SESSION['state_residence'] ?> </option>
                            <option value="Abia">Abia</option>
<option value=">Adamawa">Adamawa</option>
<option value="Akwa Ibom">Akwa Ibom</option>
<option value="Anambra">Anambra</option>
<option value="Bauchi">Bauchi</option>
<option value="Bayelsa">Bayelsa</option>
<option value="Benue">Benue</option>
<option value="Borno">Borno</option>
<option value="Cross River">Cross River</option>
<option value="Delta">Delta</option>
<option value="Ebonyi">Ebonyi</option>
<option value="Edo">Edo</option>
<option value="Ekiti">Ekiti</option>
<option value="Enugu">Enugu</option>
<option value="FCT">FCT</option>
<option value="Gombe">Gombe</option>
<option value="Imo">Imo</option>
<option value="Jigawa">Jigawa</option>
<option value="Kaduna">Kaduna</option>
<option value="Kano">Kano</option>
<option value="Katsina">Katsina</option>
<option value="Kebbi">Kebbi</option>
<option value="Kogi">Kogi</option>
<option value="Kwara">Kwara</option>
<option value="Lagos">Lagos</option>
<option value="Nassarawa">Nassarawa</option>
<option value="Niger">Niger</option>
<option value="Ogun">Ogun</option>
<option value="Ondo">Ondo</option>
<option value="Osun">Osun</option>
<option value="Oyo">Oyo</option>
<option value="Plateau">Plateau</option>
<option value="Rivers">Rivers</option>
<option value="Sokoto">Sokoto</option>
<option value="Taraba">Taraba</option>
<option value="Yobe">Yobe</option>
<option value="Zamfara">Zamfara</option>
</select>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="StateOfResidenceId" data-valmsg-replace="true"></span>
                    </div>
                </div>

                <h4 class="title-divider"><span>Nationality Details</span></h4>
                <div id="divDisable">
                    <div class="control-group">
                        <label class="control-label" for="CountryOfOriginId">Country of Origin</label>
                        <div class="controls">
                            <select data-val="true" data-val-number="The field CountryOfOriginId must be a number." id="CountryOfOriginId" name="CountryOfOriginId" <?php echo "value=".$_SESSION['country_origin'] ?> >
                                <option value= <?php echo $_SESSION['country_origin'] ?> selected="selected"> <?php echo $_SESSION['country_origin'] ?> </option>
                                <option value="1">Afghanistan</option>
<option value="2">Aland Islands</option>
<option value="3">Albania </option>
<option value="4">Algeriaan Samoa</option>
<option value="5">American Samoa</option>
<option value="6">Andorra</option>
<option value="7">Angola</option>
<option value="8">Anguilla</option>
<option value="9">Antarctica</option>
<option value="10">Antigua and Barbuda </option>
<option value="11">Argentina</option>
<option value="12">Armenia</option>
<option value="13">Aruba </option>
<option value="14">Australia</option>
<option value="15">Austria </option>
<option value="16">Azerbaijan  </option>
<option value="17">Bahamas</option>
<option value="18">Bahrain</option>
<option value="19">Bangladesh</option>
<option value="20">Barbados</option>
<option value="21">Belarus</option>
<option value="22">Belgium</option>
<option value="23">Belize</option>
<option value="24">Benin</option>
<option value="25">Bermuda</option>
<option value="26">Bhutan</option>
<option value="27">Bolivia</option>
<option value="28">Bosnia and Herzegowina</option>
<option value="29">Botswana</option>
<option value="30">Bouvet Island</option>
<option value="31">Brazil</option>
<option value="32">British Indian Ocean Territory</option>
<option value="33">Brunei</option>
<option value="34">Bulgaria</option>
<option value="35">Burkina Faso</option>
<option value="36">Burundi</option>
<option value="37">Cambodia</option>
<option value="38">Cameroon</option>
<option value="39">Canada</option>
<option value="40">Cape Verde</option>
<option value="41">Cayman Islands</option>
<option value="42">Central African Republic</option>
<option value="43">Chad</option>
<option value="44">Chile</option>
<option value="45">China </option>
<option value="46">Christmas Island</option>
<option value="47">Cocos (Keeling) Islands</option>
<option value="48">Colombia</option>
<option value="49">Comoros</option>
<option value="50">Congo Democratic Republic</option>
<option value="51">Cook Islands</option>
<option value="52">Costa Rica</option>
<option value="53">Côte d'Ivoire</option>
<option value="54">Croatia   </option>
<option value="55">Cuba</option>
<option value="56">Cyprus</option>
<option value="57">Czech Republic</option>
<option value="58">Denmark</option>
<option value="59">Djibouti</option>
<option value="60">Dominica</option>
<option value="61">Dominican Republic</option>
<option value="62">Ecuador</option>
<option value="63">Egypt</option>
<option value="64">El Salvador</option>
<option value="65">Equatorial Guinea</option>
<option value="66">Eritrea</option>
<option value="67">Estonia</option>
<option value="68">Ethiopia</option>
<option value="69">Falkland Islands (Malvinas)</option>
<option value="70">Faroe Islands</option>
<option value="71">Fiji</option>
<option value="72">Finland</option>
<option value="73">France</option>
<option value="74">Gabon</option>
<option value="75">Gambia</option>
<option value="76">Georgia</option>
<option value="77">Germany</option>
<option value="78">Ghana</option>
<option value="79">Gibraltar</option>
<option value="80">Greece</option>
<option value="81">Greenland</option>
<option value="82">Grenada </option>
<option value="83">Guam</option>
<option value="84">Guatemala</option>
<option value="85">Guinea</option>
<option value="86">Guinea-Bissau</option>
<option value="87">Guyana</option>
<option value="88">Haiti</option>
<option value="89">Heard and Mc Donald Islands</option>
<option value="90">Honduras</option>
<option value="91">Hong Kong</option>
<option value="92">Hungary</option>
<option value="93">Iceland</option>
<option value="94">India</option>
<option value="95">Indonesia</option>
<option value="96">Iran</option>
<option value="97">Iraq</option>
<option value="98">Ireland</option>
<option value="99">Israel</option>
<option value="100">Italy</option>
<option value="101">Jamaica</option>
<option value="102">Japan</option>
<option value="103">Jordan</option>
<option value="104">Kazakhstan </option>
<option value="105">Kenya</option>
<option value="106">Kiribati</option>
<option value="107">Korea, North</option>
<option value="108">Korea, South</option>
<option value="109">Kuwait</option>
<option value="110">Kyrgyzstan</option>
<option value="111">Laos</option>
<option value="112">Latvia</option>
<option value="113">Lebanon</option>
<option value="114">lesotho</option>
<option value="115">Liberia</option>
<option value="116">Libya</option>
<option value="117">Liechtenstein</option>
<option value="118">Lithuania</option>
<option value="119">Luxembourg</option>
<option value="120">Macau</option>
<option value="121">Macedonia</option>
<option value="122">Madagascar</option>
<option value="123">Malawi</option>
<option value="124">Malaysia</option>
<option value="125">Maldives</option>
<option value="126">Mali</option>
<option value="127">Malta</option>
<option value="128">Mauritania</option>
<option value="129">Mauritius</option>
<option value="130">Mexico</option>
<option value="131">Micronesia </option>
<option value="132">Moldova</option>
<option value="133">Monaco</option>
<option value="134">Mongolia</option>
<option value="135">Montserrat</option>
<option value="136">Morocco</option>
<option value="137">Mozambique</option>
<option value="138">Myanmar</option>
<option value="139">Namibia</option>
<option value="140">Nauru</option>
<option value="141">Nepal</option>
<option value="142">Netherlands</option>
<option value="143">Netherlands Antilles</option>
<option value="144">New Zealand</option>
<option value="145">Nicaragua</option>
<option value="146">Niger</option>
<option value="147">Nigeria</option>
<option value="148">Niue</option>
<option value="149">Norfolk Island</option>
<option value="150">Northern Mariana Islands</option>
<option value="151">Norway</option>
<option value="152">Oman</option>
<option value="153">Pakistan</option>
<option value="154">Palau</option>
<option value="155">Palestinian Territory</option>
<option value="156">Panama</option>
<option value="157">Papua New Guinea</option>
<option value="158">Paraguay</option>
<option value="159">Peru</option>
<option value="160">Philippines</option>
<option value="161">Pitcairn</option>
<option value="162">Poland</option>
<option value="163">Portugal</option>
<option value="164">Puerto Rico</option>
<option value="165">Qatar</option>
<option value="166">Republic of Marshall Islands</option>
<option value="167">Republic of Serbia</option>
<option value="168">Romania</option>
<option value="169">Russian Federation</option>
<option value="170">Rwanda</option>
<option value="171">Saint Helena</option>
<option value="172">Saint Kitts and Nevis</option>
<option value="173">Saint Lucia</option>
<option value="174">Saint Vincent and The Grenadines</option>
<option value="175">Samoa</option>
<option value="176">San Marino</option>
<option value="177">Sao Tome and Principe</option>
<option value="178">Saudi Arabia</option>
<option value="179">Senegal</option>
<option value="180">Seychelles</option>
<option value="181">Sierra Leone</option>
<option value="182">Singapore</option>
<option value="183">Slovakia  </option>
<option value="184">Slovenia</option>
<option value="185">Solomon Islands</option>
<option value="186">Somalia</option>
<option value="187">South Africa</option>
<option value="188">South Georgia and The South Sandwich Islands</option>
<option value="189">Spain</option>
<option value="190">Sri Lanka</option>
<option value="191">Sudan </option>
<option value="192">Suriname</option>
<option value="193">Svalbard and Jan Mayen</option>
<option value="194">Swaziland</option>
<option value="195">Sweden</option>
<option value="196">Switzerland</option>
<option value="197">Syria</option>
<option value="198">Taiwan</option>
<option value="199">Tajikistan </option>
<option value="200">Tanzania</option>
<option value="201">Thailand</option>
<option value="202">Timor-Leste</option>
<option value="203">Togo</option>
<option value="204">Tokelau</option>
<option value="205">Tonga </option>
<option value="206">Trinidad and Tobago</option>
<option value="207">Tunisia</option>
<option value="208">Turkey</option>
<option value="209">Turkmenistan</option>
<option value="210">Turks and Caicos Islands</option>
<option value="211">Tuvalu</option>
<option value="212">Uganda</option>
<option value="213">Ukraine</option>
<option value="214">United Arab Emirates </option>
<option value="215">United Kingdom </option>
<option value="216">United States</option>
<option value="217">United States Minor Outlying Islands</option>
<option value="218">Uruguay</option>
<option value="219">Uzbekistan</option>
<option value="220">Vanuatu</option>
<option value="221">Vatican City State (Holy See)</option>
<option value="222">Venezuela</option>
<option value="223">Vietnam</option>
<option value="224">Virgin Islands, British</option>
<option value="225">Virgin Islands, U.S.</option>
<option value="226">Western Sahara</option>
<option value="227">Yemen  </option>
<option value="228">Zambia</option>
<option value="229">Zimbabwe</option>
</select>
                            <span class="field-validation-valid help-inline error" data-valmsg-for="CountryOfOriginId" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="control-group" id="rowStateOfOrigin">
                        <label class="control-label" for="StateOfOriginId">State of Origin</label>
                        <div class="controls">
                            <select data-val="true" data-valmsg-for="The field State of Origin must be a number." data-val-required="The State of Origin field is required." id="StateOfOriginId" name="StateOfOriginId">
                                <option value=<?php echo $_SESSION['state_origin'] ?> selected="selected"><?php echo $_SESSION['state_origin'] ?></option> 
                                <option value="Abia">Abia</option>
<option value=">Adamawa">Adamawa</option>
<option value="Akwa Ibom">Akwa Ibom</option>
<option value="Anambra">Anambra</option>
<option value="Bauchi">Bauchi</option>
<option value="Bayelsa">Bayelsa</option>
<option value="Benue">Benue</option>
<option value="Borno">Borno</option>
<option value="Cross River">Cross River</option>
<option value="Delta">Delta</option>
<option value="Ebonyi">Ebonyi</option>
<option value="Edo">Edo</option>
<option value="Ekiti">Ekiti</option>
<option value="Enugu">Enugu</option>
<option value="FCT">FCT</option>
<option value="Gombe">Gombe</option>
<option value="Imo">Imo</option>
<option value="Jigawa">Jigawa</option>
<option value="Kaduna">Kaduna</option>
<option value="Kano">Kano</option>
<option value="Katsina">Katsina</option>
<option value="Kebbi">Kebbi</option>
<option value="Kogi">Kogi</option>
<option value="Kwara">Kwara</option>
<option value="Lagos">Lagos</option>
<option value="Nassarawa">Nassarawa</option>
<option value="Niger">Niger</option>
<option value="Ogun">Ogun</option>
<option value="Ondo">Ondo</option>
<option value="Osun">Osun</option>
<option value="Oyo">Oyo</option>
<option value="Plateau">Plateau</option>
<option value="Rivers">Rivers</option>
<option value="Sokoto">Sokoto</option>
<option value="Taraba">Taraba</option>
<option value="Yobe">Yobe</option>
<option value="Zamfara">Zamfara</option>
</select>
                            <span class="field-validation-valid help-inline error" data-valmsg-for="StateOfOriginId" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div class="control-group" id="rowLgaOfOrigin">
                        <label class="control-label" for="LgaOfOriginId">LGA of Origin</label>
                        <div class="controls">
                            <select data-val="true" data-val-number="The field LgaOfOriginId must be a number." id="LgaOfOriginId" name="LgaOfOriginId" >
                                <option value=<?php echo $_SESSION['lga_origin'] ?>  selected="selected"><?php echo $_SESSION['lga_origin'] ?> </option>
                            <option value="490">Asa</option>
<option value="491">Baruten</option>
<option value="492">Edu</option>
<option value="493">Ekiti</option>
<option value="494">Ifelodun</option>
<option value="495">Ilorin-East</option>
<option value="496">Ilorin-South</option>
<option value="497">Ilorin-west</option>
<option value="498">Irepodun</option>
<option value="499">Isin</option>
<option value="500">Kaiama</option>
<option value="501">Moro</option>
<option value="502">Offa</option>
<option value="503">Oke-oro</option>
<option value="504">Oyun</option>
<option value="505">Pategi</option>
<option value="775">Oke-Ero</option>
</select>
                            <span class="field-validation-valid help-inline error" data-valmsg-for="LgaOfOriginId" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                    <div id="rowCommunity">
                        <div class="control-group">
                            <label class="control-label" for="CommunityId">Community</label>
                            <div class="controls">
                                 <input class="span8" data-val="true" data-val-required="The Community Name field is required." id="CommunityText" name="CommunityText" type="text"  <?php echo "value=".$_SESSION['community'] ?> >
                                
                            </div>
                        </div>
                        
                    </div>
                </div>



                <h4 class="title-divider"><span>Next Of Kin Details</span></h4>
                <div class="control-group">
                    <label class="control-label" for="NextOfKin">Next Of Kin</label>
                    <div class="controls">
                        <input class="span8" data-val="true" data-val-required="The Next Of Kin field is required." id="NextOfKin" name="NextOfKin" type="text" <?php echo "value=".$_SESSION['next_of_kin'] ?> >
                        <span class="field-validation-valid help-inline error" data-valmsg-for="NextOfKin" data-valmsg-replace="true"></span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="NextOfKinMobileNumber">Mobile Number</label>
                    <div class="controls">
                        <input data-val="true" data-val-regex="Enter a valid mobile number (GSM 11 digits)" data-val-regex-pattern="^\d{11}$" data-val-required="The Mobile Number field is required." id="NextOfKinMobileNumber" name="NextOfKinMobileNumber" type="text" <?php echo "value=".$_SESSION['mobile_kin'] ?> >
                        <span class="field-validation-valid help-inline error" data-valmsg-for="NextOfKinMobileNumber" data-valmsg-replace="true"></span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="NextOfKinRelationship">Relationship</label>
                    <div class="controls">
                        <input class="span8" data-val="true" data-val-required="The Relationship field is required." id="NextOfKinRelationship" name="NextOfKinRelationship" type="text" <?php echo "value=".$_SESSION['relationship_kin'] ?>>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="NextOfKinRelationship" data-valmsg-replace="true"></span>
                    </div>
                </div>


                <h4 class="title-divider"><span>Referee Details</span></h4>

                <div class="control-group">
                    <label class="control-label" for="AcademicReferee">Referee</label>
                    <div class="controls">
                        <input class="span8" data-val="true" data-val-required="The Academic Referee field is required." id="AcademicReferee" name="AcademicReferee" type="text" <?php echo "value=".$_SESSION['referee'] ?> >
                        <span class="field-validation-valid help-inline error" data-valmsg-for="AcademicReferee" data-valmsg-replace="true"></span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="AcademicRefereeMobileNumber">Mobile Number</label>
                    <div class="controls">
                        <input data-val="true" data-val-regex="Enter a valid mobile number (GSM 11 digits)" data-val-regex-pattern="^\d{11}$" data-val-required="The Mobile Number field is required." id="AcademicRefereeMobileNumber" name="AcademicRefereeMobileNumber" type="text" <?php echo "value='".$_SESSION['mobile_referee']."'"; ?>>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="AcademicRefereeMobileNumber" data-valmsg-replace="true"></span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="AcademicRefereeRelationship">Relationship</label>
                    <div class="controls">
                        <input class="span8" data-val="true" data-val-required="The Relationship field is required." id="AcademicRefereeRelationship" name="AcademicRefereeRelationship" type="text" <?php echo "value=".$_SESSION['relationship_referee'] ?> >
                        <span class="field-validation-valid help-inline error" data-valmsg-for="AcademicRefereeRelationship" data-valmsg-replace="true"></span>
                    </div>
                </div>





                <h4 class="title-divider"><span>Other Details</span></h4>
                <div class="control-group">
                    <label class="control-label" for="CurrentJob">Do you have a Job?</label>
                    <div class="controls">
                        <select class="ng-pristine ng-valid" data-val="true" data-val-required="The CurrentJob field is required." id="CurrentJob" name="CurrentJob" ng-model="scholarship" <?php echo "value=".$_SESSION['working_status'] ?> ><option value="False">NO</option>
<option value="True">YES</option>
</select>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="CurrentJob" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div style="display: none;" ng-show="scholarship == 'True'">
                    <div class="control-group">
                        <label class="control-label" for="NameOfScholarship">Nature of Job</label>
                        <div class="controls">
                            <input class="span8" id="NameOfScholarship" name="NameOfScholarship" type="text" <?php echo "value=".$_SESSION['current_job'] ?> >
                            <span class="field-validation-valid help-inline error" data-valmsg-for="NameOfScholarship" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="AwardYear">Year of Service.</label>
                        <div class="controls">
                            <select data-val="true" data-val-number="The field year of service must be a number." id="AwardYear" name="AwardYear" <?php echo "value=".$_SESSION['year_of_service'] ?>>
                                
                                <option value="2008">2008</option>
<option value="2009">1998</option>
<option value="2010">1999</option>
<option value="2011">2000</option>
<option value="2012">2001</option>
<option value="2013">2002</option>
<option value="2014">2003</option>
<option value="2015">2004</option>
<option value="2016">2005</option>
<option value="2017">2006</option>
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
                            <span class="field-validation-valid help-inline error" data-valmsg-for="AwardYear" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="HasDisability">Do you have physical disability?</label>
                    <div class="controls">
                        <select class="ng-pristine ng-valid" data-val="true" data-val-required="The HasDisability field is required." id="HasDisability" name="HasDisability" ng-model="disability" <?php echo "value=".$_SESSION['disability_status'] ?> ><option selected="selected" value="False">NO</option>
<option value="True">YES</option>
</select>
                        <span class="field-validation-valid help-inline error" data-valmsg-for="HasDisability" data-valmsg-replace="true"></span>
                    </div>
                </div>
                <div style="display: none;" ng-show="disability == 'True'">
                    <div class="control-group">
                        <label class="control-label" for="Disability">Physical disability</label>
                        <div class="controls">
                            <input class="span8" id="Disability" name="Disability" type="text">
                            <span class="field-validation-valid help-inline error" data-valmsg-for="Disability" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="NumberOfSiblings">Number of Children</label>
                    <div class="controls">
                        <input class="span1" data-val="true" data-val-number="The field Number of siblings must be a number." data-val-regex="Enter a valid number" data-val-regex-pattern="^\d{1,3}$" data-val-required="The Number of siblings field is required." id="NumberOfSiblings" name="NumberOfSiblings" type="text" <?php echo "value=".$_SESSION['no_of_children'] ?> >
                        <span class="field-validation-valid help-inline error" data-valmsg-for="NumberOfSiblings" data-valmsg-replace="true"></span>
                    </div>
                </div>





                <div class="control-group">
                    <div class="controls">
                        <button class="btn" type="submit">Update</button>

                    </div>

                </div>

            </div>
</form>
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