/*
Faire l'ajout au panier en ajax:
- ajouter l'id du produit dans un champ caché dans le formulaire
- appeler ajout-panier.php en ajax en lui passant l'id du produit et la quantité
- ajout-panier.php récupère les données du produit à partir de son id et utilise la fonction ajoutPanier()
- en retour d'appel, on affiche un div.alert-success avec un message de confirmation
*/

$(function(){
    $('#monform').submit(function (event){
        event.preventDefault();
        var id = $(this).val();

            $.post(
                '../boutique/ajout-panier.php',
                $(this).serialize(),
                function (response) {
                    
                    $('#reponse').html(reponse);

                },
            );       
    });

    $('.btn-description').click(function (event){
        event.preventDefault();

        $('#voir-description').modal('show');
        var href = $(this).attr('href');

    });
});