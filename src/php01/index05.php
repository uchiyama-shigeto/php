<?php
$people = 'Saburo' ;

switch($people) {
    case 'Ichiro' :
        echo '一郎です' ;
        break ;
    case 'Saburo' :
        echo '三郎です' ;
        break ;
    default :
        echo 'それ以外です' ;
        break ;
}

echo "<br />" ;

$a = 7 ;

$result = ($a > 5 ) ? 'TRUE' : 'FALSE' ;
echo $result ;