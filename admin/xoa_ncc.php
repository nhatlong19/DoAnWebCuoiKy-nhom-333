<?php
include '../include/connect.php';
include 'function/function.php';
$delete = "delete from nhacungcap where idncc='{$_GET['idncc']}'";

$del = mysql_query($delete);
if ($del)
	//echo "thanh cong";
	//header("location: index.php?admin=hienthind");
	redirect ("nv_kho.php?nv_kho=hienthincc", "Xóa nhà cung cấp thành công. ", 2);
	else
	echo "Xóa người dùng thất bại";
?>