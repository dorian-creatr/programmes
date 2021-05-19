<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Commentaires</title>
    </head>

    <body>

        <h1>Mon super blog !</h1>
        <a href="indexblog.php">Retour à la liste des billets</a>

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

        // Récupération du billet
        $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id=?');
        $req->execute(array($_GET['billet']));
        $donnees = $req->fetch();
        ?>

        <div class="news">
            <h3>
                <?php echo htmlspecialchars($donnees['titre']); ?>
                <em>le <?php echo $donnees['date_creation_fr']; ?></em>
            </h3>

            <p>
            <?php
            echo nl2br(htmlspecialchars($donnees['contenu']));
            ?>
            </p>
        </div>

        <h2>Commentaires</h2>

        <?php
        $req->closeCursor(); // Important : on libère le curseur pour la prochaine requête

        // Récupération des commentaires
        $req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'Le %d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');
        $req->execute(array($_GET['billet']));

        while($donnees = $req->fetch())
        {
        ?>
            <p><?php echo htmlspecialchars($donnees['pseudo']); ?>, le <?php echo htmlspecialchars($donnees['date_commentaire_fr']); ?></p>
            <p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
        <?php
        }

        $req->closeCursor(); // Important : on libère le curseur pour la prochaine requête
        ?>

        <div class="ajout_de_commentaire">
            <h2>Ajouter un commentaire</h2>

            <form method="post" action="commentaires_post.php?billet=<?php echo $_GET['billet'];?>">
                <p>
                    <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" required><br />
                    <label for="commentaire">Commentaire</label> : <br />
                    <textarea name="commentaire" id="commentaire" cols="50" rows="5" required></textarea><br />

                    <input type="submit" value="Envoyer">
                </p>
            </form>
        </div>

    </body>
</html>
