<?php
$obj = new init();

// Postavlja vezu s databazom - varijable veze
$obj->host = 'localhost';
$obj->username = 'root';
$obj->password = '';
$obj->db = 'minimadev';

// Spajanje na databazu
$obj->connect();
?>
