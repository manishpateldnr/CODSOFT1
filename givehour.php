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
    <title>CSaR | CUTMpkd</title>
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
                            <a class="nav-link active" href="./coreteam.html">Core-Team</a>
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
                            <a href="./login.html"><button
                                    class="btn btn-outline-light btn-sm">Login</button></a>
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
            <div class="card-header text-center  text-white" style="background-color: #3151d4;">
                <h2>Attendance </h2>
            </div>
            <div class="card-body">
                <form id="hour_form" method="post" name="hour-reset">
                    <div class="form-group">
                        <label for="reg">Registration No.</label>
                        <input type="text" id="reg" class="form-control" name="reg" required />
                    </div>
                    <div class="form-group">
                        <label for="hour">Today hour</label>
                        <input type="number" id="hour" class="form-control" name="hour" required min="0"  />
                    </div>
                    <br>
                    <button name="btn" type="submit" class="btn w-100 text-white" 
                        style="background-color: #A41034;">Submit</button>
                </form>
            </div>
            <div class="card-footer text-end ">
                <small>&copy; Centurion University</small>
            </div>
        </div>
    </div>
    <script>

function submit_form() {
    if(!document.getElementById('email').value){
        alert("All field are required..");
        
    }
    else{
        document.formu1.submit();
        document.formu1.reset();
        document.getElementById('id01').style.display='none';
    }

}
function populate(s1,s2){
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    s2.innerHTML = "";
    if(s1.value == "B.Tech"){
        var optionArray = ["|","CSE|CSE","ECE|ECE","EEE|EEE","Mechanical|Mechanical","Civil|Civil","Dairy tech|Dairy tech","Agri.|Agri.","Phyto|Phyto","Mining|Mining","Aerospace|Aerospace","Bio-tech|Bio-tech","other|other"];
    } else if(s1.value == "B.Sc"){
        var optionArray = ["|","B.sc.(hons.) Agriculture|B.sc.(hons.) Agriculture","B.Sc. Fishery|B.Sc. Fishery","Applied Science|Applied Science","Paramedical|Paramedical","Forensic|Forensic","other|other"];
    } else if(s1.value == "B.Pharma"){
        var optionArray = ["|","B.Pharma|B.Pharma","other|other"];
    } else if(s1.value == "B.Com"){
        var optionArray = ["|","B.Com|B.Com","other|other"];
    } else if(s1.value == "BCA"){
        var optionArray = ["|","BCA|BCA","other|other"];
    } else if(s1.value == "BBA"){
        var optionArray = ["|","BBA|BBA","other|other"];
    } else if(s1.value == "B.Vocational"){
        var optionArray = ["|","B.Vocational|B.Vocational","other|other"];
    } else if(s1.value == "Diploma"){
        var optionArray = ["|","CSE|CSE","ECE|ECE","EE|EE","Civil|Civil","Mechanical|Mechanical","Automobile|Automobile","Mining|Mining","D. pharma|D. pharma","Paramedical|Paramedical","other|other"];
    } else if(s1.value == "ITI"){
        var optionArray = ["|","Automobile|Automobile","|Electrical|Electrical","Mechanical|Mechanical","other|other"];
    } else if(s1.value == "M.Tech"){
        var optionArray = ["|","PSCE|PSCE","SE|SE","TE|TE","other|other"];
    } else if(s1.value == "M.Sc"){
        var optionArray = ["|","Paramedical|Paramedical","Applied science|Applied science","Agriculture|Agriculture","Forensic|Forensic","Cyber security|Cyber security","other|other"];
    } else if(s1.value == "MBA"){
        var optionArray = ["|","MBA|MBA","other|other"];
    } else if(s1.value == "MCA"){
        var optionArray = ["|","MCA|MCA","other|other"];
    } else if(s1.value == "PhD"){
        var optionArray = ["|","PhD|PhD","other|other"];
    }


    for(var option in optionArray){
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }
}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous">
</script>
</body>
</html>





<?php
if(isset($_POST['btn'])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $reg = $_POST['reg'];
        $new_hour = $_POST['hour'];

    // Set connection variables
    include("connection.php");

    // Create a database connection
    $con = new mysqli($server, $username, $password,$dbname);

    if($con->connect_error){
        die("connection to this database failed due to" . $con->connect_error);
        echo "not connected.";
    }
    else{
        $stmt=$con->prepare("select * from csarjoin where reg= ?");
        $stmt->bind_param("s",$reg);
        $stmt->execute();
        $stmt_result= $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data= $stmt_result->fetch_assoc();
            $hour=$data['hour'];
            $name =$data['name'];
            $email=$data['email'];
            $completed=$data['completed'];
            $t_hour=$hour+$new_hour;
            
            $stmt=$con->prepare("UPDATE csarjoin SET hour = '$t_hour' WHERE reg = ?");
            $stmt->bind_param("s",$reg);
            $stmt->execute();
            if($t_hour>=120){
                if($completed=="no")
                {
                    $stmt=$con->prepare("UPDATE csarjoin SET completed = 'yes' WHERE reg = ?");
                    $stmt->bind_param("s",$reg);
                    $stmt->execute();
                    $body= "dear $name;\nYour have completed your limit of 120 hours in csar cutm pkd \n\n\nRegard:\ncsar team\nCenturion University of Technology and management \nParalakhemundi";
                    $headers="From: csarcutmpkd@gmail.com";
                    mail($email,"Congratulation from CSaR..",$body, $headers);
                }
            }
            echo '<script type="text/JavaScript"> 
            alert("Attendance Given ");
            window.location.replace("./givehour.php");
        </script>';
        }
        else{
            echo '<script type="text/JavaScript"> 
            alert("User Not found ");
            window.location.replace("./givehour.php");
        </script>';
        }

    }
    $con->close();
    }}


    ?>