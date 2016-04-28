<?php

$sth = $pdo->prepare('SELECT * FROM repositories ORDER BY id ASC');
$sth->execute();

$repos = array();
while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
  $repos[] = $row;
}

ob_start();

require __DIR__ . '/../view/op_index.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';
