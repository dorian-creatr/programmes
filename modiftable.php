<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=form;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On ajoute une entrée dans la table jeux_video
$bdd->exec('INSERT INTO membres(prenom,nom,age,adresse) VALUES(\'adolph\', \'hitler\', \'23\',\'666 rue du bunker \')');

echo 'Le nouveau membre a bien etait ajouté';
?>

Insertion de données variables grâce à une requête préparée

Si on choisit d'utiliser une requête préparée (ce que je vous recommande si vous souhaitez insérer des variables), le fonctionnement est en fait exactement le même que dans le chapitre précédent :
<?php
$req = $bdd->prepare('INSERT INTO membres(prenom,nom,age,adresse) VALUES(\'adolph\', \'hitler\', \'23\',\'666 rue du bunker \')');
$req->execute(array(
	'prenom' => $prenom,
	'nom' => $nom,
	'age' => $age,
	'adresse' => $adresse,
	));

echo 'Le jeu a bien été ajouté !';
?>


<?php

$age=8 ;
if($age<=12)
{
	echo "Salut gamin";
	$autorisation_entrer = "oui";
}

else if{
	echo "salut homme";
	$autorisation_entrer = "non";
}

else{
	echo "Je ne connais pas ton age"
}

echo "avez vous l autorisation d entrer ? la reponse est : $autorisation_entrer ";
?>
