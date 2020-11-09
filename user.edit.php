<?php
$title = 'تعديل حساب ';

@require'nav.php';

if(@$_SESSION['Type'] == "" ){ 
    header( "refresh:0;url=index.php" );
    }
    
$id = @$_SESSION['userID'] ;
$searsh = " select * from User where userID='$id' ";
$query = mysqli_query($conn,$searsh);
$count = mysqli_num_rows($query);
@$row = mysqli_fetch_assoc($query);

if(@$row['userID'] == $id){
?>
<div class="container text "  style="height: auto;" >
<form  method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" >
<div class="form-group row pt-4 ">
<label for="name" class="col-md-4 col-form-label text-md-right">الاسم</label>
<div class="col-md-6">
<input autocomplete="off" id="name" type="text" class="form-control " name="name" value="<?php echo @$row['Name'] ; ?>" required autocomplete="name" autofocus style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row ">
<label for="email" class="col-md-4 col-form-label text-md-right">البريد الالكتروني</label>
<div class="col-md-6">
<input autocomplete="off" id="email" type="email" class="form-control " name="email" value="<?php echo @$row['Email'] ; ?>" required autocomplete="email"  style="background-color: rgba(232,232,232,0.6);">     
</div>
</div>
<div class="form-group row">
<label for="password" class="col-md-4 col-form-label text-md-right">كلمة السر</label>
<div class="col-md-6">
<input autocomplete="off" id="password" type="password" class="form-control" name="password" value="<?php echo @$row['Password'] ; ?>"  required autocomplete="new-password"  style="background-color: rgba(232,232,232,0.6);">                      
</div>
</div>
<div class="form-group row">
<label for="password-confirm" class="col-md-4 col-form-label text-md-right">تاكيد كلمة السر</label>
<div class="col-md-6">
<input autocomplete="off" id="password-confirm" type="password" class="form-control" name="cpassword" value="<?php echo @$row['cpassword'] ; ?>"  required autocomplete="new-password"  style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="phone" class="col-md-4 col-form-label text-md-right">التليفون</label>
<div class="col-md-6">
<input autocomplete="off" id="phone" type="number"  min='0' class="form-control" name="phone" value="<?php echo @$row['Phone'] ; ?>"  required autocomplete="new-phone"  style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<br> 
<br> 
<button type="submit"  name="edit" class="btn btn-primary mb-4 " style="opacity: 0.6;width:150px;"  >عدل</button>
</form>
</div>
</div>
<?php
if(isset($_POST['edit'])){

$username = mysqli_real_escape_string($conn, $_POST['name']) ;
$email = mysqli_real_escape_string($conn, $_POST['email']) ;
$password = mysqli_real_escape_string($conn, $_POST['password']) ;
$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']) ;
$phone = mysqli_real_escape_string($conn, $_POST['phone']) ;

$pass = sha1($password);
$cpass = sha1($cpassword);

$emailquery = " select * from user where Email='$email' ";
$query = mysqli_query($conn,$emailquery);

$emailcount = mysqli_num_rows($query);

if($emailcount>0){
if(@$row['Email'] !== $email){
header( "refresh:1;url=index.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>البريد الالكتروني متواجد مسبقا</h3>
</div>
<?php
}else{
if($password === $cpassword){

$update = "update User set Name = '$username', Email = '$email', Password = '$password', cpassword = '$cpassword', Phone = '$phone'  where userID='$id' ";

$iquery = mysqli_query($conn,$update);

if ($iquery)
{
session_start();
$_SESSION = array();
session_destroy();

header( "refresh:1;url=login.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(31, 140, 54, 0.85);box-shadow: -4px 0px 9px 7px rgba(31, 140, 54, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3><h4> تم التعديل </h4> سجل الدخول مرة اخري</h3>
</div>
<?php
}else{
header( "refresh:1;url=index.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3> خطأ لم يتم التعديل حاول مرة اخري </h3>
</div>
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
<h3>تاكيد كلمة السر خطا</h3>
</div>
<?php
}
}
}else{
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
<h3>خطا</h3>
</div>
<?php
}
@require'footer.php';
?>