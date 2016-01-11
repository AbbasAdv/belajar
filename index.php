<?php include 'header.php';?>

<?php 

//tanda yang ini ngerti ya , jika $_GET['r'] maka $_GET['r'] selain itu 'home'
// bisa bikin kayak gini biar ada error
$action = $_GET['r'];
$r = isset($_GET['r'])?$_GET['r']:'home';

include 'menu.php';

?>

<div class="container">
<?php 
// gw mau link kan semua ke index ini, semua page harus masuk ke index.php dulu untuk proses
// lihat di link header menu
include $r.'.php';
?>
</div>
<?php include 'footer.php';?>



