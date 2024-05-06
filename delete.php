<?php
    require_once 'connect.php';
?>
<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM xegiamgia where ID = $id";
    $query = mysqli_query($conn, $sql);
    header('location: quanlyxe.php');
?>
