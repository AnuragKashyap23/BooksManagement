<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
	</head>
<body>
    <h1>Book Deleted</h1>
	
</body>
</html>


<?php
$id = $_GET['id'];
include('connection.php');
$qry = "DELETE FROM store WHERE id=$id";
mysqli_query($con, $qry);

mysqli_close($con);

header("Location: index.php");
?>