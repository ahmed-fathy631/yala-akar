<?php
$title = ' تفاصيل الفيلاا';

@require'nav.php';

if(@$_GET['id'] == "" ){ 
    header( "refresh:0;url=index.php" );
 }

@$id = $_GET['id'];
$searsh = " select * from Villas_for_rent where OID='$id' ";
$query = mysqli_query($conn,$searsh);
$count = mysqli_num_rows($query);
@$row = mysqli_fetch_assoc($query);

if(@$row['OID'] == $id){
?>
<div class="container">
<div id="carouselExampleControls" class="carousel slide  div " data-ride="carousel">
<div class='logo' ></div>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="pic/Villas/rent/<?php echo @$row['image_a'] ; ?>" class="d-block w-100" alt="..." height="355"  style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="pic/Villas/rent/<?php echo @$row['image_b'] ; ?>" class="d-block w-100" alt="..."  height="355" style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="pic/Villas/rent/<?php echo @$row['image_c'] ; ?>" class="d-block w-100" alt="..."  height="355" style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="pic/Villas/rent/<?php echo @$row['image_d'] ; ?>" class="d-block w-100" alt="..." height="355"  style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="pic/Villas/rent/<?php echo @$row['image_e'] ; ?>" class="d-block w-100" alt="..."  height="355" style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="pic/Villas/rent/<?php echo @$row['image_f'] ; ?>" class="d-block w-100" alt="..."  height="355" style="border-radius: 40px;"  >
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
<br>
<?php
if(@$_SESSION['Type'] == 3){
?>
<br>
<h3 class=" text">صاحب الاعلان </h3>
<br>
<div class="container">
<div class="row">
<div class="col-sm-8">
<p class="text">الاسم  : <span><?php echo @$row['userName'] ; ?></span></p>
<p class="text ">البريد الالكتروني : <span><?php echo @$row['Email'] ; ?></span></p>
</div>
<div class="col-sm-4">
<p class="text">الرقم التسلسلي  : <span><?php echo @$row['userID'] ; ?></span></p>
<p class="text">رقم الهاتف : <span><?php echo @$row['Phone'] ; ?></span></p>
</div>
</div>
</div>
<?php
}
?>
<br><br>
<div class="row">
<div class="col-sm">
<div>
<p class="text">المحافظة : <span>  <?php echo @$row['city'] ; ?>  </span></p>
</div>
</div> <br><br>
<div class="col-sm">
<div>
<p class="text">الموقع : <span>  <?php echo @$row['location'] ; ?>  </span></p>
</div>
</div> <br><br>
</div>
<br><br>
<div class="row">
<div class="col-sm">
<div>
<p class="text">النوع : <span>  <?php echo @$row['type'] ; ?>  </span></p>
</div>
</div> <br><br>
<div class="col-sm">
<div>
<p class="text">المساحة : <span>  <?php echo @$row['space'] ; ?>  </span>  متر</p>
</div>
</div> <br><br>
<div class="col-sm">
<div>
<p class="text ">السعر : <span>  <?php echo @$row['price'] ; ?>  </span> جنية </p>
</div>
</div> <br><br>
</div>
<br><br>
<div class="row">
<div class="col-sm">
<div>
<p class="text">عدد الغرف : <span>  <?php echo @$row['rooms'] ; ?>  </span></p>
</div>
</div> <br><br>
<div class="col-sm">
<div>
<p class="text ">عدد الحمامات : <span>  <?php echo @$row['paths'] ; ?>  </span></p>
</div>
</div> <br><br>
<div class="col-sm">
<div>
<p class="text ">عدد البالكونات  : <span>  <?php echo @$row['balconies'] ; ?>  </span></p>
</div>
</div> <br><br>
</div>	
<div class="row">
<div class="col-sm">
<div>
<p class="text ">جنينة  : <span>  <?php echo @$row['garden'] ; ?>  </span></p>
</div>
</div> <br><br>
<div class="col-sm">
<div>
<p class="text ">جراج : <span>  <?php echo @$row['garage'] ; ?>  </span></p>
</div>
</div> <br><br>
<div class="col-sm">
<div>
<p class="text ">حارس : <span>  <?php echo @$row['guard'] ; ?>  </span></p>
</div>
</div> <br><br>
</div>
<br><br>
<h3 class="text  mt-2">تفاصيل الاعلان </h3> 
<p class="text mt-3">  <?php echo @$row['detials'] ; ?>  </p>
</div>
</div>
<?php
}else {
header( "refresh:1;url=index.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>خطا</h3>
</div>
<?php
}
@require'footer.php';
?>