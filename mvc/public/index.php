<?php 
require '../vendor/autoload.php';
use Router\Router;

$url = $_GET['url'];
define('VIEWS',dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views'.DIRECTORY_SEPARATOR);
define('SCRIPTS',dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR );
define('DB_NAME',"mvc_project");
define('DB_HOST',"127.0.0.1");
define('DB_USER',"root");
define('DB_PASSWORD',"");

$router = new Router($url);

$router->get('/','App\controllers\BlogController@welcome');
$router->get('/posts','App\controllers\BlogController@index');
$router->get('/post/:id','App\controllers\BlogController@show');
$router->get('/tags/:id','App\controllers\BlogController@tag');


$router->get('/login','App\controllers\UserController@login');
$router->post('/login','App\controllers\UserController@loginPost');
$router->get('/logout',"App\controllers\UserController@logout");

$router->get('/admin/posts','App\controllers\Admin\PostController@index');
$router->get('/admin/posts/create','App\controllers\Admin\PostController@create');
$router->post('/admin/posts/create','App\controllers\Admin\PostController@createPost');
$router->post('/admin/posts/delete/:id','App\controllers\Admin\PostController@destroy');
$router->get('/admin/posts/edit/:id','App\controllers\Admin\PostController@edit');
$router->post('/admin/posts/edit/:id','App\controllers\Admin\PostController@update');



try{
     $router->run(); 
}catch(\Exception $e){
         return $e->error404();    
}   
