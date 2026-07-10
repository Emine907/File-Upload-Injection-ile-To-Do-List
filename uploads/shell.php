<?php
if(isset($_GET['FILE'])){
  echo"<pre>" . htmlspecialchars(file_get_contents($_GET['FILE'])) . "</pre>";
} else{
  echo "Lütfen 'file' parametresi gönderin";
?>

