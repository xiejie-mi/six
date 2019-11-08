<?php 

  $array = ['130','109','90','33','77','44','95','33','25'];

  $res = count($array);
  

  for ($i=0; $i < $res-1; $i++) { 
  	if ($array[$i] > $array[$i+1]) {
  		$array[$i] =$array[$i+1];
  	}
  	}
  

  var_dump($array);
?>