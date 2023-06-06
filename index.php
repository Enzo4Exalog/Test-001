<?php
// Logique de fusion des branches
function fusionnerBranches($branche1, $branche2, $nomBranche)
{
    // Vérifier si les branches existent et sont différentes
    if (!empty($branche1) && !empty($branche2) && $branche1 !== $branche2) {
        // Vérifier l'existence de l'ancêtre commun (à adapter selon votre besoin)
        $ancetreCommun = getAncetreCommun($branche1, $branche2);

        if (!empty($ancetreCommun)) {
            // Créer le nom de la nouvelle branche (obligatoirement avec préfixe "TEST-" et nom fourni par l'utilisateur)
            $nouvelleBranche = "" . $nomBranche;

            // Fusionner les branches dans la nouvelle branche
            $resultatFusion = gitMerge($nouvelleBranche, $branche1, $branche2);

            if ($resultatFusion === true) {
                echo "Fusion effectuée avec succès dans la branche : $nouvelleBranche";
            } else {
                echo "Erreur lors de la fusion : $resultatFusion";
            }
        } else {
            echo "L'ancêtre commun n'a pas été trouvé.";
        }
    } else {
        echo "Veuillez sélectionner deux branches différentes.";
    }
}

// Fonction pour obtenir l'ancêtre commun (à adapter selon votre besoin)
function getAncetreCommun($branche1, $branche2)
{
    // Code pour trouver l'ancêtre commun
    // Remplacez cette logique par la vôtre en utilisant les outils Git appropriés
    // Renvoie le nom de l'ancêtre commun ou une valeur vide si aucun n'est trouvé
    return "ancetre-commun";
}

// Fonction pour effectuer la fusion avec la commande Git merge (à adapter selon votre besoin)
function gitMerge($nouvelleBranche, $branche1, $branche2)
{
    // Code pour exécuter la commande Git merge dans un dossier spécifique
    // Renvoie true si la fusion réussit, sinon renvoie le message d'erreur
    $dossierFusion = "/run/user/1001/gvfs/sftp:host=exalogv428,user=etomasso/apache/htdocs/bmohammad/New-branch/bankx-sandbox

    ";
    chdir($dossierFusion);

    // Exécuter la commande Git merge
    // Utilisez la variable $nouvelleBranche, $branche1, $branche2 pour la commande Git merge
    // Renvoyez true si la fusion réussit, sinon renvoyez le message d'erreur
    // Exemple : exec("git merge $branche1");
    return true;
}

// Traitement du formulaire de fusion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $branche1 = $_POST["selectBranche1"];
    $branche2 = $_POST["selectBranche2"];
    $nomBranche = $_POST["nomBranche"];

    fusionnerBranches($branche1, $branche2, $nomBranche);
}
?>

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

    <form method="POST" enctype="multipart/form-data">
        <select name="selectBranche1">
            <option value="">Sélectionnez la branche 1</option>
            <option value="../bankx-sandbox/ctchelidze_BANKX-74700_BANKX-74701_from_version/bankx-v16.15.0-max">ctchelidze_BANKX-74700_BANKX-74701_from_version/bankx-v16.15.0-max</option>            
        </select>
        <br>
        <select name="selectBranche2">
            <option value="">Sélectionnez la branche 2</option>
            <option value="../bankx-sandbox/athevenet_BANKX-74845_BANKX-74846_from_version/bankx-v16.15.0-max">athevenet_BANKX-74845_BANKX-74846_from_version/bankx-v16.15.0-max</option>        </select>
        <br>
        <input type="text" name="nomBranche" placeholder="Nom de la nouvelle branche">
        <br>
        <button type="submit">Fusionner les branches</button>
    </form>
</body>
</html>
