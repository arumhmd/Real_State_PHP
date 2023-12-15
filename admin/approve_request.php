<?php
include('config.php');
$error = "";
$msg = "";

if (isset($_POST['add-btn'])) {
    $requestId = $_POST['id'];

    // Update the status of the registration request to 'approved'
    $approveQuery = "UPDATE agent_requests SET status = 'approved' WHERE id = $requestId";
    $result = mysqli_query($con, $approveQuery);

    if ($result) {
        $msg ="<p class='alert alert-success'>Registration request approved successfully.</p>";
        header('Location: request.php');
        
        // $msg = "<p class='alert alert-success'>Registration request approved successfully</p>";
    } else {
        echo "<p class='alert alert-warning'>Failed to approve registration request.</p>";
    }
} else {
    echo "<p class='alert alert-warning'>Invalid request. Please try again.</p>";
}

mysqli_close($con);
?>
