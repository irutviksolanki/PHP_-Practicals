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
			$num=$_POST['input'];
			$revnum = 0;  
			echo "Entered Number is $num \r\n";
			echo "<br>";
			while ($num > 1)  
			{  
				$rem = $num % 10;  
				$revnum = ($revnum * 10) + $rem;  
				$num = ($num / 10);   
			}  
			echo "Reverse number  is: $revnum";  
		}
	?>