<!DOCTYPE html>
<html lang="en">

<head>
    <title>Crud Tutorial</title>
    <?php include 'links.php' ?>
    <?php include 'css/style.css' ?>
</head>

<body>

    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <p>Please fill all the details carefully. This form can change your life.</p>
                <a href="display.php"><input type="submit" name="" value="Check Form" /></a><br />
            </div>
            <div class="col-md-9 register-right">

                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Apply for Web Developer Post</h3>
                    <form action="" method="POST">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="user" class="form-control" placeholder="Enter your name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="10" name="mobile" class="form-control" placeholder="Mobile number  *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="refer" class="form-control" placeholder="Any references *" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="degree" class="form-control" placeholder="Enter your qualification *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email id *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="jobprofile" class="form-control" placeholder="Web Developer post *" value="Web Developer" />
                                </div>
                                <input type="submit" name="submit" class="btnRegister" value="Register" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['user'];
    $degree = $_POST['degree'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $refer = $_POST['refer'];
    $jobprofile = $_POST['jobprofile'];

    $insertquery = " insert into crud (name, degree, mobile, email, refer, jobpost) values('$name', '$degree', '$mobile', '$email', '$refer', '$jobprofile')";

    $result = mysqli_query($con, $insertquery);

    if($result){
        ?>
        <script>
            alert("Data inserted Properly")
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data not inserted")
        </script>
        <?php
    }

}

?>