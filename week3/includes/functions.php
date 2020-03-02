
<?php

//connection function that you call in your page code

function dbconnect() {

	global $connection;
	$connection = mysql_connect("localhost", "mporter", "te2888");
	mysql_select_db("mporterdb",$connection);
  }


function dbconn() {
	global $connection;
	$connection = mysql_connect("localhost", "mporter", "te2888")or die(mysql_error());;
	mysql_select_db("mporterdb",$connection)or die(mysql_error());
}

// disconnect from database

function dbDisconnect()
{
	global $connection;
	mysql_close($connection);

}

 // SQL injection protection function - useful for logins

function mysql_entities_fix_string($string) {
	return htmlentities(mysql_fix_string($string));
}

 //html hack protection function - useful for text entry boxes

function mysql_fix_string($string) {
	if (get_magic_quotes_gpc()) $string = stripslashes($string);
	return mysql_real_escape_string($string);
}

define ('AA_UPLOADPATH' , 'uploads/');

?>
