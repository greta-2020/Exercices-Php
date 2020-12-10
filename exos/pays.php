<p>
  Créer une fonction où vous déclarez un tableau contenant plusieurs pays, puis :
    <ul>
        <li>
            Pour chaque pays entrer lui les informations suivantes :
            <ul>
                <li>Le nombre d'habitants</li>
                <li>La capitale</li>
                <li>Le nombre d'habitant de la capitale</li>
                <li>la monnaie</li>
                <li>la langue</li>
            </ul>
        </li>
        <li>
            Afficher ensuite  :
            <ul>
                <li>le pays qui à le plus d'habitant</li>
                <li>le pays qui à la capital avec le plus d'habitant</li>
                <li>tous les pays qui ont la même monnaie ou la même langue</li>
                <li>le nombre de pays présent dans le tableau</li>
            </ul>
        </li>
        <li>Vérifier si le pays "Canada" existe</li>
    </ul>
</p>
<?php
class Pays{
    public $nom;
    public $habitants;
    public $capitale;
    public $habitantsCapitale;
    public $monnaie;
    public $langue;

    function __construct(string $nom = "Pays inconnu",int $habitants = 0,string $capitale = "FakeVille",int $habitantsCapitale = 0,string $monnaie = "Caillous",string $langue = "Klingon"){
        $this->nom=$nom;
        $this->habitants=$habitants;
        $this->capitale=$capitale;
        $this->habitantsCapitale=$habitantsCapitale;
        $this->monnaie=$monnaie;
        $this->langue=$langue;
    }
}

$france=new Pays("France",66990000,"Paris",2187526,"Euro","Français");
$espagne=new Pays("Espagne",46934632,"Madrid",3266126,"Euro","Espagnol");
$canada=new Pays("Canada",38005238,"Ottawa",934243,"Dollar canadien","Français");
$listePays=array($france,$espagne,$canada);
function checkPays(array $pays){
    $maxHabitants= $pays[0];
    foreach($pays as $p){        
        if($p->habitants > $maxHabitants->habitants){
            $maxHabitants = $p;
        }
    }
    $maxCapitale= $pays[0];
    foreach($pays as $p){        
        if($p->habitantsCapitale > $maxCapitale->habitantsCapitale){
            $maxCapitale = $p;
        }
    }
    $paysParMonnaie = array();
    foreach($pays as $p){
        $paysParMonnaie[$p->monnaie][]=$p->nom;
    }
    $paysParLangue = array();
    foreach($pays as $p){
        $paysParLangue[$p->langue][]=$p->nom;
    }

    echo "
    <ul>
        <li>Le pays le plus peuplé est $maxHabitants->nom avec $maxHabitants->habitants habitants</li>
        <li>La capitale la plus peuplée est $maxCapitale->capitale avec $maxCapitale->habitantsCapitale habitants en $maxCapitale->nom</li>
        <li>Il y a ".count($pays)." pays dans le tableau</li>
        <li>Pays par monnaie :
            <ul>";
                foreach($paysParMonnaie as $monnaie => $listePays){
                    echo "<li><strong>$monnaie</strong> : ".implode(", ",$listePays)."</li>";        
                }
                echo 
            "</ul>
        </li>
        <li>Pays par langue :
            <ul>";
                foreach($paysParLangue as $langue => $listePays){
                    echo "<li><strong>$langue</strong> : ".implode(", ",$listePays)."</li>";        
                }
                echo 
            "</ul>
        </li>
    </ul>";
    echo paysExiste("Canada",$pays)?"Le Canada existe":"Le Canada n'existe pas";
}

function paysExiste(string $recherche, array $listePays):bool{
    foreach($listePays as $p){
        if ($p->nom == $recherche){
            return true;
        }
    }
    return false;
}

checkPays($listePays);
?>