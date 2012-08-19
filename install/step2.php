<?php
include '../_class/cms_class.php';
include '../_class/db-conf.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>minima 1.1 preview</title>
<link rel="stylesheet" href="../style.css" type="text/css">

   </head>
   <body>

        
                    

<div class="pageContent">
    <div id="body">
      <div class="container">
      <img src="../img/logo.png">
       <h1> Hi. Let's do this.</h1>
        </div>
                <div class="container">
                  <h1>Install wizard</h1>
                  <h2>Step 2</h2>
<h3>Database structure</h3>
<p>Make it work. Click the button bellow.</p>
<form method="post" action="done.php">
<input type="hidden" name="createdb" value="true" />
 <input type="submit" name="sumbit" value="Ok. Let's do this." />

</form>
               </div>

        
        <div class="container">
        
       
</div>
      <div class="container tutorial-info">
     <?php include '../footer.php' ?>
    </div>
</div>

</body>
</html>
