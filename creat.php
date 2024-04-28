<?php
if(isset($_REQUEST["bsave"]))
{
$bname=$_REQUEST["bookname"];
$bauthor=$_REQUEST["author"];
$bquantity=$_REQUEST["quantity"];
$bprice=$_REQUEST["price"];
}
include('connection.php');
$qry="INSERT INTO store(book, author, price, quantity)
VALUES ('$bname', '$bauthor', '$bprice', '$bquantity')";
if (mysqli_query($con,$qry))
{
	echo "Data successfully created";
}
else
{
	echo "Error".mysqli_error($con);
}
?>