<html>
	<body>
		<form method="post" action="Calculator.php">
	        <input name="number1" type="text" /><br><br>
	        <select name="operation">
	        	<option value="plus">Plus</option>
	            <option value="minus">Minus</option>
	            <option value="multiply">Multiply</option>
	            <option value="divided by">Devide</option>
	        </select><br><br>
	        <input name="number2" type="text" /><br><br>
	        <input name="submit" type="submit" value="Calculate" /><br><br>
	    </form>
		</div>
	</body>
</html>
<?php

	if(isset($_POST['submit']))
	{
		if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
		{	
			$a=$_POST['number1'];
			$b=$_POST['number2'];
			echo "1st Entered Number is $a \r\n";
			echo "<br>";
			echo "2nd Entered Number is $b \r\n";
			echo "<br>";
			if($_POST['operation'] == 'plus')
			{
				$total = $_POST['number1'] + $_POST['number2'];	
			}
			if($_POST['operation'] == 'minus')
			{
				$total = $_POST['number1'] - $_POST['number2'];	
			}
			if($_POST['operation'] == 'multiply')
			{
				$total = $_POST['number1'] * $_POST['number2'];	
			}
			if($_POST['operation'] == 'divided by')
			{
				$total = $_POST['number1'] / $_POST['number2'];	
			}
			echo nl2br("{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} = {$total}");
		} 
		else 
		{
			echo 'Numeric values are required';
		}
		
	}
?>