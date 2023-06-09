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
<html  lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>STEPN - USER</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/Mo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

 
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

 
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/Mo2.JPG" alt="" class="img-fluid rounded-circle">
        <!-- <h1 class="text-light"><a href="index.php">Ahmed Mohammed</a></h1> -->
        <h1 class="text-light"><?php echo $row['first_name'].$row['last_name']; ?></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="users.php"><i class="bx bx-home"></i> <span>الرئيسية</span></a></li>
          <li><a href="#main"><i class="bx bx-user"></i> <span>معلوماتي الشخصية</span></a></li>
          <li><a href="#facts"><i class="bx bx-file-blank"></i> <span>الأنجازات</span></a></li>
          <li><a href="#skills"><i class="bx bx-book-content"></i> مهاراتي الرياضية</a></li>
          <li><a href="#services"><i class="bx bx-server"></i> الخدمات المتاحة</a></li>
          <li><a href="#testimonials"><i class="bx bx-pencil"></i>تقييم الأطباء</a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i>الدعم الفني</a></li>

        </ul>
      </nav>
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header>

  
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>! مرحبا بك </h1>
      <p> احصل على <span class="typed" data-typed-items="استشارات مجانية, عروض وخصومات, متابعة طوال اليوم, دعم متواصل"></span></p>
    </div>
  </section>

  <main id="main">

    
    <section id="about" class="about text-right">
      <div class="container">

        <div class="section-title">
          <h2>معلوماتي</h2>
          <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3> المعلومات&amp; البيانات الشخصية </h3>
            <p class="font-italic">
              زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <div class="row">
              <div class="col-lg-6 ">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>تاريخ الميلاد:</strong> 1 مايو 1995</li>
                  <li><i class="icofont-rounded-right"></i> <strong>الحالة الاجتماعية:</strong>متزوج</li>
                  <li><i class="icofont-rounded-right"></i> <strong>رقم الهاتف:</strong> 01024453417 </li>
                  <li><i class="icofont-rounded-right"></i> <strong>wkader99@gmail.com:</strong>البريدالإلكتروني</li>
                  <li><i class="icofont-rounded-right"></i> <strong>المدينة :</strong> الشرقية</li>
                  <li><i class="icofont-rounded-right"></i> <strong>معدل ضربات القلب:</strong> 95</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>العمر:</strong> 30</li>
                  <li><i class="icofont-rounded-right"></i> <strong>الوزن:</strong> 65</li>
                  <li><i class="icofont-rounded-right"></i> <strong>السكر:</strong> 95</li>
                  <li><i class="icofont-rounded-right"></i> <strong>الضغط:</strong> 95</li>
                  <li><i class="icofont-rounded-right"></i> <strong>اللياقة:</strong> 95</li>
                  <li><i class="icofont-rounded-right"></i> <strong>الخصومات:</strong> 10% متاح</li>
                </ul>
              </div>
            </div>
            <p>
              نصائح للوصول لمستوي أعلي
            </p> زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم

          </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts text-right">
      <div class="container">

        <div class="section-title">
          <h2>الأنجازات</h2>
          <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
          </p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up"> 85 </span>
              <p><strong>التقدم</strong> للحفاظ على صحتك</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">50</span>
              <p><strong>معدل</strong> خصوماتك الجديدة</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">10</span>
              <p><strong>حمايتك</strong> من الأجهزة الإلكترونية</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">25</span>
              <p><strong>معدل</strong> محادثاتك مع الأطباء</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg text-right">
      <div class="container">

        <div class="section-title">
          <h2>مهاراتك الرياضية</h2>
          <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
          </p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">  المشي <i class="val">10%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">الجري<i class="val">10%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">رفع اثقال <i class="val">7%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">ضغط <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">كرة قدم<i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">جيم <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services text-right">
      <div class="container">

        <div class="section-title">
          <h2>الخدمات المتاحة</h2>
          <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box " data-aos="fade-up">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="">استشارة طبيبك</a></h4>
            <p class="description">زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="">العروض والخصومات</a></h4>
            <p class="description">زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">اقرب مستشفي</a></h4>
            <p class="description">زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="">الأدوية</a></h4>
            <p class="description">زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="">الهدايا</a></h4>
            <p class="description">زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">الوقاية من الفيروسات</a></h4>
            <p class="description">زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg text-right">
      <div class="container">

        <div class="section-title">
          <h2>تقييم الأطباء</h2>
          <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
          </p>
        </div>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item" data-aos="fade-up">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/im/4.png" class="testimonial-img" alt="">
            <h3>دكتور محمد الشوادفي</h3>
            <h4>طبيب &amp; باطنة</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/im/2.png" class="testimonial-img" alt="">
            <h3>دكتور على المغاوري</h3>
            <h4>طبيب جراحة عامة</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/im/3.png" class="testimonial-img" alt="">
            <h3>دكتور محمد ربيع</h3>
            <h4>طبيب نسا وتوليد</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/im/1.png" class="testimonial-img" alt="">
            <h3>دكتور مصطفي همام</h3>
            <h4>جراح القلب</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/im/5.png" class="testimonial-img" alt="">
            <h3>دكتور محمد نصار</h3>
            <h4>استشاري المخ والأعصاب</h4>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact text-right">
      <div class="container">

        <div class="section-title">
          <h2>الدعم الفني</h2>
          <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
          </p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>:الموقع</h4>
                <p>Cairo, Giza, Alexandria</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4> : البريدالإلكتروني</h4>
                <p>mystepn@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4> : هاتف</h4>
                <p>01024453417</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">اسمك ثلاثي</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">البريدالإلكتروني</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">الموضوع</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">الرسالة</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">انتظر ثواني</div>
                <div class="error-message"></div>
                <div class="sent-message">! تم ارسال رسالتك بنجاح ,شكراً لك </div>
              </div>
              <div class="text-center"><button type="submit">ارسال الرسالة</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; جميع حقوق النشر محفوظة <strong><span>STEPN</span></strong>
      </div>
      <div class="credits">
        2021 <a href="#">Mohammed Osman</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>