<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
</head>

<body>
  <center>
<fieldset>
<legend>Sign in</legend>
<form name="frmContact" method="post" action="form.php">
<p>
<label for="Name">Name </label>
<input type="text" name="Name" id="Name">
</p>
<p>
<label for="email">Email</label>
<input type="text" name="Email" id="Email">
</p>
<p>
<label for="phone">Phone</label>
<input type="text" name="Phone" id="Phone">
</p>
<p>
<label for="password">password</label>
<input type="text" name="password" id="cassword">
</p>
<p>
<label for="cpassword">confirm Password</label>
<input type="text" name="cpassword" id="cpassword">
</p>

<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>
</center>
</body>
</html>