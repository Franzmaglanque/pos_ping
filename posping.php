<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript" src="jquery-3.4.1.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
</head>
<body >
<h2 align="center">POS Counter</h2>
<table class="table table-striped table-hover table-responsive">
<?php
	$cellcount=1;

			for ($rows=0; $rows < 6; $rows++) { 
				echo "<tr>";
				for ($cells=0; $cells < 6; $cells++) { 
					if ($cellcount == 32) {
						break;
					}
					echo "<td><button  id='lane$cellcount' value=''>Line $cellcount</button></td>";	
					$cellcount++;
				}
				echo "</tr>";
			}
?>
</table>
<script type="text/javascript">
	$('document').ready(function(){
		setInterval(function(){
			$.get('lanes/lanes.php',function(data,status){
				var result = JSON.parse(data);
				for (var i = 1; i <= 5; i++) {
					if (result['lane'+i] == 'Alive') {
						document.getElementById("lane" + i).style.backgroundColor = "green";
					}else if(result['lane'+i] == 'Dead'){
						document.getElementById("lane" + i).style.backgroundColor = "red";
					}
				}
				});
		},3000);

		setInterval(function(){
			$.get('lanes/lanes2.php',function(data,status){
				var result = JSON.parse(data);
				for (var i = 6; i <= 10; i++) {
					if (result['lane'+i] == 'Alive') {
						document.getElementById("lane" + i).style.backgroundColor = "green";
					}else if(result['lane'+i] == 'Dead'){
						document.getElementById("lane" + i).style.backgroundColor = "red";
					}
				}
				});
		},3000);


		setInterval(function(){
			$.get('lanes/lanes3.php',function(data,status){
				var result = JSON.parse(data);
				for (var i = 11; i <= 15; i++) {
					if (result['lane'+i] == 'Alive') {
						document.getElementById("lane" + i).style.backgroundColor = "green";
					}else if(result['lane'+i] == 'Dead'){
						document.getElementById("lane" + i).style.backgroundColor = "red";
					}
				}
				});
		},3000);


		setInterval(function(){
			$.get('lanes/lanes4.php',function(data,status){
				var result = JSON.parse(data);
				for (var i = 16; i <= 20; i++) {
					if (result['lane'+i] == 'Alive') {
						document.getElementById("lane" + i).style.backgroundColor = "green";
					}else if(result['lane'+i] == 'Dead'){
						document.getElementById("lane" + i).style.backgroundColor = "red";
					}
				}
				});
		},3000);


		setInterval(function(){
			$.get('lanes/lanes5.php',function(data,status){
				var result = JSON.parse(data);
				for (var i = 21; i <= 25; i++) {
					if (result['lane'+i] == 'Alive') {
						document.getElementById("lane" + i).style.backgroundColor = "green";
					}else if(result['lane'+i] == 'Dead'){
						document.getElementById("lane" + i).style.backgroundColor = "red";
					}
				}
				});
		},3000);


		setInterval(function(){
			$.get('lanes/lanes6.php',function(data,status){
				var result = JSON.parse(data);
				for (var i = 26; i <= 31; i++) {
					if (result['lane'+i] == 'Alive') {
						document.getElementById("lane" + i).style.backgroundColor = "green";
					}else if(result['lane'+i] == 'Dead'){
						document.getElementById("lane" + i).style.backgroundColor = "red";
					}
				}
				});
		},3000);
	});
</script>
</body>
</html>