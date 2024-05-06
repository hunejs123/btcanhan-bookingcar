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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include "header.php"
    ?>
    
    <div>
        <div class="trangchu">
            <img class="anh1" src="img/xe.jpg">
            <div class="content-tt">
                <h1>CHO THUÊ XE</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil inventore autem, aliquam ratione, accusamus laboriosam non ipsa sed, tenetur nemo natus neque praesentium fuga saepe aspernatur nostrum voluptatibus officia ullam.</p>
                <a href="#" class="dki" id="btnDangKyNhanh">ĐĂNG KÍ NHANH</a>
            </div>
        </div>
    </div>
    <?php
        include "dangnhap.php"
    ?>
    <?php
        include "dki.php"
    ?>
    <?php
        include "footer.php"
    ?>
    <script  src="index.js"></script>
</body>
</html>
