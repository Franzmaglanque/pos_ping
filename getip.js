
$('document').ready(function(){
	setInterval(function(){
		$.get('lanes/lanes.php',function(data,status){
			var test = JSON.parse(data);
			for (var i = 0; i <= 31; i++) {
				if (test['lane' + i] == 'Alive') {
						// console.log('Connection established');
						// document.getElementById("lane" + i).style.borderColor = "green";
						document.getElementById("lane" + i).style.backgroundColor = "green";

						// $('#lane'+i).addClass("kulay");
				}else if(test['lane' + i] == 'Dead'){
					// 	console.log('Connection Dropped');

						document.getElementById("lane" + i).style.backgroundColor = "red";
				}
			}
			});
		
	},1000);
});