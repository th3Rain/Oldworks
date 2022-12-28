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
    <script src="../bundles/postgradlevel.js"></script>


    <script type="text/javascript">


        $(function () {

            $("#candidate_nav").css("min-height", "500px");

            $("#InstitutionId").change(DoLoadCourses);

        });
        
        function RefreshPostGraduateGrid() {

           

            $.get('/postgraduate?usePartial=True', function (data) {

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


    <div class="span9 ng-scope" style="margin-left: 10px; padding-left: 20px; max-width: 850px;" ng-app="" id="ng-app">

        <h3 class="title-divider" style="margin-bottom: 0;"><span>Post Graduate Level</span> </h3>
        <div class="lead" style="margin-bottom: 40px;">
            Details of your post graduate education including entry details and current status.
        </div>

        <h4 class="title-divider"><span>Post Graduate Institutions</span></h4>

        <div style="margin-bottom: 20px; margin-top: 20px;">

            <button type="button" data-toggle="modal" data-target="#addPostModal" class="btn">Add Institution</button>

            <!-- Modal -->
            <div id="addPostModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="courseModalLabel" aria-hidden="true" style="width: 750px; display: none;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="courseModalLabel">Add Post Graduate Institution</h3>
                </div>
                <div class="modal-body" style="max-height: 500px;">
                    <div class="ng-scope" ng-controller="PostGradCtr">
<form novalidate="novalidate" action="postgraduteProcessing.php" class="form-medium form-horizontal ng-pristine ng-valid" data-ajax="true" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#addPostView" id="addPostForm" method="post" style="max-width: 1125px;"><input name="__RequestVerificationToken" value="umgJ-JYZ8F-jsCh9OLB8VN4WUeeM9ZUPYcSb_X2zeB2TUf_pV54Yz0Lryv71D33MX0Bf0NxUtSAsIt6IQ-kMwbr7dVwVBSuWRRStsbV4edgooRkKVrU8jTzX4K0EsRwd0" type="hidden"><input data-val="true" data-val-number="The field CandidateId must be a number." data-val-required="The CandidateId field is required." id="CandidateId" name="CandidateId" value="142166" type="hidden">        <div class="control-group nullable">
            <label class="control-label" for="Domiciliation">Location of Institution</label>
            <div class="controls">

                <select class="ng-pristine ng-valid" data-val="true" data-val-number="The field Domiciliation must be a number." id="Domiciliation" name="Domiciliation" ng-change="LoadAllCourses()" ng-model="domi"><option selected="selected" value="1">Nigeria</option>
<option value="2">Foreign</option>
</select>

                <span class="field-validation-valid help-inline error" data-valmsg-for="Domiciliation" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="control-group" ng-show="domi == '1'">
            <label class="control-label" for="InstitutionId">Institution</label>
            <div class="controls">
                <select data-val="true" data-val-number="The field Institution must be a number." data-val-required="The Institution field is required." id="InstitutionId" name="InstitutionId"><option selected="selected" value="">Select --</option>
<option value="536">Elizade University</option>
<option value="537">Enugu State University Of Science And Technology</option>
<option value="538">Federal University Of Petroleum Resources, Effurun</option>
<option value="539">Federal University Of Technology Minna</option>
<option value="540">Federal University Of Technology, Akure</option>
<option value="541">Federal University Of Technology, Owerri</option>
<option value="542">Federal University, Dutse</option>
<option value="543">Federal University, Dutsin-Ma</option>
<option value="544">Federal University, Kashere</option>
<option value="545">Federal University, Lafia</option>
<option value="546">Federal University, Lokoja</option>
<option value="547">Federal University, Oye-Ekiti</option>
<option value="548">Gombe State University, Tudun Wada</option>
<option value="549">Ibrahim Badamasi Babangida University</option>
<option value="550">Igbinedion University</option>
<option value="551">Ignatius Ajuru University Of Education</option>
<option value="552">Imo State University</option>
<option value="553">Kaduna State University</option>
<option value="554">Kano University of Science and Technology</option>
<option value="555">Katsina University</option>
<option value="556">Kogi State Uniiversity</option>
<option value="557">Kwara State University, Malete, Ilorin</option>
<option value="558">Kwararafa University</option>
<option value="559">Ladoke Akintola University of Technology</option>
<option value="560">Lagos State University, Ojo</option>
<option value="561">Landmark University, Omu-Aran</option>
<option value="562">Lead City University , Ibadan</option>
<option value="563">Madonna University, Okija</option>
<option value="564">Mcpherson University</option>
<option value="565">Michael Okpara University Of Agriculture</option>
<option value="566">Modibbo Adama University Of Technology, Yola</option>
<option value="567">Nasarawa State University, Keffi</option>
<option value="568">Niger Delta University , Wilberforce Island</option>
<option value="569">Nigeria Turkish Nile University , Abuja</option>
<option value="570">Nnamdi Azikiwe University, Awka</option>
<option value="571">Northwest University, Kano</option>
<option value="572">Novena University, Ogume</option>
<option value="573">Obafemi Awolowo University, Ile-Ife</option>
<option value="574">Obong University, Obong, Ntak</option>
<option value="575">Oduduwa University, Ipetumodu</option>
<option value="576">Olabisi Onabanjo University, Ago-Iwoye</option>
<option value="577">Ondo State University Of Science And Technology, Okitipupa</option>
<option value="578">Osun State University, Osogbo</option>
<option value="579">Paul University, Awka</option>
<option value="580">Plateau State University, Bokkos</option>
<option value="581">Redeemers University</option>
<option value="582">Renaissance University, Ojiagu-Agbani</option>
<option value="583">Rhema University</option>
<option value="584">Rivers State University Of Science And Technology, Port Harcourt</option>
<option value="585">Salem University</option>
<option value="586">Samuel Adegboyega University</option>
<option value="587">Sokoto State University</option>
<option value="588">Southwestern University</option>
<option value="589">Tai Solarin University Of Education</option>
<option value="590">Tansain University</option>
<option value="591">Taraba State University</option>
<option value="592">Umaru Musa Yaradua University</option>
<option value="593">University Of Abuja</option>
<option value="594">University Of Agriculture, Abeokuta</option>
<option value="595">University Of Benin</option>
<option value="596">University Of Calabar</option>
<option value="597">University Of Ibadan</option>
<option value="598">University Of Ilorin</option>
<option value="599">University Of Jos</option>
<option value="600">University of Lagos</option>
<option value="601">University Of Maiduguri</option>
<option value="602">University Of Mkar</option>
<option value="603">University Of Nigeria</option>
<option value="604">University of Port Harcourt</option>
<option value="605">University Of Uyo</option>
<option value="606">Usmanu Danfodio University</option>
<option value="607">Veritas University</option>
<option value="608">Wellspring University</option>
<option value="609">Wesley University Of Science And Technology</option>
<option value="610">Western Delta University</option>
<option value="611">Yobe State University</option>
<option value="612">Abdul-Gusau Polytechnic</option>
<option value="613">Abia State College Of Health Technology</option>
<option value="614">Abia State Polytechnic</option>
<option value="615">Abubakar Tatari Ali Polytechnic</option>
<option value="616">Adamawa State Poly</option>
<option value="617">Aflon Digital Institute</option>
<option value="618">Afrihub Ict Institute</option>
<option value="619">Ahmadu Bello University Teaching Hospital</option>
<option value="620">Air Force Institute Of Technology Nigerian Air Force</option>
<option value="621">Akanu Ibiam Federal Polytechnic, Unwana</option>
<option value="622">Akperan Orshi College Of Agriculture</option>
<option value="623">Akwa-Ibom State College Of Agriculture Obio-Akpa</option>
<option value="624">Akwa Ibom State College Of Arts And Science Nung</option>
<option value="625">Akwa-Ibom State Polytechnic</option>
<option value="626">Allover Central Polytechnic</option>
<option value="627">Ambassador College Of Technology And Paralegal Studies</option>
<option value="628">Ambassador College Of Management And Technology</option>
<option value="629">Aminu Kano Teaching Hospital, School Of Health Information Management</option>
<option value="630">Anambra State College Of Agriculture</option>
<option value="631">Aquatech Institute Of Fisheries Management</option>
<option value="632">Arewa Paralegal Innovation Enterprise</option>
<option value="633">Audu Bako College Of Agriculture</option>
<option value="634">Benue State Poly</option>
<option value="635">Buckingham Academy Of Management And Technology</option>
<option value="636">Business Education Examination Council, (Beec)</option>
<option value="637">Calvary Foundation Institute Of Technology</option>
<option value="638">Cifman Institute Of Technology And Management</option>
<option value="639">City Gate Institute Of Innovation And Technology</option>
<option value="640">College Of Administrative And Business Studies, Potiskum</option>
<option value="641">College Of Agriculture, Hadijia</option>
<option value="642">College Of Agriculture, Jalingo</option>
<option value="643">College Of Agriculture, Kabba</option>
<option value="644">College Of Agriculture, Lafia</option>
<option value="645">College Of Agriculture And Animal Science, Mando Road</option>
<option value="646">College Of Agriculture And Animal Science, Talata-Mafara</option>
<option value="647">College Of Agriculture, Zuru</option>
<option value="648">Complete Computers And Technology Institute, Benin</option>
<option value="649">Covenant Polytechnic, Aba</option>
<option value="650">Crown Polytechnics, Ado-Ekiti</option>
<option value="651">Dalewares Institute Of Technology, Surulere</option>
<option value="652">Delta State Polytechnic</option>
<option value="653">Diabo Paralegal Training Institute</option>
<option value="654">Dialogue Computer Institute, Katsina</option>
<option value="655">Dorben Polytechnic</option>
<option value="656">Dots.Ict Institute Of Technology</option>
<option value="657">Dreamville Ltd (Ladela School Abuja)</option>
<option value="658">D.S. Adegbenro Ict Polytechnics</option>
<option value="659">Edo State College Of Agriculture</option>
<option value="660">Edo State Institute Of Technology And Management</option>
<option value="661">Emdee Shipping And Maritime College</option>
<option value="662">Environmental Sustainability Thinking And Action Centre</option>
<option value="663">Federal College Of Agriculture, Akure</option>
<option value="664">Federal College Of Agriculture, Ishiagu</option>
<option value="665">Federal College Of Agriculture, Moor Plantation</option>
<option value="666">Federal College Of Agricultural Produce Technology, Hotoro Ext.</option>
<option value="667">Federal College Of Animal Health And Production Technology, Vom</option>
<option value="668">Federal College Of Animal Health And Production Technology, Ibadan</option>
<option value="669">Federal College Of Forestry (Mechanisation) Afakka</option>
<option value="670">Federal College Of Forestry, Jos</option>
<option value="671">Federal College Of Forestry Technology, Ibadan</option>
<option value="672">Federal College Of Freshwater Fisheries Technology, New Bussa</option>
<option value="673">Federal College Of Freshwater Fisheries Technology, Baga</option>
<option value="674">Federal College Of Horticulture, Dadin Kowa</option>
<option value="675">Federal College Of Land Resources Technology, Owerri</option>
<option value="676">Federal College Of Land Resources Technology, Kuru</option>
<option value="677">Federal College Of Orthopedic Technology</option>
<option value="678">Federal College Of Wildlife Management</option>
<option value="679">Federal Cooperative College</option>
<option value="680">Federal Cooperative College, Kaduna</option>
<option value="681">Federal Cooperative College, Eleyele</option>
<option value="682">Federal College Of Fisheries And Marine Technology</option>
<option value="683">Federal Polytechnic, Offa</option>
<option value="684">Federal Polytechnic, Ado-Ekiti</option>
<option value="685">Federal Polytechnic, Bali</option>
<option value="686">Federal Polytechnic, Bauchi</option>
<option value="687">Federal Polytechnic, Bida</option>
<option value="688">Federal Polytechnic, Damaturu</option>
<option value="689">Federal Polytechnic, Ede</option>
<option value="690">Fedral Polytechnic, Ekowe</option>
<option value="691">Federal Polytechnic, Idah</option>
<option value="692">Federal Polytechnic, Ilaro</option>
<option value="693">Federal Polytechnic, Kaura/Namoda</option>
<option value="694">Federal Polytechnic, Mubi</option>
<option value="695">Federal Polytechnic, Nassarawa</option>
<option value="696">Federal Polytechnic, Nekede</option>
<option value="697">Federal Polytechnic, Oko</option>
<option value="698">Federal School Of Dental Technology And Therapy</option>
<option value="699">Federal School Of Surveying, Oyo</option>
<option value="700">Fidei Polytechnic, Gboko</option>
<option value="701">Firstmark Innovation School Of Technology</option>
<option value="702">Flyingdove Institute Of Information Technology</option>
<option value="703">Gateway Industrial And Petro-Gas Insitute</option>
<option value="704">Global Maritime Academy</option>
<option value="705">Grace Polytechnic</option>
<option value="706">Hassan Usman Katsina Poly, Katsina</option>
<option value="707">Heritage Polytechnic</option>
<option value="708">Highland College Of Technology And Further Education</option>
<option value="709">Hussaini Adamu Federal Polytechnic</option>
<option value="710">Ifo College Of Management And Technology</option>
<option value="711">Igbajo Polytechnic</option>
<option value="712">Imfi, Ict Academy</option>
<option value="713">Imo State Polytechnic, Umuagwo</option>
<option value="714">Innovation Institute Of Technology, Kaduna</option>
<option value="715">Innovation Institute Of Information Technology,Akure</option>
<option value="716">Institute Of Information And Computer Technology, Agwu</option>
<option value="717">Institute Of Management And Technology</option>
<option value="718">Interlink Polytechnic, Ijebu-jesa</option>
<option value="719">Internation Chaplancy Corps Network Institute Of Security Technology And Management</option>
<option value="720">Jigawa State Institute Of Information Technology, Kazaure</option>
<option value="721">Jigawa State Polytechnic, Dutse</option>
<option value="722">Kaduna Business School, Kaduna</option>
<option value="723">Kaduna Polytechnic</option>
<option value="724">Kano State Polytechnic</option>
<option value="725">Karrox -Ugrl Computer Education And Training Centre</option>
<option value="726">Kazaure Innovation Enterprise Institute, Hussaini Adamu Federal Polytechnic</option>
<option value="727">Kings Polytechnic, Ubiaja</option>
<option value="728">Kogi State Polytechnic, Lokoja</option>
<option value="729">Kwara State Polytechnic, Ilorin</option>
<option value="730">Lagos Aviation And Maritime Business Academy</option>
<option value="731">Lagos City Computer College</option>
<option value="732">Lagos City Polytechnic, Ikeja</option>
<option value="733">Lagos State Polytechnic, Ikorodu</option>
<option value="734">Laser Petroleum Geo-Sciences Centre</option>
<option value="735">Light House Polytechnic</option>
<option value="736">Linet Paul Innovative Institute</option>
<option value="737">Literacy College Of Management And Technology ( Formerly, The Literacy Centre)</option>
<option value="738">Living Spring College Of Technology And Innovation, Oshogbo</option>
<option value="739">Lufodo Academy Of Performing Arts</option>
<option value="740">Mahammed Lawan College Of Agriculture</option>
<option value="741">Mai Idris Alooma Polytechnic</option>
<option value="742">Mallam Yahaya Hamza Institute Of Advance Studies</option>
<option value="743">Maurid Institute Of Management And Technology</option>
<option value="744">Metropolitan Institute Of Technology</option>
<option value="745">Micheal Imodu National Institute For Labour Studies</option>
<option value="746">Moshood Abiola Polytechnic</option>
<option value="747">Nacabs Polytechnic</option>
<option value="748">Nasarawa State Polytechnic</option>
<option value="749">National Council For Women Development</option>
<option value="750">National Film Institute</option>
<option value="751">Niger-Delta Innovation Enterprise Institute,Yenegoa</option>
<option value="752">Niger State College Of Agriculture, Mokwa</option>
<option value="753">Niger State Poly, Zungeru</option>
<option value="754">Nigeria Army School Of Military Engineering</option>
<option value="755">Nigerian Institute Of Journalism</option>
<option value="756">Nigerian Institute Of Leather Technology And Science Technology</option>
<option value="757">Niit Idm</option>
<option value="758">Nogak Polytechnic</option>
<option value="759">Nuhu Bamalli Polytechnic</option>
<option value="760">Ogun State College Of Health Technology</option>
<option value="761">Ogun State Institute Of Technology</option>
<option value="762">Olawoyin Awosika School Of Innovation Studies</option>
<option value="763">Ondo State School Of Health Technology</option>
<option value="764">Onit Institute Of Technology</option>
<option value="765">Oseni Elamah Institute</option>
<option value="766">Our Saviour Institute Of Science And Technology (Polytechnic) Enugu</option>
<option value="767">Osun State College Of Technology</option>
<option value="768">Osun State Polytechnic, Iree</option>
<option value="769">Oyo State College Of Agriculture</option>
<option value="770">Pan-African Institute Of Paralegal Studies</option>
<option value="771">Pefti Film Institute</option>
<option value="772">Petroleum Training Institute, Effurun</option>
<option value="773">Plateau State College Of Agriculture</option>
<option value="774">Plateau State Polytechnic</option>
<option value="775">Polytechnic Of Sokoto</option>
<option value="776">Prime Innovation Institute Of Technology, Ajah</option>
<option value="777">Ramat Polytechnic</option>
<option value="778">Risk Control Academy, Lekki</option>
<option value="779">Rivers State College Of Health Science</option>
<option value="780">Rivers State College Of Arts And Science</option>
<option value="781">Rivers State Poly</option>
<option value="782">Rocana Institute Of Technology</option>
<option value="783">Ronik Polytechnic</option>
<option value="784">Rufus Giwa Polytechnic</option>
<option value="785">Samaru College Of Agriculture</option>
<option value="786">School Of Agriculture, Ikorodu</option>
<option value="787">School Of Agriculture, Bauchi</option>
<option value="788">School Of Banking Honours, Ojodu Berger</option>
<option value="789">School Of Health Information Management- Lagos State Teaching Hospital</option>
<option value="790">School Of Health Information Management- Nnamdi Azikiwe University</option>
<option value="791">School Of Health Information Management- Obafemi Awolowo University</option>
<option value="792">School Of Health Information Management- University Of Ilorin Teaching Hospital</option>
<option value="793">School Of Health Information Management- University Of Benin Teaching Hospital</option>
<option value="794">Shehu Idris College Of Health Sciences And Technology</option>
<option value="795">South-Eastern College Of Engineering And Information Technology</option>
<option value="796">Southern-Nigeria Institute Of Innovative Technology</option>
<option value="797">St. Augustine Innovation Enterprise Institute</option>
<option value="798">St. Winifred Innovative Institute</option>
<option value="799">Stars Maritime Academy (Merchant Navy Institute)</option>
<option value="800">Teebabs Innovation Institute</option>
<option value="801">Temple-Gate Polytechnic</option>
<option value="802">The Certified Institute Of Shipping Of Nigeria</option>
<option value="803">The Film And Broadcast Academy Westin Hall</option>
<option value="804">The Gateway (Ict) Polytechnic</option>
<option value="805">The Polytechnic, Ile-Ife</option>
<option value="806">The School Of Information And Media Technology (Simtech)</option>
<option value="807">Total Human Capital Developent Institute</option>
<option value="808">Tower Polytechnic, Ibadan</option>
<option value="809">Trizas Institute For Innovative Education, Enugu</option>
<option value="810">Umuebe Farm College</option>
<option value="811">United School Of Science And Technology, Ganajigo</option>
<option value="812">University Of Calabar Teaching Hospital School Of Health Information Management</option>
<option value="813">Uptonville Oil And Gas Institute</option>
<option value="814">Wavecrest College Of Catering &amp; Hospitality Management</option>
<option value="815">Waziri Umaru Federal Polytechnic</option>
<option value="816">Wolex Polytechnic</option>
<option value="817">Yaba College Of Technology</option>
<option value="818">Abia State College Of Education (Technical)</option>
<option value="819">Abubakar Tatari Ali Polytechnic, Bauchi</option>
<option value="820">Adamu Augie College Of Education, Argungu</option>
<option value="821">Adeniran Ogunsanya College Of Education, Otto/Ijanikin</option>
<option value="822">Adeyemi College Of Education, Ondo town</option>
<option value="823">African Thinkers Community Of Inquiry College Of Education, Ijako-Ota</option>
<option value="824">African Thinkers Community Of Inquiry College Of Education, Ijako-Ota, Ijako-Ota</option>
<option value="825">Akwa-Ibom State College Of Education</option>
<option value="826">Alhikma College Of Education</option>
<option value="827">All States College Of Education, Akure</option>
<option value="828">Alvan Ikoku College Of Education</option>
<option value="829">Angel Crown College Of Education, Gidan-Daya</option>
<option value="830">Ansar-Ud-Deen College Of Education, Isolo</option>
<option value="831">Apa College Of Education, Benue</option>
<option value="832">Arabic And Islamic College Of Education, Yobe</option>
<option value="833">Assanusiyah College Of Education, Osun</option>
<option value="834">Awori District College Of Education, Ogun</option>
<option value="835">Bauchi Institute For Arabic And Islamic Studies</option>
<option value="836">Bayo Tijani College Of Education, Egan-Igandon</option>
<option value="837">Best Legacy College Of Education, Ogbomoso</option>
<option value="838">Bethel College Of Education, Ondo</option>
<option value="839">Calvin Foundation College Of Education, Benue</option>
<option value="840">City College Of Education, Garki</option>
<option value="841">College Of Education, (Tech), Lafiagi</option>
<option value="842">College Of Education, Agbor</option>
<option value="843">College Of Education, Akangwa</option>
<option value="844">College Of Education, Ankpa</option>
<option value="845">College Of Education, Azare</option>
<option value="846">College Of Education, Ekiadolo</option>
<option value="847">College Of Education, Foreign Links Campus Moro</option>
<option value="848">College Of Education, Gidan-Waya</option>
<option value="849">College Of Education, Gindiri</option>
<option value="850">College Of Education, Hong</option>
<option value="851">College Of Education, Igueben</option>
<option value="852">College Of Education, Ikere</option>
<option value="853">College Of Education, Ilesha</option>
<option value="854">College Of Education, Ilorin</option>
<option value="855">College Of Education, Irra Rd. Ilemona</option>
<option value="856">College Of Education, Katsina-Ala</option>
<option value="857">College Of Education, Maru</option>
<option value="858">College Of Education, Minna</option>
<option value="859">College Of Education, Oju</option>
<option value="860">College Of Education, Oro</option>
<option value="861">College Of Education, Port Harcourt</option>
<option value="862">College Of Education, Waka-Biu</option>
<option value="863">College Of Education, Warri</option>
<option value="864">College Of Education, Zing</option>
<option value="865">Cornerstone College Of Education, Lagos</option>
<option value="866">Cross River State College Of Education, Akamkpa</option>
<option value="867">Delar College Of Education, Ibadan</option>
<option value="868">Delta State College Of Physical Education</option>
<option value="869">Ebenezer College Of Education, Edda</option>
<option value="870">Ebonyi State College Of Education</option>
<option value="871">Elder Oyama Memorial College Of Education, Ofat</option>
<option value="872">Emmanuel Alyande College Of Education, Oyo</option>
<option value="873">Enugu State College Of Education Technical, Enugu</option>
<option value="874">Fct College Of Education, Zuba</option>
<option value="875">Federal College Of Education (Special), Oyo</option>
<option value="876">Federal College Of Education (Technical) (Female Only) Gusau</option>
<option value="877">Federal College Of Education (Technical) Gombe</option>
<option value="878">Federal College Of Education (Technical), Akoka</option>
<option value="879">Federal College Of Education (Technical), Asaba</option>
<option value="880">Federal College Of Education (Technical), Omoku</option>
<option value="881">Federal College Of Education (Technical), Potiskum</option>
<option value="882">Federal College Of Education (Technidcal), Umunze</option>
<option value="883">Federal College Of Education, (Techical), Bichi</option>
<option value="884">Federal College Of Education, Abeokuta</option>
<option value="885">Federal College Of Education, Eha-Amufu</option>
<option value="886">Federal College Of Education, Kano</option>
<option value="887">Federal College Of Education, Katsina</option>
<option value="888">Federal College Of Education, Kontagora</option>
<option value="889">Federal College Of Education, Obudu</option>
<option value="890">Federal College Of Education, Okene</option>
<option value="891">Federal College Of Education, Pankshin</option>
<option value="892">Federal College Of Education, Yola</option>
<option value="893">Federal College Of Education, Zaria</option>
<option value="894">Federal Polytechnic Oko</option>
<option value="895">Harvard Wilson College Of Education, Aba</option>
<option value="896">Hill College Of Education, Gwanji, Akwanga</option>
<option value="897">Institute Of Ecumenical Education, Thinker Corner, Enugu</option>
<option value="898">Isa Kaita College Of Education, Dutsinma</option>
<option value="899">Isaac Jasper Boro College Of Education</option>
<option value="900">Jibwis College Of Arabic And Islamic Education</option>
<option value="901">Jigawa State College Of Education</option>
<option value="902">Kaduna State Polytechnic, Kaduna</option>
<option value="903">Kano State College Of Education, Kambotso</option>
<option value="904">Kano State Polytechnic, Kano</option>
<option value="905">Kashim-Ibrahim College Of Education</option>
<option value="906">Katsina State Polytechnic, Katsina</option>
<option value="907">Kebbi State College Of Education</option>
<option value="908">Kinsey College Of Education, Ilorin</option>
<option value="909">Kogi State College Of Education</option>
<option value="910">Kwara State College Of Education, (Technical), Lafia (Affl. To Abu.)</option>
<option value="911">Michael Otedola College Of Primary Education</option>
<option value="912">Michael Otedola College Of Pry Ed, Noforija (Affl. Unad)</option>
<option value="913">Mohammed Goni Of Legal And Islamic Studies</option>
<option value="914">Muftau’ Lanihun College Of Education</option>
<option value="915">Muhyldeen College Of Education</option>
<option value="916">Nana Aishat Memorial College Of Education</option>
<option value="917">National Missionary Seminary Of St-Paul, Gwagwalada (Affl. To Uniport)</option>
<option value="918">Niger State College Of Education</option>
<option value="919">Nigerian Defence Academy, Kaduna</option>
<option value="920">Nigerian Police Academy, Wudil</option>
<option value="921">Nuhu Bamali Polytechnic, Zaria</option>
<option value="922">Nwafor Orizu College Of Education, Nsugbe</option>
<option value="923">Onit College Of Education Abagana</option>
<option value="924">Osun State College Of Education, Ila-Orangun</option>
<option value="925">Osun State College Of Education, Ilesa</option>
<option value="926">Our Saviour Institution Of Science &amp; Technology College Of Education</option>
<option value="927">Pope John Major Seminary, Okpun, Awka</option>
<option value="928">Royal City College Of Education</option>
<option value="929">Seat Of Wisdom Seminary, Owerri</option>
<option value="930">Seminary Of All Saints, Uhiele</option>
<option value="931">Shehu Shagari College Of Education</option>
<option value="932">Spiritan School Of Philosophy, Issienu</option>
<option value="933">St. Augustine College Of Education</option>
<option value="934">St. Augustine’S College Of Education</option>
<option value="935">St. Peter And Paul Seminary,Bodija</option>
<option value="936">Steady Flow College Of Education</option>
<option value="937">St-Joseph Major Seminary</option>
<option value="938">Tai Solarin College Of Education</option>
<option value="939">The African Church College Of Education</option>
<option value="940">The College Of Education, Nsukka</option>
<option value="941">Topmost College Of Education</option>
<option value="942">Umar Ibn Ibrahim El-Kanemi College Of Education, Sc. And Tech</option>
<option value="943">Umar Suleiman College Of Education</option>
<option value="944">Umar-Ibn Ei-Kanemi College Of Education</option>
<option value="945">Umca</option>
<option value="946">Unity College Of Education</option>
<option value="947">World Harvest Bible College And Seminary</option>
<option value="948">Yewa Central College Of Education</option>
<option value="949">Yusuf Bala Usman College Of Legal And General Studies</option>
<option value="950">School of Midwifery, Awo-Omama</option>
<option value="951">School of Midwifery, A.B.U.T.H., Kaduna</option>
<option value="952">School of Midwifery, Abia</option>
<option value="953">School of Midwifery, Abiriba</option>
<option value="954">School of Midwifery, Aboh-Mbaise</option>
<option value="955">School of Midwifery, Afikpo</option>
<option value="956">School of midwifery, Akure</option>
<option value="957">School of Midwifery, Amachara</option>
<option value="958">School of Midwifery, Anua-Uyo</option>
<option value="959">School of Midwifery, Asaba</option>
<option value="960">School of Midwifery, Awgu</option>
<option value="961">School of Midwifery, Bauchi</option>
<option value="962">School of Midwifery, Bishop Shanahan Hospital</option>
<option value="963">School of Midwifery, Calabar</option>
<option value="964">School of Midwifery, Catholic Hospital, Oluyoro</option>
<option value="965">School of Midwifery, Egbe</option>
<option value="966">School of Midwifery, Emekuku</option>
<option value="967">School of Midwifery, U.N.T.H., Enugu</option>
<option value="968">School of Midwifery, Grimard Hospital, Anyigba</option>
<option value="969">School of Midwifery, Ihiala</option>
<option value="970">School of Midwifery, Ijebu-Ode</option>
<option value="971">School of Midwifery, Ilorin</option>
<option value="972">School of Midwifery, Iquita-Onon</option>
<option value="973">School of Midwifery, Ituk-Mbang</option>
<option value="974">School of Midwifery, Iyi-Enu Hospital, Ogidi</option>
<option value="975">School of Midwifery, Jalingo</option>
<option value="976">School of Midwifery, Maiduguri</option>
<option value="977">School of Midwifery, Kafanchan</option>
<option value="978">School of Midwifery, Katsina</option>
<option value="979">School of Midwifery, Kano</option>
<option value="980">School of Midwifery, Markurdi</option>
<option value="981">School of Midwifery, Yaba</option>
<option value="982">School of Midwifery, Mkar</option>
<option value="983">School of Midwifery, Murtala Mohammed Hospital, Jos</option>
<option value="984">School of Midwifery, Nkpor</option>
<option value="985">School of Midwifery, O.L.A.&nbsp; Hospital, Jos</option>
<option value="986">School of Midwifery, Oba Ademola, Abeokuta</option>
<option value="987">School of Midwifery, Obudu</option>
<option value="988">School of Midwifery, Ogbomoso</option>
<option value="989">School of Midwifery, Ogoja</option>
<option value="990">School of Midwifery, Osogbo</option>
<option value="991">School of Midwifery, Port Harcourt</option>
<option value="992">School of Midwifery, Sacred Heart Hospital, Abeokuta</option>
<option value="993">School of Midwifery, Saki</option>
<option value="994">School of Midwifery, Sapele</option>
<option value="995">School of Midwifery, Sokoto</option>
<option value="996">School of Midwifery, St.&nbsp; Philomena's Hospital Benin City</option>
<option value="997">School of Midwifery, State Hospital, Benin City</option>
<option value="998">School of Midwifery, U.B.T.H., Benini City</option>
<option value="999">School of Midwifery, U.N.T.H. Amarachi</option>
<option value="1000">School of Midwifery, U.C.H., Ibadan</option>
<option value="1001">School of Midwifery, Umuahia</option>
<option value="1002">School of Midwifery, Uromi</option>
<option value="1003">School of Midwifery, Urua-Akpan</option>
<option value="1004">School of Midwifery, Murtala Muhammed Hospital, Jos</option>
<option value="1005">School of Midwifery, Waterside, Onitsha</option>
<option value="1006">School of Midwifery, Wesley Guild Hospital, Ile-Ife</option>
<option value="1007">School of Midwifery, Wusasa</option>
<option value="1008">School of Midwifery, Yemetu, Ibadan</option>
<option value="1009">School of Midwifery, Yola</option>
<option value="1010">School of Midwifery, Zonkwa</option>
<option value="1011">School of Midwifery, Zuma Memorial Hospital</option>
<option value="1012">School of Nursing, A.B.U.T.H., Zaria</option>
<option value="1013">School of Nursing, Abeokuta</option>
<option value="1014">School of Nursing, Afikpo</option>
<option value="1015">School of Nursing, Akure</option>
<option value="1016">School of Nursing, Awolowo Road, Ikoyi</option>
<option value="1017">School of Nursing, Baptist Hospital, Eku</option>
<option value="1018">School of Nursing, Bida</option>
<option value="1019">School of Nursing, Birnin-kudu</option>
<option value="1020">School of Nursing, Bishop Shanahan Hospital, Nsukka</option>
<option value="1021">School of Nursing, Christian Hospital, Makurdi</option>
<option value="1022">School of Nursing, Christian Hospital, Vom</option>
<option value="1023">School of Nursing, Damaturu</option>
<option value="1024">School of Nursing, ECWA, Egbe</option>
<option value="1025">School of Nursing, Eja Memorial Hospital, Itigidi</option>
<option value="1026">School of Nursing, Eleiyele</option>
<option value="1027">School of Nursing, General Hospital Aba,</option>
<option value="1028">School of Nursing, General Hospital Bauchi,</option>
<option value="1029">School of Nursing, General Hospital, Ikot-Ekpene</option>
<option value="1030">School of Nursing,General Hospital, Katsina</option>
<option value="1031">School of Nursing,General Hospital Markurdi,</option>
<option value="1032">School of Nursing,General Hospital, Maiduguri</option>
<option value="1033">School of Nursing,General hospital, Obangede</option>
<option value="1034">School of Nursing,General Hospital, Ogoja</option>
<option value="1035">School of Nursing,General Hospital, Owerri</option>
<option value="1036">School of Nursing,General Hospital, Sokoto</option>
<option value="1037">School of Nursing,General Hospital, Warri</option>
<option value="1038">School of Nursing,Holy Rosary Hospital, Emekuku</option>
<option value="1039">School of Nursing,Ilorin,</option>
<option value="1040">School of Nursing,Immanuel Hospital, Eket</option>
<option value="1041">School of Nursing,Ituk-Mbang,</option>
<option value="1042">School of Nursing,Iyi-Enu Hospital, Ogidi</option>
<option value="1043">School of Nursing,Jalingo,</option>
<option value="1044">School of Nursing,Joint Hospital, Mbano</option>
<option value="1045">School of Nursing,Kafanchan,</option>
<option value="1046">School of Nursing,L.U.T.H., Idi-Araba</option>
<option value="1047">School of Nursing,Military Hospital, Yaba</option>
<option value="1048">School of Nursing &amp;Midwifery,Abuja,</option>
<option value="1049">School of Nursing &amp;Midwifery,Adazi,</option>
<option value="1050">School of Nursing,Murtala Mohammed Hospital, Jos</option>
<option value="1051">School of Nursing, O.A.U.T.H.C Ilesa</option>
<option value="1052">School of Nursing,O.A.U.T.H., Ile-Ife</option>
<option value="1053">School of Nursing,Ogbomoso,</option>
<option value="1054">School of Nursing, Our Lady of Lourdes Hospital, Ihiala</option>
<option value="1055">School of Nursing, Parklane General Hospital Enugu</option>
<option value="1056">School of Nursing,Port-Harcourt,</option>
<option value="1057">School of Nursing,Queen Elizabeth Hospital, Umuahia</option>
<option value="1058">School of Nursing,S.D.A.&nbsp; Hospital, Ile-Ife</option>
<option value="1059">School of Nursing,Saki, Oyo State</option>
<option value="1060">School of Nursing,St.&nbsp; Gerards Hospital, Kaduna</option>
<option value="1061">School of Nursing,St.&nbsp; Luke's Hospital, Anua Uyo</option>
<option value="1062">School of Nursing,St.&nbsp; Mary's Hospital, Amigbo</option>
<option value="1063">School of Nursing,St.&nbsp; Luke's Hospital, Wusasa</option>
<option value="1064">School of Nursing,State Hospital, Benin City</option>
<option value="1065">School of Nursing,State Hospital, Ijebu-Ode</option>
<option value="1066">School of Nursing,State Hospital, Agbor</option>
<option value="1067">School of Nursing,State Hospital, Osogbo</option>
<option value="1068">School of Nursing,U.B.T.H., Benin City</option>
<option value="1069">School of Nursing, U.N.T.H., Enugu</option>
<option value="1070">School of Nursing, U.C.H., Ibadan</option>
<option value="1071">School of Nursing, U.D.U.T.H., Sokoto</option>
<option value="1072">School of Nursing, U.M.T.H., Maiduguri</option>
<option value="1073">School of Nursing, Umuogho, Obowo</option>
<option value="1074">School of Nursing, Yola</option>
<option value="1075">School of Psychiatric Nursing, Aba</option>
<option value="1076">School of Psychiatric Nursing, Eket</option>
<option value="1077">School of Psychiatric Nursing, Neuro-Psychiatric Hospital Aro Abeokuta</option>
<option value="1078">School of Psychiatric Nursing, Uselu, Benin City</option>
<option value="1079">Covenant University</option>
<option value="1080">Bowen University</option>
<option value="1081">Abia State University</option>
<option value="1082">Adekunle Ajasin University</option>
<option value="1083">Cross River State University of Technology</option>
<option value="1084">Benson Idahosa University</option>
<option value="1085">Delta State University</option>
<option value="1086">Abubakar Tafawa Balewa University</option>
<option value="1087">Benue State University</option>
<option value="1088">Ahmadu Bello University</option>
<option value="1089">Ambrose Alli University</option>
<option value="1090">Ebonyi State University</option>
<option value="1091">University of Agriculture, Makurdi</option>
<option value="1092">Babcock University</option>
<option value="1093">Madonna Colleges</option>
<option value="1094">Anambra State University</option>
<option value="1095">Ekiti State University</option>
<option value="1096">Bayero University </option>
<option value="1097">Federal University of Agriculture, Makurdi</option>
<option value="1098">Afe Babalola University</option>
<option value="1099">Bingham University</option>
<option value="1100">Adamawa State University, Mubi</option>
<option value="1101">Ajayi Crowther University</option>
<option value="1102">Bells University of Technology</option>
<option value="1103">Akwa Ibom State University</option>
<option value="1104">American University of Nigeria</option>
<option value="1105">Auchi Polytechnic</option>
<option value="1106">Federal University Wukari, Taraba State</option>
<option value="1107">Crescent University Abeokuta</option>
<option value="1108">National Open University</option>
<option value="1109">Caritas University</option>
<option value="1110">Caleb University</option>
<option value="1111">Crawford University</option>
<option value="1112">Achievers University</option>
<option value="1113">Fountain University</option>
<option value="1114">Kebbi State University of Science and Technology</option>
<option value="1115">Federal University, Ndufu-Alike, Ikwo</option>
<option value="1116">Evangel University, &nbsp; Akaeze</option>
<option value="1117">Al-hikmah University,Ilorin</option>
<option value="1118">Federal University Otuoke</option>
<option value="1119">National Open University</option>
<option value="1120">National Open University</option>
<option value="1121">Nigerian Law School, Abuja</option>
<option value="1122">Nigerian Law School, Enugu</option>
<option value="1123">Nigerian Law School, Lagos</option>
<option value="1124">Nigerian Law School, Kano</option>
<option value="1125">Lagos State College of Health</option>
<option value="1126">Ibadan Polytechnic</option>
<option value="1127">Joseph Ayo Babalola University, Ikeji-Arakeji</option>
<option value="1128">Delta State College of Health Technology, Ofuoma-Ughelli</option>
<option value="1129">School of Nursing Federal Teaching Hospital Abakaliki </option>
<option value="1130">Federal University, Birnin Kebbi</option>
<option value="1131">Maritime Academy of Nigeria, Oron</option>
<option value="1132">Delta State School of Marine Technology, Burutu.</option>
<option value="1133">National Open University</option>
<option value="1134">Bauchi State University Gadau</option>
<option value="1135">Baze University</option>
<option value="1137">Godfrey Okoye University</option>
<option value="1138">Madonna University Elele-Campus </option>
<option value="1139">Gregory University, Uturu</option>
<option value="1140">Pan-Atlantic University, Lagos.</option>
<option value="1141">Abraham Adesanya Polytechnic, Ijebu Igbo</option>
<option value="1142">Federal University Gusau</option>
<option value="1143">Federal University, Gusau</option>
<option value="1144">Federal University, Gashua</option>
<option value="1145">Adeleke University, Ede</option>
<option value="1146">Offshore Technology Institute, University of Port Harcourt</option>
<option value="1147">Nigeria Army Institute of Technology and Environmental Studies, Makurdi</option>
<option value="1148">Sule Lamido University, Kafin Hausa</option>
<option value="1149">AFRICAN UNIVERSITY OF SCIENCE AND TECHNOLOGY</option>
<option value="1150">Edwin Clark University, Kaigbodo</option>
<option value="1151">Kings University odeomu</option>
<option value="1152">National Metallurgical Training Institute</option>
<option value="1153">The Oke-Ogun Polytechnic, Saki</option>
<option value="1154">Ondo State University of Medical Sciences</option>
<option value="1155">Mountain Top University</option>
</select>
                <span class="field-validation-valid help-inline error" data-valmsg-for="InstitutionId" data-valmsg-replace="true"></span>
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
            <label class="control-label" for="CourseOfStudy">Course</label>
            <div class="controls">
                <input data-val="true" data-val-required="The Course of Study field is required." id="CourseOfStudy" name="CourseOfStudy" type="text">
                <span class="field-validation-valid help-inline error" data-valmsg-for="CourseOfStudy" data-valmsg-replace="true"></span>
            </div>
        </div>
    <div class="control-group">
        <label class="control-label" for="CourseDuration">Course Duration</label>
        <div class="controls">
            <select data-val="true" data-val-number="The field CourseDuration must be a number." id="CourseDuration" name="CourseDuration"><option selected="selected" value="1">12 Months</option>
<option value="2">18 Months</option>
<option value="3">24 Months</option>
</select>
            <span class="field-validation-valid help-inline error" data-valmsg-for="CourseDuration" data-valmsg-replace="true"></span>
        </div>
    </div>
        <div class="control-group">
            <label class="control-label" for="StudyTime">Study Time</label>
            <div class="controls">
                <select data-val="true" data-val-number="The field StudyTime must be a number." id="StudyTime" name="StudyTime"><option selected="selected" value="1">Full Time</option>
<option value="2">Part Time</option>
</select>
                <span class="field-validation-valid help-inline error" data-valmsg-for="StudyTime" data-valmsg-replace="true"></span>
            </div>
        </div>
              <div class="control-group">
                  <label class="control-label" for="CurrentStudyStatus">Current Status</label>
                  <div class="controls">
                      <select class="ng-pristine ng-valid" data-val="true" data-val-number="The field CurrentStudyStatus must be a number." id="CurrentStudyStatus" name="CurrentStudyStatus" ng-init="current_status = 2" ng-model="current_status"><option value="1">Awaiting Admission List</option>
<option selected="selected" value="2">Provisional Admission</option>
<option value="3">Graduated</option>
</select>
                      <span class="field-validation-valid help-inline error" data-valmsg-for="CurrentStudyStatus" data-valmsg-replace="true"></span>

                  </div>
        </div>
        <div class="control-group" ng-show="current_status == '2'">
            <label class="control-label" for="ExpectedYearOfGraduation">Expected Graduation Year</label>
            <div class="controls">
                <select data-val="true" data-val-number="The field Expected Graduation Year  must be a number." data-val-required="The Expected Graduation Year  field is required." id="ExpectedYearOfGraduation" name="ExpectedYearOfGraduation"><option selected="selected" value="">Year</option>
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
          <div style="display: none;" class="control-group" ng-show="current_status == '3'">
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
            <div class="controls">
                <button class="btn" type="submit" onclick="postgraduatProcessing.php">Add Institution</button>

            </div>
        </div>
        <div id="addPostView">
            &nbsp;
        </div>
</form></div>

                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>

        <div id="loader" data-request-url-allcourses="/undergraduate/allcourses"></div>
        <div id="loader2" data-request-url-courses="/undergraduate/courseslist"></div>

        
 <div style="margin-top: 20px; margin-bottom: 50px;" id="itemsList">

    <table class="table table-bordered table-striped table-hover table-condensed">
        <thead>
            <tr>
                <th>Post Graduate Institution</th>
                <th>Course</th>
                <th style="width: 70px;">Exit Year</th>
                 <th style="width: 70px;"></th>
                
            </tr>
        </thead>
        <tbody>

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