<?php 
   $server = "localhost";
   $user = "root";
   $pass = "";
   $database = "thuexe";

   $conn = new mysqLi($server,$user,$pass,$database);
   if($conn){
    mysqLi_query($conn,"SET NAMES 'utf8'");
    echo""."<br>";
   }else{
    echo "kết nối thất bại";
   }
?>