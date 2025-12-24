<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Information System</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/style.css" />
</head>
<body>
<h1 align="center">Student Information System</h1>
<form method="post" action="<?=base_url();?>login">
<table border="0px" cellspacing="0px" cellpadding="3px" align="center">
<tr>
    <td>Username</td><td><input class="txt" type="text" name="username" id="username" maxlength="50" required /></td>
</tr>
<tr>
    <td>Password</td><td><input class="txt" type="password" name="password" id="password" maxlength="30" required /></td>
</tr>
<tr>
    <td></td><td><input type="submit" value="Login" class="btn" /></td>
</tr>
</table>
</form>
</body>
</html>