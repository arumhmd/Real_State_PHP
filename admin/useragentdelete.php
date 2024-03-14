<?php
include("config.php");
$id = $_GET['id'];

// view code//
$sql = "SELECT * FROM agent_requests where id='$id'";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result))
	{
	  $uimg=$row["uimage"];
	}
@unlink('agent_requests/'.$uimg);

//end view code
$msg="";
$sql = "DELETE FROM agent_requests WHERE id = {$id}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-warning'>Agent Deleted</p>";
		header("Location:useragent.php?msg=$msg");
}
else
{
	$msg="<p class='alert alert-warning'>Agent not Deleted</p>";
		header("Location:useragent.php?msg=$msg");
}

mysqli_close($con);
?>
