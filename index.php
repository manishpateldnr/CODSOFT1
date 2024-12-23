<?php
    session_start();
    session_reset();
    session_destroy();

    include("connection.php");

    // Create a database connection
    $con = new mysqli($server, $username, $password,$dbname);

    if($con->connect_error){
        die("connection to this database failed due to" . $con->connect_error);
        echo "not connected.";
    }
    else{
        $stmt=$con->prepare("select * from event where sno = '1'");
        $stmt->execute();
        $stmt_result= $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data= $stmt_result->fetch_assoc();
            $date=$data['date'];
            $msg=$data['msg'];
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./form.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>CSaR | CUTMpkd Home</title>
</head>



<body class="font">
    <?php include "modals.php"; ?>
    <?php include "navbar.php"; ?>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/cutm1.jpg" class="d-block w-100 " alt="..."  >
                
            </div>
            <div class="carousel-item">
                <img src="./images/cutm21.jpg" class="d-block w-100" alt="..." >
                
            </div>
            <div class="carousel-item">
                <img src="./images/cutm31.jpg" class="d-block w-100" alt="...">
                
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="cont" >
        <div class="ticker">
            <div class="title">
                <h5>Upcoming Event</h5>
            </div>
            <div class="news" >
                <marquee class="news-content">
                    <p><b><?php echo "$date"; ?></b><?php echo "  $msg"; ?> coming soon....</p>
                </marquee>
            </div>
        </div>
    </div>




    <div class="cards row-cols-1  p-5 justify-content-around">
        <div class="col" style="width: 20rem;" data-aos="flip-left">
            <div class="card h-100 cards-item">
                <img src="./images/popularityOfBharatnatyam.jpg" class="card-img-top p-1" alt="..."
                    style="height: 250px;">
                <div class="card-body">
                    <h5 class="card-title"><b> Culture</b></h5>
                    <p class="card-text ">Cultural events are events designed for entertainment and enjoyment of a more
                        or less wide audience. They are events of some importance related to some branch of art, culture
                        or values
                    </p>
                    <a href="./clubs.html" class="btn btn-primary">read more</a>
                </div>
            </div>
        </div>
        <div class="col " style="width: 20rem;" data-aos="flip-left">
            <div class="card h-100 cards-item">
                <img src="./images/sport.jpg" class="card-img-top p-1" alt="..." style="height: 250px;">
                <div class="card-body">
                    <h5 class="card-title"><b> Sport</b></h5>
                    <p class="card-text ">Sport refers to any competing regular exercise or game that tries to utilize,
                        preserve, or enhance physical fitness.Sports serve society by providing vivid examples of
                        excellence and unity.
                    </p>
                    <a href="./clubs.html" class="btn btn-primary">read more</a>
                </div>
            </div>
        </div>
        <div class="col" style="width: 20rem;" data-aos="flip-left">
            <div class="card h-100 cards-item">
                <img src="./images/social.jpg" class="card-img-top p-1" alt="..." style="height: 250px;">
                <div class="card-body">
                    <h5 class="card-title"><b>Responsibility</b></h5>
                    <p class="card-text">Social responsibility is essential because it creates a sense of responsibility
                        to the environment. The environment is the surrounding where we live and survive.we whould
                        protect.
                    </p>
                    <a href="./clubs.html" class="btn btn-primary">read more</a>
                </div>
            </div>
        </div>
    </div>



    <h3 style="text-align: center; background-color: #97cbf0; padding: 12px; margin: 0px;"><b>----CSaR
            Cordinators----</b></h3>


    <div class="cards row-cols-1 row-cols-md-3 p-5 justify-content-around">
        <div class="cards-item card mb-3" style="max-width: 540px;" data-aos="flip-left">
            <div class="row g-0 ">
                <div class="col-md-4">
                    <img src="./images/sir.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><b>Name: </b></h5>
                        <p class="card-text">Destination: <br>
                            CUTM,Paralakhemindi<br>
                            Email:</p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="cards-item card mb-3" style="max-width: 540px;" data-aos="flip-left">
            <div class="row g-0" >
                <div class="col-md-4">
                    <img src="./images/sir.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><b>Name: </b></h5>
                        <p class="card-text">Destination: <br>
                            CUTM,Paralakhemindi<br>
                            Email:</p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <?php include("footer.php");?>
</body>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>  AOS.init({duration: 2000,})  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
    </script>

</html>