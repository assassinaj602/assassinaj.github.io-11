<?php
$servername="localhost";
$username="root";
$password ="";
$db_name="ajdatabase";
$conn=new mysql($servername,$username,$password,$db_name,3306);
if($conn)
{echo "Conection Successfull";}
else
{
echo"Connection not successfull";
}
?>