<?php
    session_start();
    // if(isset($_SESSION['loged'])){
    // }
    // else{
    //     session_reset();
    //     session_destroy();
    //     echo '<script type="text/JavaScript"> 
    //         window.location.replace("./admin.html");
    //     </script>';
    // }
    include("connection.php");
    $con = mysqli_connect($server, $username, $password,$dbname);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
        echo "not connected.";
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
    <title>CSaR | Reset</title>
</head>

<style>

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>

<body  class="font">
    <?php include "navbar.php"; ?>
    <?php include "modals.php"; ?>
    <div class="bardbox d-flex justify-content-center" style="background-color: #d3e9f9; height:100vh;">
        <div class="card my-auto shadow login-card">
            <div class="card-header text-center  text-white" style="background-color: #A41034;">
                <h2>Admin password update</h2>
            </div>
            <div class="card-body">
                <form id="login-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" class="form-control" name="username" required />
                        <button  name="btn1" class="btn btn-sm w-25 text-white" style="background-color: #A41034;">send otp</button>
                    </div>
                </form>
                <form id="login-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="form-group">
                        <label for="otp-admin">Enter OTP</label>
                        <input type="number" id="otp-admin" class="form-control" name="otp-admin" required />
                    </div>
                    <div class="form-group">
                        <label for="newpassword">New password</label>
                        <input type="password" id="newpassword" class="form-control" name="newpassword" required />
                    </div>
                    <br>
                    <button  name="btn2" class="btn btn-sm w-100 text-white" style="background-color: #A41034;">Update Password</button>
                    
                </form>
            </div>
            <div class="card-footer text-end">
                <small>&copy; Centurion University</small>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
</body>
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

</script>
</html>

<?php
                    if(isset($_POST['btn1'])){
                        //Login
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $_SESSION["otp-admin"] = rand(100000,999999);
                            $_SESSION['username'] = $_REQUEST['username'];
                            
                            $otp=$_SESSION["otp-admin"];
                            
                            $stmt=$con->prepare("select * from admin where username= ?");
                            $stmt->bind_param("s",$_REQUEST['username']);
                            $stmt->execute();
                            $stmt_result= $stmt->get_result();
                            if($stmt_result->num_rows > 0){
                                $data= $stmt_result->fetch_assoc();
                                $email=$data['email'];
                                $username=$data['username'];

                            //    echo $otp;
                            //     echo $email;
                                $headers ="From: csarcutmpkd@gmail.com";
                                $body= "dear $username sir,\nyour \nOTP : $otp\nfor reset password do not share your otp to anyone,also csar team does not ask.\n\n\n\nRegard:\nCSaR team\nCenturion University of Technology and management \nParalakhemundi";
                                mail($email,"forget password otp",$body, $headers);
                                echo '<script type="text/JavaScript"> 
                                    alert("OTP has sent on your email");
                                    </script>';
                            }
                            else{
                                session_reset();
                                session_destroy();
                                echo '<script type="text/JavaScript"> 
                                alert("User not found");
                            </script>';
                            }
                            }
                    }
                    elseif(isset($_POST['btn2'])){
                        $username= $_SESSION['username'];
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // collect value of input field
                              $otp2 = $_REQUEST['otp-admin'];
                              $newpassword = $_REQUEST['newpassword'];
                              
                          if (empty($otp2)) {
                            echo '<script type="text/JavaScript"> 
                                alert("Please Enter OTP");
                            </script>';
                          } else {
                               if($otp2==$_SESSION["otp-admin"]){
                                // remove all session variables
                                $stmt=$con->prepare("UPDATE admin SET password = '$newpassword' WHERE username = '$username'");
                                $result = $stmt->execute();
                                if(!$result){
                                    echo '<script type="text/JavaScript"> 
                                    alert("Something went wrong");
                                    
                                </script>';
                                }
                                else{
                                    session_reset();
                                    session_destroy();
                                    echo '<script type="text/JavaScript"> 
                                        alert("Password updated..");
                                        window.location.replace("./");
                                    </script>';
                                    
                                }
                            }
                            else{
                                echo '<script type="text/JavaScript"> 
                                    alert("OTP not correct..");
                                    </script>';
                            }
                        }
                    }
                }
    ?>