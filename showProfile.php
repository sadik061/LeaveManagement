<!-- This is for super-admin
if super-admin want to see someone's profile, system will direct to this file -->
<?php
    include 'session.php';
    $userid = $_GET['userid'];
?>
<?php include 'template/header.php'; ?>
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row mt">
            <?php 
                include 'template/sidebar.php'; 
                include 'core/database.php'; 
                $user = new User($userid);
                
                ?>

                <div class="col-sm-9" style="margin-left: 25%;">
                    <section class="panel">
                        
                        <div class="panel-body ">
                            <div class="form-horizontal style-form" enctype="multipart/form-data">
                                <div class="row content-panel">
                                    <div class="col-md-4 profile-text mt mb centered">
                                        <div class="right-divider hidden-sm hidden-xs">
                                            <img src="uploads/<?php echo $user->image; ?>" width="90%">
                                        </div>
                                    </div>
                                    <div class="col-md-8 profile-text mt mb centered">


                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Name:</label>
                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->user_name; ?></label>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Phone:</label>
                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->phone; ?></label>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Blood group:</label>
                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->blood; ?></label>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Address:</label>
                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->address; ?></label>

                                        </div>
                                        <?php if($_SESSION["role"]=="super_admin"){ ?>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Point:</label>
                                            <label class="col-sm-3 col-sm-3 control-label">
                                            <form action='core/updatePoint.php' method="POST">
                                                <input type="number" name="point" id="point" placeholder="<?php echo $user->point; ?>">
                                                <input type="text" name="userid" id="userid" value="<?php echo $user->userid; ?>" hidden>
                                                <br><br>
                                                <button type="submit">Submit Point</button>
                                            </form>
                                            </label>
                                        </div>
                                        <?php } else { ?>
                                            <div class="form-group">
                                                <label class="col-sm-3 col-sm-3 control-label">Point:</label>
                                                <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->point; ?></label>
                                            </div>
                                        <?php } ?>

                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Designation:</label>
                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->getDesignation(); ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Company:</label>
                                            <label class="col-sm-3 col-sm-3 control-label">PROFESSIONAL ASSOCIATE
                                                LTD.</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Loan taken:</label>
                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->loan ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Casual Leave Left:</label>
                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->getLeave('casual_leave'); ?> </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Earn Leave Left:</label>
                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->getLeave('earn_leave'); ?> </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Medical Leave Left:</label>
                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->getLeave('medical_leave'); ?> </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Maternity Leave Taken:</label>
                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->getLeave('maternity_leave'); ?> </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Urgent Leave Taken:</label>
                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->getLeave('urgent_leave'); ?> </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Without Pay Leave Taken:</label>
                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->getLeave('without_pay_leave'); ?> </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Other Leave Left:</label>
                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->getLeave('other_leave'); ?> </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Email:</label>
                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->email; ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Social links:</label>
                                            <label class="col-sm-3 col-sm-3 control-label">
                                                <a title="Facebook" href="<?php echo $user->facebook ?>"
                                                   target="_blank"><i class="fa fa-facebook-square"></i></a>
                                                <a title="linked in" href="<?php echo $user->linkedin ?>"
                                                   target="_blank"><i class="fa fa-linkedin-square"></i></a>
                                                <a title="skype" href="<?php echo $user->skype ?>" target="_blank"><i
                                                            class="fa fa-skype"></i></a>
                                            </label>
                                        </div>


                            </div>

                        </div>
                </div>


            </div>
        </section>
        
        </div>

        </div>
    </section>
    <!-- /wrapper -->
    </section>

<?php include 'template/footer.php'; ?>