<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industrial | Energy Management</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/style.css">

    </head>
    <body >
        <?php
        include './class/student.php';

        $student_obj = new Student();

        ?>   

   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <h1>INDUSTRY</h1>
                </a>
            </div>

            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <br>

                    <li class="selected">
                        <a href="dss.php"><i class="fa fa-dashboard fa-fw"></i>DSS</a>
                    </li>

                    <li>
                        <a href="fore.php"><i class="fa fa-bar-chart-o fa-fw"></i> Planning<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="fore.php">Forecasting(energy and cost)</a>
                            </li>
                            <li>
                                <a href="consplan.php">Consumption planning</a>
                            </li>
                            <li>
                                <a href="policy.php">Policy (making and review)</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="lighting.php"><i class="fa fa-bar-chart-o fa-fw"></i> Energy Audit<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="lighting.php">Lighting</a>
                            </li>
                            <li>
                                <a href="motors.php">Motors</a>
                            </li>
                            <li>
                                <a href="boiler.php">Boiler</a>
                            </li>
                            <li>
                                <a href="heat.php">Heat exchanger</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="energyin.php"><i class="fa fa-bar-chart-o fa-fw"></i> Energy analysis<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">                         
                            <li>
                                <a href="energyin.php">Energy intensity analysis</a>
                            </li>
                            <li>
                                <a href="costin.php">Cost intensity analysis</a>
                            </li>
                            <li>
                                <a href="industrysp.php">Industry specific energy performance indicator</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>



                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Decision Support</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome to <b>Industrial </b>Energy Management Expert System.
                    </div>
                </div>
                <!--end  Welcome -->
            </div>


            <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                <i class="fa fa-calendar fa-3x"></i>&nbsp;Energy analysis.

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                     <i class="fa  fa-folder-open fa-3x"></i>&nbsp;Energy planning  
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                          <i class="fa fa-rss fa-3x"></i>&nbsp; Forecasting

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                      <i class="fa  fa-pencil fa-3x"></i>&nbsp; Energy audit
                       
                    </div>
                </div>
                <!--end quick info section -->
            </div>

            <div class="row">



