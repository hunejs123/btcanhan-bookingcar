<?php
    require_once 'connect.php';
?>
<?php
include "headerqli.php";
?>
<?php
include "html.php";
?>
<?php
    $id = $_GET['id'];

    $sql_mg = "SELECT * FROM xecotaixe";
    $query_mg = mysqli_query($conn, $sql_mg);
    $sql_up = "SELECT * FROM xecotaixe where ID = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        if($_FILES['anh']['name']=='')
        {
            $image = $row_up['anh'];
           
        }
        else{
            $image = $_FILES['anh']['name'];
            $image_tmp = $_FILES['anh']['tmp_name'];
            move_uploaded_file($image_tmp, 'C:/xampp/htdocs/PROJECT-BOOKING/img/xecotaixe/'.$image);
        }

        
        $tenxe = $_POST['tenxe'];
        $giathue = $_POST['giathue'];
        $tinhtrang = $_POST['tinhtrang'];

    $sql = "UPDATE xecotaixe SET tenxe = '$tenxe', giathue = '$giathue', tinhtrang = '$tinhtrang', anh = '$image' WHERE id = $id ";
    $query = mysqli_query($conn, $sql);
    header('location: quanlyxecotaixe.php');
    }
?>

<div class="content" style="margin-top:50px">
    <div class="card">
        <div class="card-header">
            <h2 style="text-align: center;">Sửa</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data" >
                <div class="mb-3">
                    <label for="tenxe" class="form-label">TÊN XE</label>
                    <input type="text" name="tenxe" class="form-control" id="tenxe" required >
                </div>

                <div class="mb-3">
                    <label for="giathue" class="form-label">GÍA THUÊ</label>
                    <input type="text" name="giathue" id="giathue" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="tinhtrang" class="form-label">TÌNH TRẠNG</label>
                    <select name="tinhtrang" id="tinhtrang" class="form-control" required>
                        <option value="chua thue">Chưa thuê</option>
                        <option value="da thue">Đã thuê</option>
                    </select>

                </div>

                <div class="col" align="center">
                    <label for="anh">Ảnh tiêu đề:</label>
                    <input type="file" name="anh" id="anh" class="form-control" required>
                </div>
            </div>

                <button style="margin-top:20px;" name="sbm" class=" btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
<script>
    function Edi()
    {
        return confirm("Xác nhận lưu thay đổi?");
    }

</script>