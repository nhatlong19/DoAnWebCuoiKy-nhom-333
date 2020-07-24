	
<!--Thêm sau-->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Font -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<!-- có cái này mới hiện đc icon của FB, insta, visa,.. ở footer-->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

	
<!--End thêm sau-->



<base href="http://localhost/dienthoai/" />
<?php 
session_start();
include("include/connect.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<html xmlns:fb="http://ogp.me/ns/fb#">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> RẻNhấtVN Cellphones </title>
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/css1.css">


		



<link rel="stylesheet" href="slide/engine/style.css">
<script type="text/javascript" src="slide/engine/wowslider.js"></script>
<script type="text/javascript" src="slide/engine/wowslider.mod.js"></script>

<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/css1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        /* Make the image fully responsive */       
        .carousel-inner img {
            height: 100%;
            width: 100%;
        }
        
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            height: 50px;
            width: 50px;
            outline: rgb(212, 139, 139);
            background-color: rgba(0, 0, 0, 0.3);
            background-size: 100%, 100%;
            border-radius: 50%;
            border: 1px solid black;
        }
    </style>
</script>


<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!-------------------------------------Slide tài trợ-------------------------------------->

<script src="js/newsScrollerDefault-rightToleft-bottomTotop.js" type="text/javascript"></script>
<script src="js/newsScrollerEdit-leftToright-topTobottom.js" type="text/javascript"></script>


<!-------------------------------------zoom anh-------------------------------->
<script type="text/javascript" src="js/zoom/cloud-zoom.1.0.2.js"></script>
<link href="css/cloud-zoom.css" rel="stylesheet" type="text/css" />



<!-------------------------------------Tabs-------------------------------->
<script>

$(document).ready(function(){
$('ul.tabs').each(function(){
var $active, $content, $links = $(this).find('a');
$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
$active.addClass('active');
$content = $($active.attr('href'));
$links.not($active).each(function () {
$($(this).attr('href')).hide();
});
$(this).on('click', 'a', function(e){
$active.removeClass('active');
$content.hide();
$active = $(this);
$content = $($(this).attr('href'));
$active.addClass('active');
$content.show();
e.preventDefault();

});

});

});

</script>

<!-------------------------------------slide-------------------------------->
<link rel="stylesheet" href="css/style1.css">
<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
 $(document).ready( function(){	
		var buttons = { previous:$('#lofslidecontent45 .lof-previous') ,
						next:$('#lofslidecontent45 .lof-next') };
						
		$obj = $('#lofslidecontent45').lofJSidernews( { interval : 4000,
												direction		: 'opacitys',	
											 	easing			: 'easeInOutExpo',
												duration		: 2000,
												auto		 	: true,
												maxItemDisplay  : 4,
												navPosition     : 'horizontal', // horizontal
												navigatorHeight : 32,
												navigatorWidth  : 80,
												mainWidth:1000,
												buttons			: buttons} );	
	});
</script>
</head>


<body >
	<div id="wapper">
		<div id="header">
			<div id="bg-header">	
			</div><!-- End .bg-header -->
				<div id="menu-header">
				<?php include("home_include/menu_ngang.php"); ?>
					<!-- End .menu -->
				</div><!-- End .menu-header -->
		</div><!-- End .header -->
	</div> <!--end wapper-->

	
	<!-- Slider -->
	<div id="wapper">
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/h4-slide.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								iPhone <span class="primary">6 Plus</span>
							</h2>
							<h4 class="caption subtitle">2 SIM 2 sóng</h4>
							
						</div>
					</li>
					<li><img src="img/h4-slide2.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Mua 2, tặng <span class="primary">1 </span>
							</h2>
							<h4 class="caption subtitle">Balo & đồ dùng học sinh</h4>
							
						</div>
					</li>
					<li><img src="img/h4-slide3.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Máy nghe nhạc <span class="primary">Apple Ipod </span>
							</h2>
							
							
						</div>
					</li>
					<li><img src="img/h4-slide4.png" alt="Slide">
						<div class="caption-group">
						<h2 class="caption title">
								Tai nghe <span class="primary"> Apple </span>
							</h2>
						</div>
					</li>
				</ul>
			</div>
        </div>   
	</div>
    <!-- End slider --> <br><br>

	<div id="wapper">	
		<div id="content">
			<div id="main-content">
				<div id="left-content">
					<?php include("home_include/left_content.php");?>
				</div><!-- End .left-content -->
				
				<div id="center-content">
					
					<?php include("content_page.php"); ?>
					<!-------------------------------------------------------------------------------------------------------------------->
						
					
				</div><!-- End .center-content -->
				
				<div id="right-content">
					<?php include("home_include/right_content.php"); ?>
				</div><!-- End .right-content-->
			</div><!-- End .main-content -->
		</div><!-- End .content -->

	</div><!-- End .wapper -->



	<!--brands-->
	<div class="brands-area" >
		<div class="zigzag-bottom"></div>
		<div class="container" >
			<div class="row" >
				<div class="col-md-12" >
					<div class="brand-wrapper"> 
						<div class="brand-list" style="background-color:silver" >
							<img src="img/brand1.png" alt="">
							<img src="img/brand2.png" alt="">
							<img src="img/brand3.png" alt="">
							<img src="img/brand4.png" alt="">
							<img src="img/brand5.png" alt="">
							<img src="img/brand6.png" alt="">
							<img src="img/brand1.png" alt="">
							<img src="img/brand2.png" alt="">                            
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
	<!-- end brands -->
	
	<!--footer-->
	<div class="footer-top-area" style=>
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

</body>

<!-- Slide -->
<script type="text/javascript" src="js/bxslider.min.js"></script>
        <script type="text/javascript" src="js/script.slider.js"></script>


</html>