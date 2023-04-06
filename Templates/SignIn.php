<?php
include_once("/Users/rizot/Documents/GitHub/Trucks/Modules/Login.php");
include_once("/Users/rizot/Documents/GitHub/Trucks/Templates/Defaults/Head_(SignIn_Version).php");
include_once("/Users/rizot/Documents/GitHub/Trucks/Templates/Defaults/Navbar.php");
?>

<body>
<h1 class= "heading1 position-relative">Login</h1>

<form class= "loginForm position-relative">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name= "username">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1"  name= "password">
    </div>
    <button type="submit" class="btn btn-dark button1 position-relative" name= "liButton">Login</button>
</form>

<div class= "footer position-relative">
<?php include_once ("/Users/rizot/Documents/GitHub/Trucks/Templates/Defaults/Footer.php") ?>
</div>
</body>

