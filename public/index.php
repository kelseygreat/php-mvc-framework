<?php 
/* 
**Front Controller 
**
*/
//echo "REQUEST_URI =".$_SERVER['QUERY_STRING']."";

/*
 * Routing
 */

require '../core/Router.php';
$router = new Router();
//echo get_class($router);

//Add routes
$router->add('', ['controller' => 'Home', 'action'=>'index']);
$router->add('posts', ['controller' => 'Posts', 'action'=>'index']);
$router->add('posts/new', ['controller' => 'Posts', 'action'=>'new']);

//display the routing table
//echo "<pre>";
//var_dump($router->getRoutes());
//echo "</pre>";

//match the requested route
$url = $_SERVER['QUERY_STRING'];
if($router->match($url)){
    echo "<pre>";
    var_dump($router->getParams());
    echo "</pre>";
}else{
    echo "No route found for URL $url";
}





