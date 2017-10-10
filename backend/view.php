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

<body ng-app="myApp" ng-controller="pro">
    <div class="wrapper">
        <div class="sidebar" data-active-color="blue" data-background-color="white" data-image="#">
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
            <div class="sidebar-wrapper sidebar-wrapper ps-container ps-theme-default ps-active-x" data-ps-id="faee973a-811b-6900-028f-8d63eeb400f1">
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
            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 563px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 435px;"></div></div></div>
        <!-- <div class="sidebar-background" style="background-image: url(http://demos.creative-tim.com/material-dashboard-pro/assets/img/sidebar-1.jpg)" ></div> -->
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
                        <a class="navbar-brand" href=""> Package Detail </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                           
                            <li class="dropdown">
                                <a  class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">
                                        Notifications
                                       
                                    </p>
                                </a>
                              
                            </li>
                            <li class="dropdown">
                                <a  class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
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
                                        <a > <div class="text-center">
                                         <p class="">Profile</p>
                                         </div>
                                         </a>
                                    </li>

                                    <li class="adjustments-line" >
                                            <a class="switch-trigger">
                                                <div class="text-center"  style="z-index: 100">
                                                   <p ng-click="logout()">Logout</p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                    
                                    
                                </ul>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                        <!-- <form class="navbar-form navbar-right" role="search">
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
                        </form> -->
                       
                    </div>
                </div>
            </nav>
           
            <div class="content" style="margin-top: 0">
                <div class="container-fluid">
                 <!-- Page Heading -->
                
                    
                    <div class="row"  style="margin-top: 50px;">
                <div class="" style="background: #fff; padding-left: 10px;">
                    <!-- <div class="col-lg-12">
                        <h1 class="">
                           <i class="material-icons" style="font-size: 45px;">description</i> Package Detail
                            <a href="/new.html"><button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> New</button></a>
                        </h1>
                    </div> -->
                    <div class="navigate" >
                        <a href="package.php">
                            <button type="button" class="btn btn-default" style="background-color: #00bcd4"><i class="fa fa-sign-out fa-fw"></i> Back</button></a>
                        <ol class="breadcrumb" style="padding: 11px;padding-bottom: 0 ">
                            <li><a href="package.php">Tour packages</a></li>
                            <li class="active">Package Detail</li>
                        </ol>
                    </div>
                </div>
                </div>
                <!-- /.row -->
                <div class="row" >
                    <div class="col-md-12"> 
                                <div class="form-group form-inline" align="right" >
                                            <div class="form-group" >
                                                <button class="btn btn-success" type="submit" ng-show="editDetail" ng-click="saveEditpackage()">
                                                    <span class="fa2 fa fa-floppy-o"></span> Save</button>
                                            
                                                <button type="button" ng-click="editDetail = !editDetail;edit()" class="btn {{ !editDetail ? 'btn-warning' : 'btn-default' }}">
                                                    <i class="{{!editDetail ? 'fa2 fa fa-pencil-square-o fa-fw': ''}}"></i> {{ !editDetail ? "Edit" : "Cancel" }}</button>
                                            </div>
                                        </div>
                                                     
                             <form class="form-group "  >

                        <table class="table .table-striped .table-hover" ng-init="editDetail = false;" >                           
                            <tr>
                                <td style="padding: 0;border-top: none">
                                    <input type="hidden" name="token" id="token" value="{{token}}" />
                                    <input type="hidden" id="id" name="id" value="{{tours.tour_id}}"/>
                                    
                                    <div class="form-group" ng-show="!editDetail">
                                        <label class="label-package-detail"><p class="dotjung">*</p>Province<span> :</span></label>
                                        <div  class="box-package-detail">{{tours.province}}</div>
                                         
                                        <!-- <input type="text" class="form-control input-package-detail " size="50" maxlength="200" name="name" value="{{tours.province}}" ng-show="editDetail" ng-model="province"> -->
                                    </div>
                                    <div class=" " style="width: 100%" ng-show="editDetail" ng-model="province">
                                            <label for="class" class="label-package-detail" >Province<span> :</span></label>
                                            <select name="city" id="city"  class="form-control .input-package-detail" required style="width: 25%; border: 1px solid #ccc; order-radius: 5px;" ng-model="eprovince">
                                                <option>Phuket</option>
                                                <option>Phang nga</option>
                                                <option>Krabi</option>
                                                <option>Phi Phi island</option>
                                                <!--<option>Standard Class</option>-->
                                            </select>
                                        </div>

                                    <div class="form-group">
                                        <label class="label-package-detail"><p class="dotjung">*</p>Package name<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail">{{tours.name_en}}</div>
                                        <input type="text" class="form-control input-package-detail " size="50" maxlength="200" name="name" value="{{tours.name_en}}" ng-show="editDetail" ng-model="ename">
                                    </div>
                                   <!--  <div class="form-group" ng-if="checkboxModel.tha==true || allow_th==true">
                                        <label class="label-package-detail"><p class="dotjung">*</p>Package name (th)<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail">{{tours_th.name_th}}</div>
                                        <input type="text" class="form-control input-package-detail " size="50" maxlength="200" name="name_th" value="{{tours_th.name_th}}" ng-show="editDetail">
                                    </div>
                                    <div class="form-group" ng-if="checkboxModel.chi==true || allow_cn==true">
                                        <label class="label-package-detail"><p class="dotjung">*</p>Package name (cn)<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail">{{tours_cn.name_cn}}</div>
                                        <input type="text" class="form-control input-package-detail " size="50" maxlength="200" name="name_cn" value="{{tours_cn.name_cn}}" ng-show="editDetail">
                                    </div>
 -->

                                    <div class="form-group">
                                        <label class="label-package-detail"><p class="dotjung">*</p>Short Description<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail">{{tours.description}}</div>
                                        <input type="text" class="form-control input-package-detail" size="50" maxlength="300" name="short" value="{{tours.description}}" ng-show="editDetail" ng-model="edescription">
                                    </div>

                                    <!-- <div class="form-group" ng-if="checkboxModel.tha==true || allow_th==true">
                                        <label class="label-package-detail"><p class="dotjung">*</p>Short Description (th)<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail">{{tours_th.short_description_th}}</div>
                                        <input type="text" class="form-control input-package-detail" size="50" maxlength="300" name="short_th" value="{{tours_th.short_description_th}}" ng-show="editDetail">
                                    </div>

                                    <div class="form-group" ng-if="checkboxModel.chi==true || allow_cn==true">
                                        <label class="label-package-detail"><p class="dotjung">*</p>Short Description (cn)<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail">{{tours_cn.short_description_cn}}</div>
                                        <input type="text" class="form-control input-package-detail" size="50" maxlength="300" name="short_cn" value="{{tours_cn.short_description_cn}}" ng-show="editDetail">
                                    </div>
 -->

                                    <div class="form-group">
                                        <label class="label-package-detail">Package Class<span> :</span></label>
                                        <div class="box-package-detail">{{tours.class}}</div>
                                    </div>

                                    <div class="form-group">
                                        <label class="label-package-detail">Detail<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail">{{tours.detail}}</div>
                                        <textarea class="form-control input-package-detail" rows="5" cols="100" maxlength="3000" name="detail" ng-show="editDetail" ng-model="edetail">{{tours.detail}}</textarea>
                                    </div>

                                   <!--  <div class="form-group" ng-if="checkboxModel.tha==true || allow_th==true">
                                        <label class="label-package-detail">Detail (th)<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail">{{tours_th.detail_th}}</div>
                                        <textarea class="form-control input-package-detail" rows="5" cols="100" maxlength="3000" name="detail_th" ng-show="editDetail">{{tours_th.detail_th}}</textarea>
                                    </div>

                                    <div class="form-group" ng-if="checkboxModel.chi==true || allow_cn==true">
                                        <label class="label-package-detail">Detail (cn)<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail">{{tours_cn.detail_cn}}</div>
                                        <textarea class="form-control input-package-detail" rows="5" cols="100" maxlength="3000" name="detail_cn" ng-show="editDetail">{{tours_cn.detail_cn}}</textarea>
                                    </div> -->

                                    <div class="form-group">
                                        <label class="label-package-detail">Program<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><p ng-repeat="i in program.split('\r\n')">{{ i }}</p></div>
                                        <textarea class="form-control input-package-detail" rows="5" cols="100" maxlength="3000" name="program" ng-show="editDetail"  ng-repeat="y in program.split('\r\n')" ng-change="eprogramchange(eprogram)" ng-model="eprogram">{{y}}</textarea>
                                    </div>

                                    <!-- <div class="form-group" ng-if="checkboxModel.tha==true || allow_th==true">
                                        <label class="label-package-detail"></p>Program (th)<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><p ng-repeat="z in tours_th.program_th.split('\n')">{{ z }}</p></div>
                                        <textarea class="form-control input-package-detail" rows="5" cols="100" maxlength="3000" name="program_th" ng-show="editDetail">{{tours_th.program_th}}</textarea>
                                    </div>

                                    <div class="form-group" ng-if="checkboxModel.chi==true || allow_cn==true">
                                        <label class="label-package-detail"></p>Program (cn)<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><p ng-repeat="z in tours_cn.program_cn.split('\n')">{{ z }}</p></div>
                                        <textarea class="form-control input-package-detail" rows="5" cols="100" maxlength="3000" name="program_cn" ng-show="editDetail">{{tours_cn.program_cn}}</textarea>
                                    </div> -->

                                    <div class="form-group">
                                        <label class="label-package-detail"><p class="dotjung">*</p>Condition<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><p ng-repeat="z in tours.conditions.split('\r\n')">{{ z }}</p></div>
                                        <textarea class="form-control input-package-detail" rows="5" cols="100" maxlength="3000" name="condition" ng-show="editDetail" ng-repeat="z in tours.conditions.split('\r\n')" ng-model="econdition">{{z}}</textarea>
                                    </div>

                                    <!-- <div class="form-group" ng-if="checkboxModel.tha==true || allow_th==true">
                                        <label class="label-package-detail"><p class="dotjung">*</p>Condition (th)<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><p ng-repeat="z in tours_th.condition_th.split('\n')">{{ z }}</p></div>
                                        <textarea class="form-control input-package-detail" rows="5" cols="100" maxlength="3000" name="condition_th" ng-show="editDetail">{{tours_th.condition_th}}</textarea>
                                    </div>

                                    <div class="form-group" ng-if="checkboxModel.chi==true || allow_cn==true">
                                        <label class="label-package-detail"><p class="dotjung">*</p>Condition (cn)<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><p ng-repeat="z in tours_cn.condition_cn.split('\n')">{{ z }}</p></div>
                                        <textarea class="form-control input-package-detail" rows="5" cols="100" maxlength="3000" name="condition_cn" ng-show="editDetail">{{tours_cn.condition_cn}}</textarea>
                                    </div>
 -->
                                    <div class="form-group">
                                        <label class="label-package-detail">Include<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><p ng-repeat="z in tours.include.split('\r\n')">{{ z}}</p></div>
                                        <textarea class="form-control input-package-detail" rows="5" cols="100" maxlength="3000" name="include" ng-show="editDetail" ng-repeat="z in tours.include.split('\r\n')" ng-model="include" value="{{z}}" ng-change="eincludes(include)"></textarea>
                                    </div>

                                    <!-- <div class="form-group" ng-if="checkboxModel.tha==true || allow_th==true">
                                        <label class="label-package-detail">Include (th)<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><p ng-repeat="z in tours_th.include_th.split('\n')">{{ z }}</p></div>
                                        <textarea class="form-control input-package-detail" rows="5" cols="100" maxlength="3000" name="include_th" ng-show="editDetail">{{tours_th.include_th}}</textarea>
                                    </div>

                                    <div class="form-group" ng-if="checkboxModel.chi==true || allow_cn==true">
                                        <label class="label-package-detail">Include (cn)<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><p ng-repeat="z in tours_cn.include_cn.split('\n')">{{ z }}</p></div>
                                        <textarea class="form-control input-package-detail" rows="5" cols="100" maxlength="3000" name="include_cn" ng-show="editDetail">{{tours_cn.include_cn}}</textarea>
                                    </div> -->

                                    <div class="form-group">
                                        <label class="label-package-detail"><p class="dotjung">*</p>Contact Person<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><p ng-repeat="z in tours.contact.split('\n')">{{ z }}</p></div>
                                        <textarea class="form-control input-package-detail" rows="5" cols="100" maxlength="3000" name="contact" ng-show="editDetail" ng-model="econtact">{{tours.contact}}</textarea>
                                    </div>

                                    <div class="form-group" >
                                        <label class="label-package-detail">Note<span> :</span></label>
                                        <div ng-show="!editDetail" class="box-package-detail"><p ng-repeat="z in tours.note.split('\n')">{{ z }}</p></div>
                                        <textarea class="form-control input-package-detail" rows="5" cols="100" maxlength="3000" name="note" ng-show="editDetail" ng-model="enote">{{tours.note}}</textarea>
                                    </div>
                                    <div class="form-group " style="width: 100%">
                                        <div class="checkbox col-md-6" style="padding: 0 50px 0 37px;width: 100%;display: inline-block;">
                                                                <label class="" style="display: inline-block;    margin-bottom: 10px;">
                                                                    <input type="checkbox" name="optionsCheckboxes" checked="" ng-model="eechekrecommend" id="echekrecommend"><!-- <span class="checkbox-material"><span class="check"></span></span> -->RECOMMEND
                                                                </label>
                                                            </div>
                                                            <div class="checkbox col-md-6" style="padding: 0 50px 0 37px;width: 100%;display: inline-block;">
                                                                <label class="" style="display: inline-block;    margin-bottom: 10px;">
                                                                    <input type="checkbox" name="optionsCheckboxes" checked="" ng-model="eechekpopular" id="echekpopular"><!-- <span class="checkbox-material"><span class="check"></span></span> -->POPULAR PACKAGES
                                                                </label>
                                                            </div>
                                       
                                    </div>

                                    <div class="form-group" ng-show="isItraveladmin">
                                        <label class="label-package-detail">Recommend<span> :</span></label>
                                        <input type="checkbox" ng-show="editDetail" ng-checked="tours.recommend" ng-if="checked=true" value="1" name="recommend">
                                    </div>
                                   <!--  <div class="form-group form-inline" style=" margin-top: 30px;" ng-show="!editDetail">
                                        <div class="row">
                                        <div class="col-md-12 col-sm-6">
                                           
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="images/icon/{{tours.icon}}" alt="...">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                
                                            </div>
                                        </div>
                                        </div>

                                        
                                    </div> -->
                                    <div class="form-group form-inline" style=" margin-top: 30px;" >
                                        <div class="row">
                                        <div class="col-md-12 col-sm-6">
                                            <!-- <legend>File size must not exceed 2 MB.</legend> -->
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="images/icon/{{tours.icon}}" alt="...">
                                                    <img src="images/image_placeholder.jpg" alt="..." ng-if="tours.icon == ''">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn btn-info btn-file">
                                                        <span class="fileinput-new">Select image icon</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="hidden"><input type="file"  ngf-select="onFileSelect($file)" ngf-pattern="'image/*'">
                                                    <div class="ripple-container"></div></span>
                                                    <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                        
                                    </div>
                                   <!--  <div class="form-group">
                                        <label class="label-package-detail"><p class="dotjung">*</p>Upload Tour Icon</label>
                                        <div class="box-package-detail"><img style="height: 150px; width: 150px; border-radius: 50%;" ng-src="{{ '../../uploads/Tour/icon/'+ tours.icon }}"></div>
                                        <input class="form-control input-package-detail " ng-show="editDetail" type="file" name="pic" id="pic" />
                                    </div> -->

                                </td>
                            </tr>
                        </table>
                    </form>
                     </div>
                 </div>
                
                    <div class="col-lg-12" >
                    <form  id="ismForm" style="">
                        <input type="hidden" name="user" value="{{Changeby}}">
                        <input type="hidden" name="token" value="{{token}}">
                        <input type="hidden" name="tour_id" value="{{id}}">
                        <input type="hidden" id="oldadult" value="{{price.adult.net_price}}">
                        <input type="hidden" id="oldchild" value="{{price.child.net_price}}">
                        <input ng-if="isItravel" type="hidden" id="oldadult_sale" value="{{price.adult.sale_price}}">
                        <input ng-if="isItravel" type="hidden" id="oldchild_sale" value="{{price.child.sale_price}}">
                        <div class="form-group form-inline" style="margin-left: 2%;">
                                                    
                                    
                                    <label class="label-package-detail"><p class="dotjung">*</p>Price<span> :</span></label>
                                                                     
                              
                         </div>
                         <div class="form-group form-inline" style="">

                                <div class=".box-package-detail" style="border-radius: 8px; width: 100%; float: right; " align="right">    <div class="" style=" text-align: right; right: 6%; display: inline-block;"> 
                                       
                                            <button class="btn btn-success" type="submit" ng-show="editPrice" ng-click="saveeditprice()">
                                                <!-- <span class="glyphicon glyphicon-ok" ></span> --> Save</button>
                                       
                                        
                                            <button type="button" ng-click="editPrice = !editPrice;editprice()" 
                                                        class="btn {{ !editPrice ? 'btn-warning' : 'btn-default' }}" style="z-index: 100">
                                                <i class="{{!editPrice ? 'fa fa-cog fa-fw': ''}}"></i> {{ !editPrice ? "Edit" : "Cancel" }}</button>
                                                                                  
                                    </div>
                                    <div>  
                                        <div class="price-block-head" style="    border-radius: 4px 0 0 4px;">Cost
                                        </div>
                                        <div ng-if="!editPrice" class="price-block-tail" style="    border-radius: 0 4px  4px; 0">{{ tours.cost | currency : '':0 }} <span>Bath / Package</span></div>
                                        <div ng-if="editPrice" class="price-block-tail" style="border-radius: 0 4px  4px 0;z-index: 100">
                                            <input type="text" id="child" name="ecost" class="form-control input-text-right" value="{{ecost  | currency :'':0 }}" ng-disabled="!editPrice" ng-model="ecost" ng-change="editchangeprice(ecost)" required> <span>Bath / Package</span>
                                        </div>
                                        </div>
                                </div>
                                    
                                    
                              
                            
                        </div>
                    </form>
                    
                </div>
                
                <div class="row">
                     <div class="form-group form-inline" style="">
                        <div class="head-label">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-inline" style="    background: #fff;
    padding: 0 10px;
    margin-top: 45px;
    margin-bottom: 45px;" >
                                <h4>
                                    Gallery
                                </h4>
                            </div>
                       
                            <div  class="col-sx-3 col-sm-3 col-md-3 col-lg-3" ng-if="dataGallery.length != 0" ng-repeat="x in dataGallery">
                                <div align="center">
                                <div  class="form-group" >
                                    <img style="max-height: 200px; max-width: 356px" ng-src="images/gallery/{{x.gallery}}"  class="img-thumbnail img-responsive center-block">
                                    
                                </div>
                                <div class="center-block form-group" align="center">
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#showImageModal" ng-click="view(x)">View</button>
                                    <button class="btn btn-danger btn-sm" ng-click="remove(x)" data-toggle="modal" data-target="#deleteModal">Delete</button>
                                </div>
                                </div>
                                <!-- <div  align="center" >
                                    <button class="btn center-block text-center" data-toggle="modal" data-target="#uploadModal" style="background: #eae8e8; min-height: 170px; min-width: 170px;"><i class="fa fa-3x fa-plus center-block text-center"></i></button>
                                </div> -->
                            </div>
                 
                            <div class=" form-inline" colspan="3" style="width: 100%; margin-top: 28px;  margin-left: 40px;">
                                <div class="fileinput fileinput-new text-center col-sx-3 col-sm-3 col-md-3 col-lg-3" data-provides="fileinput" style="display: inline-block;">
                                                <div class=" thumbnail" style="margin-top: 25px;"">
                                                    
                                                    <img src="images/image_placeholder.jpg" alt="..." >
                                                     <!-- <i class="fa fa-3x fa-plus center-block text-center"></i> -->
                                                </div> 
                                               
                                                <!-- <div class="fileinput-preview fileinput-exists thumbnail"></div> -->
                                                  <div class="margin-package-gallery" >

                                    <!-- <button class="btn center-block text-center" style="background: #eae8e8; min-height: 170px; min-width: 170px;"><i class="fa fa-3x fa-plus center-block text-center"></i></button> -->
                                </div>
                                                <div style="  margin-top: -72px;" align="center">
                                                    <span class="btn  btn-info  btn-file">
                                                        <span class="">Select image gallery</span>
                                                        <!-- <span class="fileinput-exists">Change</span> -->
                                                        <!-- <input type="hidden"> --><input type="file"  ngf-select="addGallery($file)" ngf-select ng-model="files" ngf-multiple="true">
                                                    <!-- <div class="ripple-container"></div> --></span>
                                                   <!--  <a href="#pablo" class="btn btn-danger fileinput-new"><i class="fa fa-times"></i> NEW upload</a> -->
                                                </div>
                                               
                                            </div>
                              
                            </div>
                    
                    </div>
                    </div>
                    </div>
                

                <div class="row" >
                    <div class="form-group form-inline" >
                       
                            <div class="" style="background: #FFFFFF;    padding: 8px 10px;"  >
                                <h4 style="color: #E53935">
                                    Delete Package
                                </h4>
                            </div>
                       
                       
                                <div class="pull-left">
                                    Because deleted package cannot be taken back, please make sure before deleting any package!
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#remove" >Remove</button>
                                </div>
                        
                      
                    </div>
                </div>

                <div class="modal fade" id="remove">
                    <div class="modal-dialog">
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
                                <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="deletePackage(data)">Remove</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="uploadModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Gallery</h4>
                            </div>
                            <form method="post" action="/api/addTourDetail" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <input type="hidden" name="cat" value="Gallery" />
                                    <input type="hidden" value="{{token}}" name="token"/>
                                    <input type="hidden" name="id" value="{{id}}" />
                                    <div class="form-group">
                                        <select ng-model="srcType" name="srcType" ng-init="srcType='IMAGE'" class="form-control">
                                            <option value="IMAGE" selected>Image</option>
                                            <!--<option value="VIDEO">Video</option>-->
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control upload-file" type="file" name="resource" id="resourceimg" ng-if="srcType == 'IMAGE'" accept="image/*" data-max-size="2048" required>
                                        <input class="form-control" type="file" name="resource" id="resourcevid" ng-if="srcType == 'VIDEO'" accept="video/*" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <p class="text" >File size must not exceed 2 MB.</p>
                                    <button type="submit" ng-show="isAdmin || isPartnerOperator" class="btn btn-success" ng-click="addselectzone()" id="btn-submit">
                                        <span class="fa2 fa fa-floppy-o" aria-hidden="true"></span> Save
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="reset()">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="showImageModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Gallery</h4>
                            </div>
                            
                                <div class="modal-body">
                                    
                                    <div class="form-group" align="center">
                                        <img src="images/gallery/{{viewgallery}}" width="100%">
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    
                                   
                                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="reset()">Close</button>
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

       </div> </div> 

    <!-- <div class="fixed-plugin">
        
    </div> -->

<!--   Core JS Files   -->
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


<script src="js/angular/editTour.js?v=<?=time()?>"></script>


<style>
    /*!
 * Start Bootstrap - SB Admin Bootstrap Admin Template (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

/* Global Styles */
.dotjung {
    color: red;
    font-size: 15px;
    display: inline-block;
    padding-right: 5px;
}

#smart-menu{
    display: none;
}
#trig_by_menu{
    display: none;
}
.sub_menu_mobile{
    display: none;
}
#mobile-menu-canvas{
    display: none;
    position: absolute;
    width: 100vw;
    height:100vh;
    background: #C2C2C2;
}
.main_menu_mobile{
    position:relative;
    width: 100%;
    min-height:100%;
    z-index: 100;
    overflow: hidden;
    background: #C2C2C2;
}
.invoice-sumary{
    margin-left: 75px;
}
.invoice-sumarytotal{
    margin-left: 67px;
}
.fontss{
    font-weight: 300;
}

.inline{

    display: block !important;

}

.must-show{
    display: block !important;
    background: rgba(0, 0, 0, 0.5);
}

.cen{

    margin-top: 300px;

}

#wrapper {
    padding-left: 0;
}

#page-wrapper {
    /* position: relative; */
    width: 100%;
    padding: 0;
    background-color: #fff;
    /* z-index: -1; */
}
#page-wrapper-omise {
    /* position: relative; */
    width: 100%;
    padding: 0;
    background-color: #fff;
    /* z-index: -1; */
}
#page-wrapper-tour {
    /* position: relative; */
    width: 100%;
    padding: 0;
    background-color: #fff;
    /* z-index: -1; */
}
.active_menu{
    border-left: 1px solid #337AB7;
}
.set_menu_posit{
    position: relative;
    z-index: -1;
}
.logout_button{
    background: #d14233;
}
.logout_button:hover > a{
    background: #d14233 !important;
}
.logout_button:hover{
    background: #d14233 !important;
}
.huge {
    font-size: 50px;
    line-height: normal;
}
.menu:hover > .submenu{
    display: block;
}
.menu .submenu:hover{
    display: block;
}
.menu:hover{
    background: #424141 !important;
}
.main_sub_menu:hover{
    background: #424141 !important;
}
.menu{
    text-align: center;
    margin: 0;
}
.menu i{
    display: inline-block;
    padding: 0;
    color:#e1e1e1;
    font-size: 38px;
}
.menu p{
    display: block;
    margin: 0;
    padding: 0;
    color:#e1e1e1;
}
.navbar-nav{
    /* position: relative; */
}
.zin_menu{
    z-index: 1000;
}
.submenu{
    display: none;
    position: fixed;
    left: 100px;
    top: 0;
    height: 100%;
    background-color: #484747;
    z-index: 1031;
    padding: 0;
    table-layout: fixed;
    list-style: none;
    width: 280px;
}
.submenu li a{
    display: block;
    width: 100%;
    /* padding: 20px; */
    text-align: left;
    color: #fff;
    /* border-bottom: 1px solid #6d6b6b; */
    font-size: 16px;
    font-weight: 300 !important;
    /* margin: 0 25px; */
    /* padding-bottom: 18px;
    padding-top: 25px; */
    padding: 10px 25px;
}
.submenu li a:hover{
    background: #424141 !important;
}
.submenu .head_section{
    color: #fff;
    border-bottom: 1px solid #6d6b6b;
    font-size: 26px;
    font-weight: 300;
    margin: 0 25px;
    padding-bottom: 18px;
    padding-top: 25px;
    font-weight: 300 !important;
    text-align: left;
    margin-bottom:15px;
}
@media(min-width:768px) {
    #wrapper {
        padding-left: 100px;
    }

    #page-wrapper {
        padding: 10px;
    }
    #page-wrapper-omise {
        padding: 10px;
    }
    #page-wrapper-tour {
        padding: 10px;
    }
}
@media(min-width:1320px) {
    .table-text-small{
        font-size: 12px;
    }
}

/* Top Navigation */

.top-nav {
    padding: 0 15px;
}

.top-nav>li {
    display: inline-block;
    float: left;
}

.top-nav>li>a {
    padding-top: 15px;
    padding-bottom: 15px;
    line-height: 20px;
    color: #999;
}

.top-nav>li>a:hover,
.top-nav>li>a:focus,
.top-nav>.open>a,
.top-nav>.open>a:hover,
.top-nav>.open>a:focus {
    color: #fff;
    background-color: #000;
}

.top-nav>.open>.dropdown-menu {
    float: left;
    position: absolute;
    margin-top: 0;
    border: 1px solid rgba(0,0,0,.15);
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

.top-nav>.open>.dropdown-menu>li>a {
    white-space: normal;
}

ul.message-dropdown {
    padding: 0;
    max-height: 250px;
    overflow-x: hidden;
    overflow-y: auto;
}

li.message-preview {
    width: 275px;
    border-bottom: 1px solid rgba(0,0,0,.15);
}

li.message-preview>a {
    padding-top: 15px;
    padding-bottom: 15px;
}

li.message-footer {
    margin: 5px 0;
}

ul.alert-dropdown {
    width: 200px;
}

/* Side Navigation */

@media(min-width:768px) {
    .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
        /* border-color: #101010; */
        position: absolute;
        display: flex !important;
        top: 0px;
        left: 225px;
        width: 100px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        overflow-y: auto;
        min-height: auto;
        background: #3D3C3C;
        bottom: 0;
        overflow-x: hidden;
    }
    .side-nav {
        position: absolute;
        top: 0px;
        left: 225px;
        width: 100px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        overflow-y: auto;
        height:100vh;
        background: #3D3C3C;
        bottom: 0;
        overflow-x: hidden;
    }
    .side-nav>li>a {
        width: 100px;
        /* border-left: #FFF 0px solid !important; */
        /* -webkit-transition:  all 0.25s ease-in-out;
        -moz-transition:  all 0.25s ease-in-out;
        -ms-transition:  all 0.25s ease-in-out;
        -o-transition:  all 0.25s ease-in-out;
        transition:  all 0.25s ease-in-out; */
        white-space: nowrap;
    }

    .side-nav li a:hover,
    .side-nav li a:focus{
        outline: none;
        /* background-color: #000 !important;
        border-left: #FFF 5px solid !important; */
        -webkit-transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
        -ms-transition: all 0.25s ease-in-out;
        -o-transition: all 0.25s ease-in-out;
        transition: all 0.25s ease-in-out;
        white-space: nowrap;
        overflow:hidden;
        text-overflow: ellipsis;
    }
    .side-nav li a{
        font-weight: 300 !important;
    }
}

.side-nav>li>ul {
    padding: 0;
}

.side-nav>li>ul>li>a {
    display: block;
    /* padding: 10px 15px 10px 38px; */
    text-decoration: none;
    color: #999;
   /* border-left: #FFF 0px solid !important; */
    -webkit-transition:  all 0.25s ease-in-out;
    -moz-transition:  all 0.25s ease-in-out;
    -ms-transition:  all 0.25s ease-in-out;
    -o-transition:  all 0.25s ease-in-out;
    transition:  all 0.25s ease-in-out;
    white-space: nowrap;
}

.side-nav>li>ul>li>a:hover {
    color: #e1e1e1;
    /* border-left: #FFF 5px solid !important; */
    -webkit-transition: all 0.20s ease-in-out;
    -moz-transition: all 0.20s ease-in-out;
    -ms-transition: all 0.20s ease-in-out;
    -o-transition: all 0.20s ease-in-out;
    transition: all 0.20s ease-in-out;
    white-space: nowrap;
    overflow:hidden;
    text-overflow: ellipsis;
    background: #3D3C3C;
}
.side-nav > .active {

}

/* Flot Chart Containers */

.flot-chart {
    display: block;
    height: 400px;
}

.flot-chart-content {
    width: 100%;
    height: 100%;
}

/* Custom Colored Panels */

.huge {
    font-size: 40px;
}

.panel-green {
    border-color: #5cb85c;
}

.panel-green > .panel-heading {
    border-color: #5cb85c;
    color: #fff;
    background-color: #5cb85c;
}

.panel-green > a {
    color: #5cb85c;
}

.panel-green > a:hover {
    color: #3d8b3d;
}

.panel-red {
    border-color: #d9534f;
}

.panel-red > .panel-heading {
    border-color: #d9534f;
    color: #fff;
    background-color: #d9534f;
}

.panel-red > a {
    color: #d9534f;
}

.panel-red > a:hover {
    color: #b52b27;
}

.panel-yellow {
    border-color: #f0ad4e;
}

.panel-yellow > .panel-heading {
    border-color: #f0ad4e;
    color: #fff;
    background-color: #f0ad4e;
}

.panel-yellow > a {
    color: #f0ad4e;
}

.panel-yellow > a:hover {
    color: #df8a13;
}
.login-panel{
    margin-top:25%;
}

/* --------------------------------------- Custom CSS for iTravelism ----------------------------------------------- */
.table>tbody>tr>td,
.table>tbody>tr>th,
.table>tfoot>tr>td,
.table>tfoot>tr>th,
.table>thead>tr>td,
.table>thead>tr>th{
    vertical-align: middle;
    border-color: #e4e4e4;
}
input[type=time]::-webkit-inner-spin-button,
input[type=time]::-webkit-outer-spin-button,
input[type=date]::-webkit-inner-spin-button,
input[type=date]::-webkit-outer-spin-button{
    -webkit-appearance: none;
    margin: 0;
}
@media (min-width: 768px) {
    .navbar-nav > li > a :hover {
        /* padding-top:10px !important;
        padding-bottom:5px !important; */
    }
}
    .head-table td:hover{
    cursor:pointer ;
    background-color: #ADADAD;
    color:#FFF;

    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -ms-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
}
.operate-head-table {
    cursor:inherit !important;
    background-color: #F5F5F5 !important;
    color:inherit !important;
}
.head-table td{
    font-weight: 300;
    background-color:#F5F5F5;
    border-top: none !important;

    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -ms-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
}
.head-label td{
    font-weight: bold;
    background-color:#F5F5F5;
    border-top: none !important;
}
.book-head-table td{
    height: 80px;
}
.page-header{
    border-bottom:0px;
}
/* col-lg-12 for header on every-page to no-padding */
.col-lg-12{
    padding-right: 0px;
    padding-left: 0px;
}
/* Label size in every-page*/
label.label-user{
    width: 177px;
}
label.label-editUser{
     width: 177px;
 }
label.label-tour{
    width: 170px;
}
label.label-booking{
    width: 75px;
}
label.label-company,
.label-social{
    width: 130px;
}
label.label-gallery,
.label-subtour{
    width:150px;
}
.sub-menu-lg{
    width:110px;
}
.sub-menu-md{
    width:90px;
}
.sub-menu-sm,
.btn-back{
    width:75px;
}
/* Information Box */
textarea{
    resize: none;
}
.well-medium{
    width:200px;
}
.box-info-lg{
    display:inline-block;
    height: 100%;

    width:424px;

    margin:0rem;
    padding:1.25rem;
    background-color: #FAFAFA;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
    -moz-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
    box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
}
#clearAdult{
    display: block;
    /* border: solid 1px #333; */
    width: 184px;
    /* height: 34px; */
    padding: 7px 10px;
    color: #fff;
    border-radius: 4px;
    background-color: #E85B5B;
    margin-left: 174px;
    text-transform: none;
    cursor: pointer;
}
.box-package-detail{
    /*display:inline-block;*/
    height: 100%;
    /*width: 84%;*/
    

 /*   width:90%;
    margin:0.5rem 5%;*/
    padding:1.25rem;
    background-color: #FAFAFA;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
    -moz-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
    box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
}
.box-package-detail-white{
    display:block;
    height: 100%;
    width:90%;
    margin:0.5rem 5%;
    /* padding:1.25rem; */
    /* background-color: #FAFAFA; */
    /* border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
    -moz-box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05);
    box-shadow: inset 0px 1px 1px 0px rgba(0,0,0,0.05); */
}
.btn{
    margin-left:0.25rem;
    margin-right:0.25rem;
}
.info{
    position:relative;
}
a.grey{
    display: none;
    color:grey;
}
.time-width{
    width:300px;
}
.time-width td{
    border-top:none !important;
}
.calendar-left,
.calendar-right,
.calendar-sub-r{
    display:block !important;
    margin-right:2rem;
}
.calendar-right{
    vertical-align: top;
}
.calendar-sub-r{
    position:absolute;
}
.calendar-sub-l{
    width:1500px;
}
.calendar{
  /*display:inline-block !important;*/
  vertical-align: middle;
  margin-right:200rem;
}
.logo-icon{
    display: block;
    width: 100px !important;
    text-align: center ;
    padding: 15px 0;
    border-bottom: 1px solid #474646;
}
.logo-icon img{
    width: 85%;
}
.navigate ol{
    display:inline-block !important;
}
.price-block{
    display:inline-flex;
    width:100%;
    height:auto;
    margin: 0 10%;
}
.price-block-head{
    display:inline-block;
    width:60%;
    position:relative;
    padding: 40px 5%;
    height: 125px;
    color: #FFF;
    background: #2f8bb5;
    font-size:2rem;
    float:left;
}
.price-block-tail{
    display:inline-block;
    width:40%;
    position:relative;
    padding:38px 5%;
    height: 125px;
    color: #FFFFFF;
    background: #0c303e;
    font-weight: bold;
    font-size: 3rem;
    text-align:right;
}
.price-block-tail span{
    position:absolute;
    top:10px;
    right:12%;
    font-size:1.5rem;
}
.breadcrumb{
    background-color: #FFFFFF;
}
.breadcrumb a{
    color: #000000;
    padding:0.5rem;
    -webkit-transition: all 1s;
    border-radius: 0.5rem;
    text-decoration: none;
}
.breadcrumb a:hover{
    font-weight: bold;
    -webkit-transition: all 1s;
    /*color: #FFFFFF;*/
    /*background-color: #000;*/
    /*border-radius: 0.5rem;*/
    /*padding:0.5rem;*/
}
.breadcrumb > .active{
    font-weight: 300;
}
.logo-icon img{
    display: inline-block;
    /* height: 7rem; */
    /* width: 10rem; */
    border-radius: 5px;
    /* margin: 1.25rem ; */
    /*border: 1px solid #333;*/
     /*float:left; */
     /*margin-left:50%; */
    text-align: center;
}.logo-icon ul{
    /*display:inline-block;*/
    float: right;

 }
 .nav-stacked{
    /* border: 1px solid #333; */
    color: #fff !important;
    border-radius: 30px;
    font-size: 16px !important;
 }
.logo-icon li{
    text-align:right;
    color: #fff !important;
}
.nav-role{
    font-size: 1rem;
    font-weight: bold;
}
.nav-username{
    margin-left: 0 !important;
    /* width:125px; */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    color: #fff !important;
}
.fa-allotment{
    font-size: 1.75rem !important;
    margin-left:0.5rem;
    margin-right:0.5rem;
}
.block-days{
    display:inline-block;
    width:130px;
}

</style>

<div class="jvectormap-tip"></div></body></html>