<!DOCTYPE html>
<html lang="en" ng-app="CalculoApp">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="assets/js/app.js"></script>
</head>
<body ng-controller="EfetuarCalculoController">
    <h1>Cálculo de distâncias com o App1</h1>


<h3>Insira os dados nos campos abaixo para cálculo da distância</h3>

<div class="campos">
    <form name="formCalcular" ng-submit="enviarFormulario();">
        <label for="p1">Insira o valor do ponto 1</label><input type="text" name="p1" ng-model="p1"><br>
        <label for="p1">Insira o valor do ponto 2</label><input type="text" name="p2" ng-model="p2"><br>
        <label for="p1">Insira o valor do ponto 3</label><input type="text" name="p3" ng-model="p3"><br>    
        <label for="p1">Insira o valor do ponto 4</label><input type="text" name="p4" ng-model="p4"><br>
        <input type="submit" value="Calcular">
    </form>
</div>
<div class="resultado">
   <p>Confira os resultados:</p>
    <p class="distancia_1_2"><% resultado_1_2 %></p>
    <p class="distancia_3_4"><% resultado_3_4 %></p>
    
</div>
</body>
</html>


