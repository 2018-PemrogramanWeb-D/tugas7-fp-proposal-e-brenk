<?php
$server = “localhost”;
$username = “Gusrai”;
$password = “jonmin123”;
$database = “e-brenk”;
mysql_connect($server,$username,$password) or die(“Koneksi gagal”
mysql_select_db($database) or die(“Database tidak bisa dibuka”

$username=$_POST[username];
$password=$_POST[password];

$input=mysql_query("INSERT INTO login (username, password) VALUES ('$username', '$password')");
///cek sudah terinput atau belum
if($input) ///jika sukses
{
echo "Yeay ulol :)";
}
else ///jika gagal
{
echo "Mampus lu anjir :(";
}
| <a href="index.html">OK</a>
</body></html>
/?>