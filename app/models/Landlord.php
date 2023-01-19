<?php

class Landlord extends model 
{
   protected $table = "landlord";
   public function validate($data)
   {
      $errors = [];
      if(empty($data['landlord_name']))
      {
         $errors['landlord_name'] = "Landlord Name cannot be empty";

      }elseif (!preg_match('/a-zA-Z /', $data['landlord_name'])) {
         $errors['landlord_name'] = "Landlord Name can only be letters";
      }
      if (empty($data['landlord_id'])) {
         $errors['landlord_id'] = "Landlord Id cannot be empty";
      }
      elseif (! preg_match('/0-9/')) {
         $errors['landlord_id'] = "Only Numbers Allowed";
      }
   }
   
}

