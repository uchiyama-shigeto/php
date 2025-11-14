<?php

function text($num1, $num2) {
    $value = $num1 + $num2 ;
    return $value ;
}

$total = text(2, 3) ;
echo $total ;
echo '<br>' ;

function SUM($score1, $score2, $score3) {
    $TotalScore = $score1 + $score2 + $score3 ;
    return $TotalScore ;
}
    $score = SUM(100, 100, 0) ;
    if($score > 210) {
        echo '合計点は'. $score.  'なので合格です' ;
    } else {
        echo '合計点は'. $score.  'なので不合格です' ;
    }
    echo '<br>' ;

function areaT($t1, $t2) {
    return $t1 * $t2 /2 ;
}
function areaS($t1, $t2) {
    return $t1 * $t2 ;
}
function areaD($d1, $d2, $d3) {
    return ($d1 + $d2) * $d3 /2 ;
}

echo (areaT(20, 10)).'<br>' ;
echo (areaS(20, 10)).'<br>' ;
echo (areaD(30, 30, 10)).'<br>' ;