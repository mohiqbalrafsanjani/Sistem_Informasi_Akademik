<?php

  session_start();
	if(session_is_registered(username) and session_is_registered(status))
{
session_unregister(username);
session_unregister(status);
header("location:login.php");
} 
?>