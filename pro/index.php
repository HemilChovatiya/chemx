<?php
include('db.php');
$sql = "select * from login;";

// insert in database 
$rs = mysqli_query($con, $sql);

/*while($row = mysqli_fetch_assoc($rs))
		{
			echo $row['u_id'];
      echo $row['u_name'];
      echo $row['password'];
		}*/
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChemX</title>
    <script src='https://cdn.tailwindcss.com/'></script>
  </head>
  <body>
        <?php 
        include('nav.php');
        ?>
  </body>
  </html>
