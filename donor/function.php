<?php if(!isset($_SESSION)) {session_start();}  @ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
<link rel="icon" href="../img/favicon.png" type="image/gif" sizes="16x16">
</head>

<body>
<?php
function makeconnection()
{
	$cn=mysqli_connect("localhost","awaazsup_rahul","tC^hTy.QEd4m","awaazsup_lifeSaver");
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  return $cn;
}

?>
</body>
</html>