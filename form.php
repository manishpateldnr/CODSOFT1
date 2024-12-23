 <?php
if(isset($_POST['name'])){
    // Set connection variables
    include("connection.php");

    // Create a database connection
    $con = mysqli_connect($server, $username, $password,$dbname);
    $conn = new mysqli($server, $username, $password,$dbname);
    
    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
        echo "not connected.";
    }

     // Collect post variables
     $name = $_POST['name'];
     $reg = $_POST['reg'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $program = $_POST['program'];
     $branch = $_POST['branch'];
     $club = $_POST['club'];
     $other = $_POST['other'];
     $gpass="csar@".rand(100,999);
    date_default_timezone_set("Asia/Calcutta");
    $time= date('d-m-Y H:i:s');
    
    $stmt= $con->prepare("select * from csarjoin where reg='$reg'");
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows < 1){
        $sql = "INSERT INTO `csarjoin` (`name`, `reg`, `email`, `phone`, `program`, `branch`, `club`, `other`, `time`,`password`) VALUES ('$name', '$reg', '$email','$phone', '$program', '$branch','$club', '$other', '$time','$gpass');";
        $result= mysqli_query($con, $sql);
        
        // $sql2="INSERT INTO `attendance_monthly` (`reg`,`name`) VALUES ('$reg','$name');";
        // $result2= mysqli_query($con, $sql2);
        
        if(!$result){
            echo '<script type="text/JavaScript"> 
            alert("Not Registred Try Again..");
            window.location.replace("./");
        </script>';
        exit;
        }
        else{
            $headers ="From: rvr8539@gmail.com";
            $body= "dear $name;\nYour have registred in csar cutm pkd successfull.Your \npassword is $gpass\n for email: $email \n\n\n\nRegard:\nCSaR team\nCenturion University of Technology and management \nParalakhemundi";
            mail($email,"Registred Successful",$body, $headers);
        }
    }
    else{
        echo '<script type="text/JavaScript"> 
            alert("User Already Registred..");
            window.location.replace("./");
        </script>';
        exit;
    }
	$con->close();
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
    <title>CSaR | Success</title>
</head>
<script>
    // if($r>0){
    //     document.getElementById('id0122').style.display='none';
    //     window.history.back();
    // }
</script>

<body  class="font" onload="loadpage()">
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
                        <li class="nav-item">
                            <button class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#login-modal">Login</button>
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

<div id="id0122" class="modal" style="background-color: #d3e9f9; height: min-content; border-radius: 0.5em;">
            <div class="container">
                <h1 style="text-align: center;">WELCOME @ Centurion University</h1>
                <p>Thank you for joining...</p> <p> username and password has sent on your registred email </p>
                <p>if not receive password contact admin csar</p>
            
                <div class="clearfix">
                    <button type="button" class="bg-danger" onclick="backButton();">go back</button>
                </div>
            </div>
    </div>


<script>
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
    function loadpage() {
        document.getElementById('id0122').style.display='block';

    }
    function backButton() {
        window.location.replace("./");

    }

</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
        
</body>
</html>