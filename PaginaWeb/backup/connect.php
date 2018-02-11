 <?php
$servername = "localhost";
$username = "root";
$password = "hiwo";


echo "Hello world";
// Create connection
$conn = new mysqli($servername, $username, $password);

mysqli_select_db($conn,"Agencia_viajes") or die("Could not select database ");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully ";

$query = "SELECT * FROM  Cliente";
$table = "Cliente";
//$result = mysqli_query($conn,$query) or die("\n Query failed") ;


$result2 = mysqli_query($conn,'SELECT * FROM Cliente') or die('<p>cannot show columns from '.$table."</p>");

/*
function createTable(&data){
	$res = "";
if(mysqli_num_rows($data)) {
    $res = $res.'<table cellpadding="0" cellspacing="0" class="db-table">';
    $res = $res.'<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default<th>Extra</th></tr>';
    
    while($row2 = mysqli_fetch_row($data)) {
        $res = $res.'<tr>';
        foreach($row2 as $key=>$value) {
            $res = $res.('<td>'.$value.'</td>');
        }
        $res = $res.'</tr>';
    }
    $res = $res.'</table><br />';
}
	return $res;
}*/


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
?> 
