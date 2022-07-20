<?php
$arr=['012','123','234','345','456','567','678','789'];
$s=[];
$obsh=[];
foreach($arr as $arr1){
	foreach (range(1,10000) as $number){
	array_push($obsh, $number);
	if (substr_count($number, $arr1)){
		array_push($s, $number);
		}		
	}
}
$obsh1=array_sum($obsh);
$s1=array_sum($s);
$x=$obsh1-$s1;
var_dump($x,$obsh1,$s1,$s);





