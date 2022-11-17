<?php

$name = $surname = $street = $city = $code = $age = $country = $email = $phone = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{

$name = validateName($_POST["name"]);
$surname = validateSurname($_POST["surname"]);
$street = validateStreet($_POST["street"]);
$city = validateCity($_POST["city"]);
$code = validateCode($_POST["code"]);
$country = validateCountry($_POST["country"]);
$email = validateEmail($_POST["email"]);
$phone = validatePhone($_POST["phone"]);

}

echo $name."<br>";
echo $surname."<br>";
echo $street."<br>";
echo $city."<br>";
echo $code."<br>";
echo $country."<br>";
echo $email."<br>";
echo $phone."<br>";

function validateName($data)
{
    $data = validateInput($data);
    if(!isset($data))
    {
        throw new Exception("Jméno není vyplněno!");
    }
    return $data;
}

function validateSurname($data)
{
    $data = validateInput($data);
    if(!isset($data))
    {
        throw new Exception("Příjmení není vyplněno!");
    }
    return $data;
}

function validateStreet($data)
{
    $data = validateInput($data);
    if(!isset($data))
    {
        throw new Exception("Ulice není vyplněna!");
    }
    return $data;
}

function validateCity($data)
{
    $data = validateInput($data);
    if(!isset($data))
    {
        throw new Exception("Město není vyplněno!");
    }
    return $data;
}

function validateCode($data)
{
    $data = validateInput($data);
    if(!isset($data))
    {
        throw new Exception("Poštovní směrovací číslo není vyplněno!");
    }
    return $data;
}

function validateCountry($data)
{
    $data = validateInput($data);
    if(!isset($data))
    {
        throw new Exception("Stát není vyplněn!");
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
     if (strlen($number) < 10) 
     {
          throw new Exception("Telefonní číslo je neplatné!");
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