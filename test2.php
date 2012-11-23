<html>
<head>
	<title>Test2</title>
<style type="text/css">
body{ font-family:verdana; font-size:14px; margin:30 }
</style>
<script type="text/javascript">
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
function numCheck(){
	var num1 = Number(document.getElementById('numrange1').value);
	var num2 = Number(document.getElementById('numrange2').value); alert(num1+'-'+num2);
	if(num1==0 || num2==0){
		alert('Please enter numbers greater than 0');
	}else if(num1>1000 || num2>1000){
		alert('You will crash the browser. Please enter numbers less than 1000.');
	}else if(num1>=num2){
		alert('Number in right should be greater than the number in left');
		return false;
	}else{
		return true;
	}	
}
function formSubmit(){
	if(numCheck())
		document.form1.submit();
}
</script>
</head>
<body>
	<form method="post" name="form1">
		<label>Enter Number Range</label><br/>
		<input type="text" name="numrange1" id="numrange1" onkeypress="return isNumberKey(event)" /> - <input type="text" name="numrange2" id="numrange2" onkeypress="return isNumberKey(event)" /><br/>
		<input type="button" onclick="formSubmit()" value="Submit" />
	</form>
</body>
</html>
<?php 

	/********************* Assumptions *****************
	 * 
	 * - User enters positive integers only
	 *
	 ***************************************************/

	error_reporting(1);
	//$dataRange = "10-17";
	
	$dataRange1 = trim($_POST['numrange1']);
	$dataRange2 = trim($_POST['numrange2']);
	
	if($dataRange1!="" && $dataRange2!=""){
	
		echo '<b>You have Entered: </b>'.$dataRange1.' - ',$dataRange2.'<br>';
		
		echo '<b>Output:</b><br>';
		$fizzBuzzCnt=0;
		
		for($i=$dataRange1; $i<=$dataRange2; $i++){
		
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