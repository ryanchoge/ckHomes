<?php 
if(auth('caretaker_id') !='Unknown')
{
    redirect('caretaker-profile');
} 
$error = [];
if($_SERVER['REQUEST_METHOD'] =="POST")
{
    if (empty($error)) {
        $caretaker = new Caretaker;
        if ($row = $caretaker->where(['caretaker_id' => $_POST['caretaker_id']], 'caretaker')) {
            if (password_verify($_POST['password'], $row[0]['password'] )) {
                authenticate($row[0]);
                redirect('caretaker-profile');
            }
        }
    }
}
require view_path('auth/caretaker-login');