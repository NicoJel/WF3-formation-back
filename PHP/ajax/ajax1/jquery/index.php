<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>parametres</title>
    
</head>
<body>
    
    <form id="qui">
        <div>
            <label>Prénom</label>
            <input type="text" name="prenom">
        </div>
        <div>
            <label>Nom</label>
            <input type="text" name="nom">
        </div>
        <label for="">Méthode d'envoi</label>
        <select name="" id="methode">
            <option value="GET">GET</option>
            <option value="POST">POST</option>

        </select>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>

    <div id="reponse"></div>
    <!-- JQUERY -->
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>
    <script>
      // DOM ready, equ: $(document).ready(function()){}
        $(function(){
            $('#qui').submit(function (event){
                event.preventDefault();

                $.ajax({
                    url: '../hello.php',
                    method: $('#methode').val(), // GET ou POST
                    // serialize() crée une query string en utilisant l'attribut name des champs de formulaire
                    // this = le formulaire
                    data: $(this).serialize(),
                    // dans success la fonction qui traite le contenu retourné par hello.php
                    success: function (response) {
                        $('#reponse').html(response);

                    }
                });
            });
        });
    </script>
</body>
</html>