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
    <h1>/admin</h1>
    </div>
    
    <div class="container">
    <h2>Content</h2>
 <a href="add-content.php">add content</a> | <a href="manage-content.php">manage content</a><br><a href="add-page.php">add a page</a> | <a href="manage-pages.php">manage pages</a> | <a href="lpages.php">list pages</a>
<h2>Configuration</h2>
<a href="ctheme.php?id=1">change the theme</a>

<p>You are running Minima 1.1 Pre-release 2. <a href="http://antminima-omgapps.rhcloud.com/downloads">Check for updates</a></p>
    </div>
    
  <div class="container tutorial-info">
<?php
include '../footer.php'
?>
    </div>
</div>



<?php
	if($_POST['add']):
		$obj->add_content($_POST);
	elseif($_POST['update']):
		$obj->update_content($_POST);
  elseif($_POST['ctheme']):
    $obj->update_theme($_POST);
	endif;
?>



</body>
<html>
