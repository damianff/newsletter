<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Newsletter Subscription</title>
</head>
<body>
    <h1>Subscribe to our newsletter</h1>
    <form action="" method="post">
        Name: <input type="text" name="name" required="required" value="<?php echo $name ?>">
        <span>* <?php echo $nameErr;?></span>
        E-mail: <input type="email" name="email" required="required" value="<?php echo $email ?>">
        <span>* <?php echo $emailErr;?></span>
        <input type="submit" name="submit" value="Subscribe">
    </form>
</body>
</html>