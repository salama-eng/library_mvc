<?php

// class Controller {
//     public function model($model_name){
//         require_once 'app/models/'.$model_name.'.php';

//         return new $model_name();
//     }

//     public function view($view_name,$data=null){

//         require_once 'app/views/'.$view_name.'.php';

//     }
// }



namespace coding\app\controllers;

use coding\app\system\AppSystem;
use coding\app\system\Request;
use coding\app\system\Router;

class Controller{

   function view($viewName,$params=[]){
       AppSystem::$appSystem->router->view($viewName,$params);
   }

}

