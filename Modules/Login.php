<?php
$st = "";
$id = "";
$pw = "";
global $dsn;
include_once("/Users/rizot/Documents/GitHub/Trucks/Modules/Database.php");
if(!isset($_POST['liButton'])) {
    if(!empty($_POST['username'], $_POST['password'])) {
        if (!isset($_POST['username'], $_POST['password'])) {
            echo "Please fill in your credentials!";
        }
        if ($st = $dsn->prepare('SELECT username, password FROM accounts WHERE username = ?;')) {
        $st->bindParam('s', $_POST['username']);
        $st->execute();
        $st->store_result();
        $st->close();
    }

    if ($st->num_rows > 0) {
        $st->bind_result($id, $pw);
        $st->fetch();
        if (password_verify($_POST['password'], $pw)) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome' . $_SESSION['name'] . '!';
        } else {
            echo 'Incorrect username and/or password!';
        }
    }
} else {
    echo 'Incorrect username and/or password!';
}

?>