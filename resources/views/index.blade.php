<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Crosstech - Inventory Management</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
	
	<!-- Icons -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="css/style.css" rel="stylesheet">
    <link href="node_modules/bootstrap-chosen/bootstrap-chosen.css" rel="stylesheet">
    <link href="node_modules/bootstrap-chosen/chosen-sprite.png" rel="image_src">
    
    <link href="bower_components/ngToast/dist/ngToast.min.css" rel="stylesheet">
	<link href="bower_components/ngToast/dist/ngToast-animations.min.css" rel="stylesheet">
	<link href="node_modules/angularjs-datepicker/dist/angular-datepicker.css" rel="stylesheet">

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">

    <!-- User Interface -->
	
    <ui-view></ui-view>
	<toast></toast>
	
    <!-- Bootstrap and necessary plugins -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.jquery.min.js"></script>
    
    <!-- AngularJS -->
	
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.4/angular.min.js"></script>
	<script src="bower_components/satellizer/satellizer.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/1.0.3/angular-ui-router.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.4/angular-animate.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.4/angular-sanitize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-local-storage/0.6.0/angular-local-storage.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/restangular/1.6.1/restangular.min.js"></script>
			
    <!-- AngularJS plugins -->
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/angular.chartjs/1.1.1/angular-chart.js"></script> 
    <script src="node_modules/angular-chosen/angular-chosen.js"></script>
    <script src="bower_components/angular-timeago/dist/angular-timeago.min.js"></script>
    <script src="bower_components/oclazyload/dist/ocLazyLoad.min.js"></script>
    <script src="bower_components/angular-breadcrumb/dist/angular-breadcrumb.min.js"></script>
    <script src="bower_components/angular-loading-bar/build/loading-bar.min.js"></script>
	<script src="node_modules/angularjs-datepicker/dist/angular-datepicker.js"></script>	
	<script src="node_modules/moment/moment.js"></script>
	<script src="bower_components/ngToast/dist/ngToast.min.js"></script>
	
	<!-- AngularJS CoreUI App scripts -->
    <script src="js/app.js"></script>
    <script src="js/routes.js"></script>
	<script src="js/services.js"></script>
	<script src="js/factory/product.js"></script>
	<script src="js/factory/categorie.js"></script>
	<script src="js/factory/location.js"></script>
	<script src="js/factory/source.js"></script>
	<script src="js/factory/stock.js"></script>
	<script src="js/factory/purchase.js"></script>
	<script src="js/factory/purchaseApi.js"></script>
	<script src="js/factory/purchaseTemp.js"></script>
	<script src="js/factory/supplier.js"></script>
	<script src="js/factory/return.js"></script>
	<script src="js/factory/returnTemp.js"></script>
	<script src="js/factory/sale.js"></script>
	<script src="js/factory/saleTemp.js"></script>
	<script src="js/factory/marketChart.js"></script>
	<script src="js/factory/saleChart.js"></script>
    <script src="js/directives.js"></script>
	<script src="js/dirPagination.js"></script>
	<script src="js/controllers/authCtrl.js"></script>
    	
</body>

</html>