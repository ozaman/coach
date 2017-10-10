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
    <link href="css/demo.css?v=<?=time()?>" rel="stylesheet">
    <!-- <link href="css/main2.css?v=<?=time()?>" rel="stylesheet"> -->
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
   

</head>

<body ng-app="myApp" ng-controller="pro">
    <div class="wrapper">
        <div class="sidebar" data-active-color="blue" data-background-color="white" data-image="#">
        <!-- blue-->
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
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
            <div class="sidebar-wrapper ">
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
                    <li >
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <p>HOME</p>
                        </a>
                    </li>

                    <li class="active">
                        <a href="">
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
                        <!-- <div class="collapse" id="pagesExamples" aria-expanded="false" style="height: 0px;">
                            <ul class="nav">
                                <li>
                                    <a >Add users</a>
                                </li>
                                <li><a>Edit users</a>
                                </li>
                                <li><a>View users</a>
                                </li>
                                
                            </ul>
                        </div> -->
                    </li>
                    <li>
                        <a >
                            <i class="material-icons">notifications</i>
                            <p>Notifications
                                <!-- <b class="caret"></b> -->
                            </p>
                        </a>
                        <!-- <div class="collapse" id="pagesExamples" aria-expanded="false" style="height: 0px;">
                            <ul class="nav">
                                <li>
                                    <a >Add users</a>
                                </li>
                                <li><a>Edit users</a>
                                </li>
                                <li><a>View users</a>
                                </li>
                                
                            </ul>
                        </div> -->
                    </li>
                    
                </ul>
            
            </div>
        <!-- <div class="sidebar-background" style="background-image: url(http://demos.creative-tim.com/material-dashboard-pro/assets/img/sidebar-1.jpg)" ></div> --></div>
        <div class="main-panel " style="overflow-y: scroll;" >
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
                        <a class="navbar-brand" href=""> Tour package </a>
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
                                    <!-- 
                                        <b class="caret"></b> -->
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
                       
                    </div>
                </div>
            </nav>
           
            <div class="content" style="margin-top: 0">
                <div class="container-fluid">
                 <!-- Page Heading -->
                    <div class="row">
                        <div class="col-md-12" style="    margin-top: 50px;">  
                            
                              <div class="card-header card-header-tabs" data-background-color="rose">
                                        <div class="nav-tabs-navigation" >
                                            <div class="nav-tabs-wrapper">
                                                <!-- <span class="nav-tabs-title">Tasks:</span> -->
                                                <ul class="nav nav-tabs" data-tabs="tabs" style="background-color: #00bcd4">
                                                    <li class="active"  ng-click="selectprovince('Phuket')">
                                                        <a  data-toggle="tab" aria-expanded="true">
                                                            <!-- <i class="material-icons">bug_report</i> Bugs -->
                                                              Phuket
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>
                                                    <li class="" ng-click="selectprovince('Phangnga')">
                                                        <a  data-toggle="tab" aria-expanded="false" >
                                                            <!-- <i class="material-icons">code</i>  -->Phangnga
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>
                                                    <li class=""  ng-click="selectprovince('Krabi')">
                                                        <a  data-toggle="tab" aria-expanded="false">
                                                            <!-- <i class="material-icons">cloud</i> --> Krabi
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>
                                                    <li class=""  ng-click="selectprovince('Phi Phi island')">
                                                        <a  data-toggle="tab" aria-expanded="false">
                                                            <!-- <i class="material-icons">cloud</i> --> Phi Phi island
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>
                                                    <li class=""  ng-click="selectprovinceall()">
                                                        <a  data-toggle="tab" aria-expanded="false">
                                                            <!-- <i class="material-icons">cloud</i> --> All
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>
                                                    <li class="" float="right" style="float: right;" ng-click="getNewproduct()">
                                                        <a href="new.php" data-toggle="tab" >
                                                            <!-- <i class="material-icons">cloud</i> --> New Tour package
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>  
                        
                        </div>
                         <div class="col-md-12" style="padding-top: 30px">
                                    <div class="col-lg-4 col-md-4" ng-repeat="item in dataTour">

                            <div class="card card-product" data-count="3" >
                                <div class="card-image" data-header-animation="true" style="height: 210px;">
                                    <a href="#pablo">
                                        <img class="img" src="images/icon/{{item.icon}}">
                                    </a>
                                </div>
                                <div class="card-content">
                                    <div class="card-actions">
                                        <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                            <i class="material-icons">build</i> Fix Header!
                                        </button>
                                        <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="View">
                                            <a href="view.php#?data={{item.id}}"><i class="material-icons" style="color: #999;">art_track</i></a>
                                        </button>
                                        <button type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit">
                                            <a href="view.php#?data={{item.id}}"><i class="material-icons" ng-click="gettourbyid(item)">edit</i></a>                                        </button>
                                        <button type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Remove" data-toggle="modal" data-target="#remove" ng-click="removepackage(item.id)">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </div>
                                    <h4 class="card-title">
                                        <a href="#pablo" ng-bind="item.name_en"></a>
                                    </h4>
                                    <div class="card-description" ng-bind="item.description" style="height: 100px;overflow: hidden;">
                                        
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="price">
                                        <span ng-bind='item.cost  | currency:"":0 '></span>
                                        <span>/Package</span>
                                    </div>
                                    <div class="stats pull-right">
                                        <p class="category"> <span ng-bind="item.province"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                            </div>                            
                    </div>
                 </div> 
                 <div class="modal fade" id="remove">
                    <div class="modal-dialog">
                    <input type="hidden" name="" value="{{idpackageremove}}" ng-model="idpackageremove">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" >Tour</h4>
                            </div>
                            <div class="modal-body">
                                <div>Are you sure to delete tour {{tours.name_en}}</div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="deletePackage(idpackageremove)">Remove</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
                      <script>
                            document.write(new Date().getFullYear())
                        </script>2017
                        <a href="">Creative Ozaman</a>
                    </p>
                </div>
            </footer>
            
        </div>
    </div>
    <!-- <div class="fixed-plugin">
        
    </div> -->

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
<script src="js/angular/package.js?v=<?=time()?>"></script>


</body>
</html>