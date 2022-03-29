<?php
namespace coding\app\controllers;

use coding\app\models\User;

class UsersController extends Controller{
 


    public function show(){
      
        $this->view('index');

    }
    
   

    public function category(){
      
        $this->view('category');

    }
    public  function basket(){
      
        $this->view('basket');
    }
    public function details(){
      
        $this->view('details');

    }
    public function stepper(){
      
        $this->view('stepper');

    }

   
/************************** */




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

/*********************** */


public function AddBook(){

    //print_r($_POST);
    $user=new User();
    $user->name=$_POST['name'];
    $user->email=$_POST['email'];
    $user->password=md5($_POST['password']);
    $user->is_active=isset($_POST['is_active'])?1:0;
    $user->role_id=1;
    $user->save();
    if($user->save())
    
    $this->view('feedback',['success'=>'data inserted successful']);
    else 
    $this->view('feedback',['danger'=>'can not add data']);

}


   

    public function model($model_name){
        require_once 'app/models/'.$model_name.'.php';

        return new $model_name();
    }

   


}
?>