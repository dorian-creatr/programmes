<?PHP
$prenoms = array('mathieu','marie','robert');
print_r ($prenoms);
?>

<?php

$personne = array('nom'=>'nebra','prenom'=>'robert','age'=>99);
print_r ($personne);

?>



// si on connais le nombre de donnéé dans le tableau

<?php

$noms = array('mathieu','marie','robert');
$personne = array('nom'=>'nebra','prenom'=>'robert','age'=>99);

for($numero = 0 ; $numero<3; $numero++)
{
  echo '<p>'. $noms[$numero].'</p>';
}

?>

/*si on ne connais pas le nombbre de donné */

<?php

$noms = array('mathieu','marie','robert');
$personne = array('nom' => 'nebra','prenom' => 'robert','age' => 99);

foreach($personne as $libelle => $detail)
{
  echo '<p>'. $libelle .' vaut ' . $detail. '</p>';
}

?>
