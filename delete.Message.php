<?php
include 'db.php';

if(@$_GET['id'] == "" ){ 
    ?>
    <div id="textt" class="container-sm " style="width:400px;height:250px;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 150;right: 0;bottom: 200;left: 0;z-index:100;">
    <button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
    <i class="fas fa-times" style="color:#fff;"></i>
    </button>
    <br><br><br><br>
    <h3>خطا</h3>
    </div>
    <?php
}else {
@$id = $_GET['id'];
$searsh = " select * from Messages where msgID='$id' ";
	$query = mysqli_query($conn,$searsh);
	$count = mysqli_num_rows($query);
	@$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html dir="rtl">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<style>
html, body {
    width:100%;
    height:100%;
    background-color:rgba(0, 0, 0, 0.1);
}
p, span {
    width: auto;
    height:auto;
    color: rgba(232,232,232,0.95);
    font-weight:bolder;
    text-align: center;
    border-radius: 10px;
    direction:rtl;
}
</style>

<div class="container">
<p class="pt-5">هل انت متاكد من حذف هذة الرسالة </p>
<div class="row pt-5">
<?php
if(@$row['msgID'] == $id){
?>
<form  method="POST" action="<?php echo $_SERVER["PHP_SELF"] . "?id=" .@$row['msgID'];?>" >
<button type="submit"  name="delete" class="btn btn-danger mr-5 " style="opacity: 0.6;width:260px;"  >نعم حذف </button>
</form>
<?php
}
if(isset($_POST['delete'])){
$delete = "delete from Messages where msgID='$id' ";

$iquery_delete = mysqli_query($conn,$delete);

if ($iquery_delete)
{
?>
<div id="textt" class="container-sm " style="width:80%;height:80%;border-radius: 40px;background-color:rgba(31, 140, 54, 0.85);box-shadow: -4px 0px 9px 7px rgba(31, 140, 54, 0.85);text-align: center;color:#fff;position:fixed;top:0;right: 0;bottom: 0;left: 0;z-index:100;">
<button type="button" class="close m-4 " id="text" onmouseover="document.getElementById('textt').style.display = 'none'" aria-label="Close">
<i class="fas fa-times" style="color:#fff;"></i>
</button>
<br><br><br><br>
<h3>تم مسح الرسالة بنجاح</h3>
</div>
<?php
}else{
?>
<div id="textt" class="container-sm " style="width:80%;height:80%;border-radius: 40px;background-color:rgba(143, 25, 36, 0.85);box-shadow: -4px 0px 9px 7px rgba(143, 25, 36, 0.85);text-align: center;color:#fff;position:fixed;top: 0;right: 0;bottom: 0;left: 0;z-index:100;">
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
?>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script  src="js/all.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src='js/jquery-3.5.1.min.js'></script>
<script src='js/plugins.js'></script>
</body>
</html>