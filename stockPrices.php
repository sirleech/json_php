<?php
  //A RESTful PHP service with JSON 
  
  header('Content-Type: text/javascript');
  header('Cache-Control: no-cache');
  header('Pragma: no-cache');
  header("Access-Control-Allow-Origin: *");

  define("MAX_PRICE", 100.0); // $100.00
  define("MAX_PRICE_CHANGE", 0.02); // +/- 2%

  $callback = trim($_GET['callback']);
  echo $callback;
  echo '([';

  $q = trim($_GET['q']);
  if ($q) {
    $symbols = explode(' ', $q);

    for ($i=0; $i<count($symbols); $i++) {
      $price = lcg_value() * MAX_PRICE;
      $change = $price * MAX_PRICE_CHANGE * (lcg_value() * 2.0 - 1.0);

      echo '{';
      echo "\"symbol\":\"$symbols[$i]\",";
      echo "\"price\":$price,";
      echo "\"change\":$change";
      echo '}';

      if ($i < (count($symbols) - 1)) {
        echo ',';
      }
    }
  }

  echo ']);';
?>
