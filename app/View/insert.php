<?php 
//Databse Connection file


  	//getting the post values

   
  // Query for data insertion users and select villes

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Crud Operation Using PHP and MySQLi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="signup-form">
        <form action="../Update" method="POST">

            <h2>Update </h2>
            <p class="hint-text">Update your info.</p>

            <div class="form-group">
                <input type="text" class="form-control" name="name" value="<?php  echo $team['name'] ?>">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="stadium" value="<?php  echo $team['stadium'] ?>">
            </div>

            <div class="form-group">
                <input type="date" class="form-control" name="founded" value="<?php  echo $team['founded'] ?>">
            </div>

            <input type="hidden" name="id" value="<?php  echo $team['id'] ?>">
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Update</button>
            </div>
			
        </form>
        <div class="text-center">View Aready Inserted Data!! <a href="index.php">View</a></div>
    </div>
</body>

</html>