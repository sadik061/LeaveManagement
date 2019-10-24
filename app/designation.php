<?php include 'session.php'; ?>

<?php //Handleing error
    if(isset($_GET['conflicterror'])){ ?>
        <script type='text/javascript'>
            var res = alert('This designation is already exist');

            window.location.href = 'designation.php';

        </script>

<?php
    }
?>

<?php if($_SESSION["role"]=="admin" || $_SESSION["role"]=="super_admin"){ ?>
<?php include 'template/header.php'; ?>
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row mt">
                <?php include 'template/sidebar.php'; ?>

                <div class="col-sm-9" style="margin-left: 25%;">
                    <section class="panel">
                        <header class="panel-heading wht-bg">
                            <h4 class="gen-case">
                                Add new desingation
                            </h4>
                        </header>
                        <div class="panel-body ">
                            <form class="form-horizontal style-form" action="core/adddesignation.php" method="POST">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Designation Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="designation_name" value="" required>
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Casual Leave</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="casual_leave" value="" min="0" required>
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Medical Leave</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="medical_leave" value="" min="0" required>
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Other Leave</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="other_leave" value="" min="0" required>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-theme">Add</button>

                            </form>

                        </div>
                    </section>
                    <section class="panel">
                        <header class="panel-heading wht-bg">
                            <h4 class="gen-case">
                                All desingations
                            </h4>
                        </header>
                        <div class="panel-body ">
                            <table class="table table-striped table-advance table-hover">


                                <thead>
                                <tr>
                                    <th><i class="fa fa-bullhorn"></i> Designation</th>
                                    <th><i class="fa fa-bookmark"></i> Casual Leave</th>
                                    <th><i class="fa fa-bookmark"></i> Medical Leave</th>
                                    <th><i class="fa fa-bookmark"></i> Other Leave</th>
                                    <th><i class="fa fa-edit"></i> remove</th>
                                    <th><i class="fa fa-edit"></i> update</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql = "SELECT * FROM designation ORDER BY designation_name";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<tr>
                                                <td>' . $row["designation_name"] . '</td>
                                                <td>' . $row["casual_leave"] . '</td>
                                                <td>' . $row["medical_leave"] . '</td>
                                                <td>' . $row["other_leave"] . '</td>
                                                <td><a href="core/removedesignation.php?id='.$row["designation_id"].'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a></td>
                                                <td><a data-toggle="modal" data-target="#exampleModal-'.$row["designation_id"].'" class="btn btn-warning btn-xs"><i class="fa fa-refresh "></i></a></td>
                                            </tr>';
                                    }
                                }
                                 ?>


                                </tbody>
                            </table>
                            <?php 
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                    // output data of each row
                                while ($row = $result->fetch_assoc()) { ?>
                                    
                            <!-- Modal -->
                            <form method="POST" action="core/updatedesignation.php">
                                <div class="modal fade" id="exampleModal-<?php echo $row["designation_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-<?php echo $row["designation_id"] ?>" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel-<?php echo $row["designation_id"] ?>">Edit designation details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                       
                                      <div class="col-sm-3">Designation: </div>
                                        <div class="col-sm-9">
                                            <input style="width:100%" type="text" name="designation_name" id="designation_name" value=<?php echo $row["designation_name"] ?> required>
                                        </div>
                                        <br><br>
                                
                                      <div class="col-sm-3">Casual leave: </div>
                                        <div class=col-sm-9>
                                            <input style="width:100%" type="number" name="casual_leave" id="casual_leave" value="<?php echo $row["casual_leave"] ?>" min="0">
                                        </div>
                                        <br><br>
                                
                                        <div class="col-sm-3">Medical leave:</div>
                                        <div class="col-sm-9">
                                            <input style="width:100%" type="number" name="medical_leave" id="medical_leave" value="<?php echo $row["medical_leave"] ?>" min="0">
                                        </div>
                                        <br><br>
                                
                                        <div class="col-sm-3">Other leave:</div>
                                        <div class="col-sm-9">
                                            <input style="width:100%" type="number" name="other_leave" id="other_leave" value="<?php echo $row["other_leave"] ?>" min="0">
                                            <input style="visibility: hidden;" type="text" name="designation_id" id="designation_id" value="<?php echo $row["designation_id"] ?>"> 
                                        </div>
                                        <br><br>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button id="modal_submit" type="submit" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </form>
                            <?php
                                }
                            } ?>
                        </div>
                    </section>
                </div>

            </div>
        </section>
        <!-- /wrapper -->
    </section>

    

<?php include 'template/footer.php'; ?>
<?php } ?>