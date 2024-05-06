<?php
    require_once 'connect.php';
?>
<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM xetulai where ID = $id";
    $query = mysqli_query($conn, $sql);
    header('location: quanlyxetulai.php');
?>
