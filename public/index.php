<?php
// require_once 'app/system/app.php';
// $app=new App();

require_once __DIR__ .'/../vendor/autoload.php';

use coding\app\controllers\AuthorsController;
use coding\app\controllers\PublishersController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;
use coding\app\controllers\bookController;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

// $config=array(
//   'servername'=>$_ENV['DB_SERVER_NAME'],
//   'dbname'=>$_ENV['DB_NAME'],
//   'dbpass'=>$_ENV['DB_PASSWORD'],
//   'username'=>$_ENV['DB_USERNAME']

// );

$config=array(
  'servername'=>'localhost',
  'dbname'=>'elibrary',
  'dbpass'=>'',
  'username'=>'root'

);



$system=new AppSystem($config);

Router::get('/',[UsersController::class,'show']);
Router::get('/category',[UsersController::class,'category']);
Router::get('/basket',[UsersController::class,'basket']);
Router::get('/stepper',[UsersController::class,'stepper']);
Router::get('/details',[UsersController::class,'details']);   
Router::get('/header',[UsersController::class,'header']); 
Router::get('/booksList',[UsersController::class,'booksList']);  
Router::get('/AdminCategory',[UsersController::class,'Admincategory']);   
Router::get('/users',[UsersController::class,'users']);   
Router::get('/authors',[UsersController::class,'authors']);  
Router::get('/publishers',[UsersController::class,'publishers']); 
Router::get('/offer',[UsersController::class,'offer']);      
Router::get('/order',[UsersController::class,'order']);      
Router::get('/cites',[UsersController::class,'cites']);      
Router::get('/address',[UsersController::class,'address']);  
Router::get('/createAuthor',[bookController::class,'createAuthor']);   
Router::post('/addbook',[bookController::class,'addbook']);      
$system->start();



?>

