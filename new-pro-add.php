<?php
$title = 'اضف مشروع';
@require'nav.php';

if(@$_SESSION['Type'] < 2 ){ 
	header( "refresh:0;url=index.php" );
}

if(isset($_POST['submit'])){
$name = mysqli_real_escape_string($conn, $_POST['name']) ;
$city = mysqli_real_escape_string($conn, $_POST['city']) ;
$location = mysqli_real_escape_string($conn, $_POST['location']) ;
$type = mysqli_real_escape_string($conn, $_POST['type']) ;
$min_space = mysqli_real_escape_string($conn, $_POST['min_space']) ;
$max_space = mysqli_real_escape_string($conn, $_POST['max_space']) ;
$min_price = mysqli_real_escape_string($conn, $_POST['min_price']) ;
$max_price = mysqli_real_escape_string($conn, $_POST['max_price']) ;
$detials = mysqli_real_escape_string($conn, $_POST['detials']) ;
$image_a = $_FILES["image_a"];
$image_b = $_FILES["image_b"];
$image_c = $_FILES["image_c"];
$userID = mysqli_real_escape_string($conn, $_SESSION['userID']) ;
$userName = mysqli_real_escape_string($conn, $_SESSION['Name']) ;
$Email = mysqli_real_escape_string($conn, $_SESSION['Email']) ;
$Phone = mysqli_real_escape_string($conn, $_SESSION['Phone']) ;

$namea = $_FILES["image_a"]["name"];
$sizea = $_FILES["image_a"]["size"];
$tmp_namea = $_FILES["image_a"]["tmp_name"];
$typea = $_FILES["image_a"]["type"];

$exa = array("jpg", "jpeg", "png");

$image_infoa = explode(".", $namea); 
$exxa = end($image_infoa);

$nameb = $_FILES["image_b"]["name"];
$sizeb = $_FILES["image_b"]["size"];
$tmp_nameb = $_FILES["image_b"]["tmp_name"];
$typeb = $_FILES["image_b"]["type"];

$exb = array("jpg", "jpeg", "png");

$image_infob = explode(".", $nameb); 
$exxb = end($image_infob);

$namec = $_FILES["image_c"]["name"];
$sizec = $_FILES["image_c"]["size"];
$tmp_namec = $_FILES["image_c"]["tmp_name"];
$typec = $_FILES["image_c"]["type"];

$exc = array("jpg", "jpeg", "png");

$image_infoc = explode(".", $namec); 
$exxc = end($image_infoc);

if (! empty($namea)  &&  in_array ($exxa, $exa)) {
}else{
header( "refresh:1;url=new-pro-add.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>خطأ في الامتداد </h3>
</div>
<?php
exit();
}
if ($sizea > 4194304) { 
header( "refresh:1;url=new-pro-add.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>اقصي مساحة للصورة 4 ميجا (1)</h3>
</div>
<?php
exit();
}else{
}
$pica = rand(0,1000000000) . '_' . $namea;
move_uploaded_file($tmp_namea, "pic\pro\\" . $pica);

if (! empty($nameb)  &&  in_array ($exxb, $exb)) {

}else{
header( "refresh:1;url=new-pro-add.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>خطأ في الامتداد </h3>
</div>
<?php
exit();
}
if ($sizeb > 4194304) { 
header( "refresh:1;url=new-pro-add.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>اقصي مساحة للصورة 4 ميجا (1)</h3>
</div>
<?php
exit();
}else{
}
$picb = rand(0,1000000000) . '_' . $nameb;
move_uploaded_file($tmp_nameb, "pic\pro\\" . $picb);

if (! empty($namec)  &&  in_array ($exxc, $exc)) {

}else{
header( "refresh:1;url=new-pro-add.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>خطأ في الامتداد </h3>
</div>
<?php
exit();
}
if ($sizec > 4194304) { 
header( "refresh:1;url=new-pro-add.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>اقصي مساحة للصورة 4 ميجا (1)</h3>
</div>
<?php
exit();
}else{
}
$picc = rand(0,1000000000) . '_' . $namec;
move_uploaded_file($tmp_namec, "pic\pro\\" . $picc);

$insert = "INSERT INTO Pro (name, city, location, type, min_space, max_space, min_price, max_price, detials, image_a, image_b, image_c, userID, userName, Email, Phone) 
VALUES('$name','$city','$location','$type','$min_space','$max_space','$min_price','$max_price','$detials','$pica','$picb','$picc','$userID','$userName','$Email','$Phone')";

$iquery = mysqli_query($conn,$insert);
if ($iquery)
{
header( "refresh:1;url=new-pro.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(31, 140, 54, 0.85);box-shadow: -4px 0px 9px 7px rgba(31, 140, 54, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>تم الاضافة بنجاح</h3>
</div>
<?php
}else{
header( "refresh:1;url=new-pro-add.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>خطأ في الاضافة حاول مرة اخري </h3>
</div>
<?php
}
}
?>
<div class="container text "  style="height: auto;" >
<form  method="POST" action="new-pro-add.php" enctype="multipart/form-data">
<div class="form-group row pt-4 ">
<label for="name" class="col-md-4 col-form-label text-md-right">الاسم المشروع</label>
<div class="col-md-6">
<input autocomplete="off" id="name" type="text" class="form-control " name="name" value="" required  autofocus style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row ">
<label for="city" class="col-md-4 col-form-label text-md-right">المحافظة</label>
<div class="col-md-6">
<input autocomplete="off" id="city" type="text" class="form-control " name="city" value="" required   style="background-color: rgba(232,232,232,0.6);">     
</div>
</div>
<div class="form-group row">
<label for="location" class="col-md-4 col-form-label text-md-right">الموقع</label>
<div class="col-md-6">
<input autocomplete="off" id="location" type="text" class="form-control" name="location" required   style="background-color: rgba(232,232,232,0.6);">                      
</div>
</div>
<div class="form-group row">
<label for="type" class="col-md-4 col-form-label text-md-right">النوع</label>
<div class="col-md-6">
<input autocomplete="off" id="type" type="text" class="form-control" name="type" required   style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="min_space" class="col-md-4 col-form-label text-md-right">اقل مساحة </label>
<div class="col-md-6">
<input autocomplete="off" id="min_space" type="text" class="form-control" name="min_space" required   style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="max_space" class="col-md-4 col-form-label text-md-right">اعلي مساحة</label>
<div class="col-md-6">
<input autocomplete="off" id="max_space" type="text" class="form-control" name="max_space" required   style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="min_price" class="col-md-4 col-form-label text-md-right">اقل سعر</label>
<div class="col-md-6">
<input autocomplete="off" id="min_price" type="text" class="form-control" name="min_price" required   style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="max_price" class="col-md-4 col-form-label text-md-right">اعلي سعر</label>
<div class="col-md-6">
<input autocomplete="off" id="max_price" type="text" class="form-control" name="max_price" required   style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="detials" class="col-md-4 col-form-label text-md-right">تفاصيل</label>
<div class="col-md-6">
<textarea id="detials" type="text" class="form-control" name="detials" required rows="4" cols="50"  style="background-color: rgba(232,232,232,0.6);height:100px;"></textarea>
</div>
</div>
<div class="form-group row">
<label for="phone" class="col-md-4 col-form-label text-md-right">صور</label>
<div class="col-md-6">
<input autocomplete="off" type="file" name="image_a" id="image_a" required style="background-color: rgba(232,232,232,0.6);width:170px;">
<input autocomplete="off" type="file" name="image_b" id="image_b" required style="background-color: rgba(232,232,232,0.6);width:170px;">
<input autocomplete="off" type="file" name="image_c" id="image_c" required style="background-color: rgba(232,232,232,0.6);width:170px;">
</div>
</div>
<br> 
<button type="submit"  name="submit" class="btn btn-primary mb-4 " style="opacity: 0.6;width:150px;"  >
اضف
</button>
</form>
</div>
</div>
<?php
@require'footer.php';
?>