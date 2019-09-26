<?php
    include 'session.php';
    include 'core/joblist.php';
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
                            <h4><i class="fa fa-angle-right"></i> Jobs </h4><hr>
                            <div class="container">  
                                <div class="form-group">  
                                    <form name="add_name" id="add_name">  
                                        <div class="table-responsive">  
                                            <table class="table table-bordered" id="dynamic_field">  
                                                <tr>  
                                                    <td><input type="text" name="name[]" placeholder="Enter Job ID" class="form-control name_list" /></td>  
                                                    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                                </tr>  
                                                
                                            </table>  
                                            <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                                            <br>
                                            <br>
                                            <table class="table table-bordered1" id="dynamic_field1">
                                            <?php
                                                $jobs = new Jobs();
                                                $emp_id = $_GET['emp_id'];
                                                $jobList = $jobs::jobList($emp_id); 
                
                                                foreach($jobList as $i){
                                                    echo '<tr>';
                                                    echo '<td >'.$i.'</td>';
                                                    echo '<td><a href="core/removejobs.php?job_id='.$i.'&emp_id='.$emp_id.'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a></td>';
                                                    echo '</tr>';
                                                }
                                            ?>
                                            </table>
                                        </div>  
                                    </form>  
                                </div>  
                                <script>  
                                $(document).ready(function(){  
                                    var i=1;  
                                    $('#add').click(function(){  
                                        i++;  
                                        $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
                                    });  
                                    $(document).on('click', '.btn_remove', function(){  
                                        var button_id = $(this).attr("id");   
                                        $('#row'+button_id+'').remove();  
                                    });  
                                    $('#submit').click(function(){            
                                        $.ajax({  
                                            url:"core/addjobs.php",  
                                            method:"POST",  
                                            data:$('#add_name').serialize(),  
                                            success:function(data)  
                                            {  
                                                alert(JSON.parse(data)[0]);  
                                                $('#add_name')[0].reset();
                                                
                                                // console.log('joblist.php?emp_id='+JSON.parse(data)[1]);
                                                window.location.href = 'joblist.php?emp_id='+JSON.parse(data)[1];
                                            }  
                                        });
                                        
                                    });  
                                });  
                                </script>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>

            
        </section>
        <!-- /wrapper -->
    </section>

<?php include 'template/footer.php'; ?>
