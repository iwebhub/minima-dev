<?php
class init {

	var $host;
	var $username;
	var $password;
	var $db;

	function connect() {
		$con = mysql_connect($this->host, $this->username, $this->password) or die(mysql_error());
		mysql_select_db($this->db, $con) or die(mysql_error());
	}
	function inc_index($theme = '') {
		if($theme != ''):
			$theme = mysql_real_escape_string($theme);
			$sql = "SELECT * FROM defaulttheme";

$return = '<p><a href="index.php">home</a></p>';

		else:
			$sql = "SELECT * FROM defaulttheme";
		endif;



		$res = mysql_query($sql) or die(mysql_error());

		if(mysql_num_rows($res) !=0):
		while($row = mysql_fetch_assoc($res)) {
                        			echo '<link href="ant/themes/'  . $row['shortname'] .  '.css" rel="stylesheet" type="text/css" />';
                       
		}
		else:
			echo "This isn't quite configured. Sorry about that. </br> Error: No default theme! See our documentation for more info!";
		endif;

	
}
}
?>