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
    <link rel="stylesheet" type="text/css" href="css/stylesheet_notre_philosophie.css" >
    <link rel="stylesheet" type="text/css" href="css/stylesheet_social_network.css" >
    <link rel="stylesheet" type="text/css" href="css/mTourisme.css" >
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/fonts.css" >

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

  </head>

<body>

<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.7";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


	<!-- Header -->
    <?php include ('header.php'); ?>
    <?php include ('social_network.php'); ?>
    <!-- Header -->


	<main>
	<?php include ("notre_philosophie.php");  ?>
    <?php include ("trois_points.php");  ?>
    <?php include ('produits.php'); ?>
    <img class="iphone hidden-xs" src="image/iPhone-footer.png" alt="iphone geomotifs">
    <?php include ('sectionImage.php'); ?>
    <?php include ('actu.php'); ?>
    <?php include ("form.php"); ?>
	</main>


	<footer>
		<?php include 'footer.php' ?>


	</footer>

</body>
</html>
