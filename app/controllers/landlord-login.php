<?php
$errors = [];
if(auth('landlord_id')!='Unknown')
{
   redirect('landlord-profile');
}
if ($_SERVER['REQUEST_METHOD'] === "POST") {
   $landlord = new Landlord;
   
      
   
      if ($row = $landlord->where(['landlord_id' => $_POST['landlord_id']], 'landlord')) {
         
      
         if(password_verify($_POST['password'] , $row[0]['password'])) {
            authenticate($row[0]);
            redirect('landlord-profile');
         } else {
            $errors['password'] = "Wrong Password";
         } 
         
      }
      else {
         $errors['landlord_id'] = "Hayee";
      }
   
   
}
require view_path('auth/landlord-login');