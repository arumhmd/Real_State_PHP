<?php
include('config.php');

if (isset($_GET['id'])) {
    $requestId = $_GET['id'];

    // Update the status of the registration request to 'rejected'
    $rejectQuery = "UPDATE agent_requests SET status = 'rejected' WHERE id = $requestId";
    $result = mysqli_query($con, $rejectQuery);

    if ($result) {
        echo "<p class='alert alert-success'>Agent request rejected successfully.</p>";
    } else {
        echo "<p class='alert alert-warning'>Failed to reject Agent request.</p>";
    }
} else {
    echo "<p class='alert alert-warning'>Invalid request. Please try again.</p>";
}

mysqli_close($con);
?>
