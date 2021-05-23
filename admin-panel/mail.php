<?php
//$conn=mysqli_connect("localhost","root","","newdb");


$header="From:info@advantagepainting.net\r\n";
$msg="Hello,Thanks for your Response we will Contact you shortly";
$subject1="Welcome to Advantage Painting";
$result1=mail("advantage5540@gmail.com","hi","hello",$header);
if($result1==true){
header("Location:https://www.advantagepainting.net");
}
else{
	echo "error";
}
?>