<!-- JUMBOTRON -->
<html>
<header>
<div class="jumbotron backgroundHeader" id="ancreHome" >
	<div class="container-fluid">
		<div class="col-lg-12 col-md-12">
			<img class="img-responsive logoHeader" src="image/Logo_mTourismeLudique_red.png" alt="Logo mTourimse-Ludique">
		</div>
	</div>
</div>
<!-- FIN JUMBOTRON -->

<!-- NAVBAR -->
<!-- SCRIPT NAVBAR STICKY-->
<script>
    $(window).scroll(function (event) {
        // A chaque fois que l'utilisateur va scroller
        var y = $(this).scrollTop(); // On récupérer la valeur du scroll vertical

        //si cette valeur > à 300 on ajouter la class
        if (y >= 300) {
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
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
          data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
      </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <script>
          $(document).ready(function (){
            $("#home").click(function (){
              $('html, body').animate({
                scrollTop: $("#ancreHome").offset().top
              }, 1000);
            });
          });
        </script>         
        <a href="#" id="home" class="lienMenu"><span class="glyphicon glyphicon-home"></span></a>
          <script>
            $(document).ready(function (){
              $("#metier").click(function (){
                $('html, body').animate({
                  scrollTop: $("#ancreMetier").offset().top
                }, 1000);
              });
            });
          </script>          
          <a href="#" id="metier" class="lienMenu">Notre métier</a>
          <script>
            $(document).ready(function (){
              $("#produit").click(function (){
                $('html, body').animate({
                  scrollTop: $("#ancreProduit").offset().top
                }, 1000);
              });
            });
          </script>
          <a href="#" id="produit" class="lienMenu">Géomotifs</a>
        <script>
          $(document).ready(function (){
            $("#actu").click(function (){
              $('html, body').animate({
                scrollTop: $("#ancreActu").offset().top
              }, 1000);
            });
          });
        </script>
        <a href="#" id="actu" class="lienMenu">Actualité</a>
          <script>
            $(document).ready(function (){
              $("#nousContacter").click(function (){
                $('html, body').animate({
                  scrollTop: $("#ancreForm").offset().top
                }, 1000);
              });
            });
          </script>
          <a href="#"  class="lienMenu" id="nousContacter">Nous contacter</a>
        </ul>
      </div>		
    </div>
  </div>
</div>
</header>
<!-- FIN NAVBAR -->
</html>
