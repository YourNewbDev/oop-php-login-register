<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Login & Register</title>
</head>
<body>

<div class="container mb-5">
    <div class="d-flex justify-content-center">
        <h1 class="text-primary">Hello</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="">
                <h2 class="text-center mb-3">Register</h2>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="user_username" placeholder="Enter Username">
                    <label for="username" class="form-label">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="password" name="user_password" placeholder="Enter Password">
                    <label for="password" class="form-label">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="email" name="user_email" placeholder="Email Address">
                    <label for="email" class="form-label">Email Address</label>
                </div>
                
                <div class="d-flex justify-content-center">
                <button class="btn btn-success w-50" type="submit">Sign Up</button>
                </div>
            </form>
        </div>
         <div class="col-md-6">
            <form action="">
                <h2 class="text-center mb-3">Login</h2>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="user_username" placeholder="Enter Username">
                    <label for="username" class="form-label">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="password" name="user_password" placeholder="Enter Password">
                    <label for="password" class="form-label">Password</label>
                </div>
                
                <div class="d-flex justify-content-center">
                <button class="btn btn-success w-50" type="submit">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>