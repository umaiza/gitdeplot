<<<<<<< HEAD
<?php // Prevent accidental XSS 
header("Content-type: text/plain"); 
// Run the script 
if ( $_POST['payload'] ) { shell_exec("./pull.sh"); }
=======
<?php // Prevent accidental XSS
 header("Content-type: text/plain"); 
 // Run the script 
 if ( $_POST['payload'] ) 
{ 
	shell_exec("./pull.sh"); 
}
>>>>>>> 61b4c52424e9486543ec2d4670f91ceb117bb3c3
