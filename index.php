<?php

echo '<pre>';
  print_r($_POST);
echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
    <title></title>
  </head>
  <body>
    <form action="send.php" method="post">
      Email : <input type="email" name="email" value=""><br>
      <button type="submit" name="send">Send</button>
    </form>
  
  </body>
</html>
