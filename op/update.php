<?php

$sth = $pdo->prepare('SELECT * FROM Product WHERE id = :id');
$sth->execute(array(':id' => $_GET['id']));

if ($product = $sth->fetch(PDO::FETCH_ASSOC)) {

  if (!empty($_POST['save'])) {
    $sth = $pdo->prepare('UPDATE Product SET name = :name, id_storehouse = :id_storehouse, price = :price, quantity = :quantity WHERE id = :id');
    $sth->execute(array(
      ':name' => $_POST['name'],
      ':id_storehouse' => $_POST['id_storehouse'],
      ':price' => $_POST['price'],
      ':quantity' => $_POST['quantity'],
      ':id' => $_GET['id'],
    ));

    header('Location: index.php');
    exit;
  }

  $storehouses = get_available_storehouses();

  ob_start();

  require __DIR__ . '/../view/form.php';

  $content = ob_get_clean();

  require __DIR__ . '/../view/main.php';
}
