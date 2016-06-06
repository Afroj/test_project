<?php
$a1 = str_replace(' ', '', 'Quek Changchun');
$a1First = 'Quek';
$a1Last  ='Changchun';
$a1Reverse = str_replace(' ', '', 'Changchun Quek');

$a2 = str_replace(' ', '', 'Chang chun Quek');
$a2First = str_replace(' ', '', 'Chang chun');
$a2Last = 'Quek';
$a2Reverse = str_replace(' ', '', 'Quek Chang chun');

if(strcasecmp($a1, $a2) == 0 || strcasecmp($a1, $a2Reverse) ==  0  || strcasecmp($a1Reverse, $a2) ==  0){
    echo "Matched";
}
else {
    echo "Not Matched";
}


echo "My name is khan";
?>
