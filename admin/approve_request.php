<?php
include('config.php');

if (isset($_GET['id'])) {
    $requestId = $_GET['id'];

    // Update the status of the registration request to 'approved'
    $approveQuery = "UPDATE agent_requests SET status = 'approved' WHERE id = $requestId";
    $result = mysqli_query($con, $approveQuery);

    if ($result) {
        // echo "<p class='alert alert-success'>Registration request approved successfully.</p>";
        $msg = "<p class='alert alert-success'>Registration request approved successfully</p>";
    } else {
        echo "<p class='alert alert-warning'>Failed to approve registration request.</p>";
    }
} else {
    echo "<p class='alert alert-warning'>Invalid request. Please try again.</p>";
}

mysqli_close($con);
?>
