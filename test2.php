<?php 

	error_reporting(1);
	//$dataRange = "10-17";
	
	$dataRange = trim($_POST['numrange']);
	if($dataRange!=""){
		echo $dataRange.'<br>';
		
		
		$data = explode("-", $dataRange);
		
		$fizzBuzzCnt=0;
		
		for($i=$data[0]; $i<=$data[1]; $i++){
		
			if($i%3==0){
				echo 'Fizz';
				$fizzBuzzCnt++;
			}else if($i%5==0){
				echo 'Buzz';
				$fizzBuzzCnt++;
			}else{
				if($fizzBuzzCnt==2)
					echo 'Bazz';
				else	
					echo $i;
				$fizzBuzzCnt=0;	
			}	
				echo ' ';
			
		}
	}

?>
<html>
<head>
	<title>Test2</title>
</head>
<body>
	<form method="post">
		<label>Enter Number Range</label><br/>
		<input type="text" name="numrange" /><br/>
		<input type="submit" value="Submit" />
	</form>
</body>
</html>