<?php

require __DIR__ . "/vendor/autoload.php";

// shell_exec("composer remove symfony/var-dumper");
// echo "test";

$http = new \TimePHP\UrlParser\Parser();
dump($http->post());
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Test</title>
</head>

<body>
   <form method="POST">
      <input type="text" name="username">
      <input type="submit">
   </form>
</body>

</html>