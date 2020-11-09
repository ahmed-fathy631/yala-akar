<?php
$title = 'تعديل | حذف مشروع';
@require'nav.php';

if(@$_SESSION['Type'] < 3 ){ 
	header( "refresh:0;url=index.php" );
}

@$id = $_GET['id'];
$searsh = " select * from pro where proID='$id' ";
$query = mysqli_query($conn,$searsh);
$count = mysqli_num_rows($query);
@$row = mysqli_fetch_assoc($query);
if(@$row['proID'] == $id){
?>
<div class="container text "  style="height: auto;" >
<form  method="POST" action="<?php echo $_SERVER["PHP_SELF"] . "?id=" .@$row['proID'];?>" enctype="multipart/form-data">
<div class="form-group row pt-4 ">
<label for="name" class="col-md-4 col-form-label text-md-right">الاسم المشروع</label>
<div class="col-md-6">
<input autocomplete="off" id="name" type="text" class="form-control " name="name" value="<?php echo @$row['name'] ; ?>" required  autofocus style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row ">
<label for="city" class="col-md-4 col-form-label text-md-right">المحافظة</label>
<div class="col-md-6">
<input autocomplete="off" id="city" type="text" class="form-control " name="city" value="<?php echo @$row['city'] ; ?>" required   style="background-color: rgba(232,232,232,0.6);">     
</div>
</div>
<div class="form-group row">
<label for="location" class="col-md-4 col-form-label text-md-right">الموقع</label>
<div class="col-md-6">
<input autocomplete="off" id="location" type="text" class="form-control" name="location" value="<?php echo @$row['location'] ; ?>"    required   style="background-color: rgba(232,232,232,0.6);">                      
</div>
</div>
<div class="form-group row">
<label for="type" class="col-md-4 col-form-label text-md-right">النوع</label>
<div class="col-md-6">
<input autocomplete="off" id="type" type="text" class="form-control" name="type" value="<?php echo @$row['type'] ; ?>"   required   style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="min_space" class="col-md-4 col-form-label text-md-right">اقل مساحة </label>
<div class="col-md-6">
<input autocomplete="off" id="min_space" type="text" class="form-control" name="min_space" value="<?php echo @$row['min_space'] ; ?>" required   style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="max_space" class="col-md-4 col-form-label text-md-right">اعلي مساحة</label>
<div class="col-md-6">
<input autocomplete="off" id="max_space" type="text" class="form-control" name="max_space" value="<?php echo @$row['max_space'] ; ?>"  required   style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="min_price" class="col-md-4 col-form-label text-md-right">اقل سعر</label>
<div class="col-md-6">
<input autocomplete="off" id="min_price" type="text" class="form-control" name="min_price" value="<?php echo @$row['min_price'] ; ?>"  required   style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="max_price" class="col-md-4 col-form-label text-md-right">اعلي سعر</label>
<div class="col-md-6">
<input autocomplete="off" id="max_price" type="text" class="form-control" name="max_price" value="<?php echo @$row['max_price'] ; ?>"  required   style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="detials" class="col-md-4 col-form-label text-md-right">تفاصيل</label>
<div class="col-md-6">
<textarea id="detials" type="text" class="form-control" name="detials"   required rows="4" cols="50"  style="background-color: rgba(232,232,232,0.6);height:100px;"><?php echo @$row['detials'] ; ?></textarea>
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
<button type="submit"  name="edit" class="btn btn-primary mb-2 " style="opacity: 0.6;width:150px;"  >تعديل </button>
</form>
<form  method="POST" action="<?php echo $_SERVER["PHP_SELF"] . "?id=" .@$row['proID'];?>">
<button type="submit" name="delete"  class="btn btn-danger mb-2" style="opacity: 0.6;width:150px;"  >حذف</button>
</form>
</div>
</div>
<?php
if(isset($_POST['edit'])){
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
header( "refresh:1;url=new-pro.php" );
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
header( "refresh:1;url=new-pro.php" );
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
header( "refresh:1;url=new-pro.php" );
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
header( "refresh:1;url=new-pro.php" );
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
header( "refresh:1;url=new-pro.php" );
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
header( "refresh:1;url=new-pro.php" );
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
move_uploaded_file($tmp_namec, "pic\pro\\" . $picc);

$update = "update Pro set name = '$name', city = '$city', location = '$location', type = '$type', min_space = '$min_space', max_space = '$max_space', min_price = '$min_price', max_price = '$max_price', detials = '$detials', image_a = '$pica', image_b = '$picb', image_c = '$picc' where proID='$id' ";
$iquery = mysqli_query($conn,$update);

unlink('pic\pro\\'.@$row['image_a']);
unlink('pic\pro\\'.@$row['image_b']);
unlink('pic\pro\\'.@$row['image_c']);

if ($iquery)
{
header( "refresh:1;url=new-pro.php" );
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
header( "refresh:1;url=new-pro.php" );
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

$delete = "delete from Pro where proID='$id' ";

$iquery_delete = mysqli_query($conn,$delete);

unlink('pic\pro\\'.@$row['image_a']);
unlink('pic\pro\\'.@$row['image_b']);
unlink('pic\pro\\'.@$row['image_c']);

if ($iquery_delete)
{
header( "refresh:1;url=new-pro.php" );
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
header( "refresh:1;url=new-pro.php" );
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