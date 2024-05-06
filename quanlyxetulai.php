<?php
    require_once 'connect.php';
?>
<?php
include "headerqli.php";
?>
    <!-- PHẦN SIDEBAR END -->
    <!-- PHẦN NỘI DUNG QUẢN LÝ -->
<?php
include "html.php";
?>
<div class="content" style="margin-top:50px">
    <div class="card">
        <div class="card-header">
            <h2 style="text-align: center;">Thêm Xe</h2>
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
    $sql = "SELECT * FROM xetulai";
    $query = mysqli_query($conn, $sql);

    if(isset($_POST['sbm'])){

        $image = $_FILES['anh']['name'];
        $image_tmp = $_FILES['anh']['tmp_name'];

        $tenxe = $_POST['tenxe'];
        $giathue = $_POST['giathue'];
        $tinhtrang = $_POST['tinhtrang'];

        $sql = "INSERT INTO xetulai (anh, tenxe, giathue, tinhtrang)
        VALUES ('$image', '$tenxe', '$giathue', '$tinhtrang')";
        $query = mysqli_query($conn, $sql);
        move_uploaded_file($image_tmp, 'C:/xampp/htdocs/PROJECT-BOOKING/img/xetulai/'.$image);

    }
?>

<?php
    $sql = "SELECT * FROM xetulai ORDER BY ID DESC";
    $query = mysqli_query($conn, $sql);
?>
<div class="content">
    <div class="card">
        <div class="card-header">
            <h2 style="text-align: center;">Danh sách ưu đãi</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>TÊN XE</th>
                        <th>GIA THUÊ</th>
                        <th>TÌNH TRẠNG</th>
                        <th>ẢNH</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    while ($row = mysqli_fetch_assoc($query)){ ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo substr($row['tenxe'],0,50).'...'; ?></td>
                            <td><?php echo substr($row['giathue'],0,50).'...'; ?></td>
                            <td>
                                <select name="tinhtrang">
                                    <option value="da thue" <?php echo ($row['tinhtrang'] == 'da thue') ? 'selected' : ''; ?>>Đã thuê</option>
                                    <option value="chua thue" <?php echo ($row['tinhtrang'] == 'chua thue') ? 'selected' : ''; ?>>Chưa thuê</option>
                                </select>
                            </td>

                            <td><?php echo substr($row['anh'],0,50).'...'; ?></td>
                            <td> <a href="edit2.php?page_layout=edit&id=<?php echo $row['id']; ?>">Sửa</a> </td>
                            <td> <a onclick="return Del()" href="delete2.php?page_layout=delete&id=<?php echo $row['id']; ?>">Xóa</td>
                        </tr>
                    <?php }
                    ?> 
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
<script>
    function Del(){
        return confirm("Bạn có chắc muốn xóa không?");
    }
</script>