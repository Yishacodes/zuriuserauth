<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $password = $_POST['password']

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    if($_SESSION['$loginuser']="username"){
echo "Go back to Dashboard"
    }
    else{
      echo "GO back to Login page"  
    }
}

echo "HANDLE THIS PAGE";

