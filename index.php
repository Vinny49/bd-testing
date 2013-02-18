<?php
	// Grab data from the file.
	$handle = @fopen('./data/twitter_user_id_mapping-20091111.tsv','r');
	
	if ($handle) {

		for ($i=1; $i <= 50; $i++) {
		//while (!feof($handle)) {
			$lines[] = fgets($handle/*, 4096*/);




			$s_line = preg_replace('/\s+/', ' ',trim($lines[0]));
			$a = explode(' ',$s_line);
			
			#print_r($a);
			
			// Reset
			unset($a);
//			unset($lines);
			unset($s_line);
		}
			print_r($lines);

		fclose($handle);	

	} //end if
	
$mysqli = new mysqli('localhost', 'root', 'password', 'bigdata');

$result = $mysqli->query('select * from twitter_user_id_mapping;', MYSQLI_USE_RESULT);

var_dump($result);

exit();


// Connect details
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
} //end

/* Create table doesn't return a resultset */
if ($mysqli->query("SELECT 1") === TRUE) {
    printf("Table myCity successfully created.\n");
}
