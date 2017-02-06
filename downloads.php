<!DOCTYPE html>
<html>
<head>
<title>Download File From MySQL</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<?php
include 'config.php';

$query = "SELECT id, name FROM documentos";
$result = mysqli_query($conexao, $query) or die('Error, query failed');




if(mysqli_num_rows($result) == 0){
	echo "Database is empty <br>";
} 
else{
	while(list($id, $name) = mysqli_fetch_array($result)){
	?>
		<a href="downloads.php?id=<?=$id;?>"><?= $name;?></a> <br>
	<?php 
	}
	
}
?>

</body>
</html>


<?php
if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database

$id    = $_GET['id'];
$query2 = "SELECT name, type, size, content " .
         "FROM documentos WHERE id = '$id'";

$result2 = mysqli_query($conexao, $query2) or die('Error, query failed2');
list($name, $type, $size, $content) =  mysqli_fetch_array($result2);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");

ob_clean(); //apaga o buffer de saída
flush();	//descarrega o buffer de saída
echo $content;
mysqli_close();

exit;
}

?>