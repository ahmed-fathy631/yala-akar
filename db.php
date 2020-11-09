<?php

$conn = mysqli_connect('localhost','root','','yala_akar');

if (!$conn)
{
    header( "refresh:1;url=db.php" );
    ?>
    <div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
    <button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
    <i class="fas fa-times" style="color:#fff;"></i>
    </button>
    <br><br><br><br>
    <h3>لا يوجد اتصال</h3>
    </div>
    <?php
}else{
}

//create DB

mysqli_query($conn,'CREATE DATABASE yala_akar');

//users

mysqli_select_db($conn,"yala_akar");
$sql = "CREATE TABLE User
(
userID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(userID),
Name varchar(50)NOT NULL,
Email varchar(50)NOT NULL,
Password varchar(10)NOT NULL,
cpassword varchar(10)NOT NULL,
Phone varchar(11)NOT NULL,
Type int DEFAULT '1'
)";
mysqli_query($conn,$sql);

//Owner Acount

$emailquery = " select * from user where Email='yala_akar@akar.com' ";
$query = mysqli_query($conn,$emailquery);
$emailcount = mysqli_num_rows($query);
if($emailcount>0){
}else{
$Owner = "insert into user (Name, Email, Password, Phone, Type, cpassword)
 values('Ahmed Fathy','yala_akar@akar.com','12345','01115080262','3','12345')";
mysqli_query($conn,$Owner);
}

//projects

mysqli_select_db($conn,"yala_akar");
$sql2 = "CREATE TABLE Pro
(
proID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(proID),
name varchar(50)NOT NULL,
city varchar(50)NOT NULL,
location varchar(50)NOT NULL,
type varchar(10)NOT NULL,
min_space varchar(100)NOT NULL,
max_space varchar(100)NOT NULL,
min_price varchar(100)NOT NULL,
max_price varchar(100)NOT NULL,
detials longtext NOT NULL,
image_a varchar(255)NOT NULL,
image_b varchar(255)NOT NULL,
image_c varchar(255)NOT NULL,
userID int NOT NULL, 
userName varchar(255)NOT NULL,
Email varchar(255)NOT NULL,
Phone varchar(11)NOT NULL
)";
mysqli_query($conn,$sql2);

//Owned-apartment

mysqli_select_db($conn,"yala_akar");
$sql3 = "CREATE TABLE Owned_apartment
(
OID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(OID),
city varchar(50)NOT NULL,
location varchar(50)NOT NULL,
type varchar(50)NOT NULL,
space varchar(100)NOT NULL,
price varchar(100)NOT NULL,
halls varchar(50)NOT NULL,
rooms varchar(50)NOT NULL,
paths varchar(50)NOT NULL,
balconies varchar(50)NOT NULL,
garden varchar(50)NOT NULL,
garage varchar(50)NOT NULL,
elevator varchar(50)NOT NULL,
guard varchar(50)NOT NULL,
detials longtext NOT NULL,
image_a varchar(255)NOT NULL,
image_b varchar(255)NOT NULL,
image_c varchar(255)NOT NULL,
image_d varchar(255)NOT NULL,
image_e varchar(255)NOT NULL,
image_f varchar(255)NOT NULL,
userID int NOT NULL, 
userName varchar(255)NOT NULL,
Email varchar(255)NOT NULL,
Phone varchar(11)NOT NULL
)";
mysqli_query($conn,$sql3);

//New-rent-apartment

mysqli_select_db($conn,"yala_akar");
$sql4 = "CREATE TABLE New_rent_apartment
(
OID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(OID),
city varchar(50)NOT NULL,
location varchar(50)NOT NULL,
type varchar(50)NOT NULL,
space varchar(100)NOT NULL,
price varchar(100)NOT NULL,
halls varchar(50)NOT NULL,
rooms varchar(50)NOT NULL,
paths varchar(50)NOT NULL,
balconies varchar(50)NOT NULL,
garden varchar(50)NOT NULL,
garage varchar(50)NOT NULL,
elevator varchar(50)NOT NULL,
guard varchar(50)NOT NULL,
detials longtext NOT NULL,
image_a varchar(255)NOT NULL,
image_b varchar(255)NOT NULL,
image_c varchar(255)NOT NULL,
image_d varchar(255)NOT NULL,
image_e varchar(255)NOT NULL,
image_f varchar(255)NOT NULL,
userID int NOT NULL, 
userName varchar(255)NOT NULL,
Email varchar(255)NOT NULL,
Phone varchar(11)NOT NULL
)";
mysqli_query($conn,$sql4);

//old-rent-apartment

mysqli_select_db($conn,"yala_akar");
$sql5 = "CREATE TABLE old_rent_apartment
(
OID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(OID),
city varchar(50)NOT NULL,
location varchar(50)NOT NULL,
type varchar(50)NOT NULL,
space varchar(100)NOT NULL,
price varchar(100)NOT NULL,
halls varchar(50)NOT NULL,
rooms varchar(50)NOT NULL,
paths varchar(50)NOT NULL,
balconies varchar(50)NOT NULL,
garden varchar(50)NOT NULL,
garage varchar(50)NOT NULL,
elevator varchar(50)NOT NULL,
guard varchar(50)NOT NULL,
detials longtext NOT NULL,
image_a varchar(255)NOT NULL,
image_b varchar(255)NOT NULL,
image_c varchar(255)NOT NULL,
image_d varchar(255)NOT NULL,
image_e varchar(255)NOT NULL,
image_f varchar(255)NOT NULL,
userID int NOT NULL, 
userName varchar(255)NOT NULL,
Email varchar(255)NOT NULL,
Phone varchar(11)NOT NULL
)";
mysqli_query($conn,$sql5);

//Owned villas

mysqli_select_db($conn,"yala_akar");
$sql6 = "CREATE TABLE Owned_villas
(
OID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(OID),
city varchar(50)NOT NULL,
location varchar(50)NOT NULL,
type varchar(50)NOT NULL,
space varchar(100)NOT NULL,
price varchar(100)NOT NULL,
rooms varchar(50)NOT NULL,
paths varchar(50)NOT NULL,
balconies varchar(50)NOT NULL,
garden varchar(50)NOT NULL,
garage varchar(50)NOT NULL,
guard varchar(50)NOT NULL,
detials longtext NOT NULL,
image_a varchar(255)NOT NULL,
image_b varchar(255)NOT NULL,
image_c varchar(255)NOT NULL,
image_d varchar(255)NOT NULL,
image_e varchar(255)NOT NULL,
image_f varchar(255)NOT NULL,
userID int NOT NULL, 
userName varchar(255)NOT NULL,
Email varchar(255)NOT NULL,
Phone varchar(11)NOT NULL
)";
mysqli_query($conn,$sql6);

//Villas for rent

mysqli_select_db($conn,"yala_akar");
$sql7 = "CREATE TABLE Villas_for_rent
(
OID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(OID),
city varchar(50)NOT NULL,
location varchar(50)NOT NULL,
type varchar(50)NOT NULL,
space varchar(100)NOT NULL,
price varchar(100)NOT NULL,
rooms varchar(50)NOT NULL,
paths varchar(50)NOT NULL,
balconies varchar(50)NOT NULL,
garden varchar(50)NOT NULL,
garage varchar(50)NOT NULL,
guard varchar(50)NOT NULL,
detials longtext NOT NULL,
image_a varchar(255)NOT NULL,
image_b varchar(255)NOT NULL,
image_c varchar(255)NOT NULL,
image_d varchar(255)NOT NULL,
image_e varchar(255)NOT NULL,
image_f varchar(255)NOT NULL,
userID int NOT NULL, 
userName varchar(255)NOT NULL,
Email varchar(255)NOT NULL,
Phone varchar(11)NOT NULL
)";
mysqli_query($conn,$sql7);

//msg

mysqli_select_db($conn,"yala_akar");
$sql8 = "CREATE TABLE Messages
(
msgID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(msgID),
msg longtext NOT NULL,
userID int NOT NULL, 
Name varchar(255)NOT NULL,
Email varchar(255)NOT NULL,
Phone varchar(11)NOT NULL
)";
mysqli_query($conn,$sql8);