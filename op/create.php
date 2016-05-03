<?php

$product = array(
  'name' => '',
  'id_storehouse' =>'1',
  'price' => '',
  'quantity' => '',
);

if (!empty($_POST['save'])) {
  $sth = $pdo->prepare('INSERT INTO Product (name, id_storehouse, price, quantity) VALUES (:name, :id_storehouse, :price, :quantity)');
  $sth->execute(array(
      ':name' => $_POST['name'],
      ':id_storehouse' => $_POST['id_storehouse'],
      ':price' => $_POST['price'],
      ':quantity' => $_POST['quantity'],
    ));

  header('Location: index.php');
  exit;
}

  $storehouses = get_available_storehouses();

ob_start();

require __DIR__ . '/../view/form.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';
