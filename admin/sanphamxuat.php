<link rel="stylesheet" href="css/sanpham.css">
<?php
	include ('../include/connect.php');
	
    $select = "select * from chitiethoadon ";
    $query = mysql_query($select);
    $dem = mysql_num_rows($query);
?>
<div class="quanlysp">
	<h3>QUẢN LÝ SẢN PHẨM XUẤT</h3>
	
</div>
<table>
    
    <tr class='tieude_hienthi_sp'>
        <td>Mã HD</td>
        <td>Tên sản phẩm</td>
        <td>Số lượng</td>
        <td>Giá</td>
        <td>Thành tiền</td>
    </tr>

    <?php
	


			$tong=0;					
    if($dem > 0){
        while ($bien = mysql_fetch_array($query))
        {
		$thanhtien=$bien['gia']*$bien['soluong'];
		$tong+=$thanhtien;
?>

            <tr class='noidung_hienthi_sp'>
                <td class="masp_hienthi_sp"><?php  echo $bien['mahd'] ?></td>
                <td class="stt_hienthi_sp"><?php echo $bien['tensp'] ?></td>
				<td class="sl_hienthi_sp"><?php echo $bien['soluong'] ?></td>
				<td class="sl_hienthi_sp"><?php echo number_format($bien['gia'],0,",",".") ?></td>
				<td class="sl_hienthi_sp"><?php echo number_format($thanhtien,0,",",".") ?></td>
                
            </tr>
<?php 

		}
		
	?>
		<tr>
			<td colspan=5 align="right" style="padding:10px 20px 10px 0px; font-size:20px;">Tổng: <font color="red"><?php echo number_format($tong,0,",",".") ?></font></td>
		</tr>
	<?php 
	}
    else echo "<tr><td colspan='6'>Không có sản phẩm trong CSDL</td></tr>";
	
?>
</table>
<div id="inhoadon">
	<p style="float:right; margin-top:10px; padding-right:30px;"><a href="inphieuxuat.php" target="_blank">In hoá đơn</a></p>
</div>


