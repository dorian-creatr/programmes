<?php
$phrase = ' bonjour je suis une phrase';
$longueur= strlen($phrase);

echo'la phrase ci-dessus comporte '.$longueur.' caractéres:<br/>'.
$phrase;
?>

<br>

<?php
$ma_variable = str_replace('b','p','bim bam boum');
echo $ma_variable;
 ?>

<?php
$chaine = 'Cett chaine va etre melangée!';
$chaine = str_shuffle($chaine);
echo $chaine;
?>

<br>

<?php
$chaine ='CET CHIANE EN MINUS';
$chaine=strtolower($chaine);
echo $chaine;

 ?>
<br>





<?php

$jour = date('d');
$mois = date ('m');
$annee = date('Y');
$heure = date('H');
$minute = date('i');

echo 'bonjour ! nous sommes le '.$jour.'/'.$mois.'/'.$annee.'et il est'.$heure.'h'.$minute;

 ?>

<?php
function DireBonjour($nom)
{
  echo 'Bonjour  '.$nom.' !</br>';
}

DireBonjour('Marie');
DireBonjour('ffgg');
DireBonjour('dfdf');
DireBonjour('Mdfdf');
DireBonjour('bbvbe');
DireBonjour('Mnnrie');
DireBonjour('Marie');
 ?>

 <h1>Bienvenu <?php DireBonjour('marie');

?> </h1>


<?php
function VolumeCone($rayon,$hauteur)
{
  $volume=$rayon * $rayon * 3.14* $hauteur * (1/3);//calcul du volume
  return $volume; //renvoi la valeur du volume
  }

  $volume= VolumeCone(3,1);
  echo 'le volume d\'un cone de rayon 3 et de hauteur 1 est de '.$volume;
 ?>
