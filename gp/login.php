<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	 <?php
               session_start();
               if(isset($_SESSION['session_login_id'])){
                        header('location:index.php');
               }
               $pdo = new PDO('mysql:host=localhost;dbname=group7_db','root','');
               if(isset($_POST['login_form'])){
                    $stmt = $pdo->prepare("SELECT * FROM user_login WHERE user_email = :email");
                    $criteria = [
                    'email' => $_POST['email']    
                     ];
                $stmt->execute($criteria);
                $check_availability = true;
               if($stmt -> rowCount() > 0){
                     $store = $stmt->fetch();
                     if(sha1($_POST['password'])==$store['user_psw']){ //sha1 encryption method used
                     	 $_SESSION['session_login_id'] = $store['user_id'];
                     	 header('location:index.php');
                     }
                     // if(password_verify($_POST['password'],$store['user_psw'])){
                     //           $_SESSION['session_login_id'] = $store['user_id'];
                     //           header('location:index.php');
                     // }
                     else{
                        $check_availability = false;
                      }
                }
                else{
                  $check_availability = false;
                }
                if($check_availability == false)
                  {
                    echo 'Your email or password is invalid';
                  }
               }
               ?>

	<div class="limiter">
		<div class="" style="float:left; width:80%;">
			<img src="images/2.jpg" alt="The left side image" style="width: 868px;height: 692px;" />
		</div>
		<div id="" class="container-login100" style="float:right; width: 20%;">
			<div class="wrap-login100">	
				<div id="signup" class="hold input-box">
					<h style="font-size: 2.5em;" class="login100-form-title">
					Welcome Magloo! 
						</h>
					<form class="login100-form validate-form" method="post" action="">

						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: abc@xyz.com">
							<input class="input100" type="email" name="email" placeholder="Email">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Password is required">
							<input class="input100" type="password" name="password" placeholder="Password">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="container-login100-form-btn">
							<input type="submit" value="login" name="login_form" class="login100-form-btn"/>
						</div>

						<div class="p-t-12" style=";">
							<span class="txt1">
								Forgot
							</span>
							<a class="txt2" href="#" style="text-decoration: none;">
								Username / Password?
							</a>
						</div>
					</form>

				</div>
				</div>
			</div>
		</div>

</body>
</html>
