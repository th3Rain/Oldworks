$(function () {

    setActive();

});


function setActive() {

    var url = window.location.toString();

    url = url.toLowerCase();

    var element = "";

    if (url.indexOf("candidate/profile") >= 0) {

        element = "candidate_profile";

    } else if (url.indexOf("candidate/additional") >= 0) {

        element = "candidate_additional";

    }
    else if (url.indexOf("/photo") >= 0) {

        element = "candidate_photo";

    }
    else if (url.indexOf("/secondary") >= 0) {

        element = "candidate_secondary";

    }
    else if (url.indexOf("/olevel") >= 0) {

        element = "candidate_olevel";

    }
    else if (url.indexOf("/undergraduate") >= 0) {

        element = "candidate_undergrad";

    } else if (url.indexOf("/postgraduate") >= 0) {

        element = "candidate_postgrad";

    } else if (url.indexOf("/documents") >= 0) {

        element = "candidate_documents";

    } else if (url.indexOf("/bank") >= 0) {

        element = "candidate_banks";

    }

    else if (url.indexOf("/home/activescholarships") >= 0) {

        element = "active_scholarships";

    }

    $("#" + element).addClass('active');
}