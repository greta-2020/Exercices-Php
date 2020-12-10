<p>
  Créer une fonction qui va :
  <ul>
    <li>afficher une variable</li>
    <li>l'incrémenter sa valeur de 2</li>
    <li>Si sa valeur est égale à 10, la mettre en valeur avec la balise HTML appropriée.</li>
    <li>arréter arrivé à 30</li>
  </ul>
</p>

<?php
function boucleDix($depart){
  for($i=$depart;$i<=30;$i+=2){
    echo ($i==10)?"<strong>$i</strong> ":"$i ";
  }
}
boucleDix(6);
?>