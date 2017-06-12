<html>
<head>
<title>Contoh Update Data</title>
</head>
<body>
<?php
include_once("db_connect.php");
$update = mysql_query("update tamu set nama = 'STEKOM SEMARANG' WHERE ID = 1");


echo "<br><br>";	
if($update)
	{echo "Berhasil mengupdate data pada tabel tamu";}
else
	{echo "Gagal mengupdate data";}
?>
</body>
</html>
