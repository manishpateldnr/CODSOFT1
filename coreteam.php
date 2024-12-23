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
    <title>CSaR | Coreteam</title>
</head>

<style>
    .mainbox {
        height: 100vh;
        background-color: #d3e9f9;
    }

    .pdflist {
        height: 100%;
        width: 20%;
        background-color: #97cbf0;
        overflow: auto;
    }

    .obj {
        border-radius: 5px;
        box-shadow: 0 5px 20px #393838;
    }
</style>

<body  class="font">
       <?php include("navbar.php"); ?>
        <?php include("modals.php"); ?>
    <div class="mainbox d-flex flex-row ">
        <div class="pdflist">
            <div class="container text-center">
                <h2 >Core Team</h2>
            </div>
            <div class="accordion accordion-flush m-2 " id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            2023-2024
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="">Star Performer</a></li>
                                <li><a href="">Core Team</a></li>
                                <li><a href=""> Faculty Co-ordinators</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            2022-2023
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> 
                            <ul>
                                <li><a href="">Star Performer</a></li>
                                <li><a href="">Core Team</a></li>
                                <li><a href=""> Faculty Co-ordinators</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            2021-2022
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul>
                                <li><a href="">Star Performer</a></li>
                                <li><a href="">Core Team</a></li>
                                <li><a href=""> Faculty Co-ordinators</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container h-100 w-50">
            <h3>Core team of CSaR  CUTM Paralakhemundi</h3>
            <!--<object data="./pdfs/2ndList.pdf" type="application/pdf" width="100%" height="90%" class="obj">
            </object>-->
            <iframe src="/pdfs/2ndList.pdf" width="100%" height="90%" class="obj">
            </iframe>
        </div>
    </div>
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3 text-light" style="background-color: #A41034;">
            © 2023 Copyright:
            <a class="text-light" style="text-decoration: none;" href="./index.html">csrcutmpkd.com</a>
        </div>
        <!-- Copyright -->
        <!-- <h3>total wesite visitors</h3>
        <a href="https://www.freecounterstat.com" title="page hit counter"><img src="https://counter4.optistats.ovh/private/freecounterstat.php?c=81xnf4s9gcqdpgcn9k8slqyyqt7alrm5" border="0" title="page hit counter" alt="page hit counter"></a> -->

    </footer>
        <div class="modal fade" id="id01" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Join CSaR @ Centurion University</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="modal-content" action="form.php" method="post" name="formu1">
                        <div class="container">
                            <p>Please fill this form to Join CSaR Clubs.</p>
                            <label for="name"><b>Student Name</b></label>
                            <input type="text" placeholder="Full Name" name="name" id="name" required>

                            <label for="reg"><b>Registration No.</b></label>
                            <input type="text" placeholder="Registration No." name="reg" id="reg">

                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" id="email" required>

                            <label for="phone"><b>Mobile No.</b></label>
                            <input type="text" placeholder="Enter mobile No." name="phone" id="phone" required>

                            <label for="program"><b>Program</b></label>
                            <select class="form-select" aria-label="Default select example" name="program" id="program"
                                onchange="populate(this.id,'branch')" required>
                                <option selected>---</option>
                                <option value="B.Tech">B.Tech</option>
                                <option value="B.Sc">B.SC.</option>
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

                            <label for="branch"><b>Branch</b></label>
                            <select class="form-select" aria-label="Default select example" id="branch"
                                name="branch"></select>

                            <label for="club"><b>CSR Club Name</b></label>
                            <input type="text" placeholder="club" name="club" id="club" required>

                            <label for="other"><b>Description</b></label>
                            <input type="text" placeholder="write about your interest" name="other" id="other">

                            <label>
                                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
                                Remember me
                            </label>

                            <p>By creating an account you agree to our <a href="#"
                                    style="color:dodgerblue; text-decoration: none;">Terms & Privacy</a>.
                            </p>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" onclick="submit_form();" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script>

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

    function populate(s1, s2) {
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";
        if (s1.value == "B.Tech") {
            var optionArray = ["|", "CSE|CSE", "ECE|ECE", "EEE|EEE", "Mechanical|Mechanical", "Civil|Civil", "Dairy tech|Dairy tech", "Agri.|Agri.", "Phyto|Phyto", "Mining|Mining", "Aerospace|Aerospace", "Bio-tech|Bio-tech", "other|other"];
        } else if (s1.value == "B.Sc") {
            var optionArray = ["|", "B.sc.(hons.) Agriculture|B.sc.(hons.) Agriculture", "B.Sc. Fishery|B.Sc. Fishery", "Applied Science|Applied Science", "Paramedical|Paramedical", "Forensic|Forensic", "other|other"];
        } else if (s1.value == "B.Pharma") {
            var optionArray = ["|", "B.Pharma|B.Pharma", "other|other"];
        } else if (s1.value == "B.Com") {
            var optionArray = ["|", "B.Com|B.Com", "other|other"];
        } else if (s1.value == "BCA") {
            var optionArray = ["|", "BCA|BCA", "other|other"];
        } else if (s1.value == "BBA") {
            var optionArray = ["|", "BBA|BBA", "other|other"];
        } else if (s1.value == "B.Vocational") {
            var optionArray = ["|", "B.Vocational|B.Vocational", "other|other"];
        } else if (s1.value == "Diploma") {
            var optionArray = ["|", "CSE|CSE", "ECE|ECE", "EE|EE", "Civil|Civil", "Mechanical|Mechanical", "Automobile|Automobile", "Mining|Mining", "D. pharma|D. pharma", "Paramedical|Paramedical", "other|other"];
        } else if (s1.value == "ITI") {
            var optionArray = ["|", "Automobile|Automobile", "|Electrical|Electrical", "Mechanical|Mechanical", "other|other"];
        } else if (s1.value == "M.Tech") {
            var optionArray = ["|", "PSCE|PSCE", "SE|SE", "TE|TE", "other|other"];
        } else if (s1.value == "M.Sc") {
            var optionArray = ["|", "Paramedical|Paramedical", "Applied science|Applied science", "Agriculture|Agriculture", "Forensic|Forensic", "Cyber security|Cyber security", "other|other"];
        } else if (s1.value == "MBA") {
            var optionArray = ["|", "MBA|MBA", "other|other"];
        } else if (s1.value == "MCA") {
            var optionArray = ["|", "MCA|MCA", "other|other"];
        } else if (s1.value == "PhD") {
            var optionArray = ["|", "PhD|PhD", "other|other"];
        }


        for (var option in optionArray) {
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML = pair[1];
            s2.options.add(newOption);
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</html>