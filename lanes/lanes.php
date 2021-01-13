<?php
// for ($i=1,$o=51; $i <= 31; $i++,$o++) { 
// 	$output['lane'.$i] = shell_exec("ping -n 1 192.138.138.$o");
// 	if (strpos($output['lane'.$i],'bytes=32')) {
// 	  $ping['lane'.$i] = 'Alive';
// 	}elseif(strpos($output['lane'.$i],'Destination host unreachable')){
// 		  $ping['lane'.$i] = 'Dead';
// 	}elseif(strpos($output['lane'.$i],'General failure')){
// 		 $ping['lane'.$i] = 'Dead';
// 	}elseif(strpos($output['lane'.$i],'Request timed out')){
// 		  $ping['lane'.$i] = 'Dead';
// 	}
// }


for ($i=1,$o=51; $i <= 5; $i++,$o++) { 
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


// $lane16="192.138.138.66";
// $lane17="192.138.138.67";
// $lane18="192.138.138.68";
// $lane19="192.138.138.69";
// $lane20="192.138.138.70";
// $lane21="192.138.138.71";
// $lane22="192.138.138.72";
// // $lane23="192.138.138.73";
// // $lane24="192.138.138.74";
// // $lane25="192.138.138.75";
// // $lane26="192.138.138.76";
// // $lane27="192.138.138.77";
// // $lane28="192.138.138.78";
// // $lane29="192.138.138.79";
// // $lane30="192.138.138.80";
// // $lane31="192.138.138.81";


// $output['lane16']=shell_exec('ping -n 1 '.$lane16);
// $output['lane17']=shell_exec('ping -n 1 '.$lane17);
// $output['lane18']=shell_exec('ping -n 1 '.$lane18);
// $output['lane19']=shell_exec('ping -n 1 '.$lane19);
// $output['lane20']=shell_exec('ping -n 1 '.$lane20);
// $output['lane21']=shell_exec('ping -n 1 '.$lane21);
// $output['lane22']=shell_exec('ping -n 1 '.$lane22);
// // $output['lane23']=shell_exec('ping -n 1 '.$lane23);
// // $output['lane24']=shell_exec('ping -n 1 '.$lane24);
// // $output['lane25']=shell_exec('ping -n 1 '.$lane25);
// // $output['lane26']=shell_exec('ping -n 1 '.$lane26);
// // $output['lane27']=shell_exec('ping -n 1 '.$lane27);
// // $output['lane28']=shell_exec('ping -n 1 '.$lane28);
// // $output['lane29']=shell_exec('ping -n 1 '.$lane29);
// // $output['lane30']=shell_exec('ping -n 1 '.$lane30);


// for ($i=16; $i <= 22; $i++) { 
// 	if (strpos($output['lane'.$i],'bytes=32')) {
// 	  $ping['lane'.$i] = 'Alive';
// 	}elseif(strpos($output['lane'.$i],'Destination host unreachable')){
// 		  $ping['lane'.$i] = 'Dead';
// 	}elseif(strpos($output['lane'.$i],'General failure')){
// 		 $ping['lane'.$i] = 'Dead';
// 	}elseif(strpos($output['lane'.$i],'Request timed out')){
// 		  $ping['lane'.$i] = 'Dead';
// 	}
// }







$result = json_encode($ping);
echo $result;
?>