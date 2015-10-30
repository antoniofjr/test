var App = angular.module('CalculoApp',[], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });



App.controller('EfetuarCalculoController',function($scope, $http){

    $scope.resultado_1_2 = '';
    $scope.resultado_3_4 = '';
    
    $scope.enviarFormulario = function(){
    
    $http.post("http://app1.localhost/calculo", {"p1":$scope.p1,"p2":$scope.p2,"p3":$scope.p3,"p4":$scope.p4}).success(function(data, status) {
        $scope.resultado_1_2 = data.resultado_1_2;
        $scope.resultado_3_4 = data.resultado_3_4;
    })
        
    }

});