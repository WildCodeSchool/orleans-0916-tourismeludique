<html>
<header>
<div class="backgroundHeader" id="ancreHome" >
	<div class="container-fluid">
		<div class="row">
          <img class="img-responsive logoHeader" src="image/logoMblanc.png" alt="Logo mTourimse-Ludique">
          <h1 class="marque">Tourisme Ludique</h1><br/>
          <p class="slogan">CREATION D'USAGES MOBILES</p><br/>
        </div>
	</div>
</div>
</header>
<!-- NAVBAR -->
<!-- SCRIPT NAVBAR STICKY-->
<script>
    $(window).scroll(function (event) {
        // A chaque fois que l'utilisateur va scroller
        var y = $(this).scrollTop(); // On récupérer la valeur du scroll vertical
        var hauteur = document.getElementById('ancreHome').scrollHeight; // On récupère la hauteur du header
        //si cette valeur > à hauteur on ajoute la class
        if (y >= hauteur) {
            $('.navbar').addClass('fixed');
        } else {
            // sinon, on l'enlève
            $('.navbar').removeClass('fixed');
        }
    });
</script>
<!-- FIN SCRIPT NAVBAR STICKY-->

<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="row">
            <!-- Métier -->
            <script>
                $(document).ready(function (){
                    $("#metier").click(function (){
                        $('html, body').animate({
                            scrollTop: $("#ancreMetier").offset().top
                        }, 1000);
                    });
                });
            </script>
            <div class="col-lg-3">
                <a class="lienMenu" href="#" id="metier">Notre Métier</a>
            </div>
            <!-- GéoMOTifs -->
            <script>
                $(document).ready(function (){
                    $("#produit").click(function (){
                        $('html, body').animate({
                            scrollTop: $("#ancreProduit").offset().top
                        }, 1000);
                    });
                });
            </script>
            <div class="col-lg-3">
                <a class="lienMenu" href="#" id="produit">GéoMOTifs</a>
            </div>
            <!-- Actu -->
            <script>
                $(document).ready(function (){
                    $("#actu").click(function (){
                        $('html, body').animate({
                            scrollTop: $("#ancreActu").offset().top
                        }, 1000);
                    });
                });
            </script>
            <div class="col-lg-3">
                <a class="lienMenu" href="#" id="actu">Actualités</a>
            </div>
            <!-- Contacter -->
            <script>
                $(document).ready(function (){
                    $("#nousContacter").click(function (){
                        $('html, body').animate({
                            scrollTop: $("#ancreForm").offset().top
                        }, 1000);
                    });
                });
            </script>
            <div class="col-lg-3">
                <a class="lienMenu" href="#" id="nousContacter">Nous contacter</a>
            </div>
        </div>
    </div>
</nav>
<!-- FIN NAVBAR -->
</html>
