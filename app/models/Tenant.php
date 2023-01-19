<?php


// users class
class Tenant extends model
{
    protected $table = "tenants";
    // protected $allowed_columns = [
        
    //     'tenant_name',
    //     'tenant_id',
    //     'password',
    //     'phone_number',
    //     'apartment',
    //     'house_name',
    //     'rent',
    //     'deposit',
    //     'date',
    //     'amount'];
    
    public function validate($data){
     
        $errors = [];
        
         //check name
         if(empty($data['tenant_name']))
         {
             $errors['tenant_name'] = "Tenant name is required";
         }else if (!preg_match('/[a-zA-Z]+/', $data['tenant_name']) )
         {
             $errors['tenant_name'] = "Only letters are allowed in description" ;
     
         }
         //check apartment
         if(empty($data['apartment']))
         {
             $errors['apartment'] = "Apartment name is required";
         }else if (!preg_match('/[a-zA-Z]+/', $data['apartment']) )
         {
             $errors['apartment'] = "Only letters are allowed in Apartment" ;
     
         }
         //
         if(empty($data['apartment_number']))
         {
             $errors['apartment_number'] = "apartment_number is required";
         }else if (!preg_match('/^[0-9]+$/', $data['apartment_number']) )
         {
             $errors['apartment_number'] = "Apartment number must be a Number" ;
     
         }
         //check  quantity
         if(empty($data['rent']))
         {
             $errors['rent'] = "Rent is required";
         }else if (!preg_match('/^[0-9]+$/', $data['rent']) )
         {
             $errors['rent'] = "Rent must be a Number" ;
     
         }
         //check id
         if(empty($data['deposit']))
         {
             $errors['deposit'] = "Deposit Amount is required";
         }else if (!preg_match('/^[0-9.]+$/', $data['deposit']) )
         {
             $errors['deposit'] = "Deposit Must be a number" ;
     
         }
         
         
        
     
        
        return $errors;
     } 
     public function generate_barcode() 
     {
       return "2222" . rand(1000, 9999999);



     }
     public function generate_filename($ext = "jpg")
     {
        return hash("sha1",rand(1000, 9999999))."_".rand(1000, 9999).".". $ext;
       }
}
