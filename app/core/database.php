<?php 
 //database class



class Database
{
    private function db_connect(){
        $DBHOST = "localhost";
        $DBNAME = "ckhomes";
        $DBUSER = "root";
        $DBPASS = "";
        $DBDRIVER = "mysql";
        try {
            $conn = new PDO("$DBDRIVER:host=$DBHOST;dbname=$DBNAME",$DBUSER,$DBPASS);
        } catch (PDOException $e) {
            //throw $th;
            echo $e->getMessage();
        }
    
        
        return $conn;
    
    }
    public function query($query, $data = array()){
        $conn = $this->db_connect();
        $stmt = $conn->prepare($query);
        $check = $stmt->execute($data);
        if($check){
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(is_array($result) && count($result) > 0){
    
                return $result;
            }
        }
        return false;
        
        
    }
}
