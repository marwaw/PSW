<?php 
	if(isset($_SESSION['user']))
		{
		    header("location:form.html");
		    exit();
		}
	else {
		header("location: log.html");
		exit();
	}

?> 