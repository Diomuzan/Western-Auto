<?php
$query = "";
$truckResult = "";

try {
$db = new PDO("mysql:host=localhost;dbname=trucks", "root", "");
$query= $db->prepare("SELECT * FROM truck_info");
$query->execute();

foreach($truckResult as $data) {
    echo "<a href='Trucks_Detailpage.php?id=" . $data['id']."'>";
    echo $data["brand"]. " " . $data["model"];
    echo "</a>";
    echo "<br>";
}

$result = $query->fetchAll (PDO::FETCH_ASSOC);
} catch(PDOException $e) {
 die("Error!:". $e->getMessage());
}
?>

<!DOCTYPE HTML>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Trucks Masterpage</title>
    </head>
    <body>
    <h1>Trucks</h1>
    </body>
</html>
