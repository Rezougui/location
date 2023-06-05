<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 

if(isset($_POST['submit']))
  {
$Out_ND=$_POST['Out_ND'];
$Useremail=$_POST['Useremail'];
$G_T=$_POST['G_T'];
$messag=$_POST['messag'];
$vehicletitle=$_POST['Tvehicle'];



$sql="INSERT INTO tbcomplaint(Out_ND,Useremail,G_T,messag,Tvehicle) VALUES(:Out_ND,:Useremail,:G_T,:messag,:vehicletitle)";
$query = $dbh->prepare($sql);
$query->bindParam(':Out_ND',$Out_ND,PDO::PARAM_STR);
$query->bindParam(':Useremail',$Useremail,PDO::PARAM_STR);
$query->bindParam(':G_T',$G_T,PDO::PARAM_STR);
$query->bindParam(':messag',$messag,PDO::PARAM_STR);
$query->bindParam(':vehicletitle',$vehicletitle,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="complaint posted successfully";
}
else 
{
$error="Something went wrong. Please try again";
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
	<meta name="theme-color" content="#3e454c">
	
	<title>VLocation | Post a Complaint</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head>

<body>
<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Post A Complaint</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">complaint</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Vehicle Title<span style="color:red"></span></label>
<div class="col-sm-4">
<input type="text" name="Tvehicle" class="form-control">
</div>
<label class="col-sm-2 control-label"><span style="color:red"></span></label>
<div class="col-sm-4">

</div>
</div>
											

<div class="form-group">
<label class="col-sm-2 control-label">Message<span style="color:red"></span></label>
<div class="col-sm-10">
<textarea class="form-control" name="messag" rows="3" ></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Useremail<span style="color:red"></span></label>
<div class="col-sm-4">
<input type="text" name="Useremail" class="form-control" >
</div>
<label class="col-sm-2 control-label"><span style="color:red"></span></label>
<div class="col-sm-4">

</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Number of Day<span style="color:red"></span></label>
<div class="col-sm-4">
<input type="text" name="Out_ND" class="form-control" >
</div>
<label class="col-sm-2 control-label">Gand TOTAL<span style="color:red"></span></label>
<div class="col-sm-4">
<input type="text" name="G_T" class="form-control" >
</div>
</div>








							











											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="reset">Cancel</button>
													<button class="btn btn-primary" name="submit" type="submit">Save </button>
												</div>
											</div>

										
									</div>
								</div>
							</div>
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
<?php } ?>