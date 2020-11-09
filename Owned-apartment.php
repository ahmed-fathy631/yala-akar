<?php
$title = 'شقة تمليك';

@require'nav.php';
mysqli_select_db($conn,"yala_akar");
$result = mysqli_query($conn,"select * from Owned_apartment ORDER BY OID DESC");
while(@$row = mysqli_fetch_array($result)){
?>
<div class="container">
<div class="row">
<div class="col col-md-4 mb-3" >
<h4 class=" mt-5 text"><?php echo @$row['city'] ; ?></h4>
<h6 class=" mt-5 text"><?php echo @$row['location'] ; ?></h6>
<h6 class=" mt-5 text"><span><?php echo @$row['space'] ; ?></span> متر مربع</h6>
<a  href="Owned-apartment-details.php?id=<?php echo @$row['OID'] ; ?>"   type="button" class=" btn btn-primary btn-lg btn-block mt-5"  style="opacity: 0.6;"  >مشاهدة التفاصيل</a> 
<?php
if(@$_SESSION['Type'] == "" ){ 
}else if($_SESSION['Type'] == 3){
?>
<a  href="Owned-apartment-edit.delete.php?id=<?php echo @$row['OID'] ; ?>"   type="button" class=" btn btn-danger  btn-block  "  style="opacity: 0.6;height:30px;"><h6>تعديل</h6></a> 
<?php
}else if($_SESSION['Type'] == 1 || 2 ){
}else{
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
?>
</div>
<div class="col-md-8">
<div id="carouselExampleSlidesOnly" class="carousel slide div" data-ride="carousel">
<div class='logo' ></div>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="pic/apartment/owned_img/<?php echo @$row['image_a'] ; ?>" class="d-block w-100" alt="..." height="355"  style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="pic/apartment/owned_img/<?php echo @$row['image_b'] ; ?>" class="d-block w-100" alt="..."  height="355" style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="pic/apartment/owned_img/<?php echo @$row['image_c'] ; ?>" class="d-block w-100" alt="..."  height="355" style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="pic/apartment/owned_img/<?php echo @$row['image_d'] ; ?>" class="d-block w-100" alt="..." height="355"  style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="pic/apartment/owned_img/<?php echo @$row['image_e'] ; ?>" class="d-block w-100" alt="..."  height="355" style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="pic/apartment/owned_img/<?php echo @$row['image_f'] ; ?>" class="d-block w-100" alt="..."  height="355" style="border-radius: 40px;"  >
</div>
</div>
</div>
</div>
</div>
</div>
<br><br>
</div>
<br><br>
<?php
}
@require'footer.php';
?>