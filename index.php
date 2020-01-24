﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CPANEL</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h3>BLOG UCAC-ICAM</h3>
                </a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : -- &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../UCAC-ICAM.jpg" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-home fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="ui.php"><i class="fa fa-desktop fa-3x"></i> Modifier la page des Articles</a>
                    </li>
                    <li>
                        <a  href="tab-panel.php"><i class="fa fa-qrcode fa-3x"></i> Modifier la page des tutoriels</a>
                    </li>
						   <li  >
                        <a   href="blank.php"><i class="fa fa-bar-chart-o fa-3x"></i> Modifier la page des Projets</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome Madame. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-article-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">20 Articles</p>
                    <p class="text-muted">Contenu</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">30 Tutoriels</p>
                    <p class="text-muted">Remaining</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">240 Projets</p>
                    <p class="text-muted">Notifications</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">3 Revues</p>
                    <p class="text-muted">Pending</p>
                </div>
             </div>
		     </div>
			</div>
                 <!-- /. ROW  -->
                <hr />                
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue">
                    <i class="fa fa-warning"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">52 Important Issues to Fix </p>
                    <p class="text-muted">Please fix these issues to work smooth</p>
                    <p class="text-muted">Time Left: 30 mins</p>
                    <hr />
                    <p class="text-muted">
                          <span class="text-muted color-bottom-txt"><i class="fa fa-edit"></i>
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn. 
                               </span>
                    </p>
                </div>
             </div>
		     </div>
                    
                    
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel back-dash">
                               <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; SPEED</strong>
                             <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing sit ametsit amet elit ftr. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                       
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 ">
                        <div class="panel ">
          <div class="main-temp-back">
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-6"> <i class="fa fa-cloud fa-3x"></i> Newyork City </div>
                <div class="col-xs-6">
                  <div class="text-temp"> 10° </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
                     <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-desktop"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Display</p>
                    <p class="text-muted">Looking Good</p>
                </div>
             </div>
			
    </div>
                        
        </div>
                 <!-- /. ROW  -->
                <div class="row"> 
                    
                      
                               <div class="col-md-9 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bar Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>            
                </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-body">
                            <i class="fa fa-bar-chart-o fa-5x"></i>
                            <h3>120 GB </h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                           Disk Space Available
                            
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder bg-color-red">
                        <div class="panel-body">
                            <i class="fa fa-edit fa-5x"></i>
                            <h3>20,000 </h3>
                        </div>
                        <div class="panel-footer back-footer-red">
                            Articles Pending
                            
                        </div>
                    </div>                         
                        </div>
                
           </div>
                 <!-- /. ROW  -->

                 <!-- /. ROW  -->
                <div class="row">
                    
                    <div class="col-md-6 col-sm-12 col-xs-12">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                           Label Examples
                        </div>
                        <div class="panel-body">
                            <span class="label label-default">Default</span>
<span class="label label-primary">Primary</span>
<span class="label label-success">Success</span>
<span class="label label-info">Info</span>
<span class="label label-warning">Warning</span>
<span class="label label-danger">Danger</span>
                        </div>
                    </div>
                         
                         <div class="panel panel-default">
                        <div class="panel-heading">
                            Donut Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                        </div>
                    </div>
                      
                    </div>
                </div>     
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
