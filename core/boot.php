<?php
session_start();
define('BASE_URL', 'http://localhost/doanweb');

require_once 'auth.php';
require_once 'category_db.php';
require_once 'product_db.php';
require_once 'orders.php';
require_once 'order_detail_db.php';
require_once 'function.php';