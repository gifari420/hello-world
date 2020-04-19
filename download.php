<?php
// download.php
   include("function.php");
   $file = $_GET["file"].".pdf";
   $filepath = "c:\\xampp\\htdocs\\pexcon\\document\\$file";
   download_file($filepath);