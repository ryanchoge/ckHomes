<?php
if(auth('landlord_id') == 'Unknown')
{
    redirect('landlord-login');
}
$tab = $_GET['tab'] ?? 'dashboard';
if( $tab == "tenant")
{
    $tenantClass = new Tenant;
    $tenants = $tenantClass->query("SELECT * FROM tenants order by id desc");
}
elseif ($tab == "apartment") {
    $apartmentClass = new Apartment;
    $apartments = $apartmentClass->query("SELECT * FROM apartment order by id desc");
}
elseif ($tab == "caretaker") {
    $caretakerClass = new Caretaker;
    $caretakers = $caretakerClass->query("SELECT * FROM caretaker order by id ");
}
elseif ($tab == "landlord-list") {
    $landlordClass = new Landlord;
    $landlords = $landlordClass->query("SELECT * FROM landlord order by id ");
}


require view_path('landlord/landlord-profile');