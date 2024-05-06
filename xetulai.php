<?php
$conn = mysqli_connect('localhost', 'root', '', 'thuexe');
if ($conn) {
    mysqli_query($conn, "Set NAMES 'UTF8'");
    echo "Ket noi thanh cong";
} else {
    echo "Ket noi that bai";
}
?>
<?php
$sql = "SELECT * FROM xetulai  WHERE tinhtrang = 'chua thue' ORDER BY ID DESC ";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Booking xe</title>
    <link rel="shortcut icon" type="image/png" href="images/gioithieu/logo.png" />
    <link rel="stylesheet" href="trangchu.css">
</head>
<body>
    <?php
        include "headertt.php"
    ?>
    
    <div>
        <div class="wrapper">
            <div class="headline">
                <p>DANH SÁCH XE TỰ LÁI</p>
            </div>
            <ul class="product">
            <?php
                while ($row = mysqli_fetch_assoc($query)) { ?>
                <li>
                        <div class="product-item">
                            <div class="product-top">
                                <a href="hoadon.php?id=<?php echo $row['id']; ?>"class="product-thumb">
                                    <img src="img/xetulai/<?php echo $row['anh']; ?>" alt="">
                                </a>
                                <a href="hoadon.php?id=<?php echo $row['id']; ?>" class="buy-now">Thuê ngay</a>
                                <div class="product-info">
                                    <p>Tên: <?php echo $row['tenxe']; ?></p>
                                    <p>Gía: <?php echo $row['giathue']; ?></p>
                                </div>
                            </div>
                        </div>
                </li>
                <?php } ?>
                
            </ul>
        </div>
    </div>
    <?php
        include "footer.php"
    ?>

</body>
</html>
