<?php
    require_once 'connect.php';
?>
<div class="container" id="dkContainer">
    <div class="form-container sign-in-container2" id="form-dang-ky">
        <form action="" method="POST" enctype="multipart/form-data">
            <p>Chào mừng bạn đến với, BOOKING CAR</p>
            <h1 style="padding-bottom: 8px;">Đăng Kí</h1>
            <input type="email" id="email" placeholder="Email" name="email" required>
            <input type="password" name="pass" id="pass" placeholder="Password" style="margin-bottom: 15px;" required>
            <input type="password" name="passw" id="passw" placeholder="Again Password" style="margin-bottom: 15px;" required>
            <button type="submit" name="dangki">Đăng Kí</button>
        </form>
    </div>
</div>
<?php
    if(isset($_POST['dangki'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $passw = $_POST['passw'];

        // Kiểm tra xem email đã được đăng ký chưa
        $check_query = "SELECT * FROM dangki WHERE email = '$email'";
        $result = mysqli_query($conn, $check_query);
        if(mysqli_num_rows($result) > 0) {
            echo "<script>alert('Email đã được đăng ký!')</script>"; 
        } else {
            // Kiểm tra mật khẩu nhập lại
            if ($_POST['pass'] === $_POST['passw']) {
                $sql = "INSERT INTO dangki (email, password, againpassword)
                VALUES ('$email', '$pass', '$passw')";
                $query = mysqli_query($conn, $sql);
                if ($query) {
                    echo "<script>alert('Đăng kí thành công!')</script>";
                } else {
                    echo "<script>alert('Đăng kí thất bại!')</script>";
                } 
            } else {
                echo "<script>alert('Mật khẩu nhập lại không khớp!')</script>";
            }
        }
    }
?>
