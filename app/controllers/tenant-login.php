<?php
if(auth('tenant_id') != 'Unknown')
{
    redirect('tenant-profile');
}
    $errors = [];
    if($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $tenants = new Tenant;
        if($row = $tenants->where(['tenant_id' => $_POST['tenant_id']], 'tenants'))
        {
            if(password_verify($_POST['password'],$row[0]['password']) )
            {
                authenticate($row[0]);
                redirect('tenant-profile');
            }else
            {
                $errors['wrong'] = "Wrong Username or Password";
            }
            
        }    
    }

    require view_path('auth/tenant-login');




