<?php

use proven\monedas as mon;


include "lib/fn_monedas.php";



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conversor monedas</title>
    </head>
    <body>
        <h2>Conversor monedas</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="cantidad">Cantidad</label>
        <input type="text" name="cantidad" disabled="disabled" value="<?php echo $selectedpotatoe ?? ""; ?>" />
        <label for="moneda">Moneda 1</label>
            <select name="moneda1">
                <option value="dolar">Dolar</option>
                <option value="libra">libra</option>
                <option value="euro">Euro</option>
            </select>
        <label for="monedas">Moneda 2</label>
            <select name="moneda2">
                <option value="dolar">Dolar</option>
                <option value="libra">libra</option>
                <option value="euro">Euro</option>
            </select>
        </form>
        <?php if (isset($error) && strlen($error)>0) : ?>
        <p class="error"><?php echo $error ?? "";?></p>
        <?php endif; ?>
    </body>
</html>