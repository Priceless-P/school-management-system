<?php

use classes\Admin\Admin;

require_once '../classes/Admin.php';
$delete = new Admin();
$id = $_GET['id'];
$delete->delete($id);
