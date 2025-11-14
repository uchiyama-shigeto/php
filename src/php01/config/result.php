<?php
$name = htmlspecialchars($_POST['name'],ENT_QUOTES) ;
print 'お名前は、'.$name. '<br />';
$sale = htmlspecialchars($_POST['sale'],ENT_QUOTES) ;
print 'ご希望の商品は、'. $sale. '<br ?>'  ;
$number = htmlspecialchars($_POST['number'],ENT_QUOTES) ;
print '注文数は、'. $number ;