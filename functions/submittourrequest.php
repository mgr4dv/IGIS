<?
date_default_timezone_set('America/New_York');

include("link.php");
$out = array();

$success = mysqli_query($link,"INSERT INTO tour_requests (date_submitted, requested_by, date, time, type, requested_info, notes, num_tourists, grade_level, name, organization, email, phone, contact_phone, new, archived, handled)
												VALUES ('". date('Y-m-d H:i:s') ."', '".mysqli_real_escape_string($link,$_POST['requested_by'])."', '".mysqli_real_escape_string($link,$_POST['date'])."', '".mysqli_real_escape_string($link,$_POST['time'])."', '".mysqli_real_escape_string($link,$_POST['type'])."', '".mysqli_real_escape_string($link,$_POST['requested_info'])."', '".mysqli_real_escape_string($link,$_POST['notes'])."', '".mysqli_real_escape_string($link,$_POST['num_tourists'])."', '".mysqli_real_escape_string($link,$_POST['grade_level'])."', '".mysqli_real_escape_string($link,$_POST['name'])."', '".mysqli_real_escape_string($link,$_POST['organization'])."', '".mysqli_real_escape_string($link,$_POST['email'])."', '".mysqli_real_escape_string($link,$_POST['phone'])."', '".mysqli_real_escape_string($link,$_POST['contact_phone'])."', 1, 0, 0)");
$out['error'] = mysqli_error($link);

echo json_encode($out);
?>
