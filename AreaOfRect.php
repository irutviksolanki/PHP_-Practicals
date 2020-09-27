<html>  
    <body>  
    <form method="post"> 
	
    Enter a Width: <input type="text" name="width"><br><br> 
	Enter a Length: <input type="text" name="length"><br><br>
    <input type="submit" name="submit" value="Submit">
	
    </form> 
	</body>
	</html>
	
	<?php  
		if($_POST)
		{  
			$w = $_POST['width'];   
			$l = $_POST['length'];  
			echo "Entered Width is $w \r\n";
			echo "<br>";
			echo "Entered length is $l \r\n";
			echo "<br>";
			$area = $w*$l;   
			echo nl2br("The area of a rectangle is $area");     
		}
	?>