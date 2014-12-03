<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "
    http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <body>

        Name: Brandon Roberts <br />
        Class: PHP <br />
        Abstract: Homework 5 - Step 2 - Dynamic Text <br />
        <br />
        <br />
        <?php 
            
        	$strMessage = "This is dynamic text written from the server and the time is:";
            $strDateTime = "";
			$strTimeZoneSet = date_default_timezone_set('America/New_york');
			$intIndex = 0;
            
            // Set the current date and time to the variable
            $strDateTime = date('Y/m/d h:i:s a', time());
        	
            // Print out the given message
        	echo "$strMessage ";

        	// Print out the date and time
        	echo $strDateTime;
        	echo "<br>";
        	echo "<br>";

			for ($intIndex = 1; $intIndex < 1001; $intIndex += 1)
			{
				echo "I Love Star Trek";
				echo "<br>";
			}            
			     
        ?>

        <br />

    </body>

</html>