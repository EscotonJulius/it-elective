<!DOCTYPE HTML>
<html>
   <head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    

<div class="inside">
    <form action="register_process.php" method="post">
<div class="inside2">
    <label for="firstname">FirstName:</label>
    <input type="text" id="firstname" name="firstname">
</div>
<div class="inside2">
    <label for="lastname">Lastname:</label>
    <input type="text" id="lastname" name="lastname">
</div>
<div class="inside2">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
</div>
<div class="inside2">
    <label>Password:</label>
<input type="password"name="password"><br>
</div>
<div class="inside2">
    <label>Confirm Password:</label>
<input type="password"name="cpassword"><br>
 </div>
 <div class="inside2">
    <label>Birthday:</label> 
<input type="date" id="birthday" name="birthday"><br>
</div>
<div class="inside2">
    <label>Gender:</label> 
<input type="radio" name="gender" value="male" checked> Male<input type="radio" name="gender" value="female"> Female<br>
</div>
<div class="inside2">
    <label>Course:</label>
    <input type="text" name="course"><br>
</div>

<input type="submit">
</form>

</body>
</head>
</html>

