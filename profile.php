<?php include 'session.php'; ?>

<?php include 'template/header.php'; ?>
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row mt">
            <?php 
                include 'template/sidebar.php'; 
                include 'core/database.php'; 
                $user = new User($_SESSION["userid"]);
                
                ?>

                <div class="col-sm-9" style="margin-left: 25%;">
                    <section class="panel">
                        <header class="panel-heading wht-bg">
                            <h4 class="gen-case">
                                Welcome <?php echo $user->user_name; ?>
                            </h4>
                        </header>
                        <div class="panel-body ">
                            <form class="form-horizontal style-form" action="core/profileupdate.php"
                                  method="post" enctype="multipart/form-data">
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
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">Point:</label>
                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $user->point; ?></label>

                                        </div>
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

                                        <a href="updateprofile.php" style="float: left;" class="btn btn-theme">Edit
                                            profile</a>

                            </form>

                        </div>
                </div>


            </div>
        </section>
        <section class="panel">
            <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    Documents
                </h4>
            </header>
            <form class="form-horizontal style-form" action="core/addfile.php" method="post" enctype="multipart/form-data">
                <div class="col-md-6 profile-text mt mb centered">
                    <div class="right-divider hidden-sm hidden-xs">
                        <input type="text" class="form-control" name="name" placeholder="File name">
                    </div>
                </div>
                <div class="col-md-4 profile-text mt mb centered">
                    <div class="right-divider hidden-sm hidden-xs">
                        <input type="file" name="fileToUpload2" id="fileToUpload2">
                    </div>
                </div>
                <div class="col-md-2 profile-text mt mb centered">
                    <div class="right-divider hidden-sm hidden-xs">
                        <button type="submit" style="float: left;" class="btn btn-theme">Add File</button>
                    </div>
                </div>

            </form>
            <div class="panel-body ">
                <table class="table table-striped table-advance table-hover">


                    <thead>
                    <tr>
                        <th style="width: 80%"> Name</th>
                        <th> Download</th>
                        <th> Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                    $files = $user->getFiles();
                    
                    foreach($files as $file){
                        echo '<tr><td> <a href="uploads/documents/'. $file["url"] . '" target="_blank" >'. $file["namee"] . '</td>';
                        echo sprintf('<td><a href="core/downloadfile.php?url=%s&filename=%s" class="btn btn-primary btn-xs"><i class="fa fa-download "></i></a></td>',$file["url"],$file["namee"]);
                        echo sprintf('<td><a href="core/removefile.php?fileid=%s&filename=%s" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a></td></tr>',$file["fileid"],$file["url"]);
                    }

                    ?>


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