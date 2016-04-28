<?php

require __DIR__ . '/includes/db_connect.php';

$op = isset($_GET['op']) ? $_GET['op'] : NULL;
switch ($op) {
  case 'update':
    require __DIR__ . '/op/update.php';
    break;

  default:
    require __DIR__ . '/op/index.php';
}
