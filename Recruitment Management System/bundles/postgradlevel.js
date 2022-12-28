

function PostGradCtr($scope, $http) {
    

    //#region set domi or use selected
    var domi_selected = $("#Domiciliation option:selected").val();

    if (domi_selected) {
        $scope.domi = domi_selected;
    } else {
        $scope.domi = 1;
    }
    

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

                $("#CourseOfStudy").html(options.join(''));

            });
        } else {
            // $scope.currentInstitution = '';
            $("#InstitutionId").val('');
            $("#CourseOfStudy").html('');
        }

    };



}

function DoLoadCourses() {

    var url = $("#loader2").data("request-url-courses");
    var Id = $("#InstitutionId  option:selected").val();

    if (Id == '') {

        $("#CourseOfStudy").html('');

    } else {

        $.get(url + '/' + Id, function (result) {
            var options = [];
            for (var i = 0; i < result.length; i++) {
                options.push('<option value="',
                    result[i].CourseId, '">',
                    result[i].CourseName, '</option>');
            }

            $("#CourseOfStudy").html(options.join(''));

        });
    }
}