<?php 

$errors = [];
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    if(empty($errors))
    {
     
        $tenant = new Tenant;
        if($row = $tenant->where(['tenant_id'=> $_POST['tenant_id']],'tenants'))
        {
            $errors['tenant_exist'] = "Tenant with That Id already Exist";
        }else {
            $_POST['date'] = date("Y-m-d H:i:s");
        $_POST['caretaker_id'] = auth('caretaker_id');
        $rent  = $_POST['rent'];
        $deposit =  $_POST['deposit'];
        $_POST['password'] = password_hash($_POST['tenant_id'], PASSWORD_DEFAULT); 
        $_POST['amount'] = $deposit + $rent;
        $_POST['billed'] = 10000;
        $_POST['balance'] = $_POST['billed'] - $_POST['amount'];
        
        
        

        
        
        $tenant->insert($_POST);

        
        redirect('caretaker-profile&tab=tenant');
        }
        
    }
}
    # code...






    require view_path('tenants/tenant-new');