<!DOCTYPE html>

<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Giỏ hàng</title>
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
                                <li><a href="login.html"><i class="fa fa-user"></i> Tài khoản</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i> Danh sách mong ước</a></li>
                                <li><a href="DoHang.html"><i class="fa fa-user"></i> Giỏ hàng</a></li>
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
                        <div class="shopping-item " >
                            <a href="DoHang.html" > 
                                    Giỏ hàng
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
                            <li><a href="home.html">Trang chủ</a></li>
                            <li><a href="products.html">Sản phẩm</a></li>
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
                            <h2>Shopping Cart</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="single-product-area">
            
            <div class="container">
                    <div class="col-md-8">
                        <div class="product-content-right">
                            <div class="woocommerce">
                                <form method="post" action="#">
                                    <table cellspacing="0" class="shop_table cart">
                                        <thead>
                                            <tr>
                                                <th class="product-remove">&nbsp;</th>
                                                <th class="product-thumbnail">&nbsp;</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="product-remove">
                                                    <a title="Remove this item" class="remove" href="#">×</a> 
                                                </td>

                                                <td class="product-thumbnail">
                                                    <a href="detail-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/product-thumb-2.jpg"></a>
                                                </td>

                                                <td class="product-name">
                                                    <a href="detail-product.html">Tên điện thoại</a> 
                                                </td>

                                                <td class="product-price">
                                                    <span class="amount"> đ</span> 
                                                </td>

                                                <td class="product-quantity">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" class="minus" value="-">
                                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                                                        <input type="button" class="plus" value="+">
                                                    </div>
                                                </td>

                                                <td class="product-subtotal">
                                                    <span class="amount"> đ</span> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="actions" colspan="6">
                                                    <div class="coupon">
                                                        <label for="coupon_code">Voucher:</label>
                                                        <input type="text" placeholder="code" value="" id="coupon_code" class="input-text" name="coupon_code">
                                                        <input type="submit" value="Áp dụng" name="apply_coupon" class="button">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>

                                <div class="cart-collaterals">
                                    <div class="cart_totals ">
                                        <h2>Đơn giá</h2>

                                        <table cellspacing="0">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Tiền </th>
                                                    <td><span class="amount">    đ</span></td>
                                                </tr>

                                                <tr class="shipping">
                                                    <th>Phí ship</th>
                                                    <td>    đ</td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th>Tổng tiền</th>
                                                    <td><strong><span class="amount">      đ</span></strong> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>                        
                        </div>                    
                    </div>
            </div>
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