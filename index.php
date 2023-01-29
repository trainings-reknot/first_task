<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2> Registration Form </h2>

<form method="post" action="registration.php">

Name: <input type="text" name="name" required>
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="email" name="email" required>
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Website:
<input type="url" name="website" required>
<span class="error"><?php echo $websiteErr;?></span>
<br><br>
Comment: <textarea name="comment" rows="5" cols="40" required></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">

</form>
</body>
</html>