<?php 
global $vname, $mobileno, $coming, $tomeet, $purpose, $intime, $proof, $todaydate;
$vname=$_POST['vname'];
$mobileno=$_POST['mobileno'];
$coming=$_POST['coming'];
$tomeet=$_POST['tomeet'];
$purpose=$_POST['purpose'];
$intime=$_POST['intime'];
$proof=$_POST['proof'];
$todaydate=$_POST['todaydate'];
echo $vname;
    $connection=mysqli_connect('localhost', 'root', '', 'inandoutdb');
    mysqli_query($connection, "INSERT INTO visitors (vname, mobileno, coming, tomeet, purpose, intime, proof, todaydate )
        VALUES ('".$vname."','".$mobileno."','".$coming."','".$tomeet."','".$purpose."','".$intime."', '".$proof."',  '".$todaydate."')");
?>