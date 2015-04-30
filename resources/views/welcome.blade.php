<html>
	<head>
		<title>Laravel</title>

        <script type="text/javascript" src="bower/requirejs/require.js"></script>
<!--        <script type="text/javascript" src="bower/angular/angular.min.js"></script>-->
<!--        <script type="text/javascript" src="bower/three.js/three.min.js"></script>-->
<!--        <script type="text/javascript" src="js/index.js"></script>-->
	</head>
	<body>
	</body>
<script>

    require.config({
        baseUrl: "js/"
    });

    require( ['index'], function(index){
        console.log(index);
        (new index.Test()).draw()
    });

</script>
</html>
