<?php
// model class
class Model extends Database 
{
    
    protected function get_allowed_columns($data)
    {            
        if(!empty($this->allowed_columns)) {
            foreach($data as $key => $value){
                if(!in_array($key, $this->allowed_columns)){
                    unset($data[$key]);
                }
            }     
        }return $data;
    } 
    public function insert($data){
      
        $clean_arr = $this->get_allowed_columns($data, $this->table);     
        $keys = array_keys($clean_arr);
        $query = "INSERT INTO $this->table ";
        $query .= "(".implode(",", $keys).") VALUES ";
        $query .= "(:".implode(",:", $keys) ." ) ";
        
        $db = new Database;
        return $db->query($query, $clean_arr);
    }
    public function update($id, $data){
      
        $clean_arr = $this->get_allowed_columns($data, $this->table);     
        $keys = array_keys($clean_arr);
        $query = "UPDATE $this->table SET ";
        foreach ($keys as $column) {
            # code...
            $query .= $column . "=:".$column . ", ";
        }
        $query = trim($query, ", ");
        
        $query .= " WHERE id = :id";
        $clean_arr['id'] = $id;
        $db = new Database;
        return $db->query($query, $clean_arr);
    }
    public function delete($id){
      
             
        
        $query = "DELETE FROM $this->table  WHERE id = :id";
              
        
        $clean_arr['id'] = $id;
        $db = new Database;
        return $db->query($query, $clean_arr);
    }
    public function where($data)
    {
            
        $keys = array_keys($data);
        $query = "SELECT * FROM $this->table WHERE ";
        foreach ($keys as $key) {
            # code...
            $query .= "$key = :$key && "; 
        }
        $query = trim($query,"&& ");
        $db = new Database;
        return $db->query($query, $data);
    }
    public function first($data)
    {
            
        $keys = array_keys($data);
        $query = "SELECT * FROM $this->table WHERE ";
        foreach ($keys as $key) {
            # code...
            $query .= "$key = :$key && "; 
        }
        $query = trim($query,"&& ");
        $db = new Database;
        if($res  = $db->query($query, $data)){
            return $res[0];
        }
        return false;
    }
}

