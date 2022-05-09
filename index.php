<?php
//     // Exercice 2
echo "HELLO  <br>";

// Exercice 3
$monPrenom = "OMAR";
$monNom = " KANDIL";
$monAge = 18;
echo "$monNom  $monPrenom  $monAge <br> ";



/*La difference ce que la deuxime ne prend pas en considération
   ces variables , il les considére comme une chaine de caracthère pa plus 
   */


$str = <<<MYTEXT
    My last name is  $monNom <br>
    MYTEXT;

echo $str;

$str2 = <<<MYTEXT
    My last name is  $monPrenom <br>
    MYTEXT;

echo $str2;



// Converting a boolean to an int
$number = 11;

$string = strval($number);

echo $string;
echo "<br>";
var_dump($string);

// Converting an int to a string
$ageX = 18;
$salaire = 1000;
$eyesColor = "red";

if ($ageX > 20 || $salaire > 1000) {
    echo "<br>okey <br>";
}
else{
    echo"<br> no <br>";
}




$name1 = '';

$name2 = null;

echo 'checking $name1 : ';
var_dump(isset($name1));

echo '<br>';

echo 'checking $name2: ';
var_dump(isset($name2));

echo '<br>';

echo 'checking undeclared variable $name3: ';
var_dump(isset($name3));

echo "<br>";

// Arrays :

$students = array("Omar", "Fatima ezzahrar", "zobair", "Nada");
echo "<pre>";
print_r($students);
echo "</pre>";

foreach ($students as $val) {
    echo $val . "<br>";
}


echo "<br>";

$contries = array(

    array(
        'Ma' => 'Morocco',
        'Al' => ' Algerie',
        'Tu' => 'Tunisie'
    ),
    array(
        'Ma' => 'Morocco',
        'Al' => ' Algerie',
        'Tu' => 'Tunisie'
    )

);

for ($i = 6; $i <= 60; $i += 6) {

    echo "$i <br>" ;
}

// functions


function sayHi($name, $age)
{
    echo "<br> Hi " . $name . "Your Age is " . $age;
}
sayHi("Omar ", 18);

function funcValue3()
{
    return null;
}
echo "<br>";
var_dump(funcValue3());

echo "<br>";

$tasks = array(
    'title' => 'Creer Le landing Page',
    'due' => '10/05/22',
    'assigned_to' => 'Mohamed',
    'done' => true
);
echo "<ul>";


if ($tasks['done'] == true) {
    $tasks['done'] = "Done";
} else {
    $tasks['done'] = "Doing";
}
foreach ($tasks as $key => $v) {

    echo "<li> $key : $v  </li>";
}

echo "</ul>";

$tasksX = array(
    array(
        'title' => 'Creer Le landing Page',
        'due' => '10/05/22',
        'assigned_to' => 'Mohamed',
        'done' => true,
    ),
    array(
        'title' => 'Creer Le landing Page',
        'due' => '10/05/22',
        'assigned_to' => 'Reda',
        'done' => false,
    ),
    array(
        'title' => 'Creer Le landing Page',
        'due' => '10/05/22',
        'assigned_to' => 'sali',
        'done' => false,
    ),
    array(
        'title' => 'Creer Le landing Page',
        'due' => '10/05/22',
        'assigned_to' => 'Mohamed',
        'done' => true,
    ),
    array(
        'title' => 'Creer Le landing Page',
        'due' => '10/05/22',
        'assigned_to' => 'Firfir',
        'done' => false,
    ),
   
);
$length = count($tasks) +1 ;

for($i= 0 ; $i< $length; $i++){

foreach ( $tasksX[$i] as $val) {
    if($tasksX[$i]['done'] == false){
    echo $val ;
    }

}

}
