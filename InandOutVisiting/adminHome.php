<?php 

$db = mysqli_connect('localhost', 'root', '', 'inandoutdb');
$data=mysqli_query($db, "select * from visitors");
$output=''; 
$output.='<table border=1>';
$output.='<tr><th>Name</th><th>Age</th></tr>';
while ($row= mysqli_fetch_assoc($data)) {
    
    $output.='<tr><td>'.$row['vname'].'</td><td>'.$row['mobileno'].'</td></tr>';
}
$output.='</table>';
echo $output;

?>
<form method="post" action="export.php">
	<input type="hidden" name="id" value='<?php echo $output; ?>'/>
	<input type="submit" name="export" value="Export to Excel">
</form>