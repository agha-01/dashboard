<?php 
class Model{
	public $conn;
	public $host="localhost";
	public $username ="root";
	public $pass = "";
	public $dbname="dashboard";
	public $nSelect;


	public function __construct(){
		$this->conn = mysqli_connect($this->host,$this->username,$this->pass,$this->dbname);

		if (!$this->conn) {

			echo "xeta";
		}
		else{
			 mysqli_set_charset($this->conn,"utf8");

			return $this->conn;


			
		}
	}
	public function a_login($email,$pass){
		$sql = mysqli_query($this->conn,"SELECT * FROM admin WHERE email = '$email'");
		if (mysqli_num_rows($sql)==0) {
			echo "<h1>bele istifaci yoxdur</h1>";
			echo '<script type="text/javascript">
				setTimeout(function(){
					location.replace("index.php");
				},1000);
			</script>';
				}
		else{
			$row = mysqli_fetch_assoc($sql);
			if (md5(sha1($pass)) != $row["password"]) {
				echo "<h1>parol sehvdir</h1>";
				echo '<script type="text/javascript">
				setTimeout(function(){
					location.replace("index.php");
				},1000);
			</script>';
			}
			else{

				$_SESSION["email"]=$email;
				
				echo "<script>
        location.replace('home');
    </script>";
    return true;
			}

		}
	}
	
	public $nInsert;
	public function nInsert($name,$sname,$email,$pass,$status){
		$this->nInsert=mysqli_query($this->conn,"INSERT INTO `admin`(`name`, `sname`, `email`, `password`, `r_date`, `status`, `save_me`) VALUES ('$name','$sname','$email','$pass','".date("Y-m-d h:i:s")."','$status','1')");
		return $this->nInsert;
	}
	
	public $select;
	public function select($strr){
		$this->select=mysqli_query($this->conn,"SELECT * FROM ".$strr."");
		return $this->select;
	}


	public $selectForEditt;
	public function selectForEdit($strr,$id){
		$this->selectForEditt=mysqli_query($this->conn,"SELECT * FROM ".$strr." WHERE id ='$id'");

		return $this->selectForEditt;
	}



	public $selectOrder;
	public function selectOrder($strr,$id1,$id2){
		$this->selectOrder=mysqli_query($this->conn,"SELECT * FROM ".$strr." WHERE page_id ='$id1' AND admin_id = '$id2'");

		return $this->selectOrder;
	}


	public function nSelect($email){
		$this->nSelect=mysqli_query($this->conn,"SELECT * FROM admin WHERE email='$email'");
		return $this->nSelect;
	}

	public $Insert;
	public function Insert($filename,$basliq,$text,$status){
		$this->Insert=mysqli_query($this->conn,"INSERT INTO `news`(`image`, `basliq`, `text`, `tarix`,`status`) VALUES ('$filename','$basliq','$text','".date("Y-m-d h:i:s")."','$status')");
		return $this->Insert;
	}
	public $adminUpdate;
	public function adminUpdate($name,$sname,$email,$pass,$status,$id){
		$this->adminUpdate=mysqli_query($this->conn,"UPDATE `admin` SET `name`='$name',`sname`='$sname',`email`='$email',`password`='$pass',`status`='$status',`save_me`='1' WHERE id='$id'");
		return $this->adminUpdate;
	}

	public $newsUpdate;
	public function newsUpdate($filename,$basliq,$text,$status,$id){
		$this->newsUpdate=mysqli_query($this->conn,"UPDATE `news` SET `image`='$filename',`basliq`='$basliq',`text`='$text',`status`='$status' WHERE id='$id'");
		return $this->newsUpdate;
	}


	public $delete;
	public function delete($table,$id){
		$this->delete=mysqli_query($this->conn,"DELETE FROM ".$table." WHERE id = '$id'");
		return true;
	}
	public $cixis;
	public function cixis(){
		$this->cixis=mysqli_query($this->conn,"UPDATE `admin` SET `cixis`=now() WHERE email='".@$_SESSION["email"]."'");
		return $this->cixis;
	}

	public $giris;
	public function giris(){
		$this->cixis=mysqli_query($this->conn,"UPDATE `admin` SET `giris`=now() WHERE email='".@$_SESSION["email"]."'");
		return $this->giris;
	}

	public $eUpdate;
	public function eUpdate($uname,$sname,$basliq,$text,$filename,$status){
		$this->eUpdate=mysqli_query($this->conn,"UPDATE `elanlar` SET `uname`=$uname,`sname`='$sname',`basliq`='$basliq',`text`='$text',`image`='$filename',`status`='$status' WHERE id");
		return $this->eUpdate;
	}
	public $elanUpdate;
	public function elanUpdate($uname,$sname,$basliq,$text,$filename,$status,$id){
		$this->elanUpdate=mysqli_query($this->conn,"UPDATE `elanlar` SET `uname`='$uname',`sname`='$sname',`basliq`='$basliq',`text`='$text',`image`='$filename',`status`='$status' WHERE id='$id'");
		return $this->elanUpdate;
	}


	public $usersUpdate;
	public function usersUpdate($name,$sname,$b_day,$email,$phone,$filename,$gender,$confirm,$status,$id){
		$this->usersUpdate=mysqli_query($this->conn,"UPDATE `users` SET    `name`='$name',`sname`='$sname',`b_day`='$b_day',`email`='$email',`phone`='$phone',`image`='$filename',`gender`='$gender',`confirm`='$confirm',`status`='$status' WHERE id ='$id' ");
		return $this->usersUpdate;
	}
	public $order;
	public function Order($pages,$id){
		$sql = mysqli_query($this->conn,"DELETE FROM `order_pages` WHERE  admin_id = '$id'");
			foreach ($pages as $key ) {
				$insert = mysqli_query($this->conn,"INSERT INTO `order_pages`(`admin_id`, `page_id`) VALUES ('$id','$key')");
			}
	}
	public $checkOrder;
	public function checkOrder($p_id){
		$sadmin = mysqli_query($this->conn,"SELECT  * FROM admin WHERE email = '".$_SESSION["email"]."'");
		$row= mysqli_fetch_assoc($sadmin);
		$id = $row["id"];
		$sql = mysqli_query($this->conn,"SELECT * FROM order_pages WHERE page_id = '$p_id' AND admin_id = '$id'");
		if (mysqli_num_rows($sql)>0) {
			return true;
		}
		else{
			return false;
		}
	}


}


?>