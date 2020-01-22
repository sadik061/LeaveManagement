<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>
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
    <link rel='icon' href='http://www.bdpalcon.com/wp-content/uploads/2018/10/PAL-1.png' type='image/x-icon' />
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">





    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link href="css/custome.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
            httpreq.onreadystatechange = function() {
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
        <section id="main-content">
            <section class="wrapper">
                <!-- page start-->
                <div class="row mt">
                    <?php include 'template/sidebar.php'; ?>

                    <div class="col-sm-9" style="margin-left: 25%;">

                        <div class="col-md-12 mt">
                            <div class="content-panel">
                                <h4><i class="fa fa-angle-right"></i> Annual Report </h4>
                                <hr>
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>Designation</th>
                                            <th>Casual Leave</th>
                                            <th>Medical Leave</th>
                                            <th>Maternity Leave</th>
                                            <th>Urgent Leave</th>
                                            <th>Other Leave</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach (User::getAllUsers() as $i) { ?>
                                            <tr>
                                                <td><?php echo $i->user_name ?></td>
                                                <td><?php echo $i->getDepartment() ?></td>
                                                <td><?php echo $i->getDesignation() ?></td>
                                                <td><?php echo $i->casual_leave ?></td>
                                                <td><?php echo $i->medical_leave ?></td>
                                                <td><?php echo $i->maternity_leave ?></td>
                                                <td><?php echo $i->urgent_leave ?></td>
                                                <td><?php echo $i->other_leave ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
            <!-- /wrapper -->
        </section>

        <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/jquery/jquery.min.js"></script>

    <link rel="stylesheet" href="lib/advanced-datatable/css/demo_page.css">
    <link rel="stylesheet" href="lib/advanced-datatable/css/demo_table.css">
    <link rel="stylesheet" href="lib/advanced-datatable/css/demo_table_jui.css">
    <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css">
    <link rel="stylesheet" href="lib/advanced-datatable/css/jquery.dataTables.css">
    <link rel="stylesheet" href="lib/advanced-datatable/css/jquery.dataTables_themeroller.css">

    <link rel="stylesheet" href="style.css">





    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <!--script for this page-->

    <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>


    <!-- <script src="lib/advanced-datatable/js/jquery.dataTables.min.js"></script> -->
    <!-- <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script> -->
    <!-- <script type="text/javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script> -->
    <!-- <script type="text/javascript" src="lib/advanced-datatable/js/jquery.dataTables.min.js"></script> -->
    <!-- <script type="text/javascript" src="lib/advanced-datatable/js/jquery.js"></script> -->


    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script> -->


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>

    <script type="text/javascript">
        jQuery(function($) {
            $("ul a")
                .click(function(e) {
                    var link = $(this);

                    var item = link.parent("li");

                    if (item.hasClass("active")) {
                        item.removeClass("active").children("a").removeClass("active");
                    } else {
                        item.addClass("active").children("a").addClass("active");
                    }

                    if (item.children("ul").length > 0) {
                        var href = link.attr("href");
                        link.attr("href", "#");
                        setTimeout(function() {
                            link.attr("href", href);
                        }, 300);
                        e.preventDefault();
                    }
                })
                .each(function() {
                    var link = $(this);
                    if (link.get(0).href === location.href) {
                        link.addClass("active").parents("li").addClass("active");
                        return false;
                    }
                });
        });
    </script>

</body>

</html>


<script>
    $(document).ready(function() {
        $('#example').dataTable({
            "iDisplayLength": -1,
            dom: 'Bfrtip',
            buttons: [
                'excelHtml5',
            ]
            // "aLengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]]
        });
    });
</script>