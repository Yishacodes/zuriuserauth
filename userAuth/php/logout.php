<?php
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
session_destroy(
if($_SESSION['$loginuser']="username")){
    return "dashboard.php"
        }
}

echo "HANDLE THIS PAGE";
