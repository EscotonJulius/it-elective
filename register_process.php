<?php
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = htmlspecialchars($_POST["email"]);
$password =  test_input($_POST["password"]);
$confirmpassword = test_input($_POST["cpassword"]);
$birthday = $_POST["birthday"];
$gender = $_POST["gender"];
$course = $_POST["course"];

$regex = "/^(?=.*[a-z])(?=.*[0-9])[a-z0-9]{6,12}$/";

if($password == $confirmpassword){
    if(!preg_match($regex,$password)){
        echo "<center><h1 style=' font-family: Arial;color:#ff0000;margin-top:25px;'>Password complexity requirements does not meet,Password must contain: Only Lowercase at least one (1)number,no special character,and no white space.</h1></center>";
    }
    else{
        echo"<center><h1 style=' font-family: Arial;color:#45a049;margin-top:25px;'>Password Accepted ! 
        Name : $firstname $lastname <br>
        Email : $email <br>
        Birthday : $birthday <br>
        Gender : $gender <br>
        Course : $course <br>
        </h1></center>";
    }
}else{
    echo"<center><h1 style=' font-family: Arial;color:#45a049;margin-top:25px;'>Password did not match with the confirmation password !</h1></center>";
}
?>
