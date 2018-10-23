<!DOCTYPE html>
<html>
<head>
    <title>TEST01</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

/*        .nav ul li {
            list-style: none;
        }*/

        .nav ul li, .nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav {
            height: 30px;
            line-height: 30px;
            background: #000000;
            margin-bottom: 15px;
        }

        .nav ul li a {
            display: block;
            float: left;
            padding-left: 30px;
            color: #FFFFFF;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <?php include('menu.html'); ?>
    <p>
        L'application suivante affiche un jeu de donnée dans une page HTML. Ce jeu de donnée est récupéré depuis un fichier au format CSV. <br>
        Dans cette mis en situation, vous devez modifier l'application pour répondre aux demandes métiers ci-dessous.
    </p>
    <ul>
        <li>1 - Ajouter un lien cliquable permettant de rafraichir les données du tableau #nombreRaccordableByCodePostal</li>
        <li>2 - Ajouter un champ de recherche permettant de rechercher des lignes par code postal. La recherche se fera en ajax.</li>
        <li>3 - Ajouter un champ de recherche par code insee*. La recherche par code insee devra faire en sorte de sommer le nombre de raccordable des différentes villes faisant partie de la commune. La recherche se fera en ajax.</li>
        <li>4 - Ajouter un framework CSS pour améliorer l'aspect général de la page.</li>
        <li>5 - Proposer une autre amélioration qui vous semble pertinente.</li>
    </ul>

    <p>
        * Le code insee représente un code unique associé à une commune. Le code postal est lui aussi unique mais ne représente pas forcément une commune (ex: Le code postal de la plaine des cafres est 97418 alors que son code insee est 97422, qui correspond à la commune du Tampon).
        Pour obtenir les associations code insee <=> code postal vous devez utiliser le webservice suivant : https://datanova.laposte.fr/api/records/1.0/search//?dataset=laposte_hexasmal&q=974&rows=1000
    </p>

</body>
</html>