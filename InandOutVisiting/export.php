<?php
$exportable=$_POST['id'];
$customname=date("Y-m-d");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=$customname.xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $exportable;
?>