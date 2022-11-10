<?php session_start(); 
include 'lib/fn_practica.php';
use proven\files;
$archivo = "./files/menu.txt";
$separador = ";";
$lista = files\readmenu($archivo,$separador);?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>DAWBI-M07-Pt11</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container-fluid">
        <?php include_once "topmenu.php";?>
        <div class="container">
        <h2>view menu</h2>
<?php
$aray = files\readmenu($archivo,$separador);
$nr_elm = count($aray); 
$html_table = '<table border=1 border-collapse=collapse; width= 100%;"><tr>';
$nr_col = 4;    
if ($nr_elm > 0) {
  for($i=0; $i<$nr_elm; $i++) {
    $html_table .= '<td>' .$aray[$i]. '</td>';     
    $col_to_add = ($i+1) % $nr_col;
    if($col_to_add == 0) { $html_table .= '</tr><tr>'; }
  }
  if($col_to_add != 0) $html_table .= '<td colspan="'. ($nr_col - $col_to_add). '">&nbsp;</td>';
}
$html_table .= '</tr></table>';    
$html_table = str_replace('<tr></tr>', '', $html_table);
echo $html_table;  
?>
        </div>
        <?php include_once "footer.php";?>
    </div>
    </body>
</html>