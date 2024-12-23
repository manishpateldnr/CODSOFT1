<?php
    session_start();
    $admin_name=$_SESSION['admin-name'];
    if(isset($_SESSION['loged'])){
    }
    else{
        echo '<script type="text/JavaScript"> 
            window.location.replace("./admin.html");
        </script>';
    }
    
    include 'connection.php';
    $db = new mysqli($server, $username, $password, $dbname);
    
    date_default_timezone_set("asia/kolkata");
    $current_year = date("Y");
    $table_name = "images"."_".date("Y");
    
    $stmt= $db->prepare("SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'csar' AND  TABLE_NAME = '$table_name';");
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if($stmt_result->num_rows<1){
        $stmt= $db->prepare("CREATE TABLE `$table_name` (`id` INT(11) NOT NULL AUTO_INCREMENT , `file_name` VARCHAR(255) NOT NULL , `event_name` VARCHAR(255) NOT NULL , `event_date` VARCHAR(255) NOT NULL , `uploaded_on` DATETIME NOT NULL , `status` ENUM('1','0') NOT NULL DEFAULT '1' , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
        $result=$stmt->execute();
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
    <title>CSaR | Admin</title>
</head>

<body class="font">
    <?php include("modals.php"); ?>
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
                        
                    </ul>
                </div>

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
            <div class="card-header text-center  text-white" style="background-color: #A41034;">
                <h2>Admin Module</h2>
            </div>
            <div class="card-body">
                    <div class="form-group">
                        <a href="./attendance.php"><button class="btn bg-black text-white btn-sm w-100">Give Attendence</button></a>
                    </div>
                    <br>
                    
                    <div class="form-group"> 
                    <button type="button" id="upload" name="upload" class="btn bg-black text-white btn-sm w-100" data-bs-toggle="modal" data-bs-target="#image-upload-modal">
                        Upload Images
                    </button> 
                    <!--    <button class="btn bg-black text-white btn-sm w-100" data-bs-toggle="modal" data-bs-target="#id05">Give-->
                    <!--        Attendence</button>-->
                    </div>
                    <br>
                    <div class="form-group">
                        <a href="./insertmsg.php"><button class="btn bg-black text-white btn-sm w-100 ">Update Upcoming Event</button></a>
                    </div>
                    <br>
                    <a href="./pupdate.php"><button class="btn bg-black text-white btn-sm w-100">Password update</button></a>
            </div>
            <div class="card-footer text-end">
                <a href="./">
                    <button  class="btn btn-sm w-50 text-white"
                            style="background-color: #A41034;">Logout</button></a>
                <small>&copy; CUTM,pkd</small>
            </div>
        </div>
    </div>
    
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
            document.getElementById("attForm").reset();        
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>

<?php

if(isset($_POST['submit'])){
    $e_name=$_POST["event-name"];
    $e_name = str_replace(" ","-",$e_name);
    $e_date=$_POST["event-date"];
    // File upload configuration 
    $targetDir = "uploads/"; 
    $allowTypes = array('JPG','PNG','JPEG','jpg','png','jpeg');
     
    $statusMsg = $errorMsg = $insertValuesSQL=$insertValuesSQL_event = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        $i=1;
        foreach($_FILES['files']['name'] as $key=>$val){

            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]);
            $file_ext=pathinfo($fileName,PATHINFO_EXTENSION);
            $fileName = $e_name.$e_date."@".$i.".".$file_ext;
            $img_size = $_FILES['files']['size'][$key];
            echo $img_size;
            $i++;
            $targetFilePath = $targetDir . $fileName; 

            // Check whether file type is valid
            // $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if(($_FILES["files"]["size"][$key] < 5000000)){
            if(in_array($file_ext, $allowTypes)){
                if($file_ext=="JPG" || $file_ext=="jpg" || $file_ext=="JPEG" || $file_ext=="jpeg"){
                    $img=imagecreatefromjpeg($_FILES['files']['tmp_name'][$key]);
                }elseif($file_ext=="PNG" || $file_ext=="png"){
                    $img=imagecreatefrompng($_FILES['files']['tmp_name'][$key]);
                }
                // Upload file to server
			    // imagejpeg($img,$targetFilePath,20);
                // move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)
                if(imagejpeg($img,$targetFilePath,20)){ 
                    // Image db insert sql
                    $insertValuesSQL .= "('".$fileName."','".$e_name."','".$e_date."', NOW()),"; 
                    // $insertValuesSQL_event .= "('".$e_name."','".$e_date."'),"; 
                    // $insertValuesSQL_eventdate .= "('".$e_date."', NOW()),";
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            }
            }
            else{
                echo '<script>
                        alert("Size is very large should less than 5mb");
                    </script>';
            }
        } 
        
        // Error message 
        $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
         
        if(!empty($insertValuesSQL)){ 

            $insertValuesSQL = trim($insertValuesSQL, ',');

            // Insert image file name into database;
            $insert = $db->query("INSERT INTO $table_name (file_name, event_name, event_date, uploaded_on) VALUES $insertValuesSQL");
            if($insert){
                $statusMsg = "Files are uploaded successfully.".$errorMsg;
                echo '<script>
                        alert("Files are uploaded successfully");
                        window.history.back();
                    </script>';
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = "Upload failed! ".$errorMsg; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    }
}
?>