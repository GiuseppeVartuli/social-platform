<?php
define('DB_SERVERNAME', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'db_milestone_4');

$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($connection && $connection->connect_error) {
    echo "Connection failed: " . $connection->connect_error;
    die;
  }


  $query = "SELECT `users`.`id`,`users`.`username`, COUNT(*) AS 'uploaded_video' 
  FROM `medias`
  JOIN `users` ON `users`.`id` = `medias`.`user_id`
  WHERE `medias`.`type` = 'video'
  GROUP BY `users`.`username`, `users`.`id`;";
  $results = $connection->query($query);
  // var_dump($results);


  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


  
    <div class="container">
      <div class="row">
      <div class="col-6">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Utenti</th>
      <th scope="col">Video Caricati</th>
    </tr>
  </thead>
  <tbody>
  <?php
      if ($results->num_rows > 0) :
    while ($row = $results->fetch_assoc()) : ?>
    <tr>
      
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['username'] ?></td>
      <td><?php echo $row['uploaded_video'] ?></td>
       
    </tr>
    <?php endwhile;
  endif;  ?>
  </tbody>
</table>
      </div>
      </div>
    </div>
      
 
</body>
</html>




<!--

<div class="container">
      
        <div class="row">
          <div><?php echo $row['uploaded_video'] ?></div>
        </div>
      </div>
    
    -->