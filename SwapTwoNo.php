<html>  
    <body>  
    <form method="post"> 
	
    Enter a  1st Number: <input type="text" name="input1"><br><br> 
	Enter a 2nd Number: <input type="text" name="input2"><br><br>
    <input type="submit" name="submit" value="Submit">
	
    </form> 
	</body>
	</html>
	
	<?php  
		if($_POST)
		{
		$a=$_POST['input1'];;  
		$b=$_POST['input2'];
		echo "1st Entered Number is $a \r\n";
		echo "<br>";
		echo "2nd Entered Number is $b \r\n";
		echo "<br>";
		$a=$a+$b;  
		$b=$a-$b;  
		$a=$a-$b;  
		echo "Value of 1st Textbox(A): $a</br>";  
		echo "Value of 2nd Textbox(B): $b</br>";  
		}
	?>