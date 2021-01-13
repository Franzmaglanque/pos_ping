<?php

// $lane1="192.138.1.44";
// $lane2="192.138.138.52";
// $lane3="192.138.138.53";
// $lane4="192.138.138.54";
// $lane5="192.138.138.55";
// $lane6="192.138.138.56";
// $lane7="192.138.138.57";
// $lane8="192.138.138.58";
// $lane9="192.138.138.59";
// $lane10="192.138.138.60";
// $lane11="192.138.138.61";
// $lane12="192.138.138.62";
// $lane13="192.138.138.63";
// $lane14="192.138.138.64";
// $lane15="192.138.138.65";
// $lane16="192.138.138.66";
// $lane17="192.138.138.67";
// $lane18="192.138.138.68";
// $lane19="192.138.138.69";
// $lane20="192.138.138.70";
// $lane21="192.138.138.71";
// $lane22="192.138.138.72";
// $lane23="192.138.138.73";
// $lane24="192.138.138.74";
// $lane25="192.138.138.75";
// $lane26="192.138.138.76";
// $lane27="192.138.138.77";
// $lane28="192.138.138.78";
// $lane29="192.138.138.79";
// $lane30="192.138.138.80";
// $lane31="192.138.138.81";



// $output = [];
// $output['lane1']=shell_exec('ping -n 1 '.$lane1); 	
// $output['lane2']=shell_exec('ping -n 1 '.$lane2); 
// $output['lane3']=shell_exec('ping -n 1 '.$lane3); 
// $output['lane4']=shell_exec('ping -n 1 '.$lane4); 
// $output['lane5']=shell_exec('ping -n 1 '.$lane5); 
// $output['lane6']=shell_exec('ping -n 1 '.$lane6);
// $output['lane7']=shell_exec('ping -n 1 '.$lane7);
// $output['lane8']=shell_exec('ping -n 1 '.$lane8);
// $output['lane9']=shell_exec('ping -n 1 '.$lane9);
// $output['lane10']=shell_exec('ping -n 1 '.$lane10);
// $output['lane11']=shell_exec('ping -n 1 '.$lane11);
// $output['lane12']=shell_exec('ping -n 1 '.$lane12);
// $output['lane13']=shell_exec('ping -n 1 '.$lane13);
// $output['lane14']=shell_exec('ping -n 1 '.$lane14);
// $output['lane15']=shell_exec('ping -n 1 '.$lane15);
// $output['lane16']=shell_exec('ping -n 1 '.$lane16);
// $output['lane17']=shell_exec('ping -n 1 '.$lane17);
// $output['lane18']=shell_exec('ping -n 1 '.$lane18);
// $output['lane19']=shell_exec('ping -n 1 '.$lane19);
// $output['lane20']=shell_exec('ping -n 1 '.$lane20);
// $output['lane21']=shell_exec('ping -n 1 '.$lane21);
// $output['lane22']=shell_exec('ping -n 1 '.$lane22);
// $output['lane23']=shell_exec('ping -n 1 '.$lane23);
// $output['lane24']=shell_exec('ping -n 1 '.$lane24);
// $output['lane25']=shell_exec('ping -n 1 '.$lane25);
// $output['lane26']=shell_exec('ping -n 1 '.$lane26);
// $output['lane27']=shell_exec('ping -n 1 '.$lane27);
// $output['lane28']=shell_exec('ping -n 1 '.$lane28);
// $output['lane29']=shell_exec('ping -n 1 '.$lane29);
// $output['lane30']=shell_exec('ping -n 1 '.$lane30);
// $output['lane31']=shell_exec('ping -n 1 '.$lane31);




// $ping = [];
// for ($i=1; $i <= 10; $i++) { 
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


// 

// if (strpos($output['lane2'],'bytes=32')) {
// 	 $ping['lane2'] = 'Alive';
// }elseif(strpos($output['lane2'],'Destination host unreachable')){
// 	  $ping['lane2'] = 'Dead';
// }elseif(strpos($output['lane2'],'General failure')){
// 	  $ping['lane2'] = 'Dead';
// }elseif(strpos($output['lane2'],'Request timed out')){
// 	 $ping['lane2'] = 'Dead';
// }


for ($i=6,$o=56; $i <= 10; $i++,$o++) { 
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