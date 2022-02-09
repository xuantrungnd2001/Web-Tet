<?php 
	session_start(); 
	
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<?php session_destroy(); ?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<span><img src="https://64.media.tumblr.com/8fb1ee6d162d86840015bd52c1583072/d201e068bd0b689f-1e/s640x960/12e59ba2538fb2e83591dc59d6cacfa911a840e1.jpg" style="width: 100%; height: 100%;"></span>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">LOGIN</h3>
			      		</div>
								<div class="w-100">
									<p class="justify-content-end">
										<a href="https://www.facebook.com/ATTT.PTIT" class="social-icon d-flex align-items-center justify-content-end"><img src="https://64.media.tumblr.com/a851aed946b3621ea53a587cebaa56a6/63e34a8118901824-45/s1280x1920/16883791ad294d9857523dfc5c1cc0c42fe4a22a.png" style="width: 25%; height: 25%;"></a>
									</p>
								</div>
			      	</div>
							<form action="process.php" class="signin-form" method="POST">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" placeholder="Nhập tên nè má" name="username" maxlength="10" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" placeholder="Nhập mật khẩu ik trời"  name="password" required>
		            </div>
		            <?php 
		            	if(isset($_SESSION['w']))
		            		echo "<p style='font-size:14px;'>Sai thông tin đăng nhập</p>";
		            ?>
		            <div class="form-group">
		            	<button type="submit" class="form-control1 btn btn-primary submit px-3">Login</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-sm-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

<?php
	unset($_SESSION['w']);
?>