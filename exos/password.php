<p>Créer une fonction qui prendra obligatoirement un argument de type string et testera si un password est bon. Elle devra retourner un boolean qui vaut true si le password fait au moins 8 caractères et false si moins. </p>
<?php
function passwordCheck(string $password):Bool{    
    return strlen($password)>=8;
}
$passwords=["Bob","ceciEstUnMotDeP4sse!"];
echo "<ul>";
foreach($passwords as $pass){
    echo "<li><strong>$pass</strong> : Mot de passe ";
    echo passwordCheck($pass)?"OK":"trop court";
    echo "</li>";
}
echo "</ul>";
?>