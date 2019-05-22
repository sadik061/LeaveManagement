<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Professional Associate LTD.</title>

    <!-- Favicons -->
    <link rel='icon' href='http://www.bdpalcon.com/wp-content/uploads/2018/10/PAL-1.png' type='image/x-icon'/ >
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />

    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
    <script>
        function prodlistajax() {
            var search = document.getElementById("search").value;
            ///console.log("search value " + search);
            var httpreq = new XMLHttpRequest();
            httpreq.onreadystatechange = function () {
                if (this.status == 200 && this.readyState == 4) {
                    console.log("Table updated");
                    document.getElementById("tablebody").innerHTML = this.responseText;
                }
            }
            httpreq.open("GET", "ajaxproducts.php?search=" + search, true);
            httpreq.send();
        }
    </script>
</head>

<body>
<section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">

        <!--logo start-->
       <a href="index.php" class="logo" style="margin-top: 1px;"><img class="logo" src="http://www.bdpalcon.com/wp-content/uploads/2018/10/PAL-1.png" alt="" width="72" height=auto><b>Professional Associate LTD.</b><span></span>
        </a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->

                <!-- settings end -->
                <!-- inbox dropdown start-->

                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->

                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </header>