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
include "test.php";
$sql = "SELECT * FROM xetulai ORDER BY ID DESC ";
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
    <link rel="stylesheet" href="hoadon.css">
</head>
<body>
<?php
    include "headertt.php";
    
    // Lấy id từ URL
    $productId = isset($_GET['id']) ? $_GET['id'] : null;

    while ($row = mysqli_fetch_assoc($query)) {
        // Chỉ hiển thị form nếu id của sản phẩm trùng khớp với id trên đường dẫn
        if ($row['id'] == $productId) {
?>
    <form id="form" action="" method="post">
        <div class="container0">
        <div class="container">
        
            <div class="image-section">
                <img src="img/xetulai/<?php echo $row['anh']; ?>" alt="">
            </div>
            <div class="info-section">
                <h2>Hóa Đơn Thuê Xe</h2>
                <p><strong>Mã Hóa Đơn:</strong> HD<?php echo $row['id']; ?></p>
                <p><strong>Ngày Xuất Hóa Đơn:</strong> <?php echo date("d-m-Y"); ?></p>
                <label ><strong>Thông Tin Khách Hàng:</strong></lable><BR>
                <input type="text" name="hoten" placeholder="Khách Hàng:" style="margin-top:20px"><BR>
                <input type="email" name="email"placeholder="EMAIL:"style="margin-top:20px"><BR>
                <input type="text" name="sdt"placeholder="Số Điện Thoại:"style="margin-top:20px"><BR>
                <label for="start-date" style="margin-top:20px"><strong>Lịch Trình:</strong></label>
                <input type="date" id="start-date">
                <input type="date" id="end-date">
            </div>
        </div>
        <div class="container2">
        <table>
                    <tr>
                        <th>Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số Ngày Thuê</th>
                        <th>Tổng Tiền</th>
                    </tr>
                    <tr>
                        <td ><input name="tenxe" value="<?php echo $row['tenxe']; ?>"readonly style="border:none"></td>
                        <td  ><input name="giathue" id="gia-thue" value="<?php echo $row['giathue']; ?>"readonly style="border:none"></td>
                        <td><input id="total-days" name="songaythue" readonly style="border:none"></td>
                        <td><input id="total-price" name="tongtien" readonly style="border:none"></td>
                    </tr>
                </table>
                <button type="submit" name="thuê" style="align-items: center;margin-top:20px;text-align: center;background:bluewhite;">Thuê</button>
        </div>
        </div>
    </form>
    <?php } }?>
    <script>
        document.getElementById("start-date").addEventListener("change", calculateTotal);
        document.getElementById("end-date").addEventListener("change", calculateTotal);

        function calculateTotal() {
            var startDate = new Date(document.getElementById("start-date").value);
            var endDate = new Date(document.getElementById("end-date").value);

            if (startDate && endDate) {
                var timeDiff = endDate.getTime() - startDate.getTime();
                var daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
                var pricePerDay =  document.getElementById("gia-thue").value; // Giá thuê xe ô tô mỗi ngày (ví dụ)
                var totalPrice = daysDiff * pricePerDay;

                document.getElementById("total-days").value = daysDiff;
                document.getElementById("total-price").value = totalPrice + " đồng";
            }
        }
    </script>
    <?php
        include "footer.php"
    ?>

</body>
</html>
