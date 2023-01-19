<?php

class Caretaker extends model 
{
   protected $table = "caretaker";
   public function validate($data)
   {
      $errors = [];
      //check caretaker name
      if(empty($data['caretaker_name']))
      {
         $errors['caretaker_name'] = "Caretaker Name Cannot be Empty";

      }
      else if(!preg_match('/a-zA-Z /', $data['caretaker_name'])) 
      {
         $errors['caretaker_name'] = "Caretaker name must only be letters";
      }
      //check caretaker id
      if (empty($data['caretaker_id'])) {
         $errors['caretaker_id'] = "Caretaker id Cannot be Empty";
      }
      else if(!preg_match('/0-9/', $data['caretaker_id'])) 
      {
         $errors['caretaker_id'] = "Caretaker id must Numbers";
      }
      //check phonenumber
      if (empty($data['phone_number'])) {
         $errors['phone_number'] = "Caretaker phone number Cannot be Empty";
      }
      else if(!preg_match('/0-9/', $data['phone_number'])) 
      {
         $errors['phone_number'] = "Caretaker phone number must numbers";
      }
      //check apartment
      if (empty($data['apartment'])) {
         $errors['apartment'] = "Apartment Cannot be Empty";
      }
      

      
   }
   
}
