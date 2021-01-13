<?php

// $lane15="192.138.138.65";
// $lane16="192.138.138.66";
// $lane17="192.138.138.67";
// $lane18="192.138.138.68";
// $lane19="192.138.138.69";
// $lane20="192.138.138.70";
// $lane21="192.138.138.71";




// $output['lane15']=shell_exec('ping -n 1 '.$lane15);
// $output['lane16']=shell_exec('ping -n 1 '.$lane16);
// $output['lane17']=shell_exec('ping -n 1 '.$lane17);
// $output['lane18']=shell_exec('ping -n 1 '.$lane18);
// $output['lane19']=shell_exec('ping -n 1 '.$lane19);
// $output['lane20']=shell_exec('ping -n 1 '.$lane20);
// $output['lane21']=shell_exec('ping -n 1 '.$lane21);

// $output['lane15']=exec('ping -n 1 '.$lane15);
// $output['lane16']=exec('ping -n 1 '.$lane16);
// $output['lane17']=exec('ping -n 1 '.$lane17);
// $output['lane18']=exec('ping -n 1 '.$lane18);
// $output['lane19']=exec('ping -n 1 '.$lane19);
// $output['lane20']=exec('ping -n 1 '.$lane20);
// $output['lane21']=exec('ping -n 1 '.$lane21);


// for ($i=15,$o=55; $i <= 21; $i++,$o++) { 

// 	if (strpos($output['lane'.$i],'bytes=32')) {
// 	  $ping['lane'.$i] = 'Alive';
// 	}elseif(strpos($output['lane'.$i],'Destination host unreachable')){
// 		  $ping['lane'.$i] = 'Dead';
// 	}elseif(strpos($output['lane'.$i],'General failure')){
// 		 $ping['lane'.$i] = 'Dead';
// 	}elseif(strpos($output['lane'.$i],'Request timed out')){
// 		  $ping['lane'.$i] = 'Dead';
// 	}
// 	// echo $i;
// }







// for ($i=15; $i <= 21; $i++) { 
// 	if (strpos($output['lane'.$i],'bytes=32')) {
// 	  $ping['lane'.$i] = 'Alive';
// 	}elseif(strpos($output['lane'.$i],'Destination host unreachable')){
// 		  $ping['lane'.$i] = 'Dead';
// 	}elseif(strpos($output['lane'.$i],'General failure')){
// 		 $ping['lane'.$i] = 'Dead';
// 	}elseif(strpos($output['lane'.$i],'Request timed out')){
// 		  $ping['lane'.$i] = 'Dead';
// 	}
// 	// echo $i;
// 	// echo "<br>";
// }


for ($i=11,$o=61; $i <= 15; $i++,$o++) { 
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