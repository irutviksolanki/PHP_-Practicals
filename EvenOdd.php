    <html>  
    <body>  
    <form method="post">  
        Enter a number: <input type="text" name="number">  
        <input type="submit" value="Submit">  
    </form>  
    </body>  
    </html>  
    <?php   
        if($_POST)
		{  
            $number = $_POST['number'];   
            
            if(($number % 2) == 0)
			{  
				echo "$number is Entered Number \r\n";
				echo "<br>";
                echo nl2br("$number is an Odd number");  
            }
			else
			{  
				echo "$number is Entered Number\r\n";
				echo "<br>";
                echo nl2br("$number is an Even number"); 
            }  
        }  
    ?>  