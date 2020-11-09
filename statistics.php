<?php
$title = 'احدثيات';

@require'nav.php';
header( "refresh:5;url=statistics.php" );
if(@$_SESSION['Type'] == 3){
mysqli_select_db($conn,"yala_akar");
$result1 = mysqli_query($conn,"select * from User");
$user = mysqli_num_rows($result1);

mysqli_select_db($conn,"yala_akar");
$result2 = mysqli_query($conn,"select * from Pro");
$Pro = mysqli_num_rows($result2);

mysqli_select_db($conn,"yala_akar");
$result3 = mysqli_query($conn,"select * from Owned_apartment");
$Owned_apartment = mysqli_num_rows($result3);

mysqli_select_db($conn,"yala_akar");
$result4 = mysqli_query($conn,"select * from New_rent_apartment");
$New_rent_apartment = mysqli_num_rows($result4);

mysqli_select_db($conn,"yala_akar");
$result5 = mysqli_query($conn,"select * from old_rent_apartment");
$old_rent_apartment = mysqli_num_rows($result5);

mysqli_select_db($conn,"yala_akar");
$result6 = mysqli_query($conn,"select * from Owned_villas");
$Owned_villas = mysqli_num_rows($result6);

mysqli_select_db($conn,"yala_akar");
$result7 = mysqli_query($conn,"select * from Villas_for_rent");
$Villas_for_rent = mysqli_num_rows($result7);
?>
<div class="container">
<h1 class="text mb-5">احصائيات</h1>
<br><br>
<h4 class="text">المشاريع الجديدة</h4>
<p class="text">عدد المشاريع : <span> <?php echo $Pro ; ?></span> مشروع </p>
<br><br>
<h4 class="text">الفيلل</h4>
<div class="row">
<div class="col-sm">
<div>
<p class="text">عدد الفيلل التمليك :  <span> <?php echo $Owned_villas ; ?></span> فيلاا </p>
</div>
</div> 
<div class="col-sm">
<div>
<p class="text">عدد الفيلل الايجار :  <span><?php echo $Villas_for_rent ; ?></span> فيلاا </p>
</div>
</div> 
</div>	
<br><br>
<h4 class="text">الشقق</h4>
<div class="row">
<div class="col-sm">
<div>
<p class="text">عدد الشقق التمليك : <span><?php echo $Owned_apartment ; ?></span> شقة </p>
</div>
</div>
<div class="col-sm">
<div>
<p class="text">عدد الشقق الايجار الجديد : <span><?php echo $New_rent_apartment ; ?></span> شقة </p>
</div>
</div>
<div class="col-sm">
<div>
<p class="text ">عدد الشقق الايجار القديم : <span><?php echo $old_rent_apartment ; ?></span> شقة </p>
</div>
</div>
</div>
<br><br>
<h4 class="text">المستخدمين</h4>
<p class="text">عدد المستخدمين : <span> <?php echo $user ; ?></span> مستخدم </p>
</div>
<br>
<div class="row">
<div class="col-sm">
<div>
<p class="text"> الرقم التسلسي</p>
</div>
</div>
<div class="col-sm">
<div>
<p class="text">الاسم</p>
</div>
</div>
<div class="col-sm">
<div>
<p class="text ">البريد الالكتروني</p>
</div>
</div>
<div class="col-sm">
<div>
<p class="text ">رقم الهاتف</p>
</div>
</div>
<div class="col-sm">
<div>
<p class="text ">-------------</p>
</div>
</div>
</div>
<br><br>
<div id="text" class="container-sm" style="
    width:400px;
    height:380px;
    border-radius: 40px;
    background-color:rgba(0, 0, 0, 0.9);
    box-shadow: -4px 0px 9px 7px rgba(0, 0, 0, 0.65);
    display: none;
    position:fixed;
    top:20%;
    right:0;
    bottom:0;
    left:0;
    z-index:100 ;
;">
<button type="button" class="close mr-5 mt-3  toggle-mode  " id="close"   onmouseover="document.getElementById('text').style.display = 'none'"  aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<iframe  name="page1" class="msg2" > </iframe>	 
</div>
<?php
while(@$row = mysqli_fetch_array($result1))
{
?>
<div class="row"  >
<div class="col-sm">
<div>
<p class="text"><?php echo @$row['userID'] ; ?></p>
</div>
</div>
<div class="col-sm">
<div>
<p class="text"><?php echo @$row['Name'] ; ?></p>
</div>
</div>
<div class="col-sm">
<div>
<p class="text "><?php echo @$row['Email'] ; ?></p>
</div>
</div>
<div class="col-sm">
<div>
<p class="text "><?php echo @$row['Phone'] ; ?></p>
</div>
</div>
<div class="col-sm"> 
<?php
if(@$row['Type'] == 3 ){ 
?>  
<a  href="#"   class="btn btn-danger disabled "  style="opacity: 0.7;height:30px;width:185px;"><h6>  مدير  <i class="fas fa-star"></i> <i class="fas fa-star"></i></h6></a>
<?php
}

if(@$row['Type'] == 2 ){ 
?>  
<a  href="#"   class="btn btn-danger disabled ml-2 "  style="opacity: 0.7;height:30px;"><h6>مدير<i class="fas fa-star"></i></h6></a>
<?php
}
if(@$row['Type'] < 3 ){ 
?>  
<a  href="user.delete.admin.php?id=<?php echo @$row['userID'] ; ?>" target="page1"   type="button" class="btn btn-primary  show "  onclick="document.getElementById('text').style.display = 'block'" style="opacity: 0.6;height:30px;width:100px;"><h6>تعديل</h6></a>
<?php
}
?>
</div>
</div>
<br><br>
<?php
}
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
<?php
@require'footer.php';
?>