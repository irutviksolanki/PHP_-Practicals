<html>  
    <body>  
    <form method="post"> 
	
    Enter a Number: <input type="text" name="input"><br><br>  
    <input type="submit" name="submit" value="Submit">
	
    </form> 
	</body>
	</html>
	
	<?php  
		if($_POST)
		{
			$input=$_POST['input']; 
			echo "Entered Number is $input \r\n";
			echo "<br>";
			for($i=1; $i<=10; $i++) 
			{ 
				echo nl2br($i*$input); 
				echo '<br>'; 
			} 
		}
	?>