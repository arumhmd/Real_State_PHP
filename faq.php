<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">


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

  <title>Real Estate FAQ</title>
</head>
<body>
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->

  <div class="container">
    <h1>Frequently Asked Questions</h1>

    <div class="faq-item">
      <h2>How do I start the home buying process?</h2>
      <p>Begin by assessing your budget, getting pre-approved for a mortgage, and hiring a real estate agent.</p>
    </div>
    <div class="question">
  <h3>Q: How can I contact your customer support?</h3>
  <p>A: You can reach our customer support team via phone at (123) 456-7890 or by emailing support@example.com.</p>
</div>

<div class="question">
  <h3>Q: What is the process for buying a property through your agency?</h3>
  <p>A: The buying process typically involves the following steps: property search, viewing, making an offer, negotiations, legal checks, and closing the deal.</p>
</div>

<div class="question">
  <h3>Q: Are there financing options available for purchasing a property?</h3>
  <p>A: Yes, we can assist you in exploring financing options through our trusted partners, including mortgage brokers and banks.</p>
</div>

<div class="question">
  <h3>Q: Can I list my property with your agency for sale or rent?</h3>
  <p>A: Absolutely! We welcome property owners to list their properties with us. Please contact our listing team for more information.</p>
</div>

<div class="question">
  <h3>Q: Are pets allowed in the rental properties you manage?</h3>
  <p>A: It depends on the specific property and its policies. Please inquire about the pet policy for a particular rental property.</p>
</div>

    <!-- Add more FAQ items using a similar structure -->

  </div>
</body>
</html>
