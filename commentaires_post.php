<?php

    // Connexion à la base de données
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    // Insertion du commentaire à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO commentaires (id_billet, auteur, commentaire, date_commentaire) VALUES(id_billet, auteur, commentaire, NOW())');
    $req->execute(array($_GET['billet'], $_POST['pseudo'], $_POST['commentaire']));

    // Redirection du visiteur vers la liste des commentaires
    header('Location: commentaire.php?billet=' . $_GET['billet']);

?>
