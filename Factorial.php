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
			$factorial = 1;  
			for ($x=$input; $x>=1; $x--)   
			{  
				$factorial = $factorial * $x;  
			} 
			echo "Entered Number is $input \r\n";
			echo "<br>";
			echo nl2br ("Factorial of $input is $factorial");
		}
    ?>  
	