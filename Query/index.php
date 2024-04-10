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


  $query = "SELECT `users`.`username` AS `uploaded_video`
  FROM `medias`
  JOIN `users` 
  ON `users`.`id` = `medias`.`user_id`
  WHERE `medias`.`type` = 'video'
  GROUP BY `users`.`username`;";
  $results = $connection->query($query);
  // var_dump($results);


  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  if ($results->num_rows > 0) :
    while ($row = $results->fetch_assoc()) : ?>


      <div><?php echo $row['uploaded_video'] ?></div>


  <?php endwhile;
  endif;  ?>
</body>
</html>