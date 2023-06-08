<!DOCTYPE html>
<html>
<head>
    <title>Projet Exalog - Fusion de branches</title>
    <!-- Inclure vos feuilles de style CSS et scripts JavaScript -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <ul>
        <li><a href="default.asp">Accueil</a></li>
        <li><a href="news.asp">Comment fusionner les branches</a></li>
        <li><a href="contact.asp">A quoi ça sert ?</a></li>
        <li><a href="identifiant.php">Connexion</a></li>
    </ul>
    <h1>Projet Exalog - Fusion de branches</h1>

    <form action="merge.php" method="POST" target="blank">
        <select name="selectBranche1">
            <option value="">Sélectionnez la branche 1</option>
            <option value="ctchelidze_BANKX-74700_BANKX-74701_from_version/bankx-v16.15.0-max">ctchelidze_BANKX-74700_BANKX-74701_from_version/bankx-v16.15.0-max</option>            
        </select>
        <br>
        <select name="selectBranche2">
            <option value="">Sélectionnez la branche 2</option>
            <option value="athevenet_BANKX-74845_BANKX-74846_from_version/bankx-v16.15.0-max">athevenet_BANKX-74845_BANKX-74846_from_version/bankx-v16.15.0-max</option>        </select>
        <br>
        <input type="text" name="nomBranche" placeholder="Nom de la nouvelle branche">
        <br>
        <button type="submit" name="submit">Fusionner les branches</button>
    </form>
</body>
</html>
