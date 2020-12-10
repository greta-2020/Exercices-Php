<p>Creer une variable de type int, qui stock une valeur de 0 à 24 et qui permet de dire si nous sommes le matin, l'après-midi ou le soir.</p>
<?php
  function saluer(int $heure = 0){
    if ($heure<12) return "Bonjour";
    elseif ($heure<18) return "Bon après-midi";
    else return "Bonsoir";
  }
  echo saluer(date('H'));
?>