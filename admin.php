<?php
    include("connection.php");
    // Collect post variables
    $admin_name = $_POST['username'];
    $pass = $_POST['password'];


    // echo $admin_name;
    // echo $pass;


    // Create a database connection
    $con = new mysqli($server, $username, $password,$dbname);


    // Check for connection success
    if($con->connect_error){
        die("connection to this database failed due to" . $con->connect_error);
        echo "not connected.";
    }
    else{
        $stmt=$con->prepare("select * from admin where username= ?");
        $stmt->bind_param("s",$admin_name);
        $stmt->execute();
        $stmt_result= $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            // $pass2 = $data['password'];
            // $email2= $data['email'];
            //echo "    db pass =$pass2 emil= $email2";
            if($data['password'] == $pass){
                session_start();
                $_SESSION['loged']= true;
                $_SESSION['admin-name']=$admin_name;
                header("Location: ./adminmain.php");
                exit;
            }
            else{
                echo '<script type="text/JavaScript"> 
                    alert("Username or password wrong");
                     window.history.back();
                </script>';
            }
        }
        else{
            echo '<script type="text/JavaScript"> 
                    alert("Admin Not found");
                </script>';
        }
        

    }
    ?>