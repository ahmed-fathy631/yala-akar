<?php
session_start();
ob_start() ;
include 'db.php';
?>
<!DOCTYPE html>
<html dir="rtl">

<head>

<title><?php echo $title ; ?></title>
<link rel="icon" href=" image/logo.png" type="image/x-icon" />
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

<!-- start nav -->

<nav class="navbar navbar-expand-md navbar-light  bg-darkk m-5 shadow-sm " style='border-radius: 80px;'>
<img src="image/logo.png" height="60" width="75" class="mb-3 "/>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse  ml-5  " id="navbarNavDropdown">
<ul class="navbar-nav">
<li class="nav-item active" >
<a  href="index.php"><i class="fas fa-home fa-2x"></i><span class="sr-only">(current)</span></a>
</li>
<li class="nav-item mr-3 mt-2">
<a  href="new-pro.php">احدث المشروعات</a>
</li>
<li class="nav-item mt-2">
<a  href="about-us.php">من نحن </a>
</li>
<li class="nav-item mt-2">
<a  href="contact.php">اتصل بنا</a>
</li>
<li class="nav-item dropdown mt-2">
<a class=" dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
فيلل
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item" href="Villas-for-sale.php">للبيع</a>
<a class="dropdown-item" href="Villas-for-rent.php">للايجار</a> 
<?php
if(@$_SESSION['Type'] == "" ){ 
}else if($_SESSION['Type'] > 1){
?>
<a class="dropdown-item" href="Villas-add.php">اضف فيلاا</a>
<?php
}else if($_SESSION['Type'] == 1){
}else{
}
?>
</div>
</li>
<li class="nav-item dropdown mt-2">
<a class=" dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
شقق
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item" href="Owned-apartment.php">للبيع</a>
<a class="dropdown-item" href="New-rent-apartment.php">ايجار جديد</a>
<a class="dropdown-item" href="old-rent-apartment.php">ايجار قديم </a>
<?php
if(@$_SESSION['Type'] == "" ){ 
}else if($_SESSION['Type'] > 1){
?>
<a class="dropdown-item" href="apartment-add.php">اضف شقة</a>
<?php
}else if($_SESSION['Type'] == 1){

}else{
}
?>
</div>
</li>
<?php
if(@$_SESSION['Type'] == "" ){ 
}else if($_SESSION['Type'] == 3){
mysqli_select_db($conn,"yala_akar");
$result = mysqli_query($conn,"select * from Messages ORDER BY msgID DESC");
$msg= mysqli_num_rows($result);
?>
<li class="nav-item dropdown mt-2">
<a class=" dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
يلا عقار 
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item" href="statistics.php">احصائيات</a>
<a class="dropdown-item" href="Messages.php">رسائل <span> ( <?php echo $msg ; ?> ) </span></a> 
</div>
</li>
<?php
}else{
}
?>
<li class="nav-item dropdown mt-2">
<a class=" dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php
if(@$_SESSION['Name'] == "" ){ 
echo'تسجيل';
}else{
print_r($_SESSION['Name']);
}
?>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<?php
if($_SESSION['Type'] == ""){ 
?>
<a class="dropdown-item" href="register.php">حساب جديد</a>
<a class="dropdown-item" href="login.php">تسجيل الدخول </a>
<?php
}else{
?>
<a class="dropdown-item" href="user.edit.php">تعديل البيانات</a>
<a class="dropdown-item" href="logout.php">تسجيل الخروج</a>
<?php
}
?>
</div>
</li>
</ul>
</div>
<button type="button" class="toggle-mode toggle-mode1  ml-3  " onclick="myFunction()" ><i class="fas fa-palette fa-2x "></i></button>
</nav> 
<!-- end nav -->
<!-- start body -->
<div class="container">