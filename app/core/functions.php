<?php
function show($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
function esc($str)
{
    return htmlspecialchars($str);
}
function view_path($view)
{
    if(file_exists("../app/views/$view.view.php"))
    {
        return "../app/views/$view.view.php";
    }else {
        echo "View '$view' not found";
    }
}
function redirect ($page)
{

    header("location: index.php?pg=".$page);
    die;
}
function set_value($key, $default = "")
{
   if(!empty($_POST[$key])) 
   {
    return $_POST[$key];
   }
   return $default;
}
function authenticate($row)
{
    
    $_SESSION['USER'] = $row;
}
function auth($column){
    if(!empty($_SESSION['USER'][$column])) 
    {
    return $_SESSION['USER'][$column];
    }
    else {
    return "Unknown";
    }
}