<?php
if(isset($_REQUEST["update"]))
{
    $id=$_REQUEST["id"];
    $bname=$_REQUEST["bookname"];
    $bauthor=$_REQUEST["author"];
    $bquantity=$_REQUEST["quantity"];
    $bprice=$_REQUEST["price"];
}
include('connection.php');
$qry="UPDATE store
SET book='$bname', author='$bauthor', quantity='$bquantity', price='$bprice'
WHERE id='$id'";
if (mysqli_query($con,$qry))
{
    header("Location: index.php");
}
else
{
    echo "Error".mysqli_error($con);
}
?>