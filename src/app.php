<?php
// example.com/src/app.php
//use Calendar\Controller\LeapYearController;
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
    'year' => null,
//    '_controller' => array(new LeapYearController(), 'index'),
    '_controller' => 'Calendar\Controller\LeapYearController::index',
)));

return $routes;
