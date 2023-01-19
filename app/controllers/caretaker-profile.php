<?php
$id = auth('caretaker_id');

if($id == 'Unknown')
{
    redirect('caretaker-login');
}
$tab = $_GET['tab'] ?? 'dashboard';
if( $tab == "tenant")
    {
        $tenantClass = new Tenant;
        $tenants = $tenantClass->query("SELECT * FROM tenants order by id desc");
             
    }
require view_path('caretaker/caretaker-profile');

    

