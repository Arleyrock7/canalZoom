<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido a Zoom</title>

	<link rel="shortcut icon" type="image/x-icon" href="/images/logo/logozoom.png"/>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/styleZoom.min.css" type="text/css">

</head>

<body>


<?php include'inc/nav.php'; ?>

<?php include'inc/principal.php'; ?>

<!--?php include'inc/full.php'; ?-->

<!--?php include'inc/form.php'; ?-->

<!--?php include'inc/testimonios.php'; ?-->

<?php include'inc/footer.php'; ?>
	


<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script>
	$(document).ready(function(){
					$('a[href^="#"]').on('click',function (e) {
			   		 e.preventDefault();

			    var target = this.hash;
			    var $target = $(target);

			    $('html, body').stop().animate({
			        'scrollTop': $target.offset().top
			    }, 900, 'swing', function () {
			        window.location.hash = target;
			    });
			});
		});
</script>

<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/angular.min.js" type="text/javascript"></script>	
<script src="js/scriptAngularAitv.js"></script>
</body>
</html>