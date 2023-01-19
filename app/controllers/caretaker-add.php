<?php
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty($errors)) {
        $caretaker = new Caretaker;

        if($row = $caretaker->where(['caretaker_id' => $_POST['caretaker_id']]))
        {
            $errors['existance'] = "Caretaker With this Id Already Exist";
            
            
        }
        else{
            
            $_POST['password'] = password_hash($_POST['caretaker_id'], PASSWORD_DEFAULT);
            
            $_POST['date'] = date("Y-m-d H:i:s");
        
        
        
            $caretaker->insert($_POST);
            redirect('landlord-profile&tab=caretaker');
        }
        
    }
}

require view_path('caretaker/caretaker-add');