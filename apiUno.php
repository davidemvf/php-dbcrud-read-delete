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
    }

    $query = '
    SELECT *
    FROM pagamenti
    ';
    $res = $conn -> query($query);

    $accepted = [];
    $pending = [];
    $rejected = [];

    if ($res && $res -> num_rows > 0) {


      while($row = $res -> fetch_assoc()) {

          switch($row['status']) {
            case 'accepted':
              $accepted[] = $row;
            break;
            case 'pending':
              $pending[] = $row;
            break;
            case 'rejected':
              $rejected[] = $row;
            break;
          }
      }
    }

    $conn->close();
    echo json_encode($stanze);

?>
