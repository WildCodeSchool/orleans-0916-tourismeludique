<!-- JUMBOTRON -->
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="jumbotron">
	<div class="container-fluid">
		<div class="col-lg-12 col-md-12">
			<img class="img-responsive logoHeader" src="image/Logo_mTourismeLudique_Noir.png" alt="Logo mTourimse-Ludique">
		</div>
	</div>
</div>
<!-- FIN JUMBOTRON -->

<!-- NAVBAR -->
<!-- SCRIPT NAVBAR STICKY-->
<script>
    $(window).scroll(function (event) {
        // A chaque fois que l'utilisateur va scroller (descendre la page)
        var y = $(this).scrollTop(); // On récupérer la valeur du scroll vertical

        //si cette valeur > à 700 on ajouter la class
        if (y >= 700) {
            $('.navbar').addClass('fixed');
        } else {
            // sinon, on l'enlève
            $('.navbar').removeClass('fixed');
        }
    });
</script>
<!-- FIN SCRIPT NAVBAR STICKY-->
<div id="nav">
  <div class="navbar navbar-inverse">
    <div class="container-fluid menu">
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="glyphicon glyphicon-bar"></span>
        <span class="glyphicon glyphicon-bar"></span>
        <span class="glyphicon glyphicon-bar"></span>
      </a>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <script>
            $(document).ready(function (){
              $("#actu").click(function (){
                $('html, body').animate({
                  scrollTop: $("#ancreActu").offset().top
                }, 1000);
              });
            });
          </script>         
          <li><a href="#" id="actu" >Actualité</a></li>
          <script>
            $(document).ready(function (){
              $("#philo").click(function (){
                $('html, body').animate({
                  scrollTop: $("#ancrePhilo").offset().top
                }, 1000);
              });
            });
          </script>          
          <li><a href="#" id="philo" >Notre philosophie</a></li>
          <script>
            $(document).ready(function (){
              $("#produit").click(function (){
                $('html, body').animate({
                  scrollTop: $("#ancreProduit").offset().top
                }, 1000);
              });
            });
          </script>
          <li><a href="#" id="produit">Géomotifs</a></li>
          <script>
            $(document).ready(function (){
              $("#nousContacter").click(function (){
                $('html, body').animate({
                  scrollTop: $("#ancreForm").offset().top
                }, 1000);
              });
            });
          </script>
          <li><a href="#" id="nousContacter">Nous contacter</a></li>
        </ul>
      </div>		
    </div>
  </div>
</div>
<!-- FIN NAVBAR -->
</html>
