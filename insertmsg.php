<?php
    session_start();
    if(isset($_SESSION['loged'])){
    }
    else{
        echo '<script type="text/JavaScript"> 
            window.location.replace("./admin.html");
        </script>';
    }
?>

<!doctype html>
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
    <title>CSaR | Update Event</title>
</head>

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
                            <a class="nav-link active" href="./gallary.php">Gallary</a>
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
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container" style="width: 70%;height: 90vh;background-color: #d3e9f9;">
    <div class="cards d-flex flex-row " style=" background-color:#97cbf0">
        
            <div class="card-header ">Upcoming event</div>
            <form action="insertmsg.php" method="post">
                <label for="date">Enter date</label>
                <input type="text" id="date" name="date">
                <label for="msg">Enter msg</label>
                <input type="text" id="msg" name="msg">
                <button name="btn" type="submit">submit
                </button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
</body>

</html>




<?php
if(isset($_POST['btn'])){
    $date= $_POST['date'];
    $msg=$_POST['msg'];
   // echo "$email";


   include("connection.php");


    // Create a database connection
    $con = new mysqli($server, $username, $password,$dbname);

    if($con->connect_error){
        die("connection to this database failed due to" . $con->connect_error);
        echo "not connected.";
    }
    else{
        
        $stmt=$con->prepare("UPDATE event SET date = '$date', msg = '$msg' WHERE sno = '1'");
        $result = $stmt->execute();
        if(!$result){
            echo '<script type="text/JavaScript"> 
                                alert("Upcoming event msg not updated.");
                            </script>';
        }
        else{
            session_reset();
            session_destroy();
            echo '<script type="text/JavaScript"> 
                    alert("Upcoming event msg Updated");
                    window.location.replace("./");
                </script>';
            
        }
    }}
    ?>