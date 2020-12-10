<p>Écrire un programme qui permet de calculer et d’afficher la réduction effective au produit par rapport à un pourcentage de réduction, le prix initial HT et une TVA de 19,6%.</p>
<?php
function tvaPlusReduc($prixHT,$reduc){
  define('TVA',1.196);
  return $prixHT * TVA * $reduc /100;
}
$prixHT=rand(50,1000);
$reduc=rand(10,50);

echo "Pour un prix hors taxe de $prixHT € avec une réduction de $reduc%, vous ferez une économie totale de ".number_format(tvaPlusReduc($prixHT,$reduc),2)." €";
?>