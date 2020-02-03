<?php 
if (isset($_POST['submit'])){
$mailFrom=["email"];
$name=["name"];
$mailTo="russvityaz30@gmail.com";
$headers="From:".$mailFrom;
$txt="You have received an email from:" .$mailFrom.;

mail($mailTo;$txt);
?>
