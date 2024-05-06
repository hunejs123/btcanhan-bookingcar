<?php
// Kết nối cơ sở dữ liệu 
require 'connect.php';

// Kiểm tra nút submit có được ấn chưa
if (isset($_POST['thuê'])) {
    
    // Lấy dữ liệu từ biểu mẫu và kiểm tra tính hợp lệ
    $hoten = $_POST['hoten'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $tenxe = $_POST['tenxe'];
    $giathue = $_POST['giathue'];
    $songaythue = $_POST['songaythue'];
    $tongtien = $_POST['tongtien'];

    $sql = "SELECT email FROM dangki WHERE email = '$email'";
    $query = mysqli_query($conn, $sql);

    // Kiểm tra dữ liệu nhập đầy đủ
    if (!empty($email)&& !empty($hoten) && !empty($sdt) ) {
        
        // Chèn dữ liệu vào cơ sở dữ liệu
        $sql = "INSERT INTO `hoadon` (`tenxe`, `giathue`, `songaythue`, `tongtien`, `email`, `hoten`, `sdt`) 
                VALUES ('$tenxe', '$giathue', '$songaythue', '$tongtien', '$email', '$hoten', '$sdt')";

        // Thực thi câu lệnh SQL
        if($conn->query($sql) === TRUE){
            require("PHPMailer-master/PHPMailer-master/src/PHPMailer.php");
            require("PHPMailer-master/PHPMailer-master/src/SMTP.php");
            require("PHPMailer-master/PHPMailer-master/src/Exception.php");

                $mail = new PHPMailer\PHPMailer\PHPMailer();
                $mail->IsSMTP(); 
                $mail->SMTPDebug = 1;
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl'; 
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 465; 
                $mail->IsHTML(true);
                $mail->Username = "phamhung7603@gmail.com";
                $mail->Password = "uoxv gyno ltpv tonx";
                $mail->SetFrom("phamhung7603@gmail.com");
                $mail->Subject = "Test";
                $mail->Body = "Chào $hoten,\n\nBạn đã thuê xe $tenxe thành công với giá $giathue/ngày .Tổng thời gian thuê là $songaythue ngày với tổng tiền $tongtien. \n\nXin cảm ơn!";
                $mail->AddAddress($email);
                if(!$mail->Send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                    header("Location: trangchu.php");
                    exit;
                }    
        } else {
            echo "<script>alert('Đã xảy ra lỗi. Vui lòng thử lại sau');</script>";
        }
    } else {
        echo "<script>alert('Bạn cần nhập đầy đủ thông tin trước khi thuê xe');</script>";
    }
}?>