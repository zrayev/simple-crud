<?php

function get_available_storehouses() {
  global $pdo;

  $sth = $pdo->prepare('SELECT * FROM Storehouse ORDER BY id ASC');
  $sth->execute();

  $storehouses = array();
  while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
    $storehouses[] = $row;
  }

  return $storehouses;
}
