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
<html dir="rtl" lang="en">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/Mo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple.png">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEPN-Offers</title>

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- header section starts  -->

<header>

    <div id="menu" class="fas fa-bars"></div>

    <a href="#" class="logo"><i class="fas fa-star"></i>STEPN-Offers</a>
    
    <nav class="navbar">
    
        <ul>
        <h2 class="logo"><?php echo $row['user_name']; ?></h2>
            <li><a class="active" href="#home">الرئيسية</a></li>
            <li><a href="#">تفاصيل الخصومات</a></li>
            <li><a href="#">الخصومات</a></li>
            <li><a href="#">أفضل الشركات</a></li>
            <li><a href="#">تواصل معنا</a></li>
            <?php    if(isset($_SESSION['email'])){
?>
 <li class="nav-item">
       <a class="nav-link" href="../STPEN-logout/index.php"> خروج</a>
                        </li>
                        <?php }
                        ?>
        </ul>
    </nav>

    <div id="login" class="fas fa-user-circle"></div>

</header>

<!-- header section ends -->

<!-- login form  -->

<div class="login-form">

    <form action="">
        <h3>سجل دخول</h3>
        <input type="email" placeholder="البريد الإلكتروني" class="box">
        <input type="password" placeholder="الباسورد" class="box">
        <p>نسيت كلمة السر ؟ <a href="#">اضغط هنا</a></p>
        <p>لاتمتلك حساب؟ <a href="#">افتح حساب الآن</a></p>
        <input type="submit" class="btn" value="تسجيل دخول">
        <i class="fas fa-times"></i>
    </form>

</div>

<!-- home section starts  -->

<section class="home " id="home">

    <h1>مستشفي STEPN للخصومات</h1>
    <p>اتبع نظام صحي ورياضي مجاني وأحصل على خصومات تصل ل 20%</p>
    <a href="#"><button class="btn">افتح حساب وأبدء الآن</button></a>

    <div class="shape"></div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="images/G.png" alt="">
    </div>

    <div class="content">
        <h3>لماذا ولمن نمنح خصومات؟</h3>
        <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
        </p>
        <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
        </p>
        <a href="#"><button class="btn">للمزيد تابع الصفحة الرئيسية</button></a>
    </div>

</section>

<!-- about section ends -->

<!-- course section starts  -->

<section class="course" id="course">

<h1 class="heading">الخصومات المتاحة لك الآن</h1>    

<div class="box-container">

    <div class="box">
        <img src="images/A.png"s alt="">
        <h3 class="price">20 ج</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">خصومات على علاج X</a>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 ساعة </h3>
                <h3> <i class="far fa-calendar-alt"></i> 3 شهور </h3>
                <h3> <i class="fas fa-book"></i> 100 عملية شراء</h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/A.png"s alt="">
        <h3 class="price">50 ج</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">خصومات على علاج X</a>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 ساعة </h3>
                <h3> <i class="far fa-calendar-alt"></i> 3 شهور </h3>
                <h3> <i class="fas fa-book"></i> 100 عملية شراء</h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/A.png"s alt="">
        <h3 class="price">40 ج</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">خصومات على علاج X</a>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 ساعة </h3>
                <h3> <i class="far fa-calendar-alt"></i> 3 شهور </h3>
                <h3> <i class="fas fa-book"></i> 100 عملية شراء</h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/A.png"s alt="">
        <h3 class="price">30 ج</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">خصومات على علاج X</a>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 ساعة </h3>
                <h3> <i class="far fa-calendar-alt"></i> 3 شهور </h3>
                <h3> <i class="fas fa-book"></i> 100 عملية شراء</h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/A.png"s alt="">
        <h3 class="price">60 ج</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">خصومات على علاج X</a>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 ساعة </h3>
                <h3> <i class="far fa-calendar-alt"></i> 3 شهور </h3>
                <h3> <i class="fas fa-book"></i> 100 عملية شراء</h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/A.png"s alt="">
        <h3 class="price">70 ج</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">خصومات على علاج X</a>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 ساعة </h3>
                <h3> <i class="far fa-calendar-alt"></i> 3 شهور </h3>
                <h3> <i class="fas fa-book"></i> 100 عملية شراء</h3>
            </div>
        </div>
    </div>
    <div class="box">
        <img src="images/A.png"s alt="">
        <h3 class="price">100 ج</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">خصومات على علاج X</a>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 ساعة </h3>
                <h3> <i class="far fa-calendar-alt"></i> 3 شهور </h3>
                <h3> <i class="fas fa-book"></i> 100 عملية شراء</h3>
            </div>
        </div>
    </div>
    <div class="box">
        <img src="images/A.png"s alt="">
        <h3 class="price">150 ج</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">خصومات على علاج X</a>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 ساعة </h3>
                <h3> <i class="far fa-calendar-alt"></i> 3 شهور </h3>
                <h3> <i class="fas fa-book"></i> 100 عملية شراء</h3>
            </div>
        </div>
    </div>
    <div class="box">
        <img src="images/A.png"s alt="">
        <h3 class="price">25 ج</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">خصومات على علاج X</a>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
                <div class="info">
                    <h3> <i class="far fa-clock"></i> 2 ساعة </h3>
                    <h3> <i class="far fa-calendar-alt"></i> 3 شهور </h3>
                    <h3> <i class="fas fa-book"></i> 100 عملية شراء</h3>
                </div>
        </div>
    </div>
    <div class="box">
        <img src="images/A.png"s alt="">
        <h3 class="price">35 ج</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">خصومات على علاج X</a>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 ساعة </h3>
                <h3> <i class="far fa-calendar-alt"></i> 3 شهور </h3>
                <h3> <i class="fas fa-book"></i> 100 عملية شراء</h3>
            </div>
        </div>
    </div>
    <div class="box">
        <img src="images/A.png"s alt="">
        <h3 class="price">55 ج</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">خصومات على علاج X</a>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 ساعة </h3>
                <h3> <i class="far fa-calendar-alt"></i> 3 شهور </h3>
                <h3> <i class="fas fa-book"></i> 100 عملية شراء</h3>
            </div>
        </div>
    </div>
    <div class="box">
        <img src="images/A.png"s alt="">
        <h3 class="price">11 ج</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">خصومات على علاج X</a>
            <p>زيادة الوعي الصحي فى المجتمع من خلال حلول تقنية بسيطة يمكن أن تعزز أسلوب حياة صحي للناس لتحفيزهم على أنفسهم
            </p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 ساعة </h3>
                <h3> <i class="far fa-calendar-alt"></i> 3 شهور </h3>
                <h3> <i class="fas fa-book"></i> 100 عملية شراء</h3>
            </div>
        </div>
    </div>
  

</div>

</section>

<!-- section ends -->
<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading">تواصل معنا</h1>

<div class="row">

    <form action="">
        <input type="text" placeholder="اسمك ثلاثي" class="box">
        <input type="email" placeholder="البريد الإلكتروني" class="box">
        <input type="number" placeholder="رقم الهاتف" class="box">
        <textarea name="" id="" cols="30" rows="10" class="box address" placeholder="الموضوع"></textarea>
        <input type="submit" class="btn" value="ارسل رسالة الآن">
    </form>

    <div class="image">
        <img src="images/4.png" alt="">
    </div>

</div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>خدمات اضافية</h3>
            <a href="#">تواصل مع طبيب</a>
            <a href="#">تواصل مع مستشفي</a>
            <a href="#">تابع نظام صحي</a>
            <a href="#">علاج</a>
        </div>

        <div class="box">
            <a href="#">الرئيسية</a>
            <a href="#">تفاصيل الخصومات</a>
            <a href="#">الخصومات</a>
            <a href="#">أفضل الشركات</a>
            <a href="#">تواصل معنا</a>
        </div>

        <div class="box">
            <h3>معلومات الاتصال والدعم</h3>
            <p> <i class="fas fa-map-marker-alt"></i>Cairo, Giza, Alexandria</p>
            <p> <i class="fas fa-envelope"></i> mystepn@gmail.com </p>
            <p> <i class="fas fa-phone"></i> 01024453417 </p>
        </div>

    </div>

    <h1 class="credit"> جميع حقوق النشر محفوظة <a href="#"> -STEPN- </a>Mohammed Osman 2020 </h1>

</div>

<!-- footer section ends -->

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>