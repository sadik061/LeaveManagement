<?php
include 'core/contacts.php';

$users = getContacts();
?>
<?php include 'template/header.php'; ?>
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row mt">
                <?php include 'template/sidebar.php'; ?>
                
                <div class="col-sm-9" style="margin-left: 25%;">

                    <div class="col-md-12 mt">
                        <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i> Hover Table</h4><hr>
                            <table class="table table-hover">
                                
                                <tbody>
                                <?php foreach($users as $user){ ?>
                                <tr>
                                    <td style="width: 20%;"><img src="uploads/<?php echo $user["image"] ?>" class="img-circle"></td>
                                    <td>
                                        <p><?php echo $user["user_name"] ?></p>
                                        <p><?php echo $user["designation_name"] ?></p>
                                        <p><?php echo $user["email"] ?></p>
                                        <p><?php echo $user["phone"] ?></p>
                                    </td>
                                    <td><a class="btn btn-compose" href="composeMsg.php?to=<?php echo $user["user_id"] ?>">Message</a></td>
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

<?php include 'template/footer.php'; ?>
