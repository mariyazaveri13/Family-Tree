<?php
    require_once 'inc/config.php';
    require_once 'inc/model.php';
?>
<html>
    <head>
    </head>
<body>
    <form method="post">
            First Name <input type="text" name="fname" /><?php echo (isset($fnameErr))? $fnameErr : ''; ?><br>
            Last Name <input type="text" name="lname" /><?php echo (isset($lnameErr))? $lnameErr : ''; ?><br>
            Gender
            <input type="radio" name="gender" value="male" /> male
            <input type="radio" name="gender" value="female" /> female<?php echo (isset($genderErr))? $genderErr : ''; ?><br>
            email<input type="email" name="email" /><?php echo (isset($emailErr))? $emailErr : ''; ?><br>
            password<input type="password" name="pass" /><?php echo (isset($passErr))? $passErr : ''; ?><br>
            confirm Password <input type="password" name="cpass" /><?php echo (isset($cpassErr))? $cpassErr : ''; ?><br>
            <input type="submit" name="signup" value="Signup"><br>
            <?php echo (isset($errorMsg))? $errorMsg : ''; ?>
    </form>
</body>
</html>