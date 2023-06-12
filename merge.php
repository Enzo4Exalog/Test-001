<?php
echo "1";
var_dump($_POST['submit']);
var_dump($_POST['nomBranche']);
if(isset($_POST['submit'])){
    $repository_path = "/apache/htdocs/exalogv428/etomasso/Branche/bankx-sandbox"; // Chemin du référentiel Git

    // Vérifier si le répertoire spécifié est un référentiel Git valide
    if (is_dir($repository_path . "/.git")) {
        // Basculer vers le répertoire du dépôt Git
        chdir($repository_path);

        // Récupérer les valeurs du formulaire
        $branch1 = $_POST['selectBranche1'];
        $branch2 = $_POST['selectBranche2'];
        $nomBranche = $_POST['nomBranche'];

        // Vérifier si la branche de destination existe déjà
        $command_check_branch = "git rev-parse --quiet --verify $nomBranche";
        $output_check_branch = shell_exec($command_check_branch);
        var_dump($output_check_branch);

        if (empty($output_check_branch)) {
            // Ancêtres communs
            $command_merge = "git merge-base $branch2 $branch1";
             $output_merge = shell_exec($command_merge);
             var_dump($output_merge);

             $command_merge = "git merge $branche1 $branch2";
             $output_merge = shell_exec($command_merge);
             var_dump($output_merge);

            // Créer une nouvelle branche à partir de branch1
            $command_create_branch = "git branch $nomBranche";
            $output_create_branch = shell_exec($command_create_branch);
            var_dump($output_create_branch);

            // Basculer vers la nouvelle branche
            $command_checkout_branch = "git checkout $nomBranche";
            $output_checkout_branch = shell_exec($command_checkout_branch);
            var_dump($output_checkout_branch);

            // Effectuer le commit des modifications de fusion
            $commit_message = "Commit de fusion de $branch1 avec $branch2";
            $command_commit = "git commit -am '$commit_message'";
            $output_commit = shell_exec($command_commit);
            var_dump($output_commit);  

            // Obtenir les commits entre les branches fusionnées
            $command_log = "git log --oneline $branch1..$branch2";
            $output_log = shell_exec($command_log);
            var_dump($output_log);

            // Afficher les résultats
            echo "<h2>Nouvelle branche '$nomBranche' créée et activée.</h2>";
            echo "<h2>Commits :</h2>";
            echo "<pre>$output_log</pre>";
        } else {
            echo "<h2>La branche '$nomBranche' existe déjà.</h2>";
        }
        $command_push = "git push --set-upstream github $nomBranche";
        $output_push = shell_exec($command_push);
        var_dump($output_push);
        
        // Vérifier si le push a réussi
        if (strpos($output_push, 'Everything up-to-date') !== false) {
            echo "<h2>Push réussi vers GitHub.</h2>";
        } else {
            echo "<h2>Erreur lors du push vers GitHub.</h2>";
        }
    } else {
        echo "<h2>Chemin du référentiel invalide.</h2>";
    }
}
?>