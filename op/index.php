<?php

$sth= $pdo->prepare('SELECT * FROM Product ORDER BY id ASC');
//$sth = $pdo->prepare('SELECT
// repositories.id,
// repositories.name,
// repositories.active,
// repositories.id_storage,
// storages.name AS storage
//FROM repositories
//INNER JOIN storages ON repositories.id_storage = storages.id
//ORDER BY id ASC');
$sth->execute();

$products = array();
while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
  $products[] = $row;
}

ob_start();

require __DIR__ . '/../view/op_index.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';
