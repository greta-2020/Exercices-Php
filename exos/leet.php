<p>
Créer une fonction qui prendra un argument de type string et qui devra retourner cette même string mais en remplacant les e par des 3, les i par des 1 et les o par des 0 <br/>
Exemple : "Hello à tous, il fait bien froid aujourd'hui !" => "H3ll0 à t0us, 1l fa1t fr01d auj0urd'hu1 !"
</p>
<?php
function leetSpeak(string $texte):string{
    $search= array("e","o","i");
    $replace=array("3","0","1");
    return str_replace($search,$replace,$texte);
}
echo leetSpeak("Hello à tous, il fait bien froid aujourd'hui !");
?>