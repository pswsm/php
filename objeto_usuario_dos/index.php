<?php 
session_start();
require_once 'lib/usuario.php';
if(isset($_SESSION['userlist'])){
    $userlist = unserialize($_SESSION['userlist']);
}else{
    $userlist=array();
}
if(filter_has_var(INPUT_POST,"submit")){
    // reb la variable user del formulari
    $username = \filter_input(\INPUT_POST, 'username');
    
    // reb la variable pass del formulare
    $pass = \filter_input(\INPUT_POST, 'password');
    $user = new User($username,$pass);
    array_push($userlist,$user);
    $_SESSION['userlist'] = serialize($userlist);

}else{
    $username = "";
    $pass = "";
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
            <input type="text" id="username" name="username" value="<?php echo $username ?>">
        </div>
    </div>
    <div>
        <label for="">Password</label>
        <div>
            <input type="text" id="password" name="password" value="<?php echo $pass ?>">
        </div>
    </div>
    <div>
        <button type="submit" value ="sent" name="submit">Send</button>
    </div>
</form>
<h3>Current users</h3>
<ul>
    <?php 
    // to do read user list from file
    foreach($userlist as $usuario){
        printf("<li>%s</li>",$usuario);
    }
    ?>
</ul>
<!-- <?php echo $userlist?> -->
</body>
</html>