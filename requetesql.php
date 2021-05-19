

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=form;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT prenom , nom FROM membres');

while ($donnees = $reponse->fetch())
{
	echo $donnees['prenom'] . $donnees['nom'].'<br />';
}

$reponse->closeCursor();

?>


 la requete suivante permet de se proteger des injections sql:


 <?php
$req = $bdd->prepare('SELECT nom FROM jeux_video WHERE possesseur = ?');
$req->execute(array($_GET['possesseur']));
?>

Ajoutez-y un paramètre à la fin pour activer les erreurs :

<?php

$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>

Désormais, toutes vos requêtes SQL qui comportent des erreurs les afficheront avec un message beaucoup plus clair.
