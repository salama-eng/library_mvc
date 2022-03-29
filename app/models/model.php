<?php 
namespace coding\app\models;
use coding\app\system\AppSystem;
class Model{
    public static  $tblName;
   
    private $final_query;
   
   
    function save():bool{
        
      
        $values=array();
        $columns=array();
        //get_object_
        foreach(get_object_vars($this) as $key=> $property){
            //echo $property;
            if($property!=self::$tblName&&$property!=$this->final_query)
            {
                $values[]=is_string($property)?"'".$property."'":$property;
                $columns[]=$key;}

        }
        $values=implode(",",$values);
        $columns=implode(",",$columns);
       $sql_query="insert into ".self::$tblName." (".$columns." ) values (".$values.")";
   echo $sql_query;
   
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        if($stmt->execute())
        {
        
             return false;
        }
        else  echo "Error";
       
        return false;
       // return true;
     //echo $sql_query;
    }




  
    
    
   
  /******** Run Query ******* */
  function runQuery()
  {
    $stmt=AppSystem::$appSystem->database->pdo->prepare($this->final_query);
    if($stmt->execute())
    {
    
         return false;
    }
    else  echo "Error";
   
    return false;
    // echo $this->final_query;
    return $stmt->fetchAll(\PDO::FETCH_OBJ);
  }
  
  
  
    /******** insert FUNCTION ******* */
    function insert($table_name,$data)
    {


      $query = "INSERT INTO ".$table_name." (";            
      $query .= implode(",", array_keys($data)) . ') VALUES (';            
      $query .= "'" . implode("','", array_values($data)) . "')";
      $this->final_query = $query ;
     return $this;
    }
  
     /******** QUERY FUNCTION ******* */
     
     function select($table,$list=null)
     {
       if(!$list)
      $this->final_query="select * from $table";
      else
     $this->selectlist($table,$list);
       return $this;
     }
     
     function selectlist($table,$list)
     {
    
      $this->final_query =implode(",",$list);
      $this->final_query ="select $this->final_query from $table";
      return $this;
     }
     function selectCount($table,$counted_column,$list) 
     {
      $this->final_query =implode(",",$list);
      $this->final_query ="select count($counted_column) , $this->final_query from $table";
      return $this;
     }
     function where($column,$value)
     {
      $this->final_query.=" where $column = '$value'";
     
      return $this;
     }
     function Or($column,$value)
     {
      $this->final_query.=" Or $column = '$value'";
     
      return $this;
     }
     function And($column,$value)
     {
      $this->final_query.=" And $column = '$value'";
     
      return $this;
     }
  
  
     function orderby($column,$typeOfOrder=null)
     {
      $this->final_query.=" order by $column";
      return $this;
     }
     function groupBy($column)
     {
      $this->final_query.=" group by $column";
    
  
      return $this;
  
     }
     function outerjoin($table2,$T1_column,$T2_column)
     {
       $this->final_query.=" JOIN $table2 on $T1_column = $T2_column ";
      return $this;
     }
  
     
     function innerjoin($table2,$T1_column,$T2_column)
     {
       $this->final_query.=" INNER JOIN $table2 on $T1_column = $T2_column ";
      return $this;
     }
  
     function leftJoin($table2,$T1_column,$T2_column)
     {
       $this->final_query.=" LEFT JOIN $table2 on $T1_column = $T2_column ";
      return $this;
     }
     function rightJoin($table2,$T1_column,$T2_column)
     {
       $this->final_query.=" RIGHT JOIN $table2 on $T1_column = $T2_column ";
      return $this;
     }
  
  
     public function delete($table,$where=null){
      // $count=$this->pdo->exec("delete from $table set $col='$col_val' where $condit_col='$condit_val'");
      if($where==null){
          $stmt=$this->pdo->prepare("delete from $table");
          $count=$stmt->execute();
         return $count;
      }
      else{
          $stmt=$this->pdo->prepare("delete from $table where $where");
          $count=$stmt->execute();
         return $count;
      }
      
  
  }
  
  public function deleteById($table,$id){
    // $count=$this->pdo->exec("delete from $table set $col='$col_val' where $condit_col='$condit_val'");
  
       $this->final_query=("delete from $table where id =$id");
       return $this;
  
    
  
  }
  
  
     public function update($table_name,$list,$where_condition){
      $query = '';  
      $condition = ''; 
        foreach($list as $key => $value)  
        {  
             $query .= $key . "='".$value."', ";  
        }  
       $query = substr($query, 0, -2);  
  
       foreach($where_condition as $key => $value)  
        {  
             $condition .= $key . "='".$value."' AND ";  
        }  
         $condition = substr($condition, 0, -5);  
          $query = "UPDATE ".$table_name." SET ".$query." WHERE ".$condition."";  
          $stmt=$this->pdo->prepare( $query);
          $stmt->execute();
    
  
      }
  












}
?>