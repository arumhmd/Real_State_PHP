<?php
include("config.php");
$error = "";
$msg = "";

if (isset($_REQUEST['reg'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $pass = $_REQUEST['pass'];
    $utype = $_REQUEST['utype'];

    $uimage = $_FILES['uimage']['name'];
    $temp_name1 = $_FILES['uimage']['tmp_name'];
    $pass = sha1($pass);

    $query = "SELECT uemail FROM user WHERE uemail='$email' UNION SELECT uemail FROM agent_requests WHERE uemail='$email'";
    $res = mysqli_query($con, $query);
    $num = mysqli_num_rows($res);

    if ($num >= 1) {
        $error = "<p class='alert alert-warning'>Email Id already exists</p>";
    } else {
        if (!empty($name) && !empty($email) && !empty($phone) && !empty($pass) && !empty($uimage)) {

            // Check if the user type is 'agent'
            if ($utype == 'agent') {
                // Save the agent registration request in the agent_requests table
                $status = 'pending'; // Default status for a new request
                $agentRequestQuery = "INSERT INTO agent_requests (uname, uemail, uphone, upass, utype, uimage, status) VALUES ('$name','$email','$phone','$pass','$utype','$uimage', '$status')";
                $agentRequestResult = mysqli_query($con, $agentRequestQuery);

                if ($agentRequestResult) {
                    $msg = "<p class='alert alert-success'>Agent registration request saved. Awaiting admin approval.</p> ";
                } else {
                    $error = "<p class='alert alert-warning'>Agent registration request not saved.</p> ";
                }
            } else {
                // For non-agent users, proceed with regular registration
                $sql = "INSERT INTO user (uname, uemail, uphone, upass, utype, uimage) VALUES ('$name','$email','$phone','$pass','$utype','$uimage')";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    $msg = "<p class='alert alert-success'>Register Successfully</p> ";
                } else {
                    $error = "<p class='alert alert-warning'>Register Not Successful</p> ";
                }

                move_uploaded_file($temp_name1, "admin/user/$uimage");
            }
        } else {
            $error = "<p class='alert alert-warning'>Please fill all the fields</p>";
        }
    }
}

// Handle agent approval
if (isset($_REQUEST['approve_agent'])) {
    $agent_id = $_REQUEST['agent_id'];

    // Retrieve agent details from agent_requests table
    $agentRequestQuery = "SELECT * FROM agent_requests WHERE id='$agent_id'";
    $agentRequestResult = mysqli_query($con, $agentRequestQuery);

    if ($agentRequestResult && mysqli_num_rows($agentRequestResult) == 1) {
        $agentData = mysqli_fetch_assoc($agentRequestResult);

        // Move agent details to the user table
        $sql = "INSERT INTO user (uname, uemail, uphone, upass, utype, uimage) VALUES ('{$agentData['uname']}','{$agentData['uemail']}','{$agentData['uphone']}','{$agentData['upass']}','{$agentData['utype']}','{$agentData['uimage']}')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            // Delete the agent registration request from agent_requests table
            $deleteQuery = "DELETE FROM agent_requests WHERE id='$agent_id'";
            mysqli_query($con, $deleteQuery);

            $msg = "<p class='alert alert-success'>Agent approved and added to the user table</p>";
        } else {
            $error = "<p class='alert alert-warning'>Error approving agent</p>";
        }
        move_uploaded_file($temp_name1, "admin/user/$uimage");
    } else {
        $error = "<p class='alert alert-warning'>Agent request not found</p>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!--	Fonts
	========================================================-->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

    <!--	Css Link
	========================================================-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/color.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <!--	Title
	=========================================================-->
    <title>Real Estate PHP</title>
</head>

<body>
    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            <?php include("include/header.php"); ?>
            <!--	Header end  -->
            <div class="page-wrappers login-body full-row bg-gray">
                <div class="login-wrapper">
                    <div class="container">
                        <div class="loginbox">
                            <div class="login-right">
                                <div class="login-right-wrap">
                                    <h1>Register</h1>
                                    <p class="account-subtitle">Access to our dashboard</p>
                                    <?php echo $error; ?><?php echo $msg; ?>
                                    <!-- Form -->
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name*">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email*">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Your Phone*" maxlength="10">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass" class="form-control" placeholder="Your Password*">
                                        </div>

                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="utype" value="user" checked>User
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="utype" value="agent">Agent
                                            </label>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-form-label"><b>User Image</b></label>
                                            <input class="form-control" name="uimage" type="file">
                                        </div>

                                        <button class="btn btn-success" name="reg" value="Register" type="submit">Register</button>

                                    </form>

                                    <div class="login-or">
                                        <span class="or-line"></span>
                                        <span class="span-or">or</span>
                                    </div>
                                    <div class="text-center dont-have">Already have an account? <a href="login.php">Login</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	login  -->


            <!--	Footer   start-->
            <?php include("include/footer.php"); ?>
            <!--	Footer   start-->

            <!-- Scroll to top -->
            <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
            <!-- End Scroll To top -->
        </div>
    </div>
    <!-- Wrapper End -->

    <!--	Js Link
============================================================-->
    <script src="js/jquery.min.js"></script>
    <!--jQuery Layer Slider -->
    <script src="js/greensock.js"></script>
    <script src="js/layerslider.transitions.js"></script>
    <script src="js/layerslider.kreaturamedia.jquery.js"></script>
    <!--jQuery Layer Slider -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/tmpl.js"></script>
    <script src="js/jquery.dependClass-0.1.js"></script>
    <script src="js/draggable-0.1.js"></script>
    <script src="js/jquery.slider.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>