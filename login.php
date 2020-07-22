<!DOCTYPE html>

<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dỏ hàng</title>
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
            <!--Header-->
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="user-menu">
                            <ul>
                                <li><a href="checkout.html"><i class="fa fa-user"></i> Tài khoản</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i> Danh sách mong ước</a></li>
                                <li><a href="dohang.php"><i class="fa fa-user"></i> Dỏ hàng</a></li>
                                <li><a href="#"><i class="fa fa-user"></i> Đăng nhập</a></li>
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
                        <div class="shopping-item " >
                            <a href="dohang.php" > 
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
                            <li><a href="products.php">Sản phẩm</a></li>
                             <li><a href="lienhe.php">Liên hệ</a></li>
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
        
        <!---->
        <div class="product-big-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-bit-title text-center">
                            <h2>Login Now</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---->
        
        
            
        <div class="container w-50"><!--width bằng 50-->
        <form action="dangnhap.php" method="post">
        <span>
			<p>Username:</p><br>
									<input type="text" size="50" name="user"><br>
									<p>Password:</p><br>
									<input type="password" size="50" name="pass"><br>
			</span>
            <a href="dangnhap.php"><button name="login">Đăng nhập</button></a><br>
						</form>
    
            <div id="result" class="text-danger text-center"></div>
    
            <script>
                function checkInputEmpty(element) { //element là tự đặt, đặt gì cũng đc
                    if (element.val() == "") {
                        element.addClass("loi");
                        return true;
                    }
                    return false;
                }
                $(function () {
                    $("#btnLogin").click(function () {
                        var user = $("#txtUser");
                        var pass = $("#txtPass");
    
                        if ($(this).html() == "Logout") { //nếu kh mà Logout thì mất đi username + passwword
                            user.removeClass("d-none");
                            pass.removeClass("d-none");
                            user.val("");
                            pass.val("");
                            user.next().remove();
                            pass.next().remove();
                            $(this).html("Login");
                            $("#result").html("");
                            return;
                        }
    
                        //case 1: kiểm tra xem user/pass có rỗng không, nếu rỗng thì thông báo
    
                        //CÁCH 1: LÀM GỘP, không cần checkInPutEmpty
                        //if (user.val() == "" || pass.val() == "") {
                        //    $("#result").html("Vui lòng nhập thông tin");
                        //    user.addClass("loi");
                        //    pass.addClass("loi");
                        //    return;
                        //}
                        //Cách 2:
                        if (checkInputEmpty(user) || checkInputEmpty(pass)) {
                            $("#result").html("Vui lòng nhập thông tin");
                            return;
                        }
    
                        user.removeClass("loi");
                        pass.removeClass("loi");
    
                        //case 2: Kiểm tra user/pass tối thiểu 4 kí tự
                        if (user.val().length < 4 || pass.val().length < 4) {
                            $("#result").html("Username/Password tối thiểu 4 kí tự");
                            return;
                        }
    
                        //khi không có rỗng, tức đã nhập thông tin vào rồi thì sẽ bõ thông báo lỗi đi mà ko cần tải lại trang
                        $("#result").html("Đăng nhập thành công");
                        
                        $(this).html("Logout");  //this vì đây là cho đối tượng đang đc áp dụng là button btnLogin
                        
                        
                        //Ẩn textbox
                        user.addClass("d-none");
                        pass.addClass("d-none");
                        user.after("<span>" + user.val() + "</span>");
                        pass.after($("<span/>").html(pass.val()));
                    });
                });
            </script>
        </div>

        


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
                        <p>Đăng ký bằng Email để nhận thông tin về sản phẩm mới nhât và thông tin về khuyến mãi</p>
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

        <script src="js/jquery-3.5.0.js"></script>
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