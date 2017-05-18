<!DOCTYPE html>
<html lang="fr">
     <head>
       <title>Page 4 PHP</title>
       <meta charset="utf-8">
       <link href="style.css" rel="stylesheet" type=text/css>
    </head>
    <body>

      <p>Votre prénom est
        <?php
        if (isset($_POST['name'])) {

            if(strlen($_POST['name'])<=20) {

                echo strtoupper($_POST['name']);
                strip_tags($_POST['name']);
            }
            else {
                echo "Le prenom ne doit pas dépasser 20 caractères et utilisé que des miniscules";
            }
       }
        ?>
        !!</p>

      <p>Votre adresse e-mail est
        <?php
        if (isset($_POST['email'])) {

            if (preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $_POST['email'])) {

                echo strtoupper($_POST['email']);
                strip_tags($_POST['email']);
             }
             else {
                 echo "Format email non adpaté !";
             }
        }

        ?>
         ! </p>
         <p>Retour au formulaire, <a href="index.php">Clique ici !</a></p>
    </body>
</html>
