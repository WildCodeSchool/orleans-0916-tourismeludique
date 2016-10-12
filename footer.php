<html xmlns="http://www.w3.org/1999/html">
     <footer id="background">
          <div class="container-fluid footer">
               <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                         <a class="lienFooter" href="#ancre">Mentions légales</a><br/>
                         <a class="lienFooter" href="#ancre">crédits</a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                         <script>
                              $(document).ready(function (){
                                   $("#metier").click(function (){
                                        $('html, body').animate({
                                             scrollTop: $("#ancreMetier").offset().top
                                        }, 1000);
                                   });
                              });
                         </script>
                         <a class="lienFooter" href="#ancreMetier" id="metier">Notre métier</a><br/>
                         <script>
                              $(document).ready(function (){
                                   $("#produit").click(function (){
                                        $('html, body').animate({
                                             scrollTop: $("#ancreProduit").offset().top
                                        }, 1000);
                                   });
                              });
                         </script>
                         <a class="lienFooter" href="#ancreProduit" id="produit">Géomotifs</a><br/>
                         <script>
                              $(document).ready(function (){
                                   $("#actu").click(function (){
                                        $('html, body').animate({
                                             scrollTop: $("#ancreActu").offset().top
                                        }, 1000);
                                   });
                              });
                         </script>
                         <a class="lienFooter" href="#ancreActu" id="actu">Actualité</a><br/>
                         <script>
                              $(document).ready(function (){
                                   $("#nousContacter").click(function (){
                                        $('html, body').animate({
                                             scrollTop: $("#ancreForm").offset().top
                                        }, 1000);
                                   });
                              });
                         </script>
                         <a class="lienFooter" href="#ancreForm" id="nousContacter">Nous contacter</a>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                         <p>Réalisé par :<br/></p>
                         <a class="lienFooter" href="http://www.wildcodeschool.fr/" target="_blank">Wild Code School</a>
                    </div>
               </div>
          </div>
     </footer>
</html>
