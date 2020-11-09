</div>
<!-- end body -->
<!-- start footer -->
<footer class=" footer m-5 ">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-6">
<img src="image/logo.png" height="100" width="100" style="margin: -50px 0px 0px 450px;" />
<p class="text-justify">يلا عقار هو منصّة رقمية عقارية تتيح للمستخدم إمكانية الاختيار بين مجموعة متنوعة من العقارات التي تلبي احتياجاته،  يلا عقار هو محرك البحث العقاري الأمثل لتسهيل عمليات الشراء / البيع / الإيجار للعقارات بمختلف أنواعها سواء للشركات أو للأفراد من خلال تقديم أفضل الحلول للعملاء للحصول على العقار المناسب وتسهيل التواصل المباشر مع مطوّري العقارات في مصر.</p>
</div>
<div class="col-xs-6 col-md-3">
<h6 class="ml-5" >عقارات </h6>
<ul>
<li><a href="Villas-for-sale.php">فيلل للبيع </a></li>
<li><a href="Villas-for-rent.php">فيلل للايجار</a></li>
<li><a href="Owned-apartment.php">شقق للبيع</a></li>
<li><a href="New-rent-apartment.php"> شقق ايجار جديد</a></li>
<li><a href="old-rent-apartment.php"> شقق ايجار قديم</a></li>
</ul>
</div>
<div class="col-xs-6 col-md-3">
<h6 class="ml-5">روابط سريعة </h6>
<ul >
<li><a href="new-pro.php">احدث المشروعات</a></li>
<li><a href="about-us.php"> من نحن</a></li>
<li><a href="contact.php"> اتصل بنا</a></li>
<?php
if($_SESSION['Type'] == ""){ 
?>
<li><a href="register.php">تسجيل حساب جديد </a></li>
<li><a href="login.php">تسجيل الدخول </a></li>
<?php   
}else{
}
?>
</ul>
</div>
</div>
<hr>
</div>
<div class="container">
<div class="row">
<div class="col-md-8 col-sm-6 col-xs-12">
<p class="copyright-text">Copyright 2020 All Rights Reserved by Ahmed Fathy .</p>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
<ul class="social-icons">
<li><a class="facebook" href="#"><i class="fab fa-facebook fa-lg mt-2"></i></a></li>
<li><a class="twiter" href="#"><i class="fab fa-twitter fa-lg mt-2"></i></a></li>
<li><a class="dribbble" href="#"><i class="fab fa-youtube fa-lg mt-2"></i></a></li>
</ul>
</div>
</div>
</div>
</footer>
<!-- end footer -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script  src="js/all.min.js"></script>
<script src="js/bootstrap.min.js">  </script>
<script src='js/jquery-3.5.1.min.js'></script>
<script src='js/plugins.js'></script>
</body>
</html>
<?php
ob_end_flush ;
?>