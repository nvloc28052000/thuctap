
/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

<?php
$connection = mysqli_connect("127.0.0.1", "Loc Nguyen", "root", "test");

if (!$connection) {
    echo "Lỗi kết nối tới MySQL: " . mysqli_connect_error();
    exit;
}

$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : die("First_name không được để trống ");
$Ho = isset($_POST['Ho']) ? $_POST['Ho'] : die("Ho không được để trống ");
$Email = isset($_POST['Email']) ? $_POST['Email'] : die("Email không được để trống");

$sql = "INSERT INTO thanhvien(first_name, Ho, Email) VALUES('A', 'Nguyen', 'nguyenvana_t63@hus.edu.vn')";
$sql = "INSERT INTO thanhvien(first_name, Ho, Email) VALUES('B', 'Dinh', 'dinhvanb_t63@hus.edu.vn')";
$sql = "INSERT INTO thanhvien(first_name, Ho, Email) VALUES('C', 'Le', 'levanc_t63@hus.edu.vn')";
$sql = "INSERT INTO thanhvien(first_name, Ho, Email) VALUES('D', 'Nguyen', 'nguyenvand_t62@hus.edu.vn')";

$result = mysqli_query($connection, $sql);

if ($result) {
    echo "Bài viết đã được lưu thành công!";
} else {
    echo "Lỗi khi lưu bài viết: " . $mysqli->error;
}
?>