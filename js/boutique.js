// Get the modal
// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {

    var modal = document.getElementById('id01');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// Vérification de l'utilisateur
$(document).ready(function () {

    // Arme clic sur bouton valider du formulaire de login
    $("#VerifUser").click(function (e) {
        e.preventDefault();

        var params = $('form').serialize();
        $.get("VerifUser.php", params, callbackFilter);

    });

    function callbackFilter(result) {
        if (result == 'ok') {
            alert('login ok');
            document.location = "index.php";
            return;
        }
    }
});
$(document).ready(function () {
    $("#chargeProduit,#id1").click(function (e) {
        e.preventDefault();


        var params = $('form').serialize();
        $("#zone-resultat").load("filtre.php", params);

    });  

});

$(document).ready(function (e) {
    $('.search-panel .dropdown-menu').find('a').click(function (e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#", "");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
    });
});

//        <td> <a href="supprimerFilm.php?identifiant=<?php echo $affiche["identifiant"]?>" type="button" class="btn btn-danger">Supprimer</button></td>



  