<?php include 'session.php'; ?>
<?php if($_SESSION["role"]=="department_head" || $_SESSION["role"]=="super_admin"){ ?>
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
                                Add new member
                            </h4>
                        </header>
                        <div class="panel-body ">
                            <form class="form-horizontal style-form" action="core/adduser.php" method="get">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="user_name" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Department</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="department_parent_id">
                                            <?php include 'core/database.php';
                                            $sql = "SELECT * FROM department";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {

                                                    echo '<option value="' . $row["department_id"] . '">' . $row["department_name"] . '</option>';
                                                }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Designation</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="designation_parent_id">
                                            <?php include 'core/database.php';
                                            $sql = "SELECT * FROM designation";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {

                                                    echo '<option value="' . $row["designation_id"] . '">' . $row["designation_name"] . '</option>';
                                                }
                                            } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Add Member as</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="role">
                                            <option value="user">User</option>
                                            <option value="department_head">Department Head</option>
                                            <option value="super_admin">Super Admin</option>

                                        </select>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-theme">Add</button>

                            </form>

                        </div>
                    </section>
                    <section class="panel">
                        <header class="panel-heading wht-bg">
                            <h4 class="gen-case">
                                All Users
                            </h4>
                        </header>
                        <div class="panel-body ">
                            <table class="table table-striped table-advance table-hover">


                                <thead>
                                <tr>
                                    <th> Name</th>
                                    <th> Department</th>
                                    <th> Designation</th>
                                    <th> Email</th>
                                    <th> Role</th>
                                    <th> Remove</th>
                                    <th> Update</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql = "SELECT * FROM users JOIN designation JOIN department ON users.department_id=department.department_id AND users.designation_id=designation.designation_id                                ";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        if($_SESSION['userid'] != $row["user_id"]){
                                            echo '<tr>
                                                <td>' . $row["user_name"] . '</td>
                                                <td>' . $row["department_name"] . '</td>
                                                <td>' . $row["designation_name"] . '</td>
                                                <td>' . $row["user_name"] . '</td>
                                                <td>' . $row["email"] . '</td>
                                                <td>' . $row["role"] . '</td>
                                                <td><a href="core/removeuser.php?id=' . $row["user_id"] . '" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a></td>
                                                <td><a href="updatecollegueprofile.php?userid=' . $row["user_id"] . '" class="btn btn-warning btn-xs"><i class="fa fa-refresh "></i></a></td>
                                            </tr>';
                                            
                                        }

                                    }
                                }
                                $conn->close(); ?>


                                </tbody>
                            </table>


                        </div>
                    </section>
                </div>

            </div>
        </section>
        <!-- /wrapper -->
    </section>

<?php include 'template/footer.php'; ?>
<?php } ?>
