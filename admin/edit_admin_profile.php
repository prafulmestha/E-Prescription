<?php
session_start();
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "e-pri");
$name = "";
$email = "";
$mobile = "";
$query = "select * from admins where email = '$_SESSION[email]'";
$query_run = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($query_run)) {
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> Admin Dashboard </title>
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
            height: 470px;
            margin-top: auto;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0, 0, 0, 0.5) !important;
        }



        .card-header h3 {
            color: white;
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


        .login_btn {
            color: black;
            background-color: #FFC312;
            width: 100px;
            margin-right: auto;
            margin-left: auto;

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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin_dashboard.php">E-Priscription</a>
            </div>
            <font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name']; ?></strong></span></font>
            <font style="color: white"><span><strong>Email: <?php echo $_SESSION['email']; ?></strong></span></font>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="view_admin_profile.php">View Profile</a>
                            <a class="dropdown-item" href="edit_admin_profile.php"> Edit Profile</a>
                            <a class="dropdown-item" href="change_password.php">Change Password</a>
                        </div>
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
            </ul>
        </div>
    </nav><br>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-body">
                    <form action="admin_update.php" method="post">
                        <div class="form-group">
                            <label style="color: #FFC312;">Name:</label>
                            <input type="text" class="form-control" value="<?php echo $name; ?>" name="name">
                        </div>
                        <div class="form-group">
                            <label style="color: #FFC312;">Email:</label>
                            <input type="text" class="form-control" value="<?php echo $email; ?>" name="email">
                        </div>
                        <div class="form-group">
                            <label style="color: #FFC312;">Mobile:</label>
                            <input type="text" class="form-control" value="<?php echo $mobile; ?>" name="mobile">
                        </div>
                </div>
                <input type="submit" value="Update" class="btn float-right login_btn">
                </div>
        </div>
    </div>
</body>

</html>