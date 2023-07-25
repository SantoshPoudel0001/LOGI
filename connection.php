<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbvname = "oncampus";

$conn =mysqli_connect($servername,$username,$password,$dbvname);

if($conn)
{
  #  echo "connection ok";
}
else
{
   # echo "connection fail";

}
?>