<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ajax-1</title>
</head>
<body>
    
    <button type="button" id="appel">
        Appeler le fichier hello.php
    </button>
    <div id="reponse"></div>


</body>

    <script>
        document.getElementById('appel').addEventListener('click', function(){
            var xhr = new XMLHttpRequest();

            // on défini ce qui va être fait après l'appel ajax
            xhr.onreadystatechange = function () {
                // xhr.readystate == 4 : on a reçu la réponse du serveur
                // (xhr.status == 200  : le serveur à répondu par le code HTTP 200, donc ok
                if(xhr.readyState == 4 && xhr.status == 200){
                    // dans xhr.responseText on a le contenu que nous a retourné
                    // le fichier hello.php
                    document.getElementById('reponse').innerHTML = xhr.responseText;

                }
            };

            // appel en HTTP GET du fichier hello.php
            xhr.open('GET', 'hello.php');
            // envoi de l'appel
            xhr.send();
        
        });
    </script>
</html>