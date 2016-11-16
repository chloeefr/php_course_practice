<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <title><?php echo $page_title; ?></title>
 
	<!-- some custom CSS -->
	<style>
	.left-margin{
		margin:0 .5em 0 0;
	}
	
	.right-button-margin{
		margin: 0 0 1em 0;
		overflow: hidden;
	}
	</style>
	
    <!-- Bootstrap CSS -->
	<link href="libs/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet" media="screen" />
	
	<!-- jQuery library -->
	<script src="libs/js/jquery.js"></script>

	<!-- bootstrap JavaScript -->
	<script src="libs/js/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="libs/js/bootstrap/docs-assets/js/holder.js"></script>
	 
	<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

    <!-- container -->
    <div class="container">
	
		<?php
		// show page header
		echo "<div class='page-header'>";
			echo "<h1>{$page_title}</h1>";
		echo "</div>";
		?>