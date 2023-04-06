<?php
include_once("/Users/rizot/Documents/GitHub/Trucks/Templates/Defaults/Head.php");
include_once("/Users/rizot/Documents/GitHub/Trucks/Templates/Defaults/Navbar.php");
$server = "localhost";
$username = "root";
$password= "";
$db = "trucks";
$st = "";
$info = "";

try {
    $db = new PDO("mysql:host=$server;dbname=$db", $username);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $st = $db->prepare("SELECT * FROM truck_info;");
    $st->execute();
    $info = $st->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException  $error) {
    echo "Error: " . $error->getMessage();
}

?>

<head>
    <div class= "container container1 position-relative">
<?php foreach($info as $column ) { ?>
    <p class= "position-relative"><?php echo $column['id'];?></p>
    <p class= "text3 position-relative"><?php echo $column['brand'];?></p>
    <p class= "text4 position-relative"><?php echo $column['model'];?></p>
    <p class= "text5 position-relative"><?php echo $column['fuel'];?></p>
    <p class= "text6 position-relative"><?php echo $column['transmission'];?></p>
    <p class= "text7 position-relative"><?php echo $column['price'];?></p>
<?php    } ?>
    </div>

    <div class= "footer position-relative">
<?php include_once("/Users/rizot/Documents/GitHub/Trucks/Templates/Defaults/Footer.php"); ?>
    </div>
