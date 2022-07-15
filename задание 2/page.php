<?php
$url=('html.html');
$page=file_get_contents($url);
$shabl='|<a(.+)</a>|ui';
$arr=[];
$z=0;
if (preg_match_all($shabl, $page, $arr)){
foreach($arr[0] as $text){
	if (substr_count($text,'З')){
		$z=$z+1;
	}
	elseif(substr_count($text,'з')){
		$z=$z+1;
	}
	//echo $z, 'ок' . '<br>';}
	//echo $text. '<br>';
}
echo $z;

}



?>

