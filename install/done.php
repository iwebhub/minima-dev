<?php

include '../_class/cms_class.php';

include '../_class/db-conf.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UFT-8" />
<title>/admin</title>
<link rel="stylesheet" href="../style.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../demo.css" media="screen" />

</head>
<body>

<div id="main">
  <div class="container">
    <h1>Expecting more?</h1>
    Sorry to dissapoint.</br>
    <a href="../index.php">Go to your new site</a></br>
    (Comments aren't set up - edit _class/comm.php with your Disqus shortname to make it work)</br>
    <h1>If this step fails, try imporing the mysql-data.sql manually to your database via phpmyAdmin or a similar tool. (and it may fail)</h1>
    </div>
    
    <div class="container">
    
    </div>
    
  <div class="container tutorial-info">
<?php
include '../footer.php'
?>
    </div>
</div>



<?php
			$obj->create_db($_POST);
	?>



</body>
<html>
