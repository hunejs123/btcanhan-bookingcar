<?php 
    require_once 'connect.php';
?>
<div class="container" id="loginContainer">
    <div class="form-container sign-in-container" id="form-dang-nhap">
        <form id="loginForm"method="POST" enctype="multipart/form-data">
            <h1 style="padding-bottom: 8px;">Đăng nhập</h1>
            <input type="email" id="" name="email" placeholder="Email" required>
            <input type="password" name="pass" placeholder="Password" style="margin-bottom: 15px;" required>
            <button type="submit" name="dangnhap">Đăng nhập</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>BOOKING CAR!</h1>
                <p>Chào mừng bạn đến với, BOOKING CAR</p>
                <a href="#" id="btnDangKyChua">Bạn có tài khoản chưa?</a>
            </div>
        </div>
    </div>
</div>

<?php 
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $passdn = $_POST['pass'];
        
        // Truy vấn SQL để lấy mật khẩu từ cơ sở dữ liệu
        $sql = "SELECT password FROM dangki WHERE email = '$email'";
        $query = mysqli_query($conn, $sql);
        $sql2 = "SELECT password FROM dangnhapadmin WHERE email = '$email'";
        $query2 = mysqli_query($conn, $sql2);


        // Kiểm tra xem email có tồn tại trong cơ sở dữ liệu hay không
        if (mysqli_num_rows($query) > 0) {
            // Lấy mật khẩu từ kết quả truy vấn
            $row = mysqli_fetch_assoc($query);
            $passdk = $row["password"];
            
            // So sánh mật khẩu người dùng nhập vào với mật khẩu từ cơ sở dữ liệu
            if($passdn == $passdk) {
                // Mật khẩu đúng, chuyển hướng đến trang chủ
                header("Location: http://localhost/project-booking/trangchu.php");
                exit();
            } else {
                // Mật khẩu không đúng
                echo "<script>alert('Mật khẩu không đúng!')</script>";
                exit();
            }
        
        
        }elseif(mysqli_num_rows($query2) > 0){
            $row2 = mysqli_fetch_assoc($query2);
            $passdna = $row2["password"];
            if($passdn == $passdna){
                header("Location: quanlyxe.php");
                exit();
            } else {
                // Mật khẩu không đúng
                echo "<script>alert('Mật khẩu không đúng!')</script>";
            }
        } else {
            // Email không tồn tại trong cơ sở dữ liệu
            echo "<script>alert('Tài khoản không tồn tại!')</script>";
        }
    }
?>
