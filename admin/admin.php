<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" src="ckeditor/ckeditor.js"></script>
<title>Admin </title>
<link rel="stylesheet" type="text/css" href="../css/kss.css">


		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        
        <!-- Font -->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/owl.carousel.css">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../css/responsive.css">


</head>
<?php 
	include("../include/connect.php");
?>
<body>

    <!--Header-->
    <div class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="user-menu">
                                <ul>
                                    <li><a href="../login.php"><i class="fa fa-user"></i> Tài khoản</a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i> Danh sách mong ước</a></li>
                                    <li><a href="../DoHang.php"><i class="fa fa-user"></i> Giỏ hàng</a></li>
                                    <li><a href="logout.php"> | Thoát</a></li>
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



    <div id="wapper">

        <div class="site-branding-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="logo">
                            <h1><a href="../home.php"><img src="../img/banner.png"></a></h1>
                        </div>
                    </div>
                        
                    <div class="col-sm-6">
                        <div class="shopping-item">
                            <a href="../DoHang.php"> 
                                Giỏ hàng
                                <i class="fa fa-shopping-cart"> </i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        <div id="content">
            <div class="mainmenu-area" style="background-color:lightblue">
                        <div class="container">
                            <div class="row">
                                <div class=" navbar-collapse collapse">
                                    <ul class=" nav navbar-nav">
                                        <li ><a href="admin.php">Trang chủ</a></li>
                                        <li><a href="?admin=hienthidt"> Doanh thu</a></li>
                                        <li><a href="?admin=hienthisp"> Sản phẩm</a></li>
                                        <li><a href="?admin=hienthidm"> Danh mục</a></li>
                                        <li><a href="?admin=hienthihd"> Hóa đơn</a></li>
                                        <li><a href="?admin=hienthind"> Người dùng</a></li>
                                        <li><a href="?admin=hienthitt"> Tin tức</a></li>
                                        <li><a href="?admin=hienthiht"> Hỗ trợ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!--End .menu -->



                <!---------------- Hiển trị content-admin------------------->
                <div id="center-content">
                    <?php
                        include("content_admin.php");
                    ?>
                </div>
            </div><!-- End .main-content -->
        </div><!-- End .content -->
        
    </div><!-- End .wapper -->
</body>


		<script src="https://code.jquery.com/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/jquery.sticky.js"></script>
        
        <script src="../js/main.js"></script>
        
        <!-- Slide -->
        <script type="text/javascript" src="../js/bxslider.min.js"></script>
		<script type="text/javascript" src="../js/script.slider.js"></script>
		


</html>
