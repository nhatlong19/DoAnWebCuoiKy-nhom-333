<?php 
session_start(); 
unset($_SESSION['phanquyen']);
unset($_SESSION['username']);
unset($_SESSION['idnd']);

echo "
							<script language='javascript'>
								alert('Thoát quản trị thành công');
								window.open('../home.php','_self', 1);
							</script>
						";
?>