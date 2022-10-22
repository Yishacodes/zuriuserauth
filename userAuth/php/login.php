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
    if($_SESSION['loginUser']="username"){
return 'dashboard.php'
    }
    else{
      return  'php\login.php' 
    }
}

echo "HANDLE THIS PAGE";

