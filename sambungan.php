<?php
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $database = 'homestaydb';

 $sambungan = mysqli_connect($host, $user,
 $password, $database) or die('Sambungan ke 
 MySQL gagal');                  
 ?>