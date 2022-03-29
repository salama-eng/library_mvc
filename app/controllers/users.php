<?php
require_once 'controller.php';
require_once 'validation.php';
class Users extends Controller 
{
   public $valid;

    public function __construct()
    {

        $this->valid = new validation();

        echo "<h1>inside users controller construct</h1>";
    }
    function index()
    {
        $this->view('index',);
       
    }
    function show($id)
    {

        $user = $this->model('user');
        $userName = $user->select($id);
        $this->view('user_view', $userName);
    }
    function add()
    {

        echo "<h1>add of users</h1>";
    }



    function add_user()
    {
     
        print_r($_POST);
        if(isset($_POST['submit']))
        {
            $userName= $this->valid->test_input($_POST['name']);
            $password=$this->valid->test_input($_POST['password']);
            $email=$this->valid->test_input($_POST['email']);
           
            if($this->valid->isEmail( $email))
            $emiltest=true;
            else
            {
                $emailMSG=$this->valid->emailMSG;
                $passtest=false;
            }
            if($this->valid->Testlength($password,15,4))
            $emiltest=true;
            else
            {
                $passMSG=$this->valid->lengthMSG;
                $passtest=false;
            }
            
           if($this->valid->isEmail( $email)&&$this->valid->Testlength($userName,15,4)&&$this->valid->Testlength($password,15,4))
           {
              
               $user_data =array(
                   'name'=>$userName,
                   'password'=>md5($password),
                   'email'=>$email
                   
               );
               $u=$this->model('user');
               $message="";
               if($u->insert($user_data)){
                   $type='success';
                    $message="user created successful";
                    $this->view('feedback',array('type'=>$type,'message'=>$message));

                }}

               else{
           
                   $type='danger';
                   $message="can not create user please check your data ";
                   $lengthMSG=$this->valid->lengthMSG;
                   $emailMSG=$this->valid->emailMSG;
                   $this->view('register',array('type'=>$type,'message'=>$message,'message_length'=>$lengthMSG,'message_email'=> $emailMSG,'form_values'=>$_POST));

                }
           } 

        
        
    }
    function register()
    {
        $this->view('register');
    }

    function list_all()
    { $users=$this->model("user");
        $result=$users->select();
        $this->view('users_table',$result);

    }
    function status($id){
    $user=$this->model("user");
        $user->changeStatus($id);
        $this->list_all();

//        header('location:users/list_all');


        
    }

    function login(){
       
        $this->view('users_table',);
            
        }

   


}
