<?php
include 'index.html';
?>

<?php
//500 hatası yerine hatanın ismini vermesi için 
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db.php'; //db.php buraya bağlanıyor.
//Formdan veri gelirse veritabanına eklemek için 
if(isset($_POST['gorev']) && !empty($_POST['gorev'])) {
        $yeni_gorev = $_POST['gorev'];
        $stmt = $baglan->prepare("INSERT INTO gorevler (gorev) VALUES(?)");
        $stmt->bind_param("s", $yeni_gorev);
        $stmt->execute();
        header("Location: /");
        exit;
}
if(isset($_GET['sil'])) {
        $silinecek_id = (int) $_GET['sil'];
        $stmt = $baglan-> prepare("DELETE FROM gorevler WHERE id = ?");
        $stmt -> bind_param("i",$silinecek_id);
        $stmt->execute();
        $stmt->close();
?>
