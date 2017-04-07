var app = angular.module('userApp', []);
app.controller('userController', function($scope, $http) {
    $http.get("http://localhost:8081/Login_PHP_AngulasJS/Login_PHP_AngulasJS/Querys/GetUsuarios.php")
    .success(function(response) {$scope.usersData = response.records;});
    //.onSuccess(function(response) {$scope.usersData = response.records;});
});

/*var app = angular.module('AppLista', []);

app.controller('customersCtrl', function($scope, $http) {

    $http.get("http://localhost:8081/Login_PHP_AngulasJS/Login_PHP_AngulasJS/Querys/GetUsuarios.php")
    .success(function(arr)
    {
      $log.log(arr);
      $scope.Name = arr.Ejemplo.Name;

      $console.log(model);
    });
});*/
