<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Teddy 해인 Do</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script src="https://kit.fontawesome.com/129e7cf8b7.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="header-container">
			<header class="page-header">
				<div class="header-left"></div>
				<div class="header-right"></div>
			</header>
		</div>
		<div class="notice">
			<h1>Trước khi bắt đầu, mày phải đọc kĩ cái này: </h1>
			<ul>
				<li>Vì tao code vội, nên không protect tất cả các files. Vì thế, mày <span style="color: red;">HÃY TRUNG THỰC VÀ CHỈ LOG IN DUY NHẤT MỘT LẦN!</span></li>
				<li>Ở phần cuối, mày có thể bấm nút đến khi mày thích, rồi sau đó làm theo hướng dẫn và đó sẽ được coi là lần cuối cùng.</li>
				<li>Trang web này sẽ được gỡ sau 31/10/2019 11:59PM (GMT +8)</li>
				<li>Sắp xếp lại từ sau để tìm user ID: dddeoty</li>
				<li>Password: the hottest doctor in the world (viết hoa các chữ cái đầu)</li>
			</ul
		</div>
		<div class="form-container">
			<form action="index.php" method="POST">
				<div class="form-group">
					<label>User ID: </label>
					<br>
					<input type="text" name="user" class="form-control">
				</div>
				<div class="form-group">
					<label>Password: </label>
					<br>
					<input type="password" name="password" class="form-control">
				</div>
				<input type="submit" name="submit" class="submit-btn">
			</form>
		</div>
		
	</div>
	<?php
		if (isset($_SESSION['errors'])) {
			foreach ($_SESSION['errors'] as $error) {
				echo $error;
			}
		}
	?>
	<?php
		if (isset($_POST['user']) && isset($_POST['password'])) {
			$userId = $_POST['user'];
			$password = $_POST['password'];
			$_SESSION['errors'] = [];

			if ($userId != "teddydo") {
				array_push($_SESSION['errors'], "Wrong User ID!");	
			} elseif ($password != "DoctorMike") {
				array_push($_SESSION['errors'], "Wrong Password!");
			} elseif ($userId == "teddydo" && $password == "DoctorMike") {
				$_SESSION['user'] = $userId;
				$_SESSION['password'] = $password;
				header("Location: mainpage.php");
				exit;
			}
		}
	?>
</body>
</html>
