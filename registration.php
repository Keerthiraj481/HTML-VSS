<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration </title>
</head>
<body>
    <div>
        <form action="registration.php" method="post">
            <div class="container">
                <h1>Registration</h1>
                <p>Fill up the form with correct values.</p>
                <label for="fullname"><b>Full Name</b></label>
                <input type="text" name="fullname" required>

                <label for="email"><b>Email Address</b></label>
                <input type="email" name="email" required>

                <label for="password"><b>Password</b></label>
                <input type="password" name="password" required>

                <label for="confirmpassword"><b>Confirm Password</b></label>
                <input type="confirmpassword" name="confirmpassword" required>

            </div>
        </form>
    </div>
</body>
</html>