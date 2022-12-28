
function GradCtr($scope, $http) {

    //#region set domi or use selected
    var domi_selected = $("#Domiciliation option:selected").val();

    if (domi_selected) {
        $scope.domi = domi_selected;
    } else {
        $scope.domi = 1;
    }
    

    //#region set entry mode or use selected
    var entry_selected = $("#EntryMode option:selected").val();

    if (entry_selected) {
        $scope.entry = entry_selected;
    } else {
        $scope.entry = 1;
    }
    
    //#region set current level or use selected
    var level_selected = $("#CurrentLevel option:selected").val();

    if (level_selected) {
        $scope.level = level_selected;
    } else {
        $scope.level = 1;
    }

    //#region set current level or use selected
    var nysc_selected = $("#CompletedNysc option:selected").val();

    if (nysc_selected) {
        $scope.nysc = nysc_selected;
    } else {
        $scope.nysc = 'False';
    }

    
    $scope.LoadAllCourses = function() {

        if ($scope.domi == 2) {

            var url = $("#loader").data("request-url-allcourses");

            $http.get(url).success(function(result) {
                var options = [];
                for (var i = 0; i < result.length; i++) {
                    options.push('<option value="',
                        result[i].CourseId, '">',
                        result[i].CourseName, '</option>');
                }

                $("#CourseAdmittedForId").html(options.join(''));
                $("#CourseOfStudyId").html(options.join(''));

            });
        } else {
            // $scope.currentInstitution = '';
            $("#StateId").val('');
            $("#InstitutionId").html('');
            $("#CourseAdmittedForId").html('');
            $("#CourseOfStudyId").html('');
            $("#CGPAScale").html('');
        }

};
    

}


function PostGradCtr($scope, $http) {
    
    $scope.LoadAllCourses = function () {

        if ($scope.domi == 2) {

            var url = $("#loader").data("request-url-allcourses");

            $http.get(url).success(function (result) {
                var options = [];
                for (var i = 0; i < result.length; i++) {
                    options.push('<option value="',
                        result[i].CourseId, '">',
                        result[i].CourseName, '</option>');
                }

                $("#CourseAdmittedForId").html(options.join(''));
                $("#CourseOfStudyId").html(options.join(''));

            });
        } else {
            // $scope.currentInstitution = '';
            $("#InstitutionId").val('');
            $("#CourseAdmittedForId").html('');
            $("#CourseOfStudyId").html('');
        }

    };



}

function DoLoadCourses() {
    
    var url = $("#loader2").data("request-url-courses");
    var Id = $("#InstitutionId  option:selected").val();

    if (Id == '') {

        $("#CourseAdmittedForId").html('');
        $("#CourseOfStudyId").html('');
        $("#CGPAScale").html('');

    } else {

        $.get(url + '/' + Id, function (result) {
            var options = [];
            for (var i = 0; i < result.length; i++) {
                options.push('<option value="',
                    result[i].CourseId, '" data-cgpa-scale="',
                    result[i].CGPA_Scale, '"',
                     ' data-special-medical="',
                    result[i].Special, '">',
                    result[i].CourseName, '</option>');
            }

            $("#CourseAdmittedForId").html(options.join(''));
            $("#CourseOfStudyId").html(options.join(''));
            
            if (options.length > 0) {
                $("#CGPAScale").html(result[0].CGPA_Scale);
            }
            

        });
    }
}


function DoLoadInstitutions() {
    
    var url = $("#loader3").data("request-url-institutions");
    var Id = $("#StateId  option:selected").val();


    if (Id == '') {
        
        $("#InstitutionId").html('');
        $("#CourseAdmittedForId").html('');
        $("#CourseOfStudyId").html('');
        $("#CGPAScale").html('');

    } else {

        $.get(url + '/' + Id, function (result) {
            var options = [];
            
            options.push('<option value="',
                    "", '">',
                    "Select ----", '</option>');
            

            for (var i = 0; i < result.length; i++) {
                options.push('<option value="',
                    result[i].InstitutionId, '">',
                    result[i].InstitutionName, '</option>');
            }

            $("#InstitutionId").html(options.join(''));
            $("#CourseAdmittedForId").html('');
            $("#CourseOfStudyId").html('');
            $("#CGPAScale").html('');

        });
    }

}


function ChangeCGPA() {

    var local = $("#Domiciliation option:selected").val();

    if (local == 2) return;


    var option = $("#CourseOfStudyId option:selected");

   
    
    if (option != null) {

        
        var currentCGPA = option.data("cgpa-scale");
     

        $("#CGPAScale").html(currentCGPA);


        ShowHideCGPA();

    }


}



function ShowHideCGPA() {
    
    var option = $("#CourseOfStudyId option:selected");

    var level = $("#CurrentLevel option:selected").val();

        var special = option.data("special-medical");


        if ((level > 1 && level < 8) && special == 1) {

            $("#divCGPA").hide();
            $("#divPassFail").show();
        }

        else {
            $("#divCGPA").show();
            $("#divPassFail").hide();
        }

    

}