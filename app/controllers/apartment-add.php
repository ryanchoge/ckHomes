<?php

$errors = [];
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    if (empty($errors)) {
        $apartment = new Apartment;
        $apartment->insert($_POST);
        redirect('landlord-profile&tab=apartment');
    }
}

require view_path('apartment/apartment-add');