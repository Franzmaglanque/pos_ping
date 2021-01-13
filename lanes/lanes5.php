<?php


for ($i=21,$o=71; $i <= 25; $i++,$o++) { 
	$output['lane'.$i] = shell_exec("ping -n 1 192.138.138.$o");
	if (strpos($output['lane'.$i],'bytes=32')) {
	  $ping['lane'.$i] = 'Alive';
	}elseif(strpos($output['lane'.$i],'Destination host unreachable')){
		  $ping['lane'.$i] = 'Dead';
	}elseif(strpos($output['lane'.$i],'General failure')){
		 $ping['lane'.$i] = 'Dead';
	}elseif(strpos($output['lane'.$i],'Request timed out')){
		  $ping['lane'.$i] = 'Dead';
	}
}
$result = json_encode($ping);

echo $result;


?>