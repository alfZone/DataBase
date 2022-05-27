<?php
//echo "ola";
require __DIR__ . '/../../config.php';
require __DIR__ . '/../../autoload.php';
require __DIR__ . '/../../bootstrap.php';

use classes\db\Database;


$db=new Database(_BDUSER,_BDPASS,_BD);
$db->listTables();
print_r($db->resultset());
?>
