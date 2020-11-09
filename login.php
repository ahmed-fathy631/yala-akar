<?php
$title = 'تسجيل الدخول';
@require'nav.php';


if(!@$_SESSION['Type'] == "" ){ 
header( "refresh:0;url=index.php" );
}

if(isset($_POST['submit'])){
$email = $_POST['email'] ;
$password = $_POST['password'] ;
$emailsearsh = " select * from user where Email='$email' ";
$query = mysqli_query($conn,$emailsearsh);
$emailcount = mysqli_num_rows($query);

if($emailcount){
$emailpass = mysqli_fetch_assoc($query);

$dbpass = $emailpass['Password'];

$type = $emailpass['Type'];

$aa = $emailpass['Name'];

if($dbpass === $password){
header( "refresh:1;url=index.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(31, 140, 54, 0.85);box-shadow: -4px 0px 9px 7px rgba(31, 140, 54, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>مرحبا<h4><?php echo $aa ; ?> </h4></h3>
</div>
<?php
$_SESSION = $emailpass; // Register Session Name

}else{
header( "refresh:1;url=login.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>تاكد من كلمة السر</h3>
</div>
<?php
}
}else{
header( "refresh:1;url=login.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>تاكد من البريد الالكتروني</h3>
</div>
<?php
}
}
?>
<div class="container text "  style="height: auto;" >
<form method="POST" action="login.php">
<div class="form-group row pt-3">
<label for="email" class="col-md-4 col-form-label text-md-right">البريد الالكتروني</label>
<div class="col-md-6">
<input autocomplete="off" id="email" type="email" class="form-control" name="email" value="" required autocomplete="email" autofocus  style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row">
<label for="password" class="col-md-4 col-form-label text-md-right">كلمة السر</label>
<div class="col-md-6">
<input autocomplete="off" id="password" type="password" class="form-control" name="password" required autocomplete="current-password"  style="background-color: rgba(232,232,232,0.6);">
</div>
</div>
<div class="form-group row pb-3">
<div  class="col-md-4 col-form-label text-md-right ">	
</div>
<div class="col-md-6">
<button type="submit"  name="submit"   class="btn btn-primary  ml-5" style="opacity:0.6;width: 100px;">دخول</button>
</div>
</div>
</div>
</form>
</div>
</div>
<?php
@require'footer.php';
?>