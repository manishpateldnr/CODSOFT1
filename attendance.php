<?php
    session_start();
    $admin_name=$_SESSION['admin-name'];
    if(isset($_SESSION['loged'])){
    }
    else{
        echo '<script type="text/JavaScript">
            window.location.replace("./");
        </script>';
    }
    
    include "connection.php";
    $con = new mysqli($server, $username, $password,$dbname);
    date_default_timezone_set("Asia/Calcutta");

    $table_name = "att"."_".date("M_y");
    
    $stmt= $con->prepare("SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'csar' AND  TABLE_NAME = '$table_name';");
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    
    if($stmt_result->num_rows<1){
        $stmt= $con->prepare("CREATE TABLE `$table_name` (`sno` INT(5) NOT NULL AUTO_INCREMENT , `reg` VARCHAR(20) NOT NULL , `name` VARCHAR(255) NOT NULL , PRIMARY KEY (`sno`))");
        $result=$stmt->execute();
        $stmt= $con->prepare("INSERT INTO `$table_name` (`reg`, `name`) SELECT `reg`, `name` FROM `csarjoin`;");
        $stmt->execute();
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
    <script src="form.js"></script>
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>CSaR | Attendance</title>
</head>


<body class="font" onload="resetForm()">
    
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
                            <a class="nav-link active" aria-current="page" href="./"><button
                                    class="btn btn-outline-light btn-sm">Logout</button></a>
                        </li>
                    </ul>
                </div>

                
            </div>
            <button class="navbar-toggler " style="border: 2px solid white;" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container my-4">
        
        <form class="d-flex flex-row justify-content-around" action="" method="POST">
            <div class="w-25">
                <label for="branch"><b>Program</b></label>
                <select class="form-select" aria-label="Default select program" name="select-program" id="select-program" onchange="populate(this.id,'select-branch')">
                    <option value="all"  selected>select</option>
                    <option value="B.Tech">B.Tech</option>
                    <option value="B.Sc">B.Sc.</option>
                    <option value="B.Pharma">B.Pharma</option>
                    <option value="B.Com">B.Com</option>
                    <option value="BCA">BCA</option>
                    <option value="BBA">BBA</option>
                    <option value="B.Vocational">B.Vocational</option>
                    <option value="Diploma">Diploma</option>
                    <option value="ITI">ITI</option>
                    <option value="M.Tech">M.Tech</option>
                    <option value="M.Sc">M.Sc</option>
                    <option value="MBA">MBA</option>
                    <option value="MCA">MCA</option>
                    <option value="PhD">PhD</option>
                    <option value="other">other</option>
                </select>
            </div>
            <div class="w-25">
                <label for="select-branch"><b>Branch</b></label>
                <select class="form-select" aria-label="Default select" id="select-branch" name="select-branch"></select>
            </div>
            <div >
                <label for="select-club"><b>Club</b></label>
                <select class="form-select " aria-label="Default select club" id="select-club" name="select-club" >
                    <option value="all" selected>all</option>
                </select>
            </div>
            <div class="w-25 flex-column">
                <p>submit to view list</p>
                <input type="submit" name="btn-list"/>
            </div>
        </form>
    </div>
    <?php
    if(isset($_POST['btn-list'])){
        $program=$_POST['select-program'];
        
        if(isset($_POST['select-branch'])){
            $branch= $_POST['select-branch'];
        }
        else{
            $branch="";
        }
        $club=$_POST['select-club'];
        if($program==""){

        }
        else{
            if($branch==""){
                if($club=="all"){
                    
                    $stmt= $con->prepare("select * from csarjoin where program='$program' ");
                    $stmt->execute();
                    $stmt_result = $stmt->get_result();
                }
                else{
                    
                    $stmt= $con->prepare("select * from csarjoin where program='$program' and  club='$club'");
                    $stmt->execute();
                    $stmt_result = $stmt->get_result();
                }
            }
            else{
                if($club=="all"){
                    
                    $stmt= $con->prepare("select * from csarjoin where program='$program' and  branch='$branch'");
                    $stmt->execute();
                    $stmt_result = $stmt->get_result();
                    
                }
                else{
                    
                    $stmt= $con->prepare("select * from csarjoin where program='$program' and branch='$branch' and club='$club'");
                    $stmt->execute();
                    $stmt_result = $stmt->get_result();
                }
            }
        }
        
        
    }
    ?>


    <div class="container">
    <table class="table table-bordered border-primary text-center">
        <form method="POST" id="attForm" >
    <thead>
    <tr class="table-dark">
      <th scope="col">Sl. No.</th>
      <th scope="col">Registration</th>
      <th scope="col">Name</th>
      <th scope="col">Program</th>
      <th scope="col">Branch</th>
      <th scope="col">Club</th>
      <th scope="col">
        <select class="form-select" aria-label="Default select example" id="select-hour" onchange="fill_hour();">
        <option selected>select hour</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        </select>
      </th>
      <th scope="col">Attendance</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    if(isset($_POST['btn-list'])){
    if($stmt_result->num_rows>0){
    for($i=1;$i<=  $stmt_result->num_rows;$i++){
        $data=$stmt_result->fetch_assoc();
    ?>
    <tr>
      <td id="slno"><?php echo $i; ?></td> 
      <td id="reg"><?php echo $data['reg']; ?></td>
      <td id="name"><?php echo $data['name']; ?></td>
      <td id="program"><?php echo $data['program']; ?></td>
      <td id="branch"><?php echo $data['branch']; ?></td>
      <td id="club"><?php echo $data['club']; ?></td>
      <td ><input class="hour_form w-50" type="number" name="hour_form[]" class="form-control" ></td>
      <td ><input class="form-check-input" name="reg[]" value="<?php echo $data['reg']; ?>" type="checkbox" id="checkboxNoLabel" aria-label="..."></td>
    </tr>
    <?php  }}} ?>

    <tr>
        <td colspan="6"></td>
        <td><input type="reset" name="btn2"/></td>
        <td><input type="submit" name="btn1"/></td>
    </tr>
</tbody>
</form>
</table>
    </div>
      </div>

<script>
    
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
             document.getElementById("attForm").reset();
            
        }
        function resetForm(){
            document.getElementById("attForm").reset();

        }
        function fill_hour(){
            var hour=document.getElementById('select-hour').value;
            var elements = document.getElementsByClassName('hour_form');
            for(var i=0; i < elements.length; i++){
                elements[i].value = hour;
            }
        }
        function submit_form() {
            if (!document.getElementById('email').value) {
                alert("All field are required..");

            }
            else {
                document.formu1.submit();
                document.formu1.reset();
                document.getElementById('id01').style.display = 'none';
            }

        }
        
</script>
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"-->
<!--integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">-->
<!--    </script>-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<?php 
include("modals.php");
?>
</body>

</html>





<?php
if(isset($_POST['btn1'])){
    if(isset($_POST['hour_form'] ) ){
        $hour_form=$_POST['hour_form'];
    }
    else{
        $hour_form=[];
    }
    if(isset($_POST['reg'])){
        $reg=$_POST['reg'];
    }
    else{
        $reg=[];
    }
    

    for($i=0;$i< count($reg) ;$i++){
        $stmt=$con->prepare("select * from csarjoin where reg= $reg[$i]");
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        $data= $stmt_result->fetch_assoc();
        $hour=$data['hour'];
        $t_hour=$hour+$hour_form[0];

        $stmt=$con->prepare("UPDATE csarjoin SET hour = '$t_hour' WHERE reg = $reg[$i]");
        $stmt->execute();

        date_default_timezone_set("Asia/Calcutta");

        $table_name = "att"."_".date("M_y");
        $colname=date("d_m_y");
        $value=$hour_form[0].".".$admin_name;
        $stmt= $con->prepare("select * from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME='$table_name' AND COLUMN_NAME='$colname' ;");
        $result = $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows>0){

            $stmt=$con->prepare("select * from `$table_name` where reg= $reg[$i]");
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            $data= $stmt_result->fetch_assoc();
            $prevalue=$data[$colname];
            if($prevalue==NULL){
                $new_value=$value;
            }
            else{
                $new_value = $prevalue."_".$value;
            }

            $stmt2=$con->prepare("UPDATE `$table_name` SET `$colname` = '$new_value' WHERE reg = $reg[$i];");
            $stmt2->execute();
        }
        else{
            $stmt1 = $con->prepare("ALTER TABLE `$table_name` ADD `$colname` varchar(255)");
            $stmt1->execute();
            $stmt2=$con->prepare("UPDATE `$table_name` SET `$colname` = '$value' WHERE reg = $reg[$i];");
            $stmt2->execute();
        }
    }
    // location.href = "test.php";
    echo '<script>
    alert("attendance given");
    window.history.back();
    </script>';

}



    ?>