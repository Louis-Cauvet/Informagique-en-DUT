<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Titre</title>
        <link rel="stylesheet" href="ppps1jpo.css">
        <link rel="stylesheet" href="CSS/main.css">
    </head>
    <body>
        <h1>Votre inscription</h1>
        <h2>Votre inscription à la journée des portes ouvertes a bien été prise en compte.</h2>
        <p>Voici le récapitulatif de votre inscription : </p>
        <?php
             
                $bdd = new PDO("mysql:host=localhost;dbname=grp-311_s1_prjtut;charset=utf8", 'grp-311', 'QzEwQMoVikVKQGN7');
                    echo $_POST['Nom'];
                        echo "<br/>";
                    echo $_POST['Prenom'];
                        echo "<br/>";
                    echo $_POST['tel'];
                        echo "<br/>";
                    echo $_POST['mail'];
                        echo "<br/>";
                    echo $_POST['heure'] ;
                
                try {
                    $requete = $bdd->prepare("INSERT INTO `visiteur`(`nomVis`, `prenomVis`, `telVis`, `mailVis`, `heureVis`) VALUES (?,?,?,?,?)");
                    $requete->execute(array($_POST['Nom'], $_POST['Prenom'], $_POST['tel'], $_POST['mail'], $_POST['heure']));
                }
                catch(EXCEPTION $e) { 
                    die('Erreur : '.$e->getMessage());
                }
              ?>
        </br>
        </br>
        </br>
        </br>
        <a href="PageAccueilJpo.html">Cliquez ici pour un retour à la page d'accueil</a>
    </body>
</html>