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
<?php
//set where you want to store files
//in this example we keep file in folder upload 
//$HTTP_POST_FILES['ufile']['name']; = upload file name
//for example upload file name cartoon.gif . $path will be upload/cartoon.gif

$path= "upload/".$HTTP_POST_FILES['ufile']['name'];
if($ufile !=none)
{
if(copy($HTTP_POST_FILES['ufile']['tmp_name'], $path))
{
echo "Successful upload! :D<BR/>"; 

//$HTTP_POST_FILES['ufile']['name'] = file name
//$HTTP_POST_FILES['ufile']['size'] = file size
//$HTTP_POST_FILES['ufile']['type'] = type of file

echo "File Name :".$HTTP_POST_FILES['ufile']['name']."<BR/>"; 
echo "File Size :".$HTTP_POST_FILES['ufile']['size']."<BR/>"; 
echo "File Type :".$HTTP_POST_FILES['ufile']['type']."<BR/>"; 
echo '<a href="$path">File URL</a>';
}
else
{
echo "Oops, there was an error.";
}
}
?>
 </div>
    
  <div class="container tutorial-info">
<?php
include '../footer.php'
?>
    </div>
</div>
</body>
</html>