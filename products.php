<!DOCTYPE html>


<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tất cả sản phẩm</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="login.html"><i class="fa fa-user"></i> Tài khoản</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Danh sách mong ước</a></li>
                            <li><a href="dohang.php"><i class="fa fa-user"></i> Dỏ hàng</a></li>
                            <li><a href="login.html"><i class="fa fa-user"></i> Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key"></span><span class="value">Tiếng Việt </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">                    
                                    <li><a href="#">Tiếng Việt</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- End header -->
    
    <!-- Thanh nhản hiệu -->
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="img/logo.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="dohang.php"> 
                            Dỏ hàng
                            <i class="fa fa-shopping-cart"> </i> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- End thanh nhản hiệu -->
    
    <!-- Menu -->
    <div class="mainmenu-area" style="background-color:lightblue">
        <div class="container">
            <div class="row">
                <div class=" navbar-collapse collapse">
                    <ul class=" nav navbar-nav" id>
                        <li><a href="home.php">Trang chủ</a></li>
                        <li class="active"><a href="products.php">Sản phầm</a></li>
                        <li><a href="#">Phụ kiện</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="https://cellphones.com.vn/sforum/" target="_blank">Tin công nghệ</a></li>
                        <li><a href="#">Khác</a></li>
                        <li >
                            <nav class=" item navbar navbar-light bg-light">
                                <form class="form-inline">
                                    <input class="fa fa-search form-control mr-sm-2" type="search" placeholder="Search">
                                <button  type="submit">Search</button>
                                </form>
                            </nav>
                        </li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> 
    <!-- End menu -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--main content-->
    <div class="single-product-area" style="background-color: snow;">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                
            <link rel="stylesheet" href="css/sanpham1.css">
<script type="text/javascript" src="js/checkbox.js"></script>
<?php
	include ('include/connect.php');
	
    $select = "select * from sanpham inner join danhmuc on sanpham.madm=danhmuc.madm";
    $query = mysql_query($select);
    $dem = mysql_num_rows($query);
?>

        					

   
		<?php 
	   $sql="select * from danhmuc where dequi=1 order by madm";
	   $result=mysql_query($sql);
	
	 
	    while($row=mysql_fetch_array($result))
		{ 
		?> 	<div class="sanpham"> <?php 
			$sql1="select * from sanpham where madm={$row['madm']} order by idsp  LIMIT 0,6";
			$kq=mysql_query($sql1);
			$dem = mysql_num_rows($kq);
			if($dem>0)
			{
			?>
				
		<h2><?php echo $row["tendm"];?></h2> 

		<?php } ?>
    	<div class="sanphamcon">
			<?php while($rows=mysql_fetch_array($kq))
			{ ?>
			<div class="dienthoai">
									<?php 
										if($rows['khuyenmai1']>0)
										{
									?>
									<div class="moi"><h3>-<?php echo $rows['khuyenmai1']?>%</h3></div>
									<?php } ?>
									<a href="#"><img  src="img/uploads/<?php echo $rows['hinhanh'];?>"></a><br>					
									<p><a href="#" ><?php echo $rows['tensp'];?></a></p><br>
									<h4><?php echo number_format(($rows['gia']*((100-$rows['khuyenmai1'])/100)),0,",",".");?></h4>
									<div class="button">
										<ul>
											<li>
												<h1><a href="index.php?content=chitietsp&idsp=<?php echo $rows['idsp'] ?>" class="chitiet"><button>Chi tiết</button></a></h1>
											</li>
											<li>
												<h5><a href="index.php?content=cart&action=add&idsp=<?php echo $rows['idsp'] ?>"><button>Cho vào giỏ</button></a></h5>
											</li>
										</ul>
									</div><!-- End .button-->
			</div><!-- End .dienthoai-->
			
			<?php } ?>
			
		</div>
		</div><!-- end san pham-->
<?php }?>
	</div>

            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End main content-->

    <!--footer-->
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><span>REnhatVN</span></h2>
                        
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Địa chỉ </h2>
                        <ul>
                            <li><a href="#">351 Lạc Long Quân P5 Q11 HCM</a></li>
                            <li><a href="#">222 Hai Bà Trưng P6 Q3 HCM</a></li>
                            <li><a href="#">324 Nguyễn Trãi P3 Q9 HCM</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Điện thoại & Email</h2>
                        <ul>
                            <li><a href="#">038811232</a></li>
                            <li><a href="#">097899337</a></li>
                            <li><a href="#">084455533</a></li>
                            <li><a href="#">renhuchocellphone@gmail.com</a></li>
                        </ul>                        
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 float-right">
                    <p>Đăng ký bằng Email để nhận thông tin về Điện thoại di động mới nhât và thông tin về khuyến mãi</p>
                    <form action="#">
                        <input type="email" placeholder="Email">
                        <input type="submit" value="ĐĂNG KÝ">
                    </form>
                </div>
            </div>
        </div>
    </div> 
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">    
                <div class="col-md-3">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- end footer -->

    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <script src="js/main.js"></script>
    
    <!-- Slide -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
    <script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>