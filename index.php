# index.php

<?php
require_once('connection.php');

if (isset($_GET['controller'])) {
$controller = $_GET['controller'];

//   if (isset($_GET['action'])) {
//     $action = $_GET['action'];
//   } else {
//     $action = 'index';
//   }

isset($_GET['action']) ? $action = $_GET['action'] : $action = 'index';

} else {
  $controller = 'pages';
  $action = 'home';
}
require_once('routes.php');