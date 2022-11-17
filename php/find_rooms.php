<?php

$servername = "localhost";
$username = "root";
$password = "webdesign17";
$database = "hotel diadem";

//Připojení k databázi
$connection = new mysqli($servername, $username, $password, $database);

if ($connection -> connect_error) 
{
    die("Připojení selhalo: " . $connection -> connect_error);
}



// if(isset($_POST['submit']))
// {		
//     $fullname = $_POST['fullname'];
//     $age = $_POST['age'];

//     $insert = mysqli_query($db,"INSERT INTO `tblemp`(`fullname`, `age`) VALUES ('$fullname','$age')");

//     if(!$insert)
//     {
//         echo mysqli_error();
//     }
//     else
//     {
//         echo "Records added successfully.";
//     }
// }

// Ziskani dat z databaze (pomoci pripravy dotazu)
// $sqlSelect = $connection -> prepare
// ("SELECT * FROM UTULEK WHERE druh = ? ");
// $jmeno = "pes";
// $sqlSelect -> bind_param("s", $jmeno); //prvni parameter je datovy typ vstupniho parametru: s -> string, i -> integer, d -> float, b -> boolean
// $sqlSelect -> execute();
// $res = $sqlSelect -> get_result();
// if ($res->num_rows > 0) {
//     while ($row = $res->fetch_assoc()) {
//         echo "datum: ".$row["datum"].", jmeno: ".$row["jmeno"].", druh: ".$row["druh"].", vek: ".$row["vek"].", ockovani: ".$row["ockovani"].", adopce: ".$row["adopce"]."<br>";
//     }
// } else {
//     echo "0 results";
// }

//Výběr dostupných pokojů v zadaném datovém rozmezí
if(isset($_POST['Vyhledat']))
{	
    $inputArrivalDate = $_GET['Příjezd'];
    $inputDepartureDate = $_GET['Odjezd'];
    $inputGuests = $_GET['Počet hostů'];

    $sqlSelect = $connection -> prepare;
    // ("SELECT room_typeID
    // FROM RESERVATIONS 
    // WHERE arrival_date <= $inputArrivalDate AND departure_date >= $inputDepartureDate
    // INNER JOIN ROOMS 
    //     ON  RESERVATIONS.room_typeID = ROOMS.room_typeID
    //     WHERE max_guests <= $inputGuests
    // ");

    // ("SELECT room_typeID, max_guests FROM ROOMS WHERE max_guests <= $inputGuests AND room_typeID NOT IN (
    //     SELECT ROOM_ID_FK FROM RESERVATIONS 
    //     WHERE (DATE_OF_ARRIVAL< {NEWBOOKING_STARTDATE} AND DATE_OF_DEPARTURE>{NEWBOOKING_STARTDATE}) 
    //     OR (DATE_OF_ARRIVAL< {NEWBOOKING_ENDDATE} AND DATE_OF_DEPARTURE>{NEWBOOKING_ENDDATE})
    //     ");
    // $sqlSelect -> execute();
    // $res = $sqlSelect -> get_result();
}



// Odpojení od databáze
$connection -> close();    

?>