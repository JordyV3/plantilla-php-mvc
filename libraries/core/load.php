<?php
$controllerFile = "controllers/" . $controller . ".php";

if (file_exists($controllerFile)) {
  require_once($controllerFile);
  $controller = new $controller();
  if (method_exists($controller, $method)) {
    $controller->{$method}($params);
  } else {
    // echo " No metodo";
    require_once("controllers/error.php");
  }
} else {
  // echo "No controllers";
  require_once("controllers/error.php");
}
?>
