<?php session_start();
include 'lib/usuario.php';
if(isset($_POST['submit'])){
    

    // reb la variable user del formulari
    $user = \filter_input(\INPUT_POST, 'user');
    $user = \filter_var($user);

    // reb la variable pass del formulare
    $pass = \filter_input(\INPUT_POST, 'pass');
    $pass = \filter_var($pass);


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 1</title>
</head>
<body>
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
    <div>
        <label for="">Username</label>
        <div>
            <input type="text" id="username" name="username" >
        </div>
    </div>
    <div>
        <label for="">Password</label>
        <div>
            <input type="text" id="password" name="password">
        </div>
    </div>
    <div>
        <button type="submit" value ="sent" name="submit"></button>
    </div>
</form>
</body>
</html>