<?php


//create or open the database
$db = new PDO('sqlite:test.db'); // success


//read data from database
$query = "SELECT * FROM t1";

foreach ($db->query($query) as $row) {
    print("<strong>tlkey: {$row['t1key']} </strong><br />" .
          "data: {$row['data']} <br />".
          "num: {$row['num']} <br />".
          "timeEnter: {$row['timeEnter']} <br /><br />");
}



?>
