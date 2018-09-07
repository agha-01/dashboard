<?php 

$explode =explode("_", $param);
$sql=Controller::$conn->delete($explode[0],$explode[1]);
if ($sql) {
	echo "Melumat bazadan silindi";
}
else{
	echo "error";
}








 ?>
	 <script>
	 	location.replace("../home");
	 </script>