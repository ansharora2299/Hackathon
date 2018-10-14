<?php
include('session.php');
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection,"info");
if (!$connection)
{
    die("not connected");
}
$glucose=filter_input(INPUT_POST,"glucose");
$bp=filter_input(INPUT_POST,"bp");
$bmi=filter_input(INPUT_POST,"bmi");
$date=filter_input(INPUT_POST,"date");
$username=$_SESSION['login_user'];
$sql="insert into symptoms(glucose,bp,bmi,date,userid) values($glucose,$bp,$bmi,$date,$username)";
$i=mysqli_query($connection,$sql);
if($i>0)
{
    header("location:update.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Light Bootstrap Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            
            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>View Profile</p>
                    </a>
                </li>
                <li class="active">
                    <a href="update.php">
                        <i class="pe-7s-note2"></i>
                        <p>Upload Test Results</p>
                    </a>
                </li>
        <!--
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
        
                <li>
                    <a href="notifications.php">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
               <li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>-->
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header"> 
                    <a class="navbar-brand" href="#">Symptoms</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Patient Update </h4>
                            </div>
							</br>
							<div class="header">
                            
                                                            <form method="post">
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Problem</label>
                                                <select>
												 <option type="text" class="form-control"  placeholder="Company" value="Diabetes">Diabetes</option>
                                                 <option type="text" class="form-control" placeholder="Company" value="Hepatitis A">Hepatitis A</option>
											     <option type="text" class="form-control" placeholder="Company" value="Tuberculosis">Tuberculosis</option>
												 <option type="text" class="form-control" placeholder="Company" value="Diarhoea">Diarhoea</option>
											    </select>
											</div>
                                        </div></br>
										    <h4 class="title"> ATTRIBUTES </h4>
                            </div>
                            <div class="content">
                                      
                                        
										<div class="row">
										<div class="col-md-12">
                                            <div class="form-group">
                                                <label>Glucose Level</label>
                                                <input type="number" class="form-control" name="glucose" placeholder="-">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Blood Pressure</label>
                                                <input type="number" name="bp" class="form-control" placeholder="-" >
                                            </div>
                                        </div>
									</div>
										
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Body Mass Index</label>
                                                <input type="text" name="bmi" class="form-control" placeholder="-" >
                                            </div>
                                        </div>

                                    
                                    </div>
                                <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input name="date" class="form-control" placeholder="01/01/20XX">
                                            </div>
                                        </div>
                                </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Results</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    <script>document.write(new Date().getFullYear())</script>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
