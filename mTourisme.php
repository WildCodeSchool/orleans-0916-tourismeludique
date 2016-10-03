<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>mTourisme-Ludique</title>

                            <!-- CSS Perso -->
    <link rel="stylesheet" type="text/css" href="css/stylesheetHeader.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheetForm.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheetActu.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheetProduits.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheetSectionImage.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheetFooter.css">



    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcgdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="stylesheet_notre_philosophie.css" rel="stylesheet">
  </head>

<body>
	<!-- Header -->
        <?php include ('header.php'); ?>
    <!-- Header -->


	<main>
    <?php include ('actu.php'); ?>
	<?php   include ("notre_philosophie.php");  ?>
    <?php   include ("trois_points.php");  ?>
    <?php include ('produits.php'); ?>
    <?php include ('sectionImage.php'); ?>
    <?php include ("form.php"); ?>
	</main>


	<footer>
		<?php include 'footer.php' ?>


	</footer>

</body>
</html>
