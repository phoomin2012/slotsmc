<?
sleep(1);
#####################################################
#####################################################
#####################################################
function array_insert(&$array, $insert, $position)
{
    if (is_int($position)) {
        array_splice($array, $position, 0, $insert);
    } else {
        $pos   = array_search($position, array_keys($array));
        $array = array_merge(
            array_slice($array, 0, $pos),
            $insert,
            array_slice($array, $pos)
        );
    }
}
#####################################################
#####################################################
#####################################################
$path = "img/item";
$i = 0;
$dir_file = array();
$dir_file[0] = array();$dir_file[1] = array();$dir_file[2] = array();
$dir_file[3] = array();$dir_file[4] = array();$dir_file[5] = array();
#####################################################
#####################################################
#####################################################
function add_file($dir,$position){
	global $dir_file;
	while($file = readdir($dir)){
		array_insert($dir_file[$position],$file,rand(0,100));
	}
}
add_file(opendir($path),0);add_file(opendir($path),1);add_file(opendir($path),2);
add_file(opendir($path),3);add_file(opendir($path),4);add_file(opendir($path),5);
#####################################################
#####################################################
#####################################################
function print_item($position){
	global $dir_file;
	foreach($dir_file[$position] as $file){
		if($file == "." || $file == ".."){continue;}
		$i++;
		echo '<li><img class="lazy" src="img/item/'.$file.'" data-src="img/loading.gif" border="0"
		alt="'.$file.'" data-id="'.$i.'" /></li>';
	}
}
print_item(0);print_item(1);print_item(2);
print_item(3);print_item(4);print_item(5);
sleep(1);
?>