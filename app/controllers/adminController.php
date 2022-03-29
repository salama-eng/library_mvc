<?php
namespace coding\app\controllers;

use coding\app\models\User;

class adminController extends Controller{
 

   
  

   
public function booksList(){
      
  $this->view('admin/bookslist');

}
public function admincategory(){

  $this->view('admin/admincategory');

}
public function order(){

  $this->view('admin/order');

}

public function offer(){

  $this->view('admin/offer');

}


public function users(){

  $this->view('admin/users');


}

public function payments(){

  $this->view('admin/payments');

}

public function Addres(){

  $this->view('admin/Addres');
}

public function publishers(){

  $this->view('admin/publishers');

}

public function cities(){

  $this->view('admin/cities');


}
public function Author(){

  $this->view('admin/Author');

}



public static  function offers(){

self::view('admin/offers');

}

public static  function payment(){

  self::view('admin/payment');

}


public static  function Address(){

  self::view('admin/Address');

}



    public function model($model_name){
        require_once 'app/models/'.$model_name.'.php';

        return new $model_name();
    }

   


}
?>