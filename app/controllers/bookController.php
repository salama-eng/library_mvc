<?php
namespace coding\app\controllers;

use coding\app\models\books;

class bookController extends Controller{

    public function createAuthor(){
        $author=new books();
        $author->name="ali";
        $author->phone="77878788";
        $author->bio="fafdasdfasdfas";
        $author->email="auth@gmail.com";
        $author->created_by=1;
        $author->is_active=1;
        $author->save();
    }


    
    public function addbook()
    {
        
        if($_FILES['image']['name']){
            move_uploaded_file($_FILES['image']['tmp_name'], "assets/".$_FILES['image']['name']);
            $img=$_FILES['image']['name'];
            }
            
        $book=new books();
        $book->title=$_POST['title'];
        $book->image= $img;
        $book->price=$_POST['price'];
        $book->is_active=isset($_POST['is_active'])?1:0;
        $book->description=$_POST['description'];
        $book->pages_number=$_POST['number'];
        $book->category_id=$_POST['category'];
        $book->author_id=$_POST['author'];
        $book->publisher_id=$_POST['publisher'];  
        $book->quantity=$_POST['quantity'];
        $book->format=$_POST['format'];
        $book->created_by=$_POST['created_by'];
        $book->save();
        if($book->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

        $book->save(); 
    }
}
?>