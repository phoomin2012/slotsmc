<?
session_start();
if(base64_decode(base64_decode(base64_decode(base64_decode($_POST['api_key']))))!="MTIzMXBvanZubzEyV1FFbTkyMzEwOW9rMW9tRVFX"){
	include_once("send.php");
	include_once("../../config.php");
	$ws = new Websend(websendip);
	$con_err = $ws->connect(websendpass);
	
	if($con_err == false){
		$html_err_ws_con ="ไม่สามารถเชื่อมต่อกับเซิฟเวอร์ได้ กรุณาลองใหม่ภายหลัง";
		$html_err_ws_con.='<script>window_closer("ไม่สามารถเชื่อมต่อกับเซิฟเวอร์ได้ กรุณาลองใหม่ภายหลัง","error_connect");</script>';
		 die($html_err_ws_con);
	}
	
	$f = explode("_",$_POST['file']);
	$u = $_POST['username'];
	
	$cmd = "give ".$u." ".$f[0]." ".rand($f[1],$f[2]);
	$ws->doCommandAsConsole($cmd);
	
	echo '<table>
		<tr>
			<td>ของที่ได้รับ</td><td>:</td><td>'.base64_decode($f[3]).'</td>
		</tr>
		<tr>
			<td>จำนวนที่ได้รับ</td><td>:</td><td>'.$f[2].'</td>
		</tr>
		<tr>
			<td>ชื่อผู้เล่น</td><td>:</td><td>'.$u.'</td>
		</tr>
	</table>';
}else{
	echo "<center>ERROR PERMISSION || PERMISSION IS DENIED</center>";	
}
?>