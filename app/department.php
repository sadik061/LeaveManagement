<?php include 'session.php'; ?>

<?php //Handleing error
    if(isset($_GET['conflicterror'])){ ?>
        <script type='text/javascript'>
            var res = alert('This department is already exist');

            window.location.href = 'department.php';

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
                                Add new department
                            </h4>
                        </header>
                        <div class="panel-body ">
                            <form class="form-horizontal style-form" action="core/adddepartment.php" method="POST">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Department Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="department_name" value="" required>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-theme">Add</button>

                            </form>

                        </div>
                    </section>
                    <section class="panel">
                        <header class="panel-heading wht-bg">
                            <h4 class="gen-case">
                                All department
                            </h4>
                        </header>
                        <div class="panel-body ">
                            <table class="table table-striped table-advance table-hover">


                                <thead>
                                <tr>
                                    <th><i class="fa fa-bullhorn"></i> Department name</th>
                                    <th><i class="fa fa-edit"></i> Update</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql = "SELECT * FROM department ORDER BY department_name";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<tr>
                                                <td>' . $row["department_name"] . '</td>
                                                <td><a data-toggle="modal" data-target="#exampleModal-'.$row["department_id"].'" class="btn btn-warning btn-xs"><i class="fa fa-refresh "></i></a></td>
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
                            <form method="POST" action="core/updatedepartment.php">
                                <div class="modal fade" id="exampleModal-<?php echo $row["department_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-<?php echo $row["department_id"] ?>" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel-<?php echo $row["department_id"] ?>">Edit department details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                       
                                      <div class="col-sm-3">Department: </div>
                                        <div class="col-sm-9">
                                            <input style="width:100%" type="text" name="department_name" id="department_name" value=<?php echo $row["department_name"] ?> required>
                                            <input style="visibility: hidden;" type="text" name="department_id" id="department_id" value="<?php echo $row["department_id"] ?>"> 
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