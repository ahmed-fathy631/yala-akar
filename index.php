<?php
$title = 'الرئيسية';
@require'nav.php';
?>

<p class="text">جميع انواع العقارات المعروضة للبيع او الايجار في مصر سواء كان الغرض سكني او إداري او تجاري – هنا هتلاقي كل اعلانات العقارات من شقق وفيلل  ومنازل وعيادات ومكاتب وغيرها من العقارات – اختار العقار المناسب لك وتواصل معنا الآن</p>
<br>

<?php
if(isset($_POST['Search'])){

$type = mysqli_real_escape_string($conn, $_POST['type']) ;
$city = mysqli_real_escape_string($conn, $_POST['city']) ;
$location = mysqli_real_escape_string($conn, $_POST['location']) ;
$space = mysqli_real_escape_string($conn, $_POST['space']) ;
$price = mysqli_real_escape_string($conn, $_POST['price']) ;

$searsh = " select * from $type where city='$city' and location='$location' and space='$space' and price='$price' LIMIT 1 ";
$query = mysqli_query($conn,$searsh);
$count = mysqli_num_rows($query);
@$row = mysqli_fetch_assoc($query);

@$id = @$row['OID'] ;

if ($count > 0){
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(31, 140, 54, 0.85);box-shadow: -4px 0px 9px 7px rgba(31, 140, 54, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>تم وجود عقار مطابق</h3>
</div>
<?php

if ($type === "Owned_villas"){
header( "refresh:1;url=Villas-for-sale-details.php?id=$id" );
}
if ($type === "Villas_for_rent"){
header( "refresh:1;url=Villas-for-rent-details.php?id=$id" );
}
if ($type === "Owned_apartment"){
header( "refresh:1;url=Owned-apartment-details.php?id=$id" );
}
if ($type === "New_rent_apartment"){
header( "refresh:1;url=New-rent-apartment-details.php?id=$id" );
}
if ($type === "old_rent_apartment"){
header( "refresh:1;url=old-rent-apartment-details.php?id=$id" );
}

}else{
header( "refresh:1;url=index.php" );    
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>لا يوجد عقارات مطابقة</h3>
</div>
<?php
}
}
?>

<div class="div">
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>" class=" p-4 ">
<div class="row form-group mt-4 ">

<div class="col-xl-2 col-lg-2 col-md-2 form-group ">
<select class="form-control" name="type" id="districts_holder" style="background-color: rgba(232,232,232,0.6);">
<option value="Owned_villas">فيلاا تمليك</option>
<option value="Villas_for_rent">فيلاا ايجار</option>
<option value="Owned_apartment">شقة تمليك</option>
<option value="New_rent_apartment">شقة ايجار جديد</option>
<option value="old_rent_apartment">شقة ايجار قديم</option>
</select>
</div>
<div class="col-xl-2 col-lg-2 col-md-3 form-group">
<input autocomplete="off" id="city" type="text" class="form-control " name="city" value="" required placeholder="المحافظة" style="background-color: rgba(232,232,232,0.6);">     
</div>
<div class="col-xl-2 col-lg-2 col-md-3 form-group">
<input autocomplete="off" id="location" type="text" class="form-control" name="location" value="" required placeholder="الموقع" style="background-color: rgba(232,232,232,0.6);">                      
</div>
<div class="col-xl-2 col-lg-2 col-md-3 form-group">
<input autocomplete="off" id="space" type="text" class="form-control" name="space" value="" required placeholder="المساحة" style="background-color: rgba(232,232,232,0.6);">
</div>
<div class="col-xl-2 col-lg-2 col-md-3 form-group">
<input autocomplete="off" id="price" type="text" class="form-control" name="price" value="" required placeholder="السعر" style="background-color: rgba(232,232,232,0.6);">
</div>
<div class="col-xl-2 col-lg-2 col-md-3 form-group">
<button type="submit"  name="Search" class="btn btn-danger w-100"  style="opacity: 0.6;"  >ابحث</button>
</div>
</div>
</form>
</div>
<br><br>
<p class=" mt-2 text">عقارات مميزة </p>
<p class="text  mt-2">اسهل و اسرع طريقة هتلاقي بيها عقارك </p>
<p class="text  mt-2">كل اللي بتحلم بية موجود </p>
<p class="text  mt-2">متشلش هم الف مكانك عندنا</p>
<br>
<div class="container">
<div class="row">
<div class="col">
<div id="carouselExampleFade" class="carousel slide carousel-fade div" data-ride="carousel">
<div class='logo' ></div>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="image/1.jpg" class="d-block w-100" alt="..."  height="355" style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="image/2.jpg" class="d-block w-100" alt="..."  height="355"  style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="image/3.jpg" class="d-block w-100" alt="..."  height="355"  style="border-radius: 40px;"  >
</div>
</div>
</div>
</div>
<div class="col">
<div id="carouselExampleFade" class="carousel slide carousel-fade div " data-ride="carousel">
<div class='logo' ></div>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="image/4.jpg" class="d-block w-100" alt="..." height="355"  style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="image/5.jpg" class="d-block w-100" alt="..."  height="355" style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="image/6.jpg" class="d-block w-100" alt="..."  height="355" style="border-radius: 40px;"  >
</div>
</div>
</div>
</div>
</div>
</div>
<br><br>
<h3 class=" mt-2 text"> احدث المشروعات</h3>
<br><br>
<?php
mysqli_select_db($conn,"yala_akar");

$result = mysqli_query($conn,"select * from Pro ORDER BY proID DESC LIMIT 4");

while(@$row = mysqli_fetch_array($result))
{
?>
<div class="container">
<div class="row">
<div class="col col-md-4 mt-5" >
<h4 class=" mt-5 text"><?php echo @$row['name'] ; ?></h4>
<h6 class=" mt-5 text"><?php echo @$row['location'] ; ?></h6>
<h6 class=" mt-5 text">مساحات تبدا من  <span><?php echo @$row['min_space'] ; ?></span> الي <span><?php echo @$row['max_space'] ; ?></span>متر مربع</h6>
</div>
<br>
<div class="col-md-8">
<div id="carouselExampleSlidesOnly" class="carousel slide div" data-ride="carousel">
<div class='logo' ></div>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="pic/pro/<?php echo @$row['image_a'] ; ?>" class="d-block w-100" alt="..." height="355"  style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="pic/pro/<?php echo @$row['image_b'] ; ?>" class="d-block w-100" alt="..."  height="355" style="border-radius: 40px;"  >
</div>
<div class="carousel-item">
<img src="pic/pro/<?php echo @$row['image_c'] ; ?>" class="d-block w-100" alt="..."  height="355" style="border-radius: 40px;"  >
</div>
</div>
</div>
</div>
</div>
</div>
<br><br>
<?php
}
?>
<br>
<h4 class="text" >كيف تستفيد من سكني؟</h4>
<br>
<p class="text">
للاستفادة من محرك بحث سكني للعقارات والحصول على أفضل النتائج:
ابدأ عملية البحث عن عقارك باختيار المدينة التي تريد السكن بها ثم تحديد المنطقة أو الحي داخل المدينة ليتم إظهار كل العقارات المعروضة للبيع أو للإيجار داخل المدينة والحي المطلوب، - على سبيل المثال: يمكنك اختيار المدينة: القاهرة ثم المنطقة: مصر الجديدة فيظهر أمامك كل إعلانات العقارات المعروضة للبيع أو للشراء في مدينة القاهرة، حي مصر الجديدة.
قم باختيار حالة العقار الذي تبحث عنه ( عقار للبيع / عقار للإيجار ) كما يمكنك اختيار نوع العقار (شقة ، فيلا ، شاليه ، دوبلكس ، عيادة ، أراضي ، طابق كامل أو مجمع سكني كامل).
قم بتحديد السعر المناسب لك عن طريق تحديد أقل سعر أو أقصي سعر أو كلاهما معًا للعقار المعروض للبيع (الذي تبحث عنه)
كما يمكنك أيضًا الحصول على نتائج أكثر دقة عن طريق تحديد المساحة الكلية التي تريدها للعقار، فقط قم باختيار أقل مساحة للعقار وأقصي مساحة للعقار.
وفي حالة البحث عن شقق للبيع أو شقق للإيجار يمكنك اختيار عدد الغرف المطلوب داخل الوحدة عن طريق تحديد أقل عدد للغرف و أقصي عدد للغرف.
<br><br>
<a href="contact.php" class="text" >اذا واجهتك اى مشكلة لا تتردد في الاتصال بنا الآن</a>
</p>
</div>
<?php
@require'footer.php';
?>