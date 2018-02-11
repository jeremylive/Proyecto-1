<html>
<body>
<h1>A simple example</h1>
This is normal HTML
 
<?php
  //echo "This is PHP!";

$servername = "localhost";
$username = "root";
$password = "hiwo";


echo "Hello world";
// Create connection
$conn = new mysqli($servername, $username, $password);

mysqli_select_db($conn,"Muestreos") or die("Could not select database ");

$query = "CALL spObtenerMuestreo()";
$table = "Cliente";
//$result = mysqli_query($conn,$query) or die("\n Query failed") ;


$result2 = mysqli_query($conn,'CALL spObtenerMuestreo()') or die('<p>cannot show columns from '.$table."</p>");

$res = "";
if(mysqli_num_rows($result2)) {
    $res = $res.'<table cellpadding="0" cellspacing="0" class="db-table">';
    $res = $res.'<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default<th>Extra</th></tr>';
    
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
echo "finished!";
?>
 
</body>
</html>
