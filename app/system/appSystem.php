<?php
namespace coding\app\system;

use Dotenv\Dotenv;

class AppSystem{
    public $request;
   public $response;
    public  $router;
    public static $appSystem;
    public  $database;
    
    function __construct(array $dbConfig)
    {

        
    	$this->database=new Database($dbConfig);
        self::$appSystem=$this;
        $this->request=new Request();
        $this->response=new Response();
        $this->router=new Router($this->request);

    } 
    
    public function start(){
        $this->router->executeRoute();
        

    }
    
}

?>