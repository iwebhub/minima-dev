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
<table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form action="uploader.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td><strong>Single File Upload </strong></td>
</tr>
<tr>
<td>Select file 
<input name="ufile" type="file" id="ufile" size="50" /></td>
</tr>
<tr>
<td align="center"><input type="submit" name="Submit" value="Upload" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
  </div>
    
  <div class="container tutorial-info">
<?php
include '../footer.php'
?>
    </div>
</div>
</body>
</html>