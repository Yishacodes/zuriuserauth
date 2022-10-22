<?php
if(isset($_POST['submit'])){
    $email = $_POST['fullname'];
    $newpassword = $_POST['newpassword']

    resetPassword($email, $password);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
    //if it does, replace the password
    $filename='storage\users.csv';
    $handle=fopen($filename,'r');

    if($email='fullname'){
        return $newpassword
         };
         else( echo "user does not exist")
}
echo "HANDLE THIS PAGE";


