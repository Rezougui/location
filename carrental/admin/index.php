<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details');</script>";

}

}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>VLocation | Admin Login</title>
	<style>
		
		*{
                margin:0px;
                padding:0px;
            }
            body{
                font-size: 120%;
                background: #F8F8FF;
            }
            .header{
                width: 30%;
                margin:50px auto 0px;
                color: white;
                background: rgb(106,127,110);
                text-align: center;
                border: 1px solid #B0C4DE;
                border-bottom:none;
                border-radius: 10px 10px 0px 0px;
                padding:20px;
            }
            img{
                width: 60px;
                border-radius: 60px;
            }
            form{
                width: 30%;
                margin:0px auto;
                padding:20px;
                border: 1px solid #B0C4DE;
                background: white;
                border-radius: 0px 0px 10px 10px;
            }
            .input-group{
                margin: 10px 0px 10px 0px;
            }
            .input-group label{
                display:block;
                text-align: left;
                margin:3px;
            }
            .input-group input{
                height: 30px;
                width: 93%;
                padding: 5px 10px;
                font-size:16px;
                border-radius:5px;
                border: 1px solid gray;
            }
            .button{
                padding: 10px;
                font-size: 15px;
                color: white;
                background: rgb(106,127,110);
                border:none;
                border-radius: 5px;
            }
			
	</style>
</head>

<body>
	
<div class="header"> 
           Espace Admin
        </div>
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form method="post">
									<img src="logo.jpg">
                                    <div class="input-group">
									<label for="" class="">Your Username </label>
									<input type="text" placeholder="Username" name="username" class="form-control mb">
									</div>
									<div class="input-group">
									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" name="password" class="form-control mb">
                                    </div>
									<div class="input-group">

									<button type="submit" name="login" class="button"> LOGIN</button>
                                    </div>
									<p style="margin-top: 4%" align="center"><a href="../index.php">Back to Home</a>	</p>
								</form>

			
							</div>

						</div>
							
					</div>
				</div>
			</div>
			</div>
		
	
	
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>