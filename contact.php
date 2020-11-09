<?php
$title = 'اتصل بنا';
@require'nav.php';

if(isset($_POST['send'])){
    if(($_POST['msg']) == "") {
        header( "refresh:1;url=contact.php" );
        ?>
        <div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
        <button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
        <i class="fas fa-times" style="color:#fff;"></i>
        </button>
        <br><br><br><br>
        <h3>من فضلك اكتب الرسالة </h3>
        </div>
        <?php
    }else{
$msg = mysqli_real_escape_string($conn, $_POST['msg']) ;
$userID = mysqli_real_escape_string($conn, $_SESSION['userID']) ;
$Name = mysqli_real_escape_string($conn, $_SESSION['Name']) ;
$Email = mysqli_real_escape_string($conn, $_SESSION['Email']) ;
$Phone = mysqli_real_escape_string($conn, $_SESSION['Phone']) ;

$insert = "INSERT INTO Messages (msg, userID, Name, Email, Phone) 
VALUES('$msg','$userID','$Name','$Email','$Phone')";

$iquery = mysqli_query($conn,$insert);

if ($iquery)
{
    header( "refresh:1;url=contact.php" );
    ?>
    <div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(31, 140, 54, 0.85);box-shadow: -4px 0px 9px 7px rgba(31, 140, 54, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
    <button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
    <i class="fas fa-times" style="color:#fff;"></i>
    </button>
    <br><br><br><br>
    <h3>تم الارسال</h3>
    </div>
    <?php
}else{
    header( "refresh:1;url=contact.php" );
    ?>
    <div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
    <button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
    <i class="fas fa-times" style="color:#fff;"></i>
    </button>
    <br><br><br><br>
    <h3>خطا في الارسال حاول مرة اخري</h3>
    </div>
    <?php
}
}
}
?>
<div class="row">
<div class="col-sm">
<div>
<h3  class="text"><i class="fas fa-phone-alt"></i></h3>
<p class="text">01115080262</p>
</div>
</div> <br><br><br><br>
<div class="col-sm">
<div>
<h3  class="text"><i class="far fa-envelope"></i></h3>
<p class="text">yala_akar@akar.com</p>
</div>
</div> <br><br><br><br>
<div class="col-sm">
<div>
<h3  class="text"><i class="fas fa-map-marker-alt"></i></h3>
<p class="text ">Cairo-Egypt</p>
</div>
</div> <br><br><br><br>
</div>
<?php
if(@$_SESSION['Type'] > 0 ){ 
?>
<div class="text">
<form  method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" >
<h4 class="text ">ارسال رسالة </h4>
<textarea type="text" class="form-control mr-1" name="msg" style="background-color: rgba(232,232,232,0.6);height:100px;"></textarea>
<button type="submit"  name="send" class="btn btn-primary m-2 " style="opacity: 0.6;width:150px;"  >ارسال</button>
</form>
</div>
<?php
}else{
}
?>
</div>
<?php
@require'footer.php';
?>