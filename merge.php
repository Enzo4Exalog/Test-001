<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rapport Fusion</title>
    </head>
    <body>
    <ul>    
        <li><a href="index.php">Accueil</a></li>
        <li><a href="news.asp">Comment fusionner les branches</a></li>
        <li><a href="contact.asp">A quoi ça sert ?</a></li>
        <li><a href="identifiant.php">Connexion</a></li>
        </ul>
        <div class="arrow"></div>
        <div>
    </body>
</html>
<style>
             body {
            animation: changeColor 10s infinite;
            }
        
        @keyframes changeColor {
            0% { background-color: #1BBDDA; }
            25% { background-color: #FCFCFC; }
            50% { background-color: #1BBDDA; }
            75% { background-color: #FCFCFC; }
            100% { background-color: #1BBDDA; }
        }

            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            border-radius: 30px;
            }
            li {
            float: left;
            }
            li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            }
            li a:hover {
            background-color: #111;
            }
            .cont {
                width: 600px;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 30px;
                background-color: #f9f9f9;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            .button {
            margin-left: 500px;
            padding: 10px 20px;
            font-size: 16px;
            animation: changeColor 10s infinite;
            border: none;
            border-radius: 25px;         
            bottom: -30px;
            position: relative;
        }
        .arrow {
            position: relative;
            width: 100px;
            height: 100px;
        }

        .arrow::before {
            content: "";
            position: absolute;
            top: 15%;
            left: 35%;
            transform: translate(-50%, -50%);
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 30px solid red;
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0% { opacity: 1; }
            30% { opacity: 0; }
        }
</style>
<center>
<?php
echo "<br>";
echo '<h2>Voici le Rapport de la Fusion</h2>';
echo "<br>";
echo '<div class="cont">';
echo "1";
var_dump($_POST['submit']);
echo "<br>";
var_dump($_POST['nomBranche']);
echo "<br>";
var_dump($_POST['datalist']);
echo "<br>";
var_dump($_POST['datalistBranche2']);
echo "<br>";

if(isset($_POST['submit'])){
    // Chemin du référentiel Git
    $repository_path = "/apache/htdocs/exalogv428/etomasso/Branche";
    $user ="etomasso";
    $repo_url="https://webhook:Nzc3MDM2ODM5NzQzOjKx+GyGOlxvpdcLT0yBtfmtX7QO@bitbucket.fr.exalog.net/scm/bankx/bankx-sandbox.git";


    // Clone du référentiel Git
    $command_clone = "git clone $repo_url ";
    $output_clone = shell_exec($command_clone);
    echo "<br>";
    var_dump($output_clone);

    $repository_path .= "/bankx-sandbox";
    if (!is_dir($repository_path)){
        echo"<h2> Le répertoire cloné n'existe pas.</h2>";
        exit;
    }else{
        echo"<h2> Le répertoire a bien été cloné.</h2>";
    }
    // Vérifier si le répertoire spécifié est un référentiel Git valide
    if (is_dir($repository_path . "/.git")) {
        // Basculer vers le répertoire du dépôt Git
        chdir($repository_path);

        // Récupérer les valeurs du formulaire
        $branch1 = $_POST['datalist'];
        $branch2 = $_POST['datalistBranche2'];
        $nomBranche = $_POST['nomBranche'];

        // Vérifier si la branche de destination existe déjà
        $command_check_branch = "git rev-parse --quiet --verify $nomBranche";
        $output_check_branch = shell_exec($command_check_branch);
        echo "<br>";
        var_dump($output_check_branch);

        if (empty($output_check_branch)) {

            $command_remote_branch = " git ls-remote --refs $repo_url | awk '{print $2}' | sed 's/refs\/heads\///' | sed 's/refs\/tags\///'";
            $output_remote_branch = shell_exec($command_remote_branch);
            echo "<br>";

            // Basculer vers la branche $branch1
            $command_checkout_branch1 = "git checkout $branch1";
            $output_checkout_branch1 = shell_exec($command_checkout_branch1);

            echo "<br>";

            echo "<br>";

            $command_check_branch1 = "git checkout $branch1";
            $output_check_branch1 = shell_exec($command_check_branch1);
            var_dump($output_check_branch1);
            echo "<br>";

            $command_check_branch2 = "git checkout -b $branch2";
            $output_check_branch2 = shell_exec($command_check_branch2);
            var_dump($output_check_branch2);
            echo "<br>";

            $command_merge = "git merge-base $branch1 $branch2";
            $output_merge_base = shell_exec($command_merge);
            var_dump($output_merge_base);
            echo "<br>";

            if(!empty(trim($output_merge_base))){
                                    
                    // Basculer vers la nouvelle branche
                    $command_checkout_branch = "git checkout $nomBranche";
                    $output_checkout_branch = shell_exec($command_checkout_branch);
                    var_dump($output_checkout_branch);
                    echo "<br>";

                    $command_merge = "git merge --no-ff --no-commit $branch1 $branch2";
                    $output_merge = shell_exec($command_merge);
                    var_dump($output_merge);

                echo "<br>";

                // Effectuer le commit des modifications de fusion
                $commit_message = "Commit de fusion de $branch1 avec $branch2";
                $command_commit = "git commit -am '$commit_message'";
                $output_commit = shell_exec($command_commit);
                var_dump($output_commit);

                echo "<br>";

                // Obtenir les commits entre les branches fusionnées
                $command_log = "git log --oneline $branch1..$branch2";
                $output_log = shell_exec($command_log);


                echo "<br>";

                // Afficher les résultats
                echo "<h2>Nouvelle branche '$nomBranche' créée et activée.</h2>";
                echo "<h2>Commits :</h2>";
                echo "<pre>$output_log</pre>";

               // Push vers le référentiel distant
                $command_push = "git push --set-upstream $repo_url $nomBranche";
                $output_push = shell_exec($command_push);
                var_dump($output_push);

                echo "<br>";

                // Vérifier si le push a réussi
                if (strpos($output_push, 'Everything up-to-date') !== false) {
                    echo "<h2>Push réussi vers le référentiel distant.</h2>";
                } else {
                    echo "<h2>Erreur lors du push vers le référentiel distant.</h2>";
                }
            } else {
                echo "<h2>La fusion a échoué en raison de conflits. Veuillez résoudre les conflits manuellement.</h2>";
            }
        } else {
            echo "<h2>La branche '$nomBranche' existe déjà.</h2>";
        }
    } else {
        echo "<h2>Chemin du référentiel invalide.</h2>";
    }
}
echo '</div>';
?>

</center>
