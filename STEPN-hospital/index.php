
<?php

session_start();

include '../connection.php';

$email=$_SESSION['email'];
$query=" SELECT *
FROM my_client
WHERE email='$email' ";
$result = $conn->query($query);
 $row=$result->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>STEPN-hospital</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/Mo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img class="img-fluid" src="images/logo1.png" alt="" />
		</a>

		<h3><?php echo $row['user_name']; ?></h3>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="#home">الرئيسية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">الخدمات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">الأقسام</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#pricing">أقرب مستشفى</a>
            </li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#team">أفضل الأطباء</a>
			  </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">تواصل معنا</a>
			</li>
			
			<?php    if(isset($_SESSION['email'])){
?>
 <li class="nav-item">
       <a class="nav-link" href="../STPEN-logout/index.php">تسجيل خروج</a>
                        </li>
                        <?php }
                        ?>
          </ul>
        </div>
      </div>
    </nav>
	
	<section id="home" class="main-banner parallaxie" style="background: url('uploads/banner-01.jpg')">
		<div class="heading ">
			<h1>مركز العناية بصحتك STEPN مستشفي</h1>			
			<h3 class="cd-headline clip is-full-width">
				
				<span class="cd-words-wrapper">
					<b class="is-visible">أسنان</b>
					<b>عمليات وجراحة</b>
					<b>أشعة</b>
					<b>باطنة</b>
					<b>نساء وتوليد</b>
					<b>مخ وأعصاب</b>
				</span>
				<span>يوجد قسم </span>
				<div class="btn-ber">
					<a class="get_btn hvr-bounce-to-top" href="../STEPN -SignUp/SignUp.php">افتح حساب جديد</a>
					<a class="learn_btn hvr-bounce-to-top" href="../STEPN-Index/index.php">الصفحة الرئيسية</a>
          <a class="get_btn hvr-bounce-to-top" href="../STEPN-Login/index.php">سجل دخول</a>

				</div>
			</h3>
		</div>
	</section>

<!--------------------فراغ about -------------------->


    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>الخدمات</h3>
                <p>نعمل على تسهيل خيارات الاستشارات على مدار الساعة بدلاً من المستشفيات العادية والحلول السريرية
				</p>
            </div><!-- end title -->

            <div class="row text-right">
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-seo "></i>
						</div>
						<h2>استشارة</h2>
						<p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
						</p>
					</div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-development"></i>
						</div>
						<h2>توفير غرف نظيفه بالمستشفي</h2>
						<p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
						</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-process"></i>
						</div>
						<h2>خصومات</h2>
						<p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
						</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-discuss-issue"></i>
						</div>
						<h2>خدمة اسعاف مجانية</h2>
						<p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
						</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea"></i>
						</div>
						<h2>طوارئ</h2>
						<p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
						</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea-1"></i>
						</div>
						<h2>فريق دعم</h2>
						<p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
						</p>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="portfolio" class="section lb">
		<div class="container">
			<div class="section-title text-center">
                <h3>الأقسام</h3>
                <p>نعمل على تسهيل خيارات الاستشارات على مدار الساعة بدلاً من المستشفيات العادية والحلول السريرية
				</p>
            </div><!-- end title -->
			
			<div class="gallery-menu row">
				<div class="col-md-12">
					<div class="button-group filter-button-group text-center">
						<button class="active" data-filter="*">الكل</button>
						<button data-filter=".gal_a">مخ وأعصاب</button>
						<button data-filter=".gal_b">عمليات وجراحة</button>
						<button data-filter=".gal_c">أسنان</button>
						<button data-filter=".gal_c">أشعة</button>
						<button data-filter=".gal_c">نسا وتوليد</button>
            <button data-filter=".gal_c">باطنة</button>


					</div>
				</div>
			</div>
			
			<div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-01.png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h4 class="card ">دكتور محمد ربيع </h4>
							<a href="../STEPN-Index/index.html" class="hoverbutton global-radius"><i class="button"></i>زيارة</a>
							</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-02.png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h4 class="card ">دكتور مصطفي همام </h4>
							<a href="../STEPN-Index/index.html" class="hoverbutton global-radius"><i class="button"></i>زيارة</a>
							</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-03.png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h4 class="card ">دكتور ياسر البسيوني </h4>
							<a href="../STEPN-Index/index.html" class="hoverbutton global-radius"><i class="button"></i>زيارة</a>
							</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-04.png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h4 class="card ">دكتور علي المغاوري </h4>
							<a href="../STEPN-Index/index.html" class="hoverbutton global-radius"><i class="button"></i>زيارة</a>
							</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-05.png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h4 class="card ">دكتور محمد الشوادفي </h4>
							<a href="../STEPN-Index/index.html" class="hoverbutton global-radius"><i class="button"></i>زيارة</a>
							</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-06.png" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h4 class="card ">دكتور محمد نصار </h4>
							<a href="../STEPN-Index/index.html" class="hoverbutton global-radius"><i class="button"></i>زيارة</a>
							</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	
	
	<!--------------------فراغ Blog-------------------->
	<div id="pricing" class="section wb">
		<div class="container">
			<div class="section-title text-center">
				<h3>أقرب مستشفى</h3>
				<p>نعمل على تسهيل خيارات الاستشارات على مدار الساعة بدلاً من المستشفيات العادية والحلول السريرية
				</p>
			</div><!-- end title -->
	
  <div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d109628.16741167156!2d31.77049376993448!3d30.83402192608446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z2KfZgtix2Kgg2YXYs9iq2LTZgdmK!5e0!3m2!1sar!2seg!4v1617206311901!5m2!1sar!2seg" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
 </div>
	
	<!--------------------فراغ Blog-------------------->
	
	<div id="team" class="section wb">
		<div class="container">
			<div class="section-title text-center">
				<h3>أفضل الأطباء</h3>
				<p>نعمل على تسهيل خيارات الاستشارات على مدار الساعة بدلاً من المستشفيات العادية والحلول السريرية
				</p>
			</div><!-- end title -->
		
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="uploads/img-2.png">
						</div>
						<div class="team-content">
							<h3 class="title">دكتور محمد الشوادفي</h3>
							<span class="post">باطنة</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-male"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="uploads/img-4.png">
						</div>
						<div class="team-content">
							<h3 class="title">دكتور محمد نصار</h3>
							<span class="post">مخ وأعصاب</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-male"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="uploads/img-1.png">
						</div>
						<div class="team-content">
							<h3 class="title">دكتور محمد ربيع</h3>
							<span class="post">نسا وتوليد</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-male"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="uploads/img-3.png">
						</div>
						<div class="team-content">
							<h3 class="title">دكتور علي المغاوري</h3>
							<span class="post">جراحة عامة</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-male"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

		<!--------------------فراغ Pricing -------------------->


    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>تواصل معنا</h3>
                <p>نعمل على تسهيل خيارات الاستشارات على مدار الساعة بدلاً من المستشفيات العادية والحلول السريرية
				</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form ">
                        <div id="message"></div>
                        <form id="contactForm" action="handelIndex2.php" method="post" name="sentMessage" novalidate="novalidate">
							<div class="row ">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control text-right" id="name" type="text" name ="yourName" placeholder="اسمك ثلاثي" required="required" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control text-right" id="email" type="email" name ="email"  placeholder="البريد الإلكتروني" required="required" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control text-right" id="phone" type="tel" name ="phone"  placeholder="رقم الهاتف" required="required" data-validation-required-message="Please enter your phone number.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control text-right" id="message" name ="message" placeholder="الرسالة" required="required" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn hvr-bounce-to-top" type="submit">ارسال</button>
								</div>
							</div>
						</form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
				<a href="#"><img src="images/logo.png" alt="" /></a>
                <div class="footer-center">
                    <p class="footer-links">
                        <a href="#home">الرئيسية</a>
                        <a href="#services">الخدمات</a>
                        <a href="#portfolio">جراحة عامة</a>
                        <a href="#wife">نساوتوليد</a>
                        <a href="#about">أسنان</a>
                        <a href="#brain">مخ وأعصاب</a>
						<a href="#Health">صحة نفسية</a>
                        <a href="#blog2">عيون</a>
                        <a href="#blog">جلدية</a>
                        <a href="#pricing">باطنة</a>
                        <a href="#team">أفضل أطباء</a>
                        <a href="#contact">تواصل معنا</a>
                    </p>
                    <p class="footer-company-name">Mohammed Osman &copy; 2021 <a href="#">STEPN</a> جميع حقوق النشر محفوظة	
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/headline.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.vide.js"></script>

</body>
</html>