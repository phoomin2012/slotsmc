function shuffle_click(){
	// Declaring increment vars
	var images_num = 70;
	var increment = (146*images_num);
	$("#shuffle").addClass("disabled");
	$("#slider-list").animate({"marginLeft":'-'+increment+'px'},12500,"swing",function(){
		$('#Modal_Process').modal('show')
		$.post("accept.php",{
			api_key : "VkZaU1NtVnJNVmxSYmxwb1lteHdNVmx1Y0VabFZsbDRVbXRhYVZaSGREVlVXSEJHWkRBNVdFOVlTazVXZW13d1ZXeGFSMWRCUFQwPQ==",
			file : $("img:eq("+images_num+")").attr('alt'),
			username : username,
		},function(result){
			$('#Modal_Process').modal('hide')
			$('#Modal_Success').modal('show')
			$('#Modal_Success_Body').html(result)
		});
	});
}
function loading_list(){
	$('#Modal_Process').modal('show')
	var formdata = new FormData();
	var ajax = new XMLHttpRequest();
	formdata.append("username", "<?=$_SESSION['username']?>");
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "process.php");
	ajax.send(formdata);
    
}
function progressHandler(event){
	$('#Modal_Process').modal('show')
}
function completeHandler(event){
	$('#Modal_Process').modal('hide')
	$("#slider-list").append(event.target.responseText);
	
}
function errorHandler(event){
	$('#Modal_Process').modal('hide')
	$('#Modal_Error').modal('show')
}
function abortHandler(event){
	$('#Modal_Process').modal('hide')
	$('#Modal_Error').modal('show')
}