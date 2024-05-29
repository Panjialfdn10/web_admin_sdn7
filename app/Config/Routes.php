<?php

$routes = \Config\Services::routes();

include APPPATH . 'Config/Routes/APIRoutes.php';
include APPPATH . 'Config/Routes/AdminRoutes.php';

return $routes;


