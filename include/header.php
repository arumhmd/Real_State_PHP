<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
    <div class="top-header bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="top-contact list-text-white d-table">
                        <li><a href="contact.php"><i class="fas fa-phone-alt text-primary mr-1"></i>+94 75 780 3773</a></li>
                        <li><a href="contact.php"><i class="fas fa-envelope text-primary mr-1"></i>arham@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="top-contact float-right">
                        <ul class="list-text-white d-table">
                            <li><i class="fas fa-user text-primary mr-1"></i>
                                <?php if (isset($_SESSION['uemail'])) { ?>
                                    <a href="logout.php">Logout</a>&nbsp;&nbsp;
                                <?php } else { ?>
                                    <a href="login.php">Login</a>&nbsp;&nbsp;|
                                    <a href="register.php"> Register</a></li>
                                <?php } ?>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-nav secondary-nav hover-primary-nav py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a class="navbar-brand position-relative" href="#"><img class="nav-logo" src="images/logo/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="agent.php">Agent</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="property.php">Properties</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                                <?php if (isset($_SESSION['uemail'])) { ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="profile.php">Profile</a>
                                            </li>
                                            <?php
                                            if (isset($_SESSION['uemail'])) {
                                                // Check if the logged-in user is an agent
                                                $email = $_SESSION['uemail'];
                                                $checkAgentQuery = "SELECT * FROM agent_requests WHERE uemail='$email' AND status='approved'";
                                                $checkAgentResult = mysqli_query($con, $checkAgentQuery);
                                                $isAgent = mysqli_num_rows($checkAgentResult) > 0;

                                                // If the user is an agent, display the "Submit Property" button
                                                if ($isAgent) {
                                                    echo ' <li class="nav-item">
                                                    <a class="nav-link" href="feature.php">Your Property</a>
                                                </li>';
                                                }
                                            }
                                            ?>                                         
                                        </ul>
                                    </li>
                                <?php } else { ?>
                                    <!-- <li class="nav-item"> <a class="nav-link" href="login.php">Login/Register</a> </li> -->
                                <?php } ?>
                            </ul>

                            <?php
                            if (isset($_SESSION['uemail'])) {
                                // Check if the logged-in user is an agent
                                $email = $_SESSION['uemail'];
                                $checkAgentQuery = "SELECT * FROM agent_requests WHERE uemail='$email' AND status='approved'";
                                $checkAgentResult = mysqli_query($con, $checkAgentQuery);
                                $isAgent = mysqli_num_rows($checkAgentResult) > 0;

                                // If the user is an agent, display the "Submit Property" button
                                if ($isAgent) {
                                    echo '<a class="btn btn-primary d-none d-xl-block" href="submitproperty.php">Submit Property</a>';
                                }
                            }
                            ?>
                           

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>