<?php



$movies = [

'Raiders of the lost ark'=> ['Karen Allen','Paul Freeman','Ronald Lacey'],
'Indiana Jones and the temple of doom' => ['Kate Capshaw', 'Ke Huy Quan', 'Amrish Puri'],
'Indiana Jones and the last crusade' => ['Sean Connery', 'Denholm Eliot', 'Alison Doody']

];



foreach($movies as $key => $actors){

     echo ' Dans le film '.$key. ',  les principaux acteurs sont :  '.$actors[0].','.$actors[1].','.$actors[2].'.</br></br>';
}

?>
