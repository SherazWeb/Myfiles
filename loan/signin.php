<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1 style="text-align:center;margin:10px 0px -45px 0px;">LOG IN TO YOUR ACCOUNT</h1>
    <form action="actions/signinact.php" METHOD="POST" id="signup">
        <?php session_start();
            if(isset($_SESSION['error'])){
                echo "<div style='color:red;text-align:center;'>{$_SESSION['error']}</div>";
                unset($_SESSION['error']);
            }
        ?>
        <div class="form-data">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter Email" required>
        </div>
        <div class="form-data">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required>
        </div>
        <input type="submit" name='submit' value="LOGIN">
    </form>

    <script src="js/script.js"></script>
</body>
</html>