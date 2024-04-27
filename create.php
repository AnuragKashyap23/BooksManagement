<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entry</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
	
</head>
<body>
  <h1>Books</h1>
  <form name="library" action="index.php" method="GET">
	<h1>fill details: </h1>
	<input name="bookname" type="text" class="form-control mb-3 mt-4" placeholder="Book Name">
	<input name="author" type="text" class="form-control " placeholder="Author">
	<input name="quantity" type="text" class="form-control mb-3 mt-4" placeholder="Genre">
	<input name="price" type="text" class="form-control " placeholder="Price">
	<input name="bsave" type="submit">
	</form>
</body>
</html>
	
<?php
if(isset($_REQUEST["bsave"]))
{
$bname=$_REQUEST["bookname"];
$bauthor=$_REQUEST["author"];
$bquantity=$_REQUEST["quantity"];
$bprice=$_REQUEST["price"];
}
include('connection.php');
$qry="INSERT INTO register(username,password,Mobile,Gender)
VALUES ('$bname', '$bauthor', '$bquantity', '$bprice')";
if (mysqli_query($con,$qry))
{
	echo "Data successfully created";
}
else
{
	echo "Error".mysqli_error($con);
}
?>