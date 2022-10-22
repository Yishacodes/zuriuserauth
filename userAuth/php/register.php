<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $filename='storage\users.csv';
    $handle=fopen($filename,'w');
    fwrite($handle,$registeruser());
    fclose($handle);

    if($registeruser[$username,$email,$password]){
        echo "User Successfully Registered"
    }

    // echo "OKAY";
}
echo "HANDLE THIS PAGE";


