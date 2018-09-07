<?php 

$basliq=$_POST["basliq"];
$text=$_POST["text"];
$status=$_POST["status"];
$file=$_FILES["image"];
$type=["image/jpg","image/png","image/jpeg","image/psd","image/bmp"];
if (in_array($file["type"],$type)) {
	$rand=rand(999,10000000000);
	$mode=end(explode(",",$file["name"]));
	$filename='images/uploads/'.$rand.".".$mode;
	$size=$file["size"]/1024;
	if ($size<=1024*5) {
		if (move_uploaded_file($file["tmp_name"],$filename)) {
			$sql=Controller::$conn->Insert($filename,$basliq,$text,$status);
			echo "bazaya yazildi";
			echo "<script>
				setTimeout(function(){
					location.replace('news');
					});
			</script>";
		}
		else{
			echo "sekilde problem var";
			echo "<script>
				setTimeout(function(){
					location.replace('addnews');
					});
			</script>";
		}
	}else{
		echo "sekil 3mb coxdur";
		echo "<script>
				setTimeout(function(){
					location.replace('addnews');
					});
			</script>";
	}


}else{
	echo "Sekil olsun";
	echo "<script>
				setTimeout(function(){
					location.replace('addnews');
					});
			</script>";
}

















 ?>
