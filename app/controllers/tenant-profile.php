<?php
if (auth('tenant_id') == 'Unknown') 
{
    redirect('tenant-login');
}
else {
    $tab = $_GET['tab'] ?? 'profile';

    require view_path('tenants/tenant-profile');
}
