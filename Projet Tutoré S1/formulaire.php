<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Réservation JPO, site de l'IUT informatique de Dijon </title> 
    <link rel="stylesheet" type="text/css" href="ppps1jpo.css"/>
    <link rel="stylesheet" href="aos.css" />
    <link rel="stylesheet" href="cible.css">
</head>


<body>

    <nav>
        <p><img id="logo"  src="1200px-Université_de_Bourgogne_Logo.svg.png" alt="Logo de l'université de Bourgogne" title="Logo de l'université de Bourgogne"/></p>
        <ul>
            <li>    <a class="geo" href="PageAccueilJpo.html">Accueil</a> </li>
            <li>    <a class="geo" href="présentation.html"> Presentation</a>  </li>
            <li>    <a class="geo" href="filière.html">Contenu des cours</a>   </li>
            <li>    <a class="geo" href="plan.html">Plan de l'IUT</a>   </li>
            <li>    <a class="geo" href="vie campus.html">Vie au Campus</a>   </li>
            <li>    <a class="geo" href="covid.html">Mesures Covid</a>   </li>
            <li>    <a class="geo" id="active7" href="formulaire.php">Réservation</a>   </li>
        </ul>
    </nav>


<div class="main">
    <h1 class="titrehoraires">
        </br>
        </br>
        </br>Inscriptions</h1>
    <div data-aos="fade-down">
                <h3>Année 2020-2021</h3>
                <p>Chaque année, l’université de Bourgogne ouvre ses portes aux futurs étudiants à l’occasion de ses portes ouvertes, ce qui leur offre la possibilité de découvrir les infrastructures, formations et les avantages auxquels ils auront bientôt accès. 
                A cette occasion, l'IUT Informatique vous propose de rencontrer des professeurs et des élèves ouverts à toutes vos questions, vous aurez également la possibilité de suivre une visite guidée de toutes les salles par des élèves de l'IUT, avec des stands de découverte des applications et types d’exercices de certaines matières composant la formation (Web, Algorithmique…).  
                Nos portes ouvertes sont donc une opportunité à ne pas manquer pour tous ceux dont le projet de poursuite d’étude est encore flou comme pour ceux qui veulent confirmer un choix déjà fait. Alors n’hésitez plus et venez : nous vous attendons !!! </p>
                <p>Cette année, l'IUT se voit contraint de prendre des restrictions sanitaires dues au Covid-19 en limitant le nombre de visiteur par créneau pour ses portes ouvertes. 
                    Ainsi, si vous voulez absolument venir, nous vous conseillons fortement de réserver votre créneau à l’avance, à l’aide du calendrier juste en dessous : cliquez d’abord sur le jour et l’horaire qui vous intéresse, puis remplissez le court formulaire d’inscription qui apparait afin d’être certain d’avoir votre place. 
                    (Si votre réservation est complète, vous recevrez un mail récapitulatif confirmant votre inscription, qui sera à présenter lors de votre arrivée au dut).</p>
    </div>
    <div id="textformulaire" data-aos="fade-down">
                <p><strong>La journée des portes ouvertes de l'IUT de DIJON aura lieu le 3 Février 2021</strong></p>
    </div>

<fieldset data-aos="fade-up">
    <div id="z" data-aos="fade-up">
            <form method="POST" action="Cible.php">
                <h2>Réserver votre place aux portes ouvertes</h2>
                    <div>
                        <label class="nom" for="Nom">Nom</label>
                        <input type="text" id="Nom" name="Nom" required />
                    </div>
                    <div>
                        <label class="prenom" for="prenom">Prénom</label>
                        <input type="text" id="Prenom" name="Prenom" required />
                    </div>
                    <div>
                        <label class="mail" for="mail">E-mail</label>
                        <input type="email" for="mail" name="mail" required />
                    </div>
                    <div>
                        <label class="tel" for="tel">Numéro de téléphone</label>
                        <input type="text" for="tel" name="tel" />
                    </div>
                    <div>
                        <label for="heure">Heure de visite</label>
                        <input type="time" name="heure" size="20" value="08:00" min="08:00" max="18:00">
                    </div>
                    <div>
                        <label for="charte">En cochant cette case, vous acceptez notre <a href="http://grp-311.iq.iut21.u-bourgogne.fr/Jpo/confidentialité.html">charte de confidentialité :</a></label>
                        <input type="checkbox" name="charte" required />
                    </div>
                    <div>
                        <input type="submit" value="Valider votre inscription" />
                    </div>                                
            </form>        
    </div>
</fieldset>    
</div>
</br></br></br></br>
<div class="navEnd">
        <ul>
            <li><a class="lienNavEnd" href="Contact.html">Coordonnées et contact</a></li>
            <li><a class="lienNavEnd" href="localisation.html">Nous localiser</a></li>
            <li><a class="lienNavEnd" href="Mentions_légales.html">Mentions légales</a></li>
            <li><a class="lienNavEnd" href="confidentialité.html">Charte de confidentialité</a></li>
        </ul>
    </div>

    <script src="aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>