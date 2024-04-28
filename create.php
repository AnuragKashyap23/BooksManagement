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
  <form name="library" action="creat.php" method="GET">
	<h1>fill details: </h1>
	<input name="bookname" type="text" class="form-control mb-3 mt-4" placeholder="Book Name" required>
	<input name="author" type="text" class="form-control " placeholder="Author" required>
	<input name="quantity" type="text" class="form-control mb-3 mt-4" placeholder="Price" required>
	<input name="price" type="text" class="form-control " placeholder="Quantity" required>
	<button type="submit" name="bsave">Submit</button>
	</form>
</body>
</html>
	
