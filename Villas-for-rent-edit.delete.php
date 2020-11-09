<?php
$title = ' فيلاا ايجار تعديل | مسح';

@require'nav.php';

if(@$_SESSION['Type'] < 3 ){ 
	header( "refresh:0;url=index.php" );
}

@$id = $_GET['id'];
$searsh = " select * from Villas_for_rent where OID='$id' ";
$query = mysqli_query($conn,$searsh);
$count = mysqli_num_rows($query);
@$row = mysqli_fetch_assoc($query);
if(@$row['OID'] == $id){
?>
<div class="container text "  style="height: auto;" >
<form  method="POST" action="<?php echo $_SERVER["PHP_SELF"] . "?id=" .@$row['OID'];?>" enctype="multipart/form-data">
<div class="form-group row pt-4">
<label for="city" class="col-md-4 col-form-label text-md-right">المحافظة</label>
<div class="col-md-6">
<input autocomplete="off" id="city" type="text" class="form-control " name="city" value="<?php echo @$row['city'] ; ?>" required   style="background-color: rgba(232,232,232,0.6);">     
</div>
</div>
<div class="form-group row">
<label for="location" class="col-md-4 col-form-label text-md-right">الموقع</label>
<div class="col-md-6">
<input autocomplete="off" id="location" type="text" class="form-control" name="location" value="<?php echo @$row['location'] ; ?>"  required   style="background-color: rgba(232,232,232,0.6);">                      
</div>
</div>
<div class="form-group row">
<label for="space" class="col-md-4 col-form-label text-md-right">المساحة</label>
<div class="col-md-6">
<input autocomplete="off" id="space" type="text" class="form-control" name="space" value="<?php echo @$row['space'] ; ?>"  required   style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="price" class="col-md-4 col-form-label text-md-right">السعر</label>
<div class="col-md-6">
<input autocomplete="off" id="price" type="text" class="form-control" name="price" value="<?php echo @$row['price'] ; ?>"  required   style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="rooms" class="col-md-4 col-form-label text-md-right">عدد الغرف</label>
<div class="col-md-6">
<input autocomplete="off" id="rooms" type="text" class="form-control" name="rooms" value="<?php echo @$row['rooms'] ; ?>"  required   style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="paths" class="col-md-4 col-form-label text-md-right">عدد الحمامات</label>
<div class="col-md-6">
<input autocomplete="off" id="paths" type="halls" class="form-control" name="paths"  value="<?php echo @$row['paths'] ; ?>" required   style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="balconies" class="col-md-4 col-form-label text-md-right">عدد البالكونات</label>
<div class="col-md-6">
<input autocomplete="off" id="balconies" type="text" class="form-control" name="balconies" value="<?php echo @$row['balconies'] ; ?>"  required   style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="garden" class="col-md-4 col-form-label text-md-right">جنينة</label>
<div class="col-md-6">
<select class="custom-select" value="<?php echo @$row['garden'] ; ?>" name="garden"  id="inputGroupSelect04"   required   aria-label="Example select with button addon"style="background-color: rgba(232,232,232,0.6);">
<option selected value="<?php echo @$row['garden'] ; ?>"  ><?php echo @$row['garden'] ; ?></option>
<option value="يوجد">يوجد</option>
<option value="لا يوجد"> لا يوجد </option>
</select>
</div>
</div>
<div class="form-group row">
<label for="garage" class="col-md-4 col-form-label text-md-right">جراج</label>
<div class="col-md-6">
<select class="custom-select"  name="garage"  id="inputGroupSelect04"   required   aria-label="Example select with button addon"style="background-color: rgba(232,232,232,0.6);">
<option selected value="<?php echo @$row['garage'] ; ?>" ><?php echo @$row['garage'] ; ?></option>
<option value="يوجد">يوجد</option>
<option value="لا يوجد"> لا يوجد </option>
</select>
</div>
</div>
<div class="form-group row">
<label for="guard" class="col-md-4 col-form-label text-md-right">حارس</label>
<div class="col-md-6">
<select class="custom-select"  name="guard"  id="inputGroupSelect04"    required   aria-label="Example select with button addon"style="background-color: rgba(232,232,232,0.6);">
<option selected value="<?php echo @$row['guard'] ; ?>"  ><?php echo @$row['guard'] ; ?></option>
<option value="يوجد">يوجد</option>
<option value="لا يوجد"> لا يوجد </option>
</select>
</div>
</div>
<div class="form-group row">
<label for="detials" class="col-md-4 col-form-label text-md-right">تفاصيل</label>
<div class="col-md-6">
<textarea id="detials" type="text" class="form-control" name="detials" required rows="4" cols="50"  style="background-color: rgba(232,232,232,0.6);height:100px;"> <?php echo @$row['detials'] ; ?></textarea>
</div>
</div>
<div class="form-group row">
<label for="phone" class="col-md-4 col-form-label text-md-right">صور</label>
<div class="col-md-6">
<input autocomplete="off" type="file" name="image_a" id="image_a" required style="background-color: rgba(232,232,232,0.6);width:170px;">
<input autocomplete="off" type="file" name="image_b" id="image_b" required style="background-color: rgba(232,232,232,0.6);width:170px;">
<input autocomplete="off" type="file" name="image_c" id="image_c" required style="background-color: rgba(232,232,232,0.6);width:170px;">
<br> <br> 
<input autocomplete="off" type="file" name="image_d" id="image_d" required style="background-color: rgba(232,232,232,0.6);width:170px;">
<input autocomplete="off" type="file" name="image_e" id="image_e" required style="background-color: rgba(232,232,232,0.6);width:170px;">
<input autocomplete="off" type="file" name="image_f" id="image_f" required style="background-color: rgba(232,232,232,0.6);width:170px;">
</div>
</div>
<br> 
<button type="submit"  name="edit" class="btn btn-primary mb-4 " style="opacity: 0.6;width:150px;"  >عدل</button>

</form>
<form  method="POST" action="<?php echo $_SERVER["PHP_SELF"] . "?id=" .@$row['OID'];?>">
<button type="submit" name="delete"  class="btn btn-danger mb-2" style="opacity: 0.6;width:150px;"  >حذف</button>
</form>
</div>
</div>
<?php
if(isset($_POST['edit'])){

$city = mysqli_real_escape_string($conn, $_POST['city']) ;
$location = mysqli_real_escape_string($conn, $_POST['location']) ;
$space = mysqli_real_escape_string($conn, $_POST['space']) ;
$price = mysqli_real_escape_string($conn, $_POST['price']) ;
$rooms = mysqli_real_escape_string($conn, $_POST['rooms']) ;
$paths = mysqli_real_escape_string($conn, $_POST['paths']) ;
$balconies = mysqli_real_escape_string($conn, $_POST['balconies']) ;
$garden = mysqli_real_escape_string($conn, $_POST['garden']) ;
$garage = mysqli_real_escape_string($conn, $_POST['garage']) ;
$guard = mysqli_real_escape_string($conn, $_POST['guard']) ;
$detials = mysqli_real_escape_string($conn, $_POST['detials']) ;
$image_a = $_FILES["image_a"];
$image_b = $_FILES["image_b"];
$image_c = $_FILES["image_c"];
$image_a = $_FILES["image_d"];
$image_b = $_FILES["image_e"];
$image_c = $_FILES["image_f"];

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

$named = $_FILES["image_d"]["name"];
$sized = $_FILES["image_d"]["size"];
$tmp_named = $_FILES["image_d"]["tmp_name"];
$typed = $_FILES["image_d"]["type"];

$exd = array("jpg", "jpeg", "png");

$image_infod = explode(".", $named); 
$exxd = end($image_infod);

$namee = $_FILES["image_e"]["name"];
$sizee = $_FILES["image_e"]["size"];
$tmp_namee = $_FILES["image_e"]["tmp_name"];
$typee = $_FILES["image_e"]["type"];

$exe = array("jpg", "jpeg", "png");

$image_infoe = explode(".", $namee); 
$exxe = end($image_infoe);

$namef = $_FILES["image_f"]["name"];
$sizef = $_FILES["image_f"]["size"];
$tmp_namef = $_FILES["image_f"]["tmp_name"];
$typef = $_FILES["image_f"]["type"];

$exf = array("jpg", "jpeg", "png");

$image_infof = explode(".", $namef); 
$exxf = end($image_infof);

if (! empty($namea)  &&  in_array ($exxa, $exa)) {

}else{
header( "refresh:1;url=Villas-for-rent.php" );
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
header( "refresh:1;url=Villas-for-rent.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>اقصي مساحة للصورة 4 ميجا </h3>
</div>
<?php
exit();
}else{
}
$pica = rand(0,1000000000) . '_' . $namea;

move_uploaded_file($tmp_namea, "pic\Villas\\rent\\" . $pica);
if (! empty($nameb)  &&  in_array ($exxb, $exb)) {
}else{
header( "refresh:1;url=Villas-for-rent.php" );
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
header( "refresh:1;url=Villas-for-rent.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>اقصي مساحة للصورة 4 ميجا </h3>
</div>
<?php
exit();
}else{
}
$picb = rand(0,1000000000) . '_' . $nameb;

move_uploaded_file($tmp_nameb, "pic\Villas\\rent\\" . $picb);
if (! empty($namec)  &&  in_array ($exxc, $exc)) {
}else{
header( "refresh:1;url=Villas-for-rent.php" );
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
header( "refresh:1;url=Villas-for-rent.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>اقصي مساحة للصورة 4 ميجا </h3>
</div>
<?php
exit();
}else{
}
$picc = rand(0,1000000000) . '_' . $namec;

move_uploaded_file($tmp_namec, "pic\Villas\\rent\\" . $picc);

if (! empty($named)  &&  in_array ($exxd, $exd)) {
}else{
header( "refresh:1;url=Villas-for-rent.php" );
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
if ($sized > 4194304) { 
header( "refresh:1;url=Villas-for-rent.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>اقصي مساحة للصورة 4 ميجا </h3>
</div>
<?php
exit();
}else{
}
$picd = rand(0,1000000000) . '_' . $named;

move_uploaded_file($tmp_named, "pic\Villas\\rent\\" . $picd);
if (! empty($namee)  &&  in_array ($exxe, $exe)) {
}else{
header( "refresh:1;url=Villas-for-rent.php" );
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
if ($sizee > 4194304) { 
header( "refresh:1;url=Villas-for-rent.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>اقصي مساحة للصورة 4 ميجا </h3>
</div>
<?php
exit();
}else{
}
$pice = rand(0,1000000000) . '_' . $namee;

move_uploaded_file($tmp_namee, "pic\Villas\\rent\\" . $pice);

if (! empty($namef)  &&  in_array ($exxf, $exf)) {
}else{
header( "refresh:1;url=Villas-for-rent.php" );
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
if ($sizef > 4194304) { 
header( "refresh:1;url=Villas-for-rent.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>اقصي مساحة للصورة 4 ميجا </h3>
</div>
<?php
exit();
}else{
}
$picf = rand(0,1000000000) . '_' . $namef;
move_uploaded_file($tmp_namef, "pic\Villas\\rent\\" . $picf);

$update = "update Villas_for_rent set city = '$city', location = '$location', space = '$space', price = '$price', rooms = '$rooms', paths = '$paths', balconies = '$balconies', garden = '$garden', garage = '$garage', guard = '$guard', detials = '$detials', image_a = '$pica', image_b = '$picb', image_c = '$picc', image_d = '$picd', image_e = '$pice', image_f = '$picf'  where OID='$id' ";

$iquery = mysqli_query($conn,$update);

unlink('pic\Villas\\rent\\'.@$row['image_a']);
unlink('pic\Villas\\rent\\'.@$row['image_b']);
unlink('pic\Villas\\rent\\'.@$row['image_c']);
unlink('pic\Villas\\rent\\'.@$row['image_d']);
unlink('pic\Villas\\rent\\'.@$row['image_e']);
unlink('pic\Villas\\rent\\'.@$row['image_f']);

if ($iquery)
{
header( "refresh:1;url=Villas-for-rent.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(31, 140, 54, 0.85);box-shadow: -4px 0px 9px 7px rgba(31, 140, 54, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>تم التعديل بنجاح</h3>
</div>
<?php
}else{
header( "refresh:1;url=Villas-for-rent.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>خطأ في التعديل حاول مرة اخري </h3>
</div>
<?php
}
}		
if(isset($_POST['delete'])){

$delete = "delete from Villas_for_rent where OID='$id' ";

$iquery_delete = mysqli_query($conn,$delete);

unlink('pic\Villas\\rent\\'.@$row['image_a']);
unlink('pic\Villas\\rent\\'.@$row['image_b']);
unlink('pic\Villas\\rent\\'.@$row['image_c']);
unlink('pic\Villas\\rent\\'.@$row['image_d']);
unlink('pic\Villas\\rent\\'.@$row['image_e']);
unlink('pic\Villas\\rent\\'.@$row['image_f']);

if ($iquery_delete)
{
header( "refresh:1;url=Villas-for-rent.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(31, 140, 54, 0.85);box-shadow: -4px 0px 9px 7px rgba(31, 140, 54, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>تم المسح بنجاح</h3>
</div>
<?php
}else{
header( "refresh:1;url=Villas-for-rent.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>خطأ في المسح حاول مرة اخري </h3>
</div>
<?php
}
}
}else {
header( "refresh:1;url=index.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>خطأ</h3>
</div>
<?php
}
@require'footer.php';
?>