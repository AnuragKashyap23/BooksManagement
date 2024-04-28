<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Update</title>
</head>
<body>
  <h1>Update Book</h1>
  <?php
  $id = $_REQUEST['id'];
  include('connection.php');
  $qry = "SELECT * FROM store WHERE id=$id";
  $result = mysqli_query($con, $qry);
  $row = mysqli_fetch_assoc($result);
  ?>
  <form action="updat.php" method="post">
    ID: <input type="text" name="id" value="<?php echo $row['id']; ?>" readonly><br>
    Title: <input type="text" name="bookname" value="<?php echo $row['book']; ?>" required><br>
    Author: <input type="text" name="author" value="<?php echo $row['author']; ?>" required><br>
    Quantity: <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" required><br>
    Price: <input type="number" name="price" value="<?php echo $row['price']; ?>" required><br>
	<button type="submit" name="update">Update Book</button>
  </form>
</body>
</html>
