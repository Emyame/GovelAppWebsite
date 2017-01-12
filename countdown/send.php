<?php
  if($_POST['formSubmit'] == "Submit") 
  {
	$errorMessage = "";
	
	/*if(empty($_POST['firstname']))
	{
		$errorMessage .= "<li>Enter your name please!</li>";
	}*/
	if(empty($_POST['email']))
	{
		$errorMessage .= "<li>Enter your email please!</li>";
	}
	
    $varName = $_POST['firstname'];
	$varEmail = $_POST['email'];
  
  	if(!empty($errorMessage))
  	{
	  	echo("<p>There was an error with your form:</p>\n");
	 	echo("<ul>" . $errorMessage . "</ul>\n");
  	}
	else
	{
		$fs = fopen("emailist.csv", "a");
		fwrite($fs,$varName . ", " , $varEmail . "\n");
		fclose($fs);
		
		header("Location: index.html");
		exit;
	}
  }  
  
?>