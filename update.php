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

                            <?php

                            include 'connection.php';

                            $ids = $_GET['id'];

                            $showquery = " select * from crud where id={$ids} ";

                            $showdata = mysqli_query($con, $showquery);

                            $arrdata = mysqli_fetch_array($showdata);

                            if (isset($_POST['submit'])) {

                                $idupdate = $_GET['id'];
                                $name = $_POST['user'];
                                $degree = $_POST['degree'];
                                $mobile = $_POST['mobile'];
                                $email = $_POST['email'];
                                $refer = $_POST['refer'];
                                $jobprofile = $_POST['jobprofile'];

                                // $insertquery = " insert into crud(name, degree, mobile, email, refer, jobpost) values('$name', '$degree', '$mobile', '$email', '$refer', '$jobprofile')";

                                $query = " update crud set id=$idupdate, name='$name', degree='$degree', mobile='$mobile', email='$email', refer='$refer', jobpost='$jobprofile' where id= $idupdate ";

                                $result = mysqli_query($con, $query);

                                if ($result) {
                            ?>
                                    <script>
                                        alert("Data Updated Properly")
                                    </script>
                                <?php
                                } else {
                                ?>
                                    <script>
                                        alert("Data not Updated")
                                    </script>
                            <?php
                                }
                            }

                            ?>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="user" class="form-control" placeholder="Enter your name *" value="<?php echo $arrdata['name']; ?>" />
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="10" name="mobile" class="form-control" placeholder="Mobile number  *" value="<?php echo $arrdata['mobile']; ?>" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="refer" class="form-control" placeholder="Any references *" value="<?php echo $arrdata['refer']; ?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="degree" class="form-control" placeholder="Enter your qualification *" value="<?php echo $arrdata['degree']; ?>" />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email id *" value="<?php echo $arrdata['email']; ?>" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="jobprofile" class="form-control" placeholder="Web Developer post *" value="<?php echo $arrdata['jobpost']; ?>" />
                                </div>
                                <input type="submit" name="submit" class="btnRegister" value="Update" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>