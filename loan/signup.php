<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 style="text-align:center;margin:10px 0px -45px 0px;">SIGN UP</h1>
    <form action="actions/signupact.php" METHOD="POST" id="signup">
        <div id='errors'></div>
        <div class="form-data">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" placeholder="Enter First Name" required>
        </div>
        <div class="form-data">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" placeholder="Enter Last Name">
        </div>
        <div class="form-data">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter Email" required>
        </div>
        <div class="form-data">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required>
        </div>
        <div class="form-data">
            <label for="c-password">Email</label>
            <input type="password" name="c-password" id="c-password" placeholder="Confirm Password" required>
        </div>
        <input type="submit" name='submit'>
    </form>

    <script src="js/script.js"></script>
</body>
</html>