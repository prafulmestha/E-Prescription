<?php
    session_start();
    if (isset($_POST['login'])) {
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "e-pri");
        $query = "select * from users where email = '$_POST[email]'";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            if ($row['email'] == $_POST['email']) {
                if ($row['password'] == $_POST['password']) {
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['id'] = $row['id'];
                    header("Location:user_dashboard.php");
                } else {
    ?>
                    <br><br>
                    <center><span class="alert-danger">Wrong Password</span></center>
    <?php
                }
            }
        }
    }
    ?>
<!DOCTYPE html>
<html>

<head>
    <title> User Login Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,
        body {
            background-image: url('https://cdn.dribbble.com/users/45541/screenshots/4495164/hp-donation.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }

        .container {
            height: 100%;
            align-content: center;
        }

        .card {
            height: 370px;
            margin-top: auto;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0, 0, 0, 0.5) !important;
        }

        .social_icon span {
            font-size: 60px;
            margin-left: 10px;
            color: #FFC312;
        }

        .social_icon span:hover {
            color: white;
            cursor: pointer;
        }

        .card-header h3 {
            color: white;
        }

        .social_icon {
            position: absolute;
            right: 20px;
            top: -45px;
        }

        .input-group-prepend span {
            width: 50px;
            background-color: #FFC312;
            color: black;
            border: 0 !important;
        }

        input:focus {
            outline: 0 0 0 0 !important;
            box-shadow: 0 0 0 0 !important;

        }

        .remember {
            color: white;
        }

        .remember input {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
        }

        .login_btn {
            color: black;
            background-color: #FFC312;
            width: 100px;
        }

        .login_btn:hover {
            color: black;
            background-color: white;
        }

        .links {
            color: white;
        }

        .links a {
            margin-left: 4px;
        }
    </style>

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">WELCOME TO E-PRESCRIPTION</a>
      <a class="navbar-brand" ></a>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" style="color: #0dd1fd75;" href="pharmacy/pharmacy.php">Pharmacy Login</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" style="color: #0dd1fd75;" href="doctor/doctor.php">Doctor Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #0dd1fd75;" href="admin/admin.php">Admin Login</a>
        </li>
      </ul>
    </nav>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3> User Log In</h3>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="E-mail" name="email">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password" name="password">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn" name="login">
                            </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="user_signup.html">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>