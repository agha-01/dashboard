<?php 
$name=$_POST["name"];
$sname=$_POST["sname"];
$email=$_POST["email"];
$pass=md5(sha1($_POST["pass"]));
$repass=md5(sha1($_POST["repass"]));
$status=$_POST["status"];
$id=$_POST["hidden"];
if ($pass!=$repass) {
	echo "<center><h1 class='text-warning'>parol eyni deyil</h1></center>";
		echo "<script>
					setTimeout(function(){
						location.replace('adminlist');
						},1000);
			</script>";
}
else{
	$sql=Controller::$conn->adminUpdate($name,$sname,$email,$pass,$status,$id);
	if ($sql) {
		echo "<center><h1 class='text-primary'>Melumat deyisdi</h1></center>";
		echo "<script>
					setTimeout(function(){
						location.replace('adminlist');
						},1000);
			</script>";
	}
	else{
		echo "error";
	}

}









 ?>