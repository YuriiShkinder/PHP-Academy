<?php
$month="вересень";
$arr=['січень', 'лютий', 'березень', 'квітень', 'траень', 'червень',
    'липень', 'серпень', 'вересень', 'жовтень', 'листопад', 'грудень'];
foreach($arr as $val){
    if($val==$month){
        echo "<strong>".$val."</strong><br>";
    }else {
        echo $val . "<br>";
    }
}
?>