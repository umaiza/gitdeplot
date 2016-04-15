<?php // Prevent accidental XSS
 header("Content-type: text/plain"); 
 // Run the script 
 if ( $_POST['payload'] ) 
{ 
	shell_exec("./pull.sh"); 
}