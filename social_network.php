<script>
    $(document).ready(function (){
        $("#home").click(function (){
            $('html, body').animate({
                scrollTop: $("#ancreHome").offset().top
            }, 1000);
        });
    });
</script>

<div class="social_network">
    <ul id="banner_social">

        <!--- Bouton Facebook MLT --->
        <li class="bouton_facebook_MLT img_hover">
            <a href="https://www.facebook.com/mtourismeludique" target="_blank">
                <img alt="Facebook MTourismeLudique" src="image/logo_FB_transp.png"/>
            </a>

            <div class="fb-page" data-href="https://www.facebook.com/mtourismeludique"
                 data-tabs="timeline"
                 data-small-header="true"
                 data-adapt-container-width="true"
                 data-hide-cover="true"
                 data-show-facepile="false">

                <div class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/mtourismeludique"></a>
                </div>
                <div id="fb-root">
                    <iframe class="box_FB" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmtourismeludique&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId"
                            width="340"
                            height="500">
                            <!-- style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"-->
                    </iframe>
                </div>
            </div>

        </li>

        <!--- Bouton YouTube --->
        <li class="bouton_youtube img_hover">
            <a href="https://www.youtube.com/channel/UCj_DmGMNzw3DTMUMyYoyoyQ" target="_blank">
                <img alt="Youtube mTourismeLudique" src="image/logo_YT_transp.png"/>
            </a>
        </li>

        <!--- Bouton Likedin --->
        <li class="bouton_IN img_hover">
            <a href="https://www.linkedin.com/in/sylvain-lambert-38387757" target="_blank">
                <img alt="Profil Sylvain Lambert" src="image/logo_linkedin_transp.png"/>
            </a>
        </li>
    </ul>

        <!--- Bouton haut de page --->
    <ul id="logo_home">

        <li>
            <a href="#" id="home">
                <span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
            </a>
        </li>
    </ul>



</div>
