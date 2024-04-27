<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  <title>Update Book</title>
</head>
<body>
  <h1>Update Book</h1>
  <?php
  $id = $_GET['id'];
  include('connection.php');
  $qry = "SELECT * FROM books WHERE id=$id";
  $result = mysqli_query($con, $qry);
  $row = mysqli_fetch_assoc($result);
  ?>
  <form action="update.php" method="post">
    ID: <input type="text" name="id" value="<?php echo $row['id']; ?>" readonly><br>
    Title: <input type="text" name="title" value="<?php echo $row['bookname']; ?>" required><br>
    Author: <input type="text" name="author" value="<?php echo $row['authorname']; ?>" required><br>
    Quantity: <input type="number" name="publication_year" value="<?php echo $row['quantity']; ?>" required><br>
    Price: <input type="number" name="publication_year" value="<?php echo $row['price']; ?>" required><br>
	<input type="submit" value="Update Book">
  </form>
</body>
</html>