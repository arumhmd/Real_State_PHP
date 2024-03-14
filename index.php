<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");

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
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--	Title
	=========================================================-->
    <title>Home</title>
</head>

<body>
    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            <?php include("include/header.php"); ?>
            <!--	Header end  -->

            <!--	Banner Start   -->
            <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('images/banner/04.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-12">
                            <div class="text-white">
                                <h1 class="mb-4"><span class="text-primary">Find</span><br>
                                    Your dream house</h1>
                                <form method="post" action="propertygrid.php">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" required name="type">
                                                    <option value="">Select Type</option>
                                                    <option value="house">House</option>
                                                    <option value="Land">Land</option>
                                                    <option value="Shop">Shop</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" required name="stype">
                                                    <option value="">Select Status</option>
                                                    <option value="rent">Rent</option>
                                                    <option value="sale">Sale</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-6">
                                            <div class="form-group">
                                                <select class="form-control" required name="city">

                                                    <!-- <?php
                                                            $query1 = mysqli_query($con, "select * from city");
                                                            while ($row1 = mysqli_fetch_row($query1)) {
                                                            ?>
                                                        <option value="<?php echo $row1[0]; ?>" class="text-captalize"><?php echo $row1[1]; ?></option>
                                                    <?php } ?> -->


                                                    <option value="">Select City</option>
                                                    <option value="kattankudy">Kattankudy</option>
                                                    <option value="batticaloa">Batticaloa</option>
                                                    <option value="eravur">Eravur</option>
                                                    <option value="oddamavady">Oddamavady</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-2">
                                            <div class="form-group">
                                                <button type="submit" name="filter" class="btn btn-primary w-100">Search Property</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Banner End  -->

            <!--	Text Block One
		======================================================-->
            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">What We Do</h2>
                        </div>
                    </div>
                    <div class="text-box-one">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-rent text-primary flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-primary py-3 m-0">Selling Service</h5>
                                    <p class="text-left"> Our real estate system provides a dedicated selling service, assisting sellers in showcasing their properties effectively to potential buyers.
                                        Sellers can list their properties, upload images, provide descriptions, and set prices, reaching a broader audience through our user-friendly interface. Our system maximizes exposure, helping sellers sell their properties efficiently and at the right price.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="align-center flaticon-for-rent text-primary flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-primary py-3 m-0">Rental Service</h5>
                                    <p class="text-left">For those seeking rental opportunities, our platform offers an extensive rental service. Prospective tenants can browse through available rental properties, filtering based on preferences such as location, budget, amenities, and more. Landlords can list their properties for rent, attracting suitable tenants and facilitating a hassle-free rental process.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-list text-primary flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-primary py-3 m-0">Property Listing</h5>
                                    <p class="text-left">Extensive database of properties available for sale or rent, categorized by location, type, size, and price range.</p>
                                    <p class="text-left">Property descriptions, high-quality images, and virtual tours to provide a comprehensive view of the properties.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-diagram text-primary flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-primary py-3 m-0">Legal Investment</h5>
                                    <p class="text-left">Understanding the importance of legal compliance and investment security, our system offers a legal investment feature. Users can access information and resources related to legal aspects of real estate transactions, ensuring that investments are conducted within the bounds of the law. We prioritize transparency and legality, fostering a trustworthy and secure environment for real estate transactions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-----  Our Services  ---->

            <!--	Recent Properties  -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-secondary double-down-line text-center mb-4">Recent Property</h2>
                        </div>

                        <div class="col-md-12">
                            <div class="tab-content mt-4" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                    <div class="row">

                                        <?php
                                        // echo $_SESSION['uid'];
                                        $query = mysqli_query($con, "SELECT property.*, agent_requests.uname,agent_requests.utype,agent_requests.uimage FROM `property`,`agent_requests` WHERE property.uid=agent_requests.id ORDER BY date DESC LIMIT 9");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="featured-thumb hover-zoomer mb-4">
                                                    <div class="overlay-black overflow-hidden position-relative"> <img src="admin/property/<?php echo $row['18']; ?>" alt="pimage">
                                                        <div class="featured bg-success text-white">New</div>
                                                        <div class="sale bg-success text-white text-capitalize">For <?php echo $row['5']; ?></div>
                                                        <div class="price text-primary"><b>RS.<?php echo $row['13']; ?> </b><span class="text-white"><?php echo $row['12']; ?> Sqft</span></div>
                                                        <div class="sale bg-success text-white text-capitalize"> <?php echo $row['24']; ?></div>
                                                    </div>
                                                    <div class="featured-thumb-data shadow-one">
                                                        <div class="p-3">
                                                            <?php
                                                            if ($row['24'] == 'sold out') {
                                                                echo '<div class="sale mr-3 mt-5 bg-danger text-white text-capitalize">' . $row['24'] . '</div>';
                                                            } else {
                                                                echo '<div class="sale mr-3 mt-5 bg-info text-white text-capitalize">' . $row['24'] . '</div>';
                                                            }
                                                            ?>

                                                            <!-- <div class="sale mr-3 mt-5 bg-info text-white text-capitalize"> <?php echo $row['24']; ?></div> -->

                                                            <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0']; ?>"><?php echo $row['1']; ?></a></h5>
                                                            <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-success"></i> <?php echo $row['14']; ?></span>
                                                        </div>
                                                        <div class="bg-gray quantity px-4 pt-4">
                                                            <ul>
                                                                <li><span><?php echo $row['12']; ?></span> Sqft</li>
                                                                <li><span><?php echo $row['6']; ?></span> Beds</li>
                                                                <li><span><?php echo $row['7']; ?></span> Baths</li>
                                                                <li><span><?php echo $row['9']; ?></span> Kitchen</li>
                                                                <li><span><?php echo $row['8']; ?></span> Balcony</li>

                                                            </ul>
                                                        </div>
                                                        <div class="p-4 d-inline-block w-100">
                                                            <div class="float-left text-capitalize"><i class="fas fa-user text-success mr-1"></i>By : <?php echo $row['uname']; ?></div>
                                                            <div class="float-right"><i class="far fa-calendar-alt text-success mr-1"></i> <?php echo date('d-m-Y', strtotime($row['date'])); ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Recent Properties  -->

            <!--	Why Choose Us -->
            <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('images/haddyliving.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="living-list pr-4">
                                <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                                <ul>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-reward flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Experience Quality</h5>
                                            <p class="left-aligned-paragraph">With years of industry expertise, we bring a wealth of experience to every real estate transaction. Our seasoned professionals have a deep understanding of the market, ensuring you receive expert guidance every step of the way.</p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-reward flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Transparent Property Information</h5>
                                            <p>Transparency is key to a successful real estate experience. We provide comprehensive property information, including details about the neighborhood, amenities, property history, and more, empowering you to make informed decisions.</p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-seller flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Customer Satisfaction</h5>
                                            <p>Our success is measured by your satisfaction. We take pride in delivering exceptional service, and we are committed to your success and happiness in your real estate endeavors.</p>
                                        </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	why choose us -->

            <!--	How it work -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">How It Work</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-primary text-white rounded-circle position-absolute z-index-9">1</div>
                                <div class="left-arrow"><i class="flaticon-investor flat-medium icon-primary" aria-hidden="true"></i></div>
                                <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                                <p>The process begins with an in-depth discussion between the real estate professionals and the clients. Clients articulate their specific requirements, preferences, budget, and any other essential details related to buying, selling, or renting a property. Real estate experts offer guidance, present available options, and answer queries to help clients make informed decisions.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-primary text-white rounded-circle position-absolute z-index-9">2</div>
                                <div class="left-arrow"><i class="flaticon-search flat-medium icon-primary" aria-hidden="true"></i></div>
                                <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                                <p>Once the client's preferences are clearly outlined, the system initiates a comprehensive review of available property files. These files encompass essential information such as legal documents, property history, ownership details, financial aspects, and any other relevant records. Real estate professionals thoroughly examine and verify the files to ensure compliance with legal and regulatory standards. Any discrepancies or concerns are promptly addressed and communicated to the clients.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-primary text-white rounded-circle position-absolute z-index-9">3</div>
                                <div><i class="flaticon-handshake flat-medium icon-primary" aria-hidden="true"></i></div>
                                <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                                <p>Based on the information obtained from discussions and file reviews, clients can confidently proceed to the acquisition phase. For buyers, this involves making offers, negotiating terms, and finalizing contracts. Sellers can accept offers, negotiate terms, and complete the sales transaction. For rental purposes, clients can secure the desired property by finalizing lease agreements and associated documentation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--	How It Work -->

            <!--	Achievement
        ============================================================-->
            <div class="full-row overlay-secondary" style="background-image: url('images/counterbg.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="fact-counter">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(id) FROM agent_requests WHERE status = 'approved'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Registered Agents</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(uid) FROM user WHERE utype = 'user'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Registered Users</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(pid) FROM property where stype='sale'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Sale Property Available</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(pid) FROM property where stype='rent'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Rent Property Available</div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <!--	Popular Place -->
            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">Popular Places</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 pb-1">
                                <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/1.png" alt="">
                                    <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        <?php
                                        $query = mysqli_query($con, "SELECT count(city), property.* FROM property where city='oddamavady'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['16'] ?>"><?php echo $row['city']; ?></a></h4>
                                            <span><?php
                                                    $total = $row[0];
                                                    echo $total; ?> Properties Listed</span>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 pb-1">
                                <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/2.png" alt="">
                                    <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        <?php
                                        $query = mysqli_query($con, "SELECT count(city), property.* FROM property where city='eravur'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['16'] ?>"><?php echo $row['city']; ?></a></h4>
                                            <span><?php
                                                    $total = $row[0];
                                                    echo $total; ?> Properties Listed</span>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 pb-1">
                                <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/3.png" alt="">
                                    <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        <?php
                                        $query = mysqli_query($con, "SELECT count(city), property.* FROM property where city='batticaloa'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17'] ?>"><?php echo $row['city']; ?></a></h4>
                                            <span><?php
                                                    $total = $row[0];
                                                    echo $total; ?> Properties Listed</span>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 pb-1">
                                <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/4.png" alt="">
                                    <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        <?php
                                        $query = mysqli_query($con, "SELECT count(city), property.* FROM property where city='kattankudy'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['16'] ?>"><?php echo $row['city']; ?></a></h4>
                                            <span><?php
                                                    $total = $row[0];
                                                    echo $total; ?> Properties Listed</span>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Popular Places -->
            <!--	Footer   start-->
            <?php include("include/footer.php"); ?>
            <!--	Footer   start-->


            <!-- Scroll to top -->
            <a href="#" class="bg-primary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
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
    <script src="js/YouTubePopUp.jquery.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>