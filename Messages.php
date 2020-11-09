<?php
$title = 'رسائل';
@require'nav.php';

header( "refresh:9;url=Messages.php" );
if(@$_SESSION['Type'] == 3 ){ 
mysqli_select_db($conn,"yala_akar");
$result = mysqli_query($conn,"select * from Messages ORDER BY msgID DESC");
$msg= mysqli_num_rows($result);
?>
<h2 class='text'>الرسائل المرسلة 
<form  method="POST" action="Messages.php">
<button type="submit" name="deleteall"  class="btn btn-danger btn-block mt-2 mr-1" style="opacity: 0.6;height:30px;"> حذف الكل </button>
</form>
</h2>

<div id="text" class="msg container-sm">
<button type="button" class="close mr-5 mt-3 toggle-mode" id="close" onmouseover="document.getElementById('text').style.display = 'none'"  aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<iframe  name="page1" class="msg2" > </iframe>
</div>

<?php
while(@$row = mysqli_fetch_array($result))
{
?>
<br><br>
<div class="div"></div>
<br><br>
<a href="delete.Message.php?id=<?php echo @$row['msgID'] ; ?>" target="page1"   type="button" class="btn btn-danger  show m-1"  onclick="document.getElementById('text').style.display = 'block'" style="opacity: 0.6;height:30px;width:120px;"><h6>حذف</h6></a>
<h4 class="text"> رقم الرسالة : <span><?php echo @$row['msgID'] ; ?></span>
</h4> <br>
<div class="row">
<div class="col-sm">
<div>
<p class="text"> الرقم التسلسلي للراسل: <span><?php echo @$row['userID'] ; ?></span></p>
</div>
</div>
<div class="col-sm">
<div>
<p class="text"> اسم الراسل : <span><?php echo @$row['Name'] ; ?></span></p>
</div>
</div>
<div class="col-sm">
<div>
<p class="text "> رقم الهاتف : <span><?php echo @$row['Phone'] ; ?></span></p>
</div>
</div>
</div><br>
<p class="text "> البريد الالكتروني : <span><?php echo @$row['Email'] ; ?></span></p><br>
<p class="text"><?php echo @$row['msg'] ; ?></p>
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
<h3>خطأ</h3>
</div>
<?php
}
if(isset($_POST['deleteall'])){
    if ($msg == 0)
    {
        header( "refresh:1;url=index.php" );
        ?>
        <div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
        <button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
        <i class="fas fa-times" style="color:#fff;"></i>
        </button>
        <br><br><br><br>
        <h3>لا توجد رسائل للمسح</h3>
        </div>
        <?php
    }else{
$delete = "delete from Messages ";
$iquery_delete = mysqli_query($conn,$delete);
if ($iquery_delete)
{
header( "refresh:1;url=index.php" );    
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(31, 140, 54, 0.85);box-shadow: -4px 0px 9px 7px rgba(31, 140, 54, 0.85);text-align: center;color:#fff;position:fixed;top:150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>تم مسح كل الرسائل بنجاح</h3>
</div>
<?php
}else{
header( "refresh:1;url=Messages.php" );
?>
<div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>خطا اعد المسح مرة اخري</h3>
</div>
<?php
}
}
}
@require'footer.php';
?>