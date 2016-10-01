$(window).scroll(function (event) {
    // A chaque fois que l'utilisateur va scroller (descendre la page)
    var y = $(this).scrollTop(); // On récupérer la valeur du scroll vertical

    //si cette valeur > à 700 on ajouter la class
    if (y >= 700) {
        $('.menu').addClass('fixed');
    } else {
        // sinon, on l'enlève
        $('.menu').removeClass('fixed');
    }
});