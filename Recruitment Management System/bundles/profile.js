

function ProfileCtrl($scope) {
    
    //#region set gender or use selected
    var gender_selected = $("#Gender option:selected").val();

    if (gender_selected) {
        $scope.gender = gender_selected;
    } else {
        $scope.gender = '';
    }
    
    //#region set marital status or use selected
    var marital_selected = $("#MaritalStatus option:selected").val();

    if (marital_selected) {
        $scope.marital = marital_selected;
    } else {
        $scope.marital = '';
    }

    var related_selected = $("#RelatedToOfficial option:selected").val();

    if (related_selected) {
        $scope.related = related_selected;
    } else {
        $scope.related = '';
    }


}