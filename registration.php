<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div>
        <?php
        if(isset($_POST['create'])){
            echo 'User has been Created';
        }

        ?>
    </div>
    <div>
        <form action="registration.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>Registration</h1>
                        <p>Fill in the form with correct values.</p>
                        <hr class="mb-3">
                        <label for="firstname"><b>First Name</b></label> 
                        <input class="form-control" type="text" name="firstname" required>

                        <label for="lastname"><b>Last Name</b></label> 
                        <input class="form-control" type="text" name="lastname" required>

                        <label for="email"><b>Email Address</b></label> 
                        <input class="form-control" type="email" name="email" required>

                        <label for="phonenumber"><b>Phone Number</b></label> 
                        <input class="form-control" type="text" name="phonenumber" required>

                        <label for="password"><b>Password</b></label> 
                        <input class="form-control" type="password" name="password" required>
                        <hr class="mb-3">

                        <input class="btn btn-primary" type="submit" name="create" value="Sign Up">
                    </div>    
                </div>
            </div>
        </form>
    </div>
</body>
</html>