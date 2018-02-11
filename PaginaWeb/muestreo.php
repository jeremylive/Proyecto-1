<html>
<head>
	<link rel="stylesheet" type="text/css" href="consultas_style.css">
</head>
<body>
<div align="center">
<h1>Muestreo</h1>

<?php
  //echo "This is PHP!";
$query = "CALL spObtenerMuestreo()";
$servername = "localhost";
$username = "root";
$password = "hiwo";


//echo "Hello world";
// Create connection
$conn = new mysqli($servername, $username, $password);

mysqli_select_db($conn,"Muestreos") or die("Could not select database ");


//$table = "Muestreo";
//$result = mysqli_query($conn,$query) or die("\n Query failed") ;


$result2 = mysqli_query($conn,$query) or die('<p>cannot show columns from '.$table."</p>");

$res = "";
if(mysqli_num_rows($result2)) {
    $res = $res.'<table cellpadding="10" cellspacing="" class="db-table">';
    $res = $res.'<tr><th>idMuestreo</th><th>idProyecto</th><th>Fecha de inicio</th><th>Fecha final</th><th>objetivo</th><th>activo</th></tr>';
    
    while($row2 = mysqli_fetch_row($result2)) {
        $res = $res.'<tr>';
        foreach($row2 as $key=>$value) {
            $res = $res.('<td>'.$value.'</td>');
        }
        $res = $res.'</tr>';
    }
    $res = $res.'</table><br />';
}
	echo $res;


$conn->close();
 
//echo "finished!";
?>
</div>
</body>
</html>

