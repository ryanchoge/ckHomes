<?php 


$errors = [];
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    if (empty($errors)) 
    {
            $landlord = new Landlord;
            if ($row = $landlord->where(['landlord_id' => $_POST['landlord_id']], 'landlord')) {
                
                
                    $errors['landlord_id'] = "Landlord already Exist";
                
                
                
            }else{
                    $_POST['password'] = password_hash($_POST['landlord_id'], PASSWORD_DEFAULT );
                    $_POST['date'] = date("Y-m-d H:i:s");
                    $landlord->insert($_POST);
                    redirect('landlord-profile&tab=landlord-list');
                }
        
        
            
        
        
        
    }
}
require view_path('landlord/landlord-add');
