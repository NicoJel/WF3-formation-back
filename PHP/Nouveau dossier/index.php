<?php
// un com sur une ligne

/*
un com sur 
plusieurs lignes
*/

// Afficher du texte
echo "Bonjour PHP"; 
echo '<br><strong>du texte en gras</strong>'

?>

<h2>Variables</h2> <!-- nous somme ici en html -->

<?php

// déclaration d'une variable
$a = 1; 

// afficher la valeur de ma variable
// a est du type INTEGER ou INT
echo $a;

// b est de type FLOAT
$b = 1.5;

// c est de type STRING
$c = 'Hello';

// d est de type BOOLEAN ou BOOL
$d = true;

echo '<br>';

// Pour avoir une information sur une variable
var_dump ($d);

// Pour forcer le type d'une variable (ici en entier)
// e est une nouvelle variable = à 1, d ne change pas
$e = (int)$d;
?>

<h2>Concaténation</h2>

<?php

$a = 'Hello';
$b = 'world';
// point . pour concatener
echo $a . $b;
echo '<br>' . $a . ' to the ' . $b;

$c = 2;
// ici 2 est transformé en chaine de caractères
$d = 'Un plus un font ' . 2;

?>

<h2>Guillements</h2>

<?php

$a = 'Bonjour';

// Les guillemets simple n'affichent pas les variables
echo '$a le monde';

// les guillemets double interprètent les variables
echo "<br>$a le monde";

?>

<h2>Constantes</h2>

<?php

// déclaration d'une constante qui s'appelle Ville, et qui vaut Paris
// par convention on note les constantes en majuscule
define ('VILLE', 'Paris');
echo VILLE;

/*
Les constantes magique sont données par le langage et changent de
valeur en fonction du contexte
elles sont préfixées et suffixées par 2 underscores
*/

// le ficher dans lequel on se trouve
echo  __FILE__;

// la ligne à laquelle on se trouve
echo '<br>' . __LINE__;

// le répertoire dans lequel on se trouve
echo '<br>'
. __DIR__;

?>

<h2>Opérateurs arithmetiques</h2>

<?php

$a = 2;
$b = 6;
echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;

// modulo (reste de la division)
// si le reste vaut 0, le 1er nombre est divisible par le ée
echo $b % $a;
echo '<br>';

$a += $b; // a = a + b

$a = 'bonjour';
$b = ' le monde';
$a .= $b; // a = a . b
echo $a; // a = 'bonjour le monde'

$i = 0;
$i++; // i += 1 ou i = i+1;

?>

<h2>Conditions</h2>

<?php

$vrai = true;

/* le code à l'interieur des accolades s'execute
si le contenu entre parenthèses est évalué en booleen  à true*/

if  ($vrai) {
    echo '$vrai est vrai';
}

$faux = false;

if ($faux) { // on entre pas dans la condition
    echo '$faux est vrai';
}
    elseif ($vrai){ // on peut mettre autant de elseif qu'on veut
        echo '$faux est faux et $vrai est vrai';
    }
        else { 
            echo '$faux est faux';
        }

$str = 'test';

if ($str == 'test') { // teste l'égalité
    echo '$str vaut test';
}

echo '<br>';

if ($str != 'bonjour') { // teste l'inégalité
    echo '$str ne vaut pas bonjour';
}
echo '<br>';
$a = 10; // integer
$b = '10'; //  string

var_dump($a == $b); // vrai car de même valeur
echo '<br>';
var_dump($a === $b); // faux car de même valeur mais type différent

// operateur inverse
var_dump($a !== $b);

var_dump($a > $b);
var_dump($a < $b);
var_dump($a >= $b);
var_dump($a <= $b);

if (isset ($a)) {
    echo '$a existe et n\'est pas null';
}

if (!empty($a)) {
    echo '$a  existe et n\'est pas vide';
}
// sont vides : null, 0, 0.0, false, '0', '', un tableau vide

// ET logique : &&
if ($b > $a && $c > $b) {
    echo '$b > $a ET $c > $b';
}

// OU logique
if ($b > $a || $c > $b) {
    echo '$b > $a OU $c > $b';
}

// OU exclusif : XOR
if ($b > $a XOR $c > $b) {
    echo '$b > $a OU $c > $b MAIS PAS les deux à la fois';
}

// le ET a priorité sur le OU
if ($b >  $a || $c > $b && $c > $d) {
    echo '$b > $a OU ($c > $b ET $c > $d)';
}

// les parenthèses pour forcer la priorité sur le OU
if (($b >  $a || $c > $b) && $c > $d) {
    echo '($b > $a OU $c > $b) ET $c > $d';
}

?>

<h2>Switch</h2>

<?php
$couleur = 'jaune';

switch ($couleur) {
    case 'rouge':
        echo 'la couleur est rouge';
        break;
    case 'bleu':
        echo 'la couleur est bleu';
        break; // le code s'execute jusqu'au prochain break
    case 'jaune':
        echo 'la couleur est jaune';
        break;
    default: //optionnel
        echo 'La couleur est inconnue';

}

echo '<br>';

if ($couleur === 'bleu'){
    echo 'la couleur est bleu';
}
    elseif ($couleur === 'rouge'){
        echo 'la couleur est rouge';
    }
    elseif ($couleur === 'jaune'){
        echo 'la couleur est jaune';
    }
else {
    echo 'la couleur est inconnue';
}

?>

<h2>Opérateur ternaire</h2>

<?php

$a = 1;

$b = ($a == 1)
    ? '$a vaut 1'
    : '$a ne vaut pas 1'
;

// equivaut à:

if ($a == 1) {
    $b = '$a vaut 1';
}
else{
    $b = '$a ne vaut pas 1';
}

?>

<h2>Boucle While</h2>

<?php

$i = 0;

while ($i < 3){
    if ($i == 2){
        echo '@';
    }
    else {
        echo '#';
    }

    echo $i;
    $i++;
}

$j = 1;

while ($j < 5){
    if ($j % 3 == 0){
        echo 'fin';
        break;
    }

    echo $j;
    $j++;
}

?>

<h2>Boucle For</h2>

<?php

for ($i = 0; $i<3; $i++){
    if ($i == 2){
        echo '@';
    }
    else {
        echo '#';
    }
}

echo "<br>";
// construire une liset deroulante html (select) pour choisir le jour du mois, donc de 1 à 31

?>

<select>

<?php 
for ($i=1; $i<=31; $i++) {
    echo "<option value=\"$i\">$i</option>";
}
?>

</select>
<?php 
echo "<br>";
echo "<br>";
?>

<!--construire un tableau html d'une ligne sur 8cases-->


<table style="border-collapse: collapse">
    <?php
        for ($j=1; $j<9; $j++){
            echo "<tr>";

            for ($i=1; $i<9; $i++){
                if (($i % 2 == 0 && $j % 2 != 0)||($i % 2 != 0 && $j % 2 == 0)){
                    echo "<td style= \"
                    border: 0px solid green; 
                    background: black; 
                    margin:0; 
                    padding:0; 
                    color:red;
                    height: 4em;
                    width: 4em;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-collapse: collapse;
                    \">
                    <div style=\"
                    border-radius: 50%; 
                    background: blue; 
                    margin:0; 
                    padding:0; 
                    height: 100%\">case N°$i</div></td>";
                }
                else {
                    echo "<td style= \"
                    border: 0px solid green; 
                    background: white; 
                    margin:0; 
                    padding:0; 
                    color:red;
                    height: 4em;
                    width: 4em;
                    align-items: center;
                    justify-content: center;
                    border-collapse: collapse;
                    \">
                    <div style=\"
                    background: yellow; 
                    height: 60%; 
                    width: 60%
                    margin:0; 
                    padding:0; 
                    \">case N°$i</div></td>";
                }
            }

            echo "</tr>";
        }
    
    ?>
</table>

<h2>Array</h2>

<?php 

// Créé un nouveau tableau vide
$tab = array();
$tab = [];

// un tableau de 3 éléments
$tab = array('a', 2, true);

// ajout d'un élément au tableau
$tab[] = 'b';

// valeur du 1er élément du tableau
$prem = $tab[0];

//remplace la valeur du 2e element par 3
$tab[1] = 3;

// même tableau en spécifiant les clefs
$tab = [
    0 => 'a',
    1 => 2,
    2 => true
];

// tableau associatif avec des clefs en chaînes de caractères
$assoc = [
    'a' => 'A',
    'b' => 'B',
    'c' => 'C'
];

// ajout d'un élément en spécifiant la clé
$assoc['d'] = 'D';
// rajouter une ligne au tableau ne va pas suivre la logique a b c d etc, mais repartir sur des indices numerique
//ainsi E a l'indice 0
$assoc[] = 'E';

// ajoute un élément avec l'indice 5
$assoc[5] = 'F';

// sans le preciser, l'élément G aura l'indice 6
$assoc[] = 'G';

// supprime l'élément qui a l'indice c
unset($assoc['c']);

?>

<h2>Boucle FOREACH</h2>

<?php 

/**
 * $value est une variable créée dans la déclaration du foreach pour faire référence dans la boucle
 * à l'élément sur le quel on est en train de boucler
 * un peu comme un tab[i] d'une boucle for
 */
foreach ($tab as $value) {
    var_dump($value);
    echo'<br';
}

foreach ($assoc as $key => $value) {
    echo $key . ':' . $value . '<br>';
}

foreach ($assoc as $value) {
    if($value == 'A') {
        $value = 'Z';
    }
}

foreach($assoc as $key => $value) {
    if ($value == 'A') {
        $assoc[$key] = 'Z';
    }
}

?>

<h2>Tableau multidimensionnel</h2>

<?php 

$users = [
    [
        'prenom' => 'julien',
        'nom' => 'Anest'
    ],
    [
        'prenom' => 'Liam',
        'nom' => 'Tardieu'
    ]
    ];

    // faire une boucle foreach qui affiche un nom prénom des 2users à la ligne

    foreach($users as $user) {
            echo $user['prenom'] . ' ' . $user['nom'] . '<br>';
        }

    // affiche le prénom du ée user
    echo $users[1]['prenom'];

?>

<h2>Fonctions prédéfinies</h2>

<?php 

//affiche 4
echo strlen('toto');
echo '<br>';

//affiche date et heure actuelle au format français
echo date('d/m/Y H:i:s');

?>

<h2>Fonctions utilisateurs</h2>

<?php 

function separateur()
{
    echo '<hr>';
}

// appel de la fonction
separateur();

// fonction prenant un paramètre
function bonjour($qui)
{
    echo "Bonjour $qui<br>";
}

// $qui dans l'execution de la fonction vaut 'Julien'
bonjour('Julien');
$nom = 'Liam';

// $qui dans l'execution de la fonction vaut 'Liam'
bonjour($nom);

// $qui n'existe pas en dehors de la fonction

function test()
{
    // $nom fait partie du scope global et n'est pas accessible dans la fonction
    // var_dump($nom)
    // inclut une variable du scope global dans la fonction
    global $nom;
    var_dump($nom);
}

test();

// fonction a deux paramètres
function hello($prenom, $nom = ' ')
{
    $str = "Bonjour $prenom";

    if (!empty($nom)){
        $str .= " $nom";
    }
    echo $str;
}

// la valeur de $nom dans la fonction sera 'Anest'
hello('Julien', 'Anest');
echo '<br>';
// la valeur de $nom dans la fonction ser '' (la valeur par défaut)
hello('Julien');

function foisdix($nombre)
{
    return $nombre * 10;
}

$nb = foisdix(5);
var_dump($nb); // $nb contient e que retourne la fonction (50)

function refusedix($nombre)
{
        if($nombre == 10){
        return 'ko';
        // si le nombre est 10, l'execution de la fonction s'arrête là
    }
    return 'ok';
}

echo '<br>';

// faire une fonction calculTVA qui prend un montant HT (obligatoire) et un taux (optionnel, par défaut 20) et qui retourne le montant TTC

function calculTTC($prixHT, $taux = 20)
{
    $prixTTC = $prixHT * $taux / 100 + $prixHT;
    $result= "le prix est de $prixHT € hors taxe et de " . $prixTTC . " € TTC";
    echo $result;
}

calculTTC(120, 5);

?>

<h2>Référence</h2>

<?php 

$a = 1;
$b = $a; // on affecte la valeur  de a à b
$a++; // quand on modifie a, ça ne modifie pas b
var_dump($a, $b);

$c = 1;
$d = &$c; // $b fait reference à $c
$c++; // quand on modifie c, on modifie aussi d
echo '<br>';
var_dump($c, $d);
$d++; // quand on modifie d, on modifie aussi c
echo '<br>';
var_dump($c, $d);

function ajoute1($nb)
{
    $nb++;
}

$nombre = 1;
ajoute1($nombre);
var_dump($nombre); // nombre n'est pas modifié

function ajoute2(&$nb)
{
    $nb += 2;
}
// parce que le parametre est passé par référence, la valeur de nombre est modifiée
ajoute2($nombre);

/* 
ajoute1(1);
ajoute2(2);
est une erreur, on ne peut modifier une valeur dans l'absolu */

?>

<h2>Variables dynamiques</h2>

<?php 

$variable = 'bonjour';
$name = 'variable';
echo $$name;


// au fil de la boucle on appelle un tag différent
$tag1 = 1;
$tag2 = 2;
$tag3 = 3;

for ($i = 1; $i <= 3; $i++) {
    echo ${'tag' . $i}. '<br>';
}

?>

<h2>Tableaux et guillements double</h2>

<?php 

$array = ['nom' => 'Julien'];
// echo "bonjour $array['nom']; ne fonctionne pas avec un élément de tableau
echo "Bonjour ${array['nom']}";

?>

<h2>Objet</h2>

<?php 

class personne
{
    // attributs de la classe (variables internes)
    public $prenom;
    public $nom;

    // méthodes de la classe (fonctions internes)

    // fonction construct s'execute quand on cré une classe personne
    public function __construct($nom, $prenom)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    public function senommer()
    {
        return $this->prenom . ' ' .$this->nom;
    }
}
// instanciation de la classe = création d'un objet à partir de la classe
// à 'linstanciation, la méthode __construct() est appelée
$moi = new Personne('Jelsch', 'Nicolas');

echo $moi->nom; // affiche la valeur de l'attribut
echo '<br>' . $moi->senommer();

// créé un objet de la classe interne DateTime de PHP, qui représente date et heure courante
$now = new DateTime();
echo '<br>' . $now->format('d/m/Y H:i:s');

?>

<h2>Inclusion de fichier</h2>

<?php 

include 'inclus.php'; // chemin relatif
include 'C:\xampp\htdocs\formation\back\PHP\inclus.php'; // chemin absolu

include __DIR__ . '/inclus.php'; // chemin absolu à partir du repertoire courant

// en utilisant une constant donnée par le langage
include __DIR__ . DIRECTORY_SEPARATOR . 'inclus.php';

?>

<h2>Expression reguliere</h2>

<?php 

var_dump(preg_match('/as/', 'passe')); //  contient 'as' 
var_dump(preg_match('/^pa/', 'passe')); // commence par 'pa' 
var_dump(preg_match('/se$/', 'passe')); // fini par 'se'
var_dump(preg_match('/[pb]/', 'passe')); // contient un p ou un b
var_dump(preg_match('/[a-z]/', 'passe')); // contient une lettre entre a et z en minuscule
var_dump(preg_match('/[a-zA-Z]/', 'passe')); // contient une lettre min ou maj entre a et z
var_dump(preg_match('/^[0-9]$/', '5')); // ne contient qu'un chiffre
var_dump(preg_match('/[0-9]+$/', 'coucou10')); // se termine par un ou plusieurs chriffre un ou plusieurs chiffre
var_dump(preg_match('/[0-9]*$/', 'coucou10')); // se termine par aucun, un, ou plusieurs chiffre
var_dump(preg_match('/^[0-9]?/', 'coucou10')); // commence par aucun ou un chiffre
var_dump(preg_match('/^[0-9]+.*[0-9]+$/', '0coucou1000')); // commence par un ou plusieurs chiffres, se termine par un ou plusieurs chiffre et entre les deux, aucun, un ou plusieurs caractères, n'importe lesquels (.*)
var_dump(preg_match('/^[a-z]{1.3}$/', 'pi')); // une chaîne de lettres minuscules de un à trois caractères
var_dump(preg_match('/^[a-z_-]+$/', 't-e_s-t')); // une chaîne de minuscule qui peut contenir _ et - (le tiret doit être en derriere position pour ne pas être confondu avec le séparateur)
var_dump(preg_replace('/^[0-9]/', 'X', 'Juillet 2018')); // remplace tous les chiffres par des X

?>

<h2>Syntaxe alternative</h2>

<?php 

/*syntaxe généralement utilisée dans les templates
Les accolades ouvra ntes peuvent être remplacées par des :
Les accolades fermantes sont remplacées par end[nom de l'instruction]
*/

if (10 < 20) :
    echo 'ici';
endif;