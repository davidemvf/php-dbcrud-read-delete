<?php
  header('Content-type: application/json');
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'db1';
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn -> connect_error) {
      var_dump('error');
      var_dump($conn);
      die();
    };


    $query = 'SELECT *
              FROM pagamenti
              WHERE id >= 100
              ';
    $res = $conn -> query($query);

    if ($res && $res -> num_rows > 0) {
      $pagamenti = [];

      while($row = $res -> fetch_assoc()) {

        $pagamenti[] = $row;

      }
    }

    $conn->close();
  echo json_encode($pagamenti);
?>
