<?php
    // Collect post variables
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // echo $pass;
    // echo $email;
    include("connection.php");

    // Create a database connection
    $con = new mysqli($server, $username, $password,$dbname);


    // Check for connection success
    if($con->connect_error){
        die("connection to this database failed due to" . $con->connect_error);
        echo "not connected.";
    }
    else{
        $stmt=$con->prepare("select * from csarjoin where email= ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result= $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data= $stmt_result->fetch_assoc();
            // $pass2 = $data['password'];
            // $email2= $data['email'];
            //echo "    db pass =$pass2 emil= $email2";
            if($data['password'] == $pass){
                    $name=$data['name'];
                    $reg=$data['reg'];
                    $email=$data['email'];
                    $phone=$data['phone'];
                    $program=$data['program'];
                    $branch=$data['branch'];
                    $club=$data['club'];
                    $hour=$data['hour'];
            }
            else{
                echo '<script type="text/JavaScript"> 
                                alert("Password not matched");
                                window.history.back();
                            </script>';
                exit;
            }
        }
        else{
            echo '<script type="text/JavaScript"> 
                                alert("User not found");
                                window.history.back();
                            </script>';
            exit;
        }
        

    }
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./form.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>CSaR | Profile</title>
</head>

<style>
    .login-card {
        width: 25%;
    }


    @media screen and (max-width: 768px) {
        .login-card {
            width: 75%;
        }
    }
</style>

<body  class="font">
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #A41034;">
        <div class="container-fluid ">
            <!-- Image and text -->
            <a class="navbar-brand" href="./" style="font-weight: 600;">
                <img src="./images/logo.png" width="35" height="35" class="d-inline-block align-top" alt="">
                CSaR@cutmpkd
            </a>

            <div class="menu d-flex">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./">Home</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link active" href="./imagefront.php">Gallary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./coreteam.php">Core-Team</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Clubs
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item " href="./clubs.html">Dance Club</a></li>
                                <li><a class="dropdown-item " href="./clubs.html">music club</a></li>
                                <li><a class="dropdown-item " href="./clubs.html">language club</a></li>
                                <li><a class="dropdown-item " href="./clubs.html">painting club</a></li>
                                <li><a class="dropdown-item " href="./clubs.html">Sport club</a></li>
                                <li><a class="dropdown-item " href="./clubs.html">Yoga club</a></li>
                                <li><a class="dropdown-item " href="./clubs.html">Youth Red cross</a></li>
                                <li><a class="dropdown-item " href="./clubs.html">NCC</a></li>
                                <li><a class="dropdown-item " href="./clubs.html">NSS</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item " href="./newclub.html">send new club idea</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <img src="./images/sir.png" width="35" height="35" class="d-inline-block align-top" style="border-radius=50%" alt="">
                        </li>
                    </ul>
                </div>

                <!-- <form class="d-flex" role="search" action="https://cutm.icloudems.com/corecampus/index.php">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Login</button>
                </form> -->
            </div>
            <button class="navbar-toggler " style="border: 2px solid white;" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"  ></span>
            </button>
        </div>
    </nav>


    <div class="bardbox d-flex justify-content-center" style="background-color: #d3e9f9; height:100vh;">
        <div class="card my-auto shadow login-card">
            <div class="card-header text-center  text-white" style="background-color: green">
                <h2>Login succeessful...</h2>
            </div>
            <div class="card-body">
                <div class="details">
                <?php  echo "<p><b>Name: </b> $name</p>"; ?>
                <?php  echo "<p><b>Reg No.: </b> $reg</p>"; ?>
                <?php  echo "<p><b>Email: </b> $email</p>"; ?>
                <?php  echo "<p><b>Mobile No.: </b> $phone</p>"; ?>
                <?php  echo "<p><b>Program: </b> $program</p>"; ?>
                <?php  echo "<p><b>Branch: </b> $branch</p>"; ?>
                <?php  echo "<p><b>CSR Club: </b> $club</p>"; ?>
                <?php  echo "<p><b>Total Completed Hour: </b> $hour hrs</p>"; ?>
                <?php  $name = $reg = $email = $phone = $program = $branch = $club = $hour = "";?>
                </div>
            </div>
            <div class="card-footer text-end">
                    <button type="button" class="btn bg-primary text-white" onclick="myFunction();">logout</button>
                <small>&copy; Centurion University</small>
            </div>
        </div>
    </div>

<script>
    
function myFunction() {
    window.location.replace("./");
}
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>