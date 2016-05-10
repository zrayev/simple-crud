<?php

//$sth= $pdo->prepare('SELECT * FROM Product ORDER BY id ASC');
$sth = $pdo->prepare('SELECT
 Product.id,
 Product.name,
 Product.price,
 Product.quantity,
 Product.id_storehouse,
 Storehouse.name AS Storehouse
FROM Product
INNER JOIN Storehouse ON Product.id_storehouse = Storehouse.id
ORDER BY id ASC');
$sth->execute();

$products = array();
while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
  $products[] = $row;
}

ob_start();

require __DIR__ . '/../view/op_index.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';
