<?php

$Name = $_GET['name'];
$Email = $_GET['email'];


$file_open = fopen("sitedata.csv", "a");
$no_rows = count(file("sitedata.csv"));
if($no_rows > 1)
{
 $no_rows = ($no_rows - 1) + 1;
}
$form_data = array(
 'sr_no'  => $no_rows,
 'Name' => $Name,
 'Email' => $Email,

);
fputcsv($file_open, $form_data);

echo "Mail Sent";
?>
