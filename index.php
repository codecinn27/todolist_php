<?php
    require "conn.php";
    $data = $conn->query("SELECT * FROM tasks");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List PHP</title>
	<link rel="stylesheet" href="style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
    <div class="container">
		<form method="POST" action="insert.php" class="form-inline">
		  <div class="form-group mx-sm-3 mb-2">
		    <label for="inputPassword2" class="sr-only">create</label>
		    <input name="mytask" type="text" class="form-control" id="inputPassword2" placeholder="enter task">
		  </div>
            <button name="submit" type="submit" class="btn btn-primary mb-2">create</button>
		</form>
        <table class="table">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Task Name</th>
		      <th>Action</th>
		    </tr>
		  </thead>
          <tbody>
            <?php while($rows = $data->fetch(PDO::FETCH_ASSOC)){ ?>

            <tr>
              <td><?php echo $rows['id']; ?></td>
              <td><?php echo $rows['name']; ?></td>              
              <td><a href="#" class="btn btn-danger">delete</a></td>
            </tr>
            <?php } ?>
</body>
</html>