<p>Écrire un algorithme qui informe si ce nombre est positif, négatif ou aucun des deux</p>
<?php
function isPositive(int $nombre = 0){
  switch($nombre<=>0){
    case -1 : return "Négatif";
    case 0  : return "Nul";
    case 1  : return "Positif";
  }
}

if (isset($_GET['nombre'])) $nb = $_GET['nombre'];
else $nb = rand(-5,5);
echo "$nb est ".isPositive($nb);