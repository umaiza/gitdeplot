<?php // Prevent accidental XSS
 header("Content-type: text/plain"); 
 // Run the script 
 if ( $_POST['payload'] ) 
{ 
	`git pull`
}