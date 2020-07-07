<?php
session_start();
include('../include/connection.php');
if (!isset($_SESSION['email'])) {
    header('Location: ../index.php');
}
$email = $_SESSION['email'];
$logqry = mysqli_query($con,"SELECT * FROM studentmaster WHERE email='$email'");
$loginData = mysqli_fetch_assoc($logqry);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Smart Learning</title>
        <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary JavaScript plugins) -->
        <script type='text/javascript' src="../js/jquery-1.11.1.min.js"></script>
        <!-- Custom Theme files -->
        <link href="../css/style.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/move-top.js"></script>
        <script type="text/javascript" src="../js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){		
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $().UItoTop({ easingType: 'easeOutQuart' });
			
                $('#update-btn').click(function(){
                    $('#profile_div').hide();
                    $('#profile_form').fadeIn('slow');
                });
			
                $('#cancel_profile').click(function(){
                    $('#profile_form').hide();
                    $('#profile_div').fadeIn('slow');
                });
                
                $('.show-files').click(function(){
                    $(this).siblings('.file-div').fadeIn('slow'); 
                });
			
            });
        </script>
        <style>
            .ques_text{padding:5px;color:#000;}
            .ques_text input[type="radio"]{margin-right: 10px;margin-left:5px;}
        </style>
    </head>
    <body>
        <!-- header -->
        <?php include('header.php') ?>
        <!-- header -->
        <!-- start banner -->
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3"> <a href="#"  class="nav-tabs-dropdown btn btn-block btn-primary" style="color:#fff;font-weight:bolder;">Hello, <?php echo $loginData['first_name'] ?> !!!</a>
                        <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
                            <li><img src="student_img/<?php echo $loginData['student_image'] ?>" style="height:150px;width:170px; border-radius:120px;" /> </li>
                            <li><a href="#vtab2" data-toggle="tab">Profile</a></li>
                            <li><a href="#vtab4" data-toggle="tab">Assignment</a></li>
                            <li><a href="#vtab3" data-toggle="tab">Quiz</a></li>
                            <li><a href="#vtab5" data-toggle="tab">Topics List</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="vtab2">
                                <div id="profile_div">
                                    <h3>Profile Management</h3>
                                    <?php if (isset($_SESSION['success_msg'])) { ?>
                                        <div class="col-md-12 alert alert-success">
                                            <?php echo $_SESSION['success_msg'] ?>
                                        </div>
                                        <?php unset($_SESSION['success_msg']);
                                    } ?>
                                    <table class="table table-bordered">
                                        <tr class="info">
                                            <th>First Name</th>
                                            <td><?php echo $loginData['first_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Last Name</th>
                                            <td><?php echo $loginData['last_name'] ?></td>
                                        </tr>
                                        <tr class="info">
                                            <th>Email</th>
                                            <td><?php echo $loginData['email'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>mobile</th>
                                            <td><?php echo $loginData['mobile'] ?></td>
                                        </tr>
                                        <tr class="info">
                                            <th>Joining Date</th>
                                            <td><?php echo date('F j,Y', strtotime($loginData['joining_date'])); ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input id="update-btn" type="button" title="Update Profile" class="btn btn-info" value="Update"/>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <form id="profile_form" method="post" action="update_profile_cd.php" enctype="multipart/form-data" style="display:none;">
                                    <h3>Profile Management</h3>
                                    <div class="col-md-8 abou-right" >
                                        <div class="reg">
                                            <input type="text" class="mytext" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'First Name';}" name="f_name" value="<?php echo $loginData['first_name'] ?>">
                                            <input type="text" class="mytext" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Last Name';}" name="l_name" value="<?php echo $loginData['last_name'] ?>">
                                            <input type="text" class="mytext" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Mobile no.';}" name="mobile" value="<?php echo $loginData['mobile'] ?>">
                                            <input type="file" name="student_img" class="mytext"/>
                                        </div>
                                        <div class="clearfix"></div>
                                        <br />
                                        <div class="form-submit">
                                            <input type="hidden" name="id" value="<?php echo $loginData['studentid'] ?>"/>
                                            <input type="hidden" name="img_name" value="<?php echo $loginData['student_image'] ?>"/>
                                            <input type="submit" id="submit" value="Update" name="reg">
                                            <input type="button" id="cancel_profile" value="Cancel" class="btn btn-danger"/>
                                            <br>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="vtab3">
                                <h3>Quiz</h3>
                                <div class="about">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-sm-9">
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane fade in active" id="vtab2">
                                                        <div id="profile_div">
                                                            <?php if (isset($_SESSION['success_msg'])) { ?>
                                                                <div class="col-md-12 alert alert-success">
                                                                    <?php echo $_SESSION['success_msg'] ?>
                                                                </div>
                                                                <?php unset($_SESSION['success_msg']);
                                                            } ?>
                                                            <form action="quiz_cd.php" method="post">
                                                                <?php
                                                                $i = 1;
				$getCQ = mysqli_query($con,"SELECT * FROM topic_selection WHERE student_id='$loginData[studentid]'");
				$dt = mysqli_fetch_assoc($getCQ);
				$topicId = $dt['topic_id'];
				$getC = mysqli_query($con,"SELECT * FROM course WHERE id='$topicId'");
				$courseDT = mysqli_fetch_assoc($getC);
				$tId = $courseDT['teacher_id'];
				
                                                                $getCQ = mysqli_query($con,"SELECT * FROM quiz WHERE teacher_id='$tId'");
                                                                if (mysqli_num_rows($getCQ)) {
                                                                    while ($assData = mysqli_fetch_assoc($getCQ)) {
                                                                        ?>
                                                                        <div class="ques_text"><strong>Question <?php echo $i; ?> : </strong><?php echo $assData['question_text'] ?></div>
                                                                        <div class="ques_text">1: <label><input type="radio" name="opt_chosen_<?php echo $i ?>" value="<?php echo $assData['option_first']; ?>"/><?php echo $assData['option_first'] ?></label></div>
                                                                        <div class="ques_text">2: <label><input type="radio" name="opt_chosen_<?php echo $i ?>" value="<?php echo $assData['option_second']; ?>"/><?php echo $assData['option_second'] ?></label></div>
                                                                        <div class="ques_text">3: <label><input type="radio" name="opt_chosen_<?php echo $i ?>" value="<?php echo $assData['option_third']; ?>"/><?php echo $assData['option_third'] ?></label></div>
                                                                        <div class="ques_text">4: <label><input type="radio" name="opt_chosen_<?php echo $i ?>" value="<?php echo $assData['option_fourth']; ?>"/><?php echo $assData['option_fourth'] ?></label></div>
                                                                        <input type="hidden" name="wright_ans_<?php echo $i ?>" value="<?php echo $assData['wright_answer'] ?>"/>
                                                                        <?php $i++;
                                                                    } ?>
                                                                    <input type="hidden" name="total_qtn" value="<?php echo mysqli_num_rows($getCQ); ?>"/>
                                                                    <input type="hidden" name="student_id" value="<?php echo $loginData['student_id'] ?>"/>
                                                                    <input type="hidden" name="topic_id" value="<?php echo $loginData['topic_id'] ?>"/>
                                                                    <input type="submit" value="Submit" name="reg" class="btn btn-danger"/>
                                                                <?php } else { ?>
                                                                    <div class="alert alert-warning">No Quiz created yet!</div>
                                                                <?php } ?>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="vtab4">
                                <form method="post" action="assignment.php" enctype="multipart/form-data">
                                    <h3>Assignment</h3>
                                    <div class="col-md-12">
                                        <label class="col-md-12">Select Course</label>
                                        <select name="course_id" style="width:20%;padding:7px;">
                                            <option value="">--select--</option>
                                            <?php
                                            $getCQ1 = mysqli_query($con,"SELECT course.*,topic_selection.topic_id,topic_selection.student_id FROM topic_selection JOIN course ON topic_selection.topic_id=course.id WHERE topic_selection.student_id='$loginData[studentid]'");
                                            if($getCQ1){
                                            while ($course = mysqli_fetch_assoc($getCQ1)) {
                                                ?>
                                                <option value="<?php echo $course['id'] ?>"><?php echo $course['course_name'] ?></option>
                                            <?php }} ?>
                                        </select>
                                    </div>
                                    <div class="col-md-12">&nbsp;</div>
                                    <div class="col-md-12">&nbsp;</div>
                                    <div class="col-md-12">
                                        <input type="submit" name="save" class="btn btn-danger" value="Start"/>
                                    </div>
                                </form> 
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="vtab5">
                                <h3>Topics List</h3>
                                <?php
                                $q="";
                                $sql = mysqli_query($con,"SELECT * FROM course WHERE course_name LIKE '%$q%'");
                                if($sql)
                                while ($data = mysqli_fetch_assoc($sql)) {
                                    $sql1 = mysqli_query($con,"SELECT * FROM teachermaster WHERE teacherid=$data[teacher_id]");
                                    $teacher = mysqli_fetch_assoc($sql1);
                                    ?>
                                    <div class="col-md-3 minist-left">
                                        <h4>Topic <?php echo $data['course_name'] ?></h4>
                                        <p>Teacher <?php echo $teacher['first_name'] . ' ' . $teacher['last_name'] ?></p>
                                        <p>Start Date <?php echo date('F m,Y', strtotime($data['start_date'])) ?></p>
                                        <p>Duration <?php echo $data['course_duration'] ?></p>
                                        <?php
                                        $chkQry = mysqli_query($con,"SELECT * FROM topic_selection WHERE topic_id='$data[id]' AND student_id='$loginData[studentid]'");
                                        if (mysqli_num_rows($chkQry)) {
                                            ?>
                                            <a style="color:#fff;" class="hvr-shutter-in-horizontal btn btn-success show-files" href="javascript:void(0)">Get Topic Files</a>  
                                            <div class="col-md-12 file-div" style="display:none;">
                                                <?php
                                                $file = mysqli_query($con,"SELECT * FROM topic_file WHERE course_id='$data[id]'");
                                                while ($fileData = mysqli_fetch_assoc($file)) {
                                                    ?>
                                                    <a href="../teacher/topic_file/<?php echo $fileData['file_name'] ?>"><?php echo $fileData['file_name'] ?></a>
                                                <?php } ?>
                                            </div>
                                        <?php } else { ?>
                                            <a class="hvr-shutter-in-horizontal" href="join.php?id=<?php echo $data['id']; ?>&st_id=<?php echo $loginData['studentid'] ?>" onclick="return confirm('Are you sure to join?');">Join</a>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- end banner -->
        <!-- footer -->
        <?php include('footer.php') ?>
        <!-- footer -->
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>
    </body>
</html>
