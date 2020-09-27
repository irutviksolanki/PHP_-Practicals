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
        for ($i = 2; $i <= $input-1; $i++)
		{  
          if ($input % $i == 0) 
		  {  
			$value= True;  
          }  
		}  
		if (isset($value) && $value) 
		{  
			echo "$input is Entered Number \r\n";
			echo "<br>";
			echo nl2br("The Number ". $input . " is not prime");
		} 
		else 
		{  
			echo "$input is Entered Number \r\n";
			echo "<br>";
			echo nl2br("The Number ". $input . " is prime");  
		}   
	}  
    ?>  