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
			$sum=0; $rem=0;  
			echo "Entered Number is $num \r\n";
			echo "<br>";
			for ($i =0; $i<=strlen($num);$i++)  
			{  
				$rem=$num%10;  
				$sum = $sum + $rem;  
				$num=$num/10;  
			}  
			
			echo nl2br("Sum of digits is $sum");  
 
		}
    ?>  
	