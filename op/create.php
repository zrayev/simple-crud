<?php

$repo = array(
  'name' => '',
  'active' => 0,
);

if (!empty($_POST['save'])) {
  $sth = $pdo->prepare('INSERT INTO repositories (name, active, id_storage) VALUES (:name, :active, :id_storage)');
  $sth->execute(array(
    ':name' => $_POST['name'],
    ':active' => (!empty($_POST['active']) ? 1 : 0),
    ':id_storage' => $_POST['id_storage'],
  ));

  header('Location: index.php');
  exit;
}

$storages = get_available_storages();

ob_start();

require __DIR__ . '/../view/form.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';
