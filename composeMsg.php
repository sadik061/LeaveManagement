<?php include 'session.php'; 
include 'core/userProfile.php';
include 'core/message.php';

if(isset($_POST['message'])){
    sendMessage($_GET['to'],$_POST['message']);
}
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
                            <h4><i class="fa fa-angle-right"></i> Compose message</h4><hr>
                            <form action="composeMsg.php?to=<?php echo $_GET['to'] ?>" method="post">
                                
                                <div>
                                    <textarea name="message" id="" cols="130" rows="10"></textarea>
                                    <br>
                                    <button type="submit">Send</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            
        </section>
        <!-- /wrapper -->
    </section>
<?php include 'template/footer.php'; ?>