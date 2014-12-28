<?
session_start();
ini_set("display_errors","Off");
ini_set("register_globals","On");
ini_set("session.auto_start","0");
$_SESSION['username'] = "phoomin2012";
include_once("../../config.php");
include_once("../../mysql.php");
//include_once("../../admin/functoins.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>.:: ระบบสุ่มของ || MC-MrithFul ::.</title>
<script src="../../js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.lazy.min.js"></script>
<script>var username = "<?=$_SESSION['username'];?>";</script>
<script src="js/load.js"></script>
<script>
var countdown = 5;
function window_closer(string,type){
	if (countdown <=0){  
		window.close();  
	}else if(typr=="error_connect"){
		$("#Modal_Error_Head").append("ไม่พบการเชื่อมต่อ");
		$("#Modal_Error_Body").html(string+"<br>"+"จะทำการปิดหน้าต่างใน "+countdown+" วินาที");
		countdown--;  
		setTimeout("window_closer()", 1000);
	}else{
		$("loaded_n_total").innerHTML = string+"<br>"+"จะทำการปิดหน้าต่างใน "+countdown+" วินาที";
		countdown--;  
		setTimeout("window_closer()", 1000);
	}
}
</script>
<link rel="stylesheet" href="../../css/bootstrap.css"  />
<link rel="stylesheet" href="style.css"  />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body onLoad="loading_list();">
<div class="modal_story">
    <div id="slider-stage">
    	<div id="slider-carousel">
            <ul id="slider-list" style="width: 389800px; display: block; margin-left: 0px;"></ul>
        </div>
    </div>
    <center><a id="shuffle" onClick="javascript:shuffle_click();" class="btn block-level">เริ่มสุ่ม</a></center>
    <br />
</div>
<script>
jQuery(document).ready(function() {
    jQuery("img.lazy").lazy();
});
</script>
</body>
</html>
<? include_once("modal/error.php"); ?>
<? include_once("modal/process.php"); ?>
<? include_once("modal/success.php"); ?>