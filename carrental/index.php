<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>
<!DOCTYPE html>

<!DOCTYPE html>
<html>
    <head>
        <title>
            VLocation
        </title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />


        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                scroll-padding-top:2rem;
                scroll-behavior: smooth;
                list-style: non;
                text-decoration:none;
                font-family: 'Poppins', sans-serif;

            }
            :root{
                --main-color:rgb(106,127,110);
                --second-color:#ffac38;
                --text-color:#444;
                --gradient:linear-gradient(#fe5b3d,#ffac38);

            }
            html::-webkit-scrollbar{
                width:0.5rem;
            }
            html::-webkit-scrollbar-track{
                background: transparent;
            }
            html::-webkit-scrollbar-thumb{
                background: var(--main-color);
                border-radius: 5rem;

            }
            section{
                padding:50px 100px;
            }
            
            .navbar {
                display: flex;

            }

            .navbar a{
                font-size: 16px;
                padding:10px 20px;
                color: var(--text-color);
                font-weight: 500;
            }
            .navbar a::after{
                content:'';
                width:100%;
                height:3px;
                position:absolute;
                bottom: -4px;
                left:0;
                transition:O.5s;
            }
            .navbar a:hover::after{
                width: 100%;
            }
            #menu-icon{
                font-size: 10px;
                cursor:pointer;

                display: none;
            }
            .headr-btn a{
                padding: 10px 20px;
                color:var(--text-color);
                font-weight:500;
            }
            .header-btn .sign-in{
                background:#84848b;
                color: #FFF;
                border-radius:0.5rem;
                padding: 5px;

            }
            .header-btn .sign-in:hover{
                background: var(--main-color);


            }
            .home{
                width:100%;
                min-height:100vh;
                position:relative;
                background: url(car.jpg);
                background-repeat: center right;
                background-size:cover;
                display:grid;
                align-items: center;
                grid-template-columns:repeat(2,1fr);
            }
            .text h1{
                font-size: 3.5rem;
                letter-spacing:2px;

            }
            .text span{
                color:var(--main-color);
            }
            .form-container form{
                display:flex;
                flex-wrap: wrap;
                align-items: center;
                gap :1rem;
                position: absolute;
                bottom: 4rem;
                left:100px;
                background: #fff;
                padding:20px;
                border-radius:0.5rem;

            }
            .input-box{
                flex:1 1 7rem;
                display:flex;
                flex-direction:column;
            }
            .input-box span{
                font-weight:500;
            }
            .input-box input{
                padding:7px;
                outline: none;
                border:none;
                background:#eeeff1;
                border-radius: 0.5rem;
                font-size:1rem;
            }
            .form-container form .btn{
                flex: 1 1 7rem;
                padding:10px 34px;
                border:none;
                border-radius:0.5rem;
                background:#84848b;
                color:#fff;
                font-size:1rem;
                font-weight: 500;
            }
            .form-container form .btn:hover{
                background: var(--main-color);
            }
            .heading{
                text-align: center;

            }
            .heading span{
                font-weight: 500;
                text-transform: uppercase;

            }
            .heading h1{
                font-size:2rem;

            }
            .ride-container{
                display:grid;
                align-items:center;
                grid-template-columns: repeat(auto-fit,minmax(250px,auto));
                gap:1rem;
                margin-top:2rem;

            }
            .ride-container .box{
                text-align:center;
                padding: 20px;

            }
            .ride-container .box .bx{
                font-size:34px;
                padding: 10px;
                background-color: #eeeff1;
                border-radius: 0.5rem;
                color: var(--main-color);



            }
            .ride-container .box h2{
                font-size:1.3rem;
                font-weight: 500;
                margin: 1.4rem 0 0.5rem;


            }
            .services-container{
                display: grid;
                grid-template-columns: repeat(auto-fit,minmax(300px,auto));
                gap: 1rem;
                margin-top: 2rem;
            }
            .services-container .box{
                padding:10px;
                border-radius: 1rem;
                box-shadow:1px 4px 41px rgba(0, 0, 0, 0.1);
            }
            .service-container .box .box-img{
                width: 100%;
                height: 200px;
            }
            .oo{
                width: 100%;
                height: 100%;
                border-radius: 1rem;
                object-fit: cover;
                object-position: center;
            }
            .pp{
                padding: 0 10px;
                border:1px solid var(--text-color);
                width: 58px;
                border-radius: 0.5rem;
                margin:1rem 0 1rem;
            }
            .hh{
                font-weight:500;

            }
            .h{
                font-size:1.1rem;
                font-weight:600;
                color:var(--main-color);
                margin:0.2rem 0 0.5rem;
            }
            .s{
              font-size:0.8rem;
              font-weight: 500;
              color:var(--text-color);
            }
            .btn1{
                display: flex;
                justify-content: center;
                background: #84848b;
                color:#fff;
                padding:10px;
                border-radius:0.5rem;
            }
            .btn1:hover{
                background: var(--main-color);
            }
            .lg{
                border-radius: 300px;
                display: block;
                margin-left: auto;
                margin-right: auto ;
                width: 50%;
            }
            .about-container{
                display: grid;
                grid-template-columns: repeat(2,1fr);
                margin-top:2rem;
                align-items: center;
                gap: 1rem;
                margin-top: 1rem;
            }
            .abou{
                font-weight:500;
                color:var(--main-color);
                text-transform: uppercase;
            }
            .para{
                margin: 0.5rem 0 1.4rem;
            }
            .btn2{
                padding:10px 20px ;
                background: #84848b;
                color: #fff;
                border-radius: 0.5rem;
            }
            .btn2:hover{
                background: var(--main-color);
            }
            .reviews-container{
                display: grid;
                grid-template-columns:repeat(auto-fit,minmax(250px,auto));
                gap:1rem;
                margin-top:2rem;
            }
            .rev-img{
                width: 70px;
                height:70px;

            }
            .fille{
                width:100%;
                height:100%;
                border-radius: 50%;
                object-position: center;
                object-fit: center;
                border: 2px solid var(--second-color) ;

            }
            .box3{
                display:flex;
                flex-direction: column;
                align-items:center;
                text-align: center;
                padding: 20px;
                box-shadow: 1px 4px 41px rgba(0,0,0,0.1);
                border-radius:0.5rem
            }
            .lo{
                font-size:1.1rem;
                font-weight: 600;
                margin: 0.5rem 0 0.5rem;
            }
            .p{
                font-style: italic;

            }
            .newsletter{
                background: linear-gradient(to top right, #84848b,var(--main-color));
                display: flex;
                flex-direction:column;
                align-items:center;

            }
            .abb{
                color: #fff;
                font-size: 1.8rem;
            }
            .box8{
                margin-top:1rem ;
                background: #fff;
                border-radius: 0.5rem;
                padding:4px 8px;
                width: 350px;
                display: flex;
                justify-content: space-between;

            }
            .inpt{
                border:none;
                outline: none;

            }
            .btn8{
                background:#84848b;
                color:#fff;
                padding:8px 20px;
                border-radius: 0.5rem;

            }
            .copyright{
                padding :20px;
                display:flex;
                justify-content: space-between;
                align-items: center;

            }
            .ka{
                color:#444;
                padding:10px;
                font-size: 21px;
                font
            }
            .section-test{
                border-color:#6a7f6e;
                
                border: solid;
                background:white;
            }
            .section-test{
                background-image: ;
                background-color: #665d51;
                height: 400px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
               position: relative;

            }
            .testimonial-content{
                background-image: url("BMW3.png");
            }
        </style>
    </head>
    <body>

       <!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->
        <section class="home" id="home">
            <div class="text">
                <h1 style="font-weight:bold;font-size: 62px; "> <span style="font-weight:bold; font-size: 62px;">Looking   </span>to<br> rent a car</h1>

            </div>
            <div class="form-container">
                
            </div>
        </section>
        <section class="ride" id="ride">
            <div class="heading">
                <span style="font-size:23px;"> HOW DOES IT WORK</span>
                <h1 style="font-size:23px;"> rent the car in 2 easy steps</h1>
            </div>
            <div class="ride-container">
                
                <div class="box">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKdJREFUSEtjZKAxYKSx+QyELPgPdQAudYTk6W+BAwMDw3wGBgYFMoPuAQMDQyIDA8MBmH50r4MUyJNpOEwbyAxFXBbAwpRCOxBBj+4DgpFGwGYM/QNmAc2DaPhYAIsj9MjDxcdInbgiGV0hzSwgNy7gDifkA5pbMBoHGPUBzQu7DwwMDPzkxixU30Pk+gQ9FYEqnAUU1AkgwxPwVTgUOh5TO6FKn2ILAT6uKhlJWfgFAAAAAElFTkSuQmCC" class="bx"/>
                    <h2 style="font-size:17px;">From Date</h2>
                    <p style="font-size:17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequatur quas libero exercitationem sapiente numquam.</p>
                </div>
                <div class="box" >
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPZJREFUSEvFldENwjAMRK8TwAbABoxQNmAE2IBR2ABGoRuwAbABG4CelEBlEgU5tPinUhPf+ZyL02jgaAbGV4ngEQrI7Sutj0/QSjpImjtbd5W0lXSK+VY6G2ZO8JgGxiJHEHtayfFuvVUwGkHJXTmFH67KKfgbAS4jXi4xUqoVAAzIKtMjFwFVTyTx3QXgfVBxl9T1yFwEm3D5UkVzqY61BOSnSCw4+1wKSGR0XIyElNPcBOvQCnpPcBb8s25yEywlMWM4VGIaVJ1/bdPSjHIrKAHH9SIBLcDzNXHrvyfWCVwmfO19EwDH0tkHp6byZK53an5dyBPNvToZbKDCEgAAAABJRU5ErkJggg==" class="bx"/>
                    <h2 style="font-size:17px;">To Date </h2>
                    <p style="font-size:17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequatur quas libero exercitationem sapiente numquam.</p>
                </div>
            </div>
        </section>
        
            </div>
            <CENTER><div class="heading" >
            <span style="font-size:23px; "> best services</span>
                <h1 style="font-size:23px; margin-bottom:3px;"> Discover our best offers
                   </CENTER>
        <section class="services" id="services" style=" display:flex;
                flex-wrap: wrap; align-items: center;">
                
            
           
               <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

              <?php $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand limit 9";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
?>  

         <div class="col-list-3">
         <div class="recent-car-list">
             <div class="car-info-box"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image"></a>
                  <ul style="background-color:black;">
                    <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
                    <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear);?> Model</li>
                    <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity);?> Seat</li>
                  </ul>
                   </div>
                   <div class="car-title-m">
                  <h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"  style="color:black;"> <?php echo htmlentities($result->VehiclesTitle);?></a></h6>
                  <span class="price"><?php echo htmlentities($result->PricePerDay);?> DH/Day</span> 
                             </div>
                          
                     </div>
                   </div>
                 <?php }}?>
       
               </div>
            </div>
          </div>
        </section>
<!-- /Resent Cat --> 
                
                
                
                
            
        <section class="about" id="about">
            <div class="heading">
                <span  style="font-size:23px;">
                    About us
                </span>
                <h1 style="font-size:23px;">
                the best customer experience

                </h1>
            </div>
            <div class="about-container">
                <div class="about-img">
                    <img src="logo.jpg" class="lg">
                </div>
                <div class="about-text">
                    <span  class="abou" style="font-size:20px;">
                    WHO ARE WE
                    </span>
                    <p class="para">LV is the agency that has been providing you with car rental services throughout Morocco for more than 15 years. We are not the only ones, but we are the best</p>
                    <P class="para" ><h1 style="font-size: 23px;"> why us?</h1><br>
                        <ul>
                            <li> Welcoming the customer 24h/24 </li>
                            <li> Advise and help fulfill the contract.</li>
                            <li> Return the vehicle to the customer with the explanations necessary for proper operation.</li>
                            <li> Manage the return of the vehicle.</li>
                            <li> Car reservation possible on site.</li>
                            <li>Wide range of cars with cheap prices: from 1200 dh/day.</li>
                            <li>Collect the reserved car from the airport.</li>
                        </ul>

                    </P>

                </div>

            </div>
        </section>
       
          <!--Testimonial -->
<section class="section-test" >
  <div class="container div_zindex" >
    <div class="section-header  text-center" style="color:#6a7f6e;">
      <h2 style="font-size:30px;" style="color:#6a7f6e;"> Our satisfied  <span style="color:#6a7f6e;" >customers</span></h2>
    </div>
    <div class="row">
      <div id="testimonial-slider">
<?php 
$tid=1;
$sql = "SELECT tbltestimonial.Testimonial,tblusers.FullName from tbltestimonial join tblusers on tbltestimonial.UserEmail=tblusers.EmailId where tbltestimonial.status=:tid limit 4";
$query = $dbh -> prepare($sql);
$query->bindParam(':tid',$tid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>


        <div class="testimonial-m" >
 
          <div class="testimonial-content">
            <div >
              <h5><?php echo htmlentities($result->FullName);?></h5>
            <p style="color:black"><?php echo htmlentities($result->Testimonial);?></p>
          </div>
        </div>
        </div>
        <?php }} ?>
        
       
  
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  
</section>
<!-- /Testimonial--> 

   



<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top" style="background-color:rgb(106,127,110);"><i class="fa fa-angle-up" aria-hidden="true" style="background-color:rgb(106,127,110);"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script>


<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>
        
    </body>
</html>