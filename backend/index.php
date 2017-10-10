<!DOCTYPE html>
<!-- saved from url=(0076)http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html -->
<html lang="en" class="perfect-scrollbar-on"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="http://demos.creative-tim.com/material-dashboard-pro/assets/img/apple-icon.png"> -->
    <!-- <link rel="icon" type="image/png" href="http://demos.creative-tim.com/material-dashboard-pro/assets/img/favicon.png"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>IMRON PHUKET SPEEDBOAT</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <!-- Canonical SEO -->
   
    <!-- Bootstrap core CSS     -->
    <link href="js/bootstrap.min.css" rel="stylesheet">
    <!--  Material Dashboard CSS    -->
    <link href="css/material-dashboard.css?v=<?=time()?>" rel="stylesheet">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="css/main2.css?v=<?=time()?>" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
   

</head>

<body ng-app="myApp" ng-controller="main">
    <div class="wrapper">
        <div class="sidebar" data-active-color="blue" data-background-color="white" data-image="#">
       
            <div class="logo">
                <a href="" class="simple-text">
                <img src="images/logo22.png" width="180">
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="" class="simple-text">
                    IMR
                </a>
            </div>
            <div class="sidebar-wrapper " style="overflow-y: scroll;">
                <div class="user">
                    <div class="photo">
                        <img src="img/profile.png">
                    </div>
                    <div class="info">
                        <a >
                            USERS ADMIN
                            <!-- <b class="caret"></b> -->
                        </a>
                       
                    </div>
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <p>HOME</p>
                        </a>
                    </li>

                    <li >
                        <a href="package.php">
                            <i class="material-icons">apps</i>
                            <p>Tour package
                                <!-- <b class="caret"></b> -->
                            </p>
                        </a>
                       
                    </li>
                    <li>
                        <a data-toggle="collapse" href="">
                            <i class="material-icons">content_paste</i>
                            <p>Report
                                <!-- <b class="caret"></b> -->
                            </p>
                        </a>
                      
                    </li>
                  
                    <li>
                        <a >
                            <i class="material-icons">supervisor_account</i>
                            <p>Users
                               
                            </p>
                        </a>
                        
                    </li>
                    <li>
                        <a >
                            <i class="material-icons">note</i>
                            <p>Logs
                                <!-- <b class="caret"></b> -->
                            </p>
                        </a>
                       
                    </li>
                    <li>
                        <a >
                            <i class="material-icons">notifications</i>
                            <p>Notifications
                                <!-- <b class="caret"></b> -->
                            </p>
                        </a>
                       
                    </li>
                    
                </ul>
           
            </div>
       </div>
        <div class="main-panel " style="overflow-y: scroll;">
           <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href=""> Home </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                           
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">
                                        Notifications
                                       
                                    </p>
                                </a>
                              
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                     <i class="material-icons" > person</i>
                                    <p class="hidden-lg hidden-md">Setting
                                <!-- <b class="caret"></b> -->
                                        </p>
                                    <!-- <p class="hidden-lg hidden-md"> -->
                                    
                                        <!-- <b class="caret"></b> -->
                                    <!-- </p> -->
                                <div class="ripple-container"></div></a>
                                <ul class="dropdown-menu">
                                    <li class="adjustments-line">
                                        <a href="#"> <div class="text-center">
                                         <p class="">Profile</p>
                                         </div>
                                         </a>
                                    </li>

                                    <li class="adjustments-line" ng-click="logout()">
                                            <a  class="switch-trigger">
                                                <div class="text-center">
                                                   <p>Logout</p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                    
                                    
                                </ul>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group form-search is-empty">
                                <input type="text" class="form-control" placeholder="Search" style="background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#fff, #fff);
    background-size: 0 2px, 100% 1px;
    background-repeat: no-repeat;
    background-position: center bottom, center calc(100% - 1px);
    background-color: transparent;
    transition: background 0s ease-out;
    float: none;
    box-shadow: none;
    border-radius: 0;
    font-weight: 400;
    border: navajowhite;">
                                <span class="material-input" ></span>
                            <span class="material-input"></span></div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon" style="">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                       
                    </div>
                </div>
            </nav>
           
            <div class="content" style="margin-top: 0">
                <div class="container-fluid">
                 <!-- Page Heading -->
                    <div class="row">
                        <div class="col-md-12" style=""> 
                                     <div align="center">
                <div class="img-wellcome" style="margin-top: 100px">
                        <img src="https://d301sr5gafysq2.cloudfront.net/fe0e8ddd1f8c/img/blank-state/everything-is-awesome.svg" style="height:140px;">
                    </div>
                <div class="wellcome">

                    <h3>Welcome to Imron Phuket Speedboat tour Backend System.</h3>
                    <h4>
                        Select a Menu on the left-hand side to go to the section you want.
                    </h4>
                    <p id="text-p"> For any inquiry, please do not hesitate to send an email to <b class="tagbb">imronspeedboattour@gmail.com</b></p><b class="tagbb">

                </b></div><b class="tagbb">



                <!-- Page Heading -->
                <div class="row">
                    <!-- Error Modal -->
                    <div class="modal fade" id="err">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Error!</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="ng-binding"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="logout">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Logout</h4>
                            </div>
                            <div class="modal-body">
                                <div>Do you really want to log out of the backend system?</div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal" ng-click="RemoveCookie();">Logout</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->


            </b>
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
                                <a href="">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Company
                                </a>
                            </li>
                            
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        ©
                     <!--  <script async="" src="/analytics.js.ดาวน์โหลด"></script> -->
                      2017
                        <a href="">Creative Ozaman</a>
                    </p>
                </div>
            </footer>
            <!-- <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div> -->
            <!-- <div class="ps-scrollbar-y-rail" style="top: 0px; height: 638px; right: 0px;">
                 <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 245px;"></div>
            </div> -->
        </div>
    </div>
    <!-- <div class="fixed-plugin">
        
    </div> -->
<style>
    .wellcome h3 {
    /* padding-left: 100px; */
   /* margin-top: 75px !important;*/
    font-size: 35px;
    /* line-height: 250px; */
    font-family: " cursive ", Times, serif;
    color: #00bcd4;
}
.img-wellcome {
    text-align: center;
    /* position: absolute; */
   /* margin-top: 65px;*/
}
.wellcome {
    position: relative;
    text-align: center;
   /* margin-top: 75px;*/
}
.wellcome h4 {
    margin-top: 60px;
    font-family: Georgia, serif;
}
#text-p {
    line-height: 60px;
}
.tagbb {
    color: #00bcd4;
}
</style>
<!--   Core JS Files   -->
<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/material.min.js" type="text/javascript"></script>
<script src="js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!-- Select Plugin -->
<script src="js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="js/sweetalert2.js"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="js/demo.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="js/angular/angular-cookies.min.js"></script>


 <script src="js/ng-file-upload-shim.min.js"></script>
<script src="js/ng-file-upload.min.js"></script>



<script src="js/angular/main.js?v=<?=time()?>"></script>

 

<div class="jvectormap-tip"></div></body></html>