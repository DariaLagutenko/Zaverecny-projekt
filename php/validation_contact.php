<?php

$fullName = $email = $phone = $message = " ";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$fullName = validateFullName($_POST["name"]);
$email = validateEmail($_POST["email"]);
$phone = validatePhone($_POST["phone"]);
$message = validateMessage($_POST["message"]);
}

echo $fullName."<br>";
echo $email."<br>";
echo $phone."<br>";
echo $message."<br>";

function validateFullName($data)
{
    $data = validateInput($data);
    if(!isset($data))
    {
        throw new Exception("Jméno není vyplněno!");
    }
    return $data;
}


function validateEmail($data)
{
    $data = validateInput($data);
    if(!isset($data))
    {
        throw new Exception("E-mailová adresa není vyplněna!");
    }
    if(!filter_var($data, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("E-mailová adresa je neplatná!");
    }
    return $data;
}


function validatePhone($data)
{
     $data = validateInput($data);
     $number = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
     $phone_to_check = str_replace("-", "", $number);
     
     if(!isset($data))
     {
        throw new Exception("Telefonní číslo není vyplněné!");
     }
     if (strlen($data) < 10) 
     {
          throw new Exception("Telefonní číslo je neplatné!");
     } 
     return $data;
}


function validateMessage($data)
{
    $data = validateInput($data);
    if(!isset($data))
    {
        throw new Exception("Zpráva není vyplněna!");
    }
    return $data;
}

function validateInput($data)
{
    $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data);
    return $data;
}

?>