<?php

include 'core/database.php';
include 'core/message.php';
include 'session.php';

$msg_id = '';

if(isset($_GET['id'])){
    $msg_id = $_GET['id'];
}
// making msg seen

seenMessage($msg_id);

$msgdata = getMessage($msg_id);


if(isset($_POST['delete'])){
    deleteMessage($_POST['delete']);
}
?>

<?php include 'template/header.php'; ?>
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row mt">
                <?php include 'template/sidebar.php'; ?>
                
                <div class="col-sm-9" style="margin-left: 25%;">
                    <section class="panel">

                        <div class="panel-body ">
                            <div class="mail-header row">

                                <div class="col-md-9">
                                    <h1><?php echo $msgdata['from_username'] ?></h1>
                                    <h2><?php echo $msgdata['datetime'] ?></h2>
                                    <h3><?php echo $msgdata['msg'] ?></h3>
                                </div>
                                    <form class="form-horizontal style-form" action="viewMessage.php" method="POST">
                                        
                                        <div class="col-md-1">
                                            <div class="compose-btn pull-right">
                                                <button name='delete' value='<?php echo $msg_id ?>' type="submit" class="btn btn-sm btn-theme"><i
                                                            class="fa fa-reply"></i> Delete message
                                                </button>


                                            </div>
                                        </div>
                                    </form>

                            </div>

                        


                        </div>
                    </section>

                </div>

            </div>
        </section>
        <!-- /wrapper -->
    </section>

<?php include 'template/footer.php'; ?>
