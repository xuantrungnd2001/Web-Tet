<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'tetprj');
mysqli_set_charset($connect, "utf8");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Index</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

	<?php
	if (isset($_POST["dangnhap"])) {
		$tk = $_POST["user_name_lg"];
		$mk = ($_POST["passlg"]);
		$rows = mysqli_query($connect, "
				select * from user where name = '$tk' and password = '$mk'");
		$count = mysqli_num_rows($rows);

		if ($count == 1) {
			$sql = mysqli_query($connect, "select id from user where name = '$tk' and password = '$mk'");
			$valueid = mysqli_fetch_array($sql);		//lấy id
			$_SESSION["id"] = $valueid['id'];
			header("location:avatar.php");
			setcookie("success", "Đăng nhập thành công!", time() + 1, "/", "", 0);
		} else {
			header("location:index.php");
			setcookie("error", "Đăng nhập không thành công!", time() + 1, "/", "", 0);
		}
	}
	?>
	<!-- 'end thực hiện kiểm tra dữ liệu người dùng nhập ở form đăng nhập' -->

</body>

</html>