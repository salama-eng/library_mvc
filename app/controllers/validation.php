<?php


class validation{

 public $emailMSG="";
 public $lengthMSG="";

  function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }



//  function validate($email,$name,$password):bool
//  {
//     if(strlen($name)>0 && strlen($name)<20&&strlen($password)>0&&strlen($password)<20&&filter_var($email, FILTER_VALIDATE_EMAIL))
//     {
//          return true;
//          echo "true";
//     }
   
//     else
//     {
//         echo "false";
//          return false;
//     }
   


//  }
 function isEmail($email):bool
 {
  if(filter_var($email, FILTER_VALIDATE_EMAIL))
  return true;
  else 
  {
   $this->emailMSG="INVAILD EMAIL";
   return false;
  }
   
 }
 function Testlength($data,$max=null,$min=null):bool
 {
   if($max!=null && $min!=null)
  if(strlen($data)<$max && strlen($data)>$min)
  return true;
  else 
  {
   $this->lengthMSG="you data must be less than ".$max ." and more than".$min;
   return false;
  }
  else  if($max!=null && $min=null)
  if(strlen($data)>$min)
  return true;
  else 
  {
   $this->lengthMSG="you data must be more than ".$min;
   return false;
  }

  else  if($max=null && $min!=null)
  if(strlen($data)<$max)
  return true;
  else 
  {
   $this->lengthMSG="you data must be less than ".$max;
   return false;
  }

 }


}

?>