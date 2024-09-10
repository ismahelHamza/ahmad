<?php
class database_connection{
   public $db;
    
   public function __construct(){
    $this->database();
     session_start(); 
   }
   public function database(){
      $this->db = new mysqli('localhost' , 'root' , '' , 'project1');
      if(!$this->db){
        exit("database not found");
      }
   }

   public function query($sql){
    $result = $this->db->query($sql);
                   if(!$result) exit("query not found");
                   else return $result;
   }
     public function clear($data){
        if (is_null($data)) {
            exit("from escapeString method error: null data");
        }
        
        $result = $this->db->real_escape_string($data);
        return $result;
     }

    
}
$connect = new database_connection();
 

?>