
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./form.css">
    <link rel="stylesheet" href="./dev.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>CSaR | About</title>
</head>
<style>
    .card-campus:hover{
        box-shadow: 0 5px 15px #393838;
    }

</style>
<body class="font" style="background:#d3e9f9;">
    <?php include("navbar.php"); ?>
    <div class="container" style="background-color:#c9e3f6;">
        <div class="about" id="about">
        <h3 style="text-align: center; background-color: #97cbf0; padding: 12px; margin-top: 20px;">
                            <b>----About----</b>
                        </h3>
            <div class="accordion-body">
                <ul>
                    <li>
                        <p>The journey of <strong> Centurion University of Technology and Management
                                (CUTM)</strong> began in
                            the year <strong>2005</strong>
                            by a group of ambitious academics with aspirations to provide high quality education
                            both nationally
                            and internationally. </p>
                    </li>
                    <li>
                        <p>The first step in this direction was to take over an ailing engineering Institute,
                            the Jagannath Institute for Technology and Management (JITM) in one of the most
                            challenging tribal
                            districts of Odisha and
                            one which was considered to be a left-wing extremist affected area. Subsequently,
                            JITM was transformed
                            into Centurion University
                            of Technology and Management in August 2010, through an act of Odisha Legislative
                            Assembly</p>
                    </li>
                    <li>
                        <p>It became the First Multi-Sector State Private University in Odisha.</p>
                    </li>
                    <li>
                        <p>The core objective of CUTM is 'shaping lives and empower communities', and creating
                            wealth and
                            livelihood opportunities at the bottom of the pyramid.</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="campuses" id="campuses">
        <h3 style="text-align: center; background-color: #97cbf0; padding: 12px; margin-top: 20px;">
                            <b>----Centurion University Campuses----</b>
                        </h3>
            <div class="campusBox d-flex flex-row flex-wrap mx-3 justify-content-center">
                <div class="card m-2 card-campus" style="width: 15rem;" data-aos="flip-left">
                    <img src="./images/pkd.jpeg" class="card-img-top p-2" alt="image" style="height: 230px;">
                    <div class="card-body">
                        <h4>Paralakhemundi</h4>
                        <p class="card-text">
                            Village Alluri Nagar, R Sitapur, Via- Uppalada, Paralakhemundi.</p>
                    </div>
                </div>
                <div class="card m-2 card-campus" style="width: 15rem;" data-aos="flip-left">
                    <img src="./images/bbs.jpeg" class="card-img-top p-2" alt="image" style="height: 230px;">
                    <div class="card-body">
                        <h4>Bhubneshwar</h4>
                        <p class="card-text">
                            Ramchandrapur, P.O. – Jatni, Bhubaneswar, Khurda, Odisha, India – 752050</p>
                    </div>
                </div>
                <div class="card m-2 card-campus" style="width: 15rem;" data-aos="flip-left">
                    <img src="./images/raygada.jpg" class="card-img-top p-2" alt="image" style="height: 230px;">
                    <div class="card-body">
                        <h4>Rayagada</h4>
                        <p class="card-text">IDCO Industrial Area, Pitamahal, Rayagada, Odisha- 765002</p>
                    </div>
                </div>
                <div class="card m-2 card-campus" style="width: 15rem;" data-aos="flip-left">
                    <img src="./images/balangir.jpg" class="card-img-top  p-2" alt="image" style="height: 230px;">
                    <div class="card-body">
                        <h4>Balangir</h4>
                        <p class="card-text">
                            Behind BSNL office, IDCO land, Rajib Nagar, Balangir -767001</p>
                    </div>
                </div>
                <div class="card m-2 card-campus" style="width: 15rem;" data-aos="flip-left">
                    <img src="./images/balasore.jpeg" class="card-img-top p-2" alt="image" style="height: 230px;">
                    <div class="card-body">
                        <h4>Balasore</h4>
                        <p class="card-text">
                            At- Paikasta Po- Gopalpur Block- Bahanaga - 756044</p>
                    </div>
                </div>
                <div class="card m-2 card-campus" style="width: 15rem;" data-aos="flip-left">
                    <img src="./images/bbs.jpeg" class="card-img-top p-2" alt="image" style="height: 230px;">
                    <div class="card-body">
                        <h4>Chatrapur</h4>
                        <p class="card-text">
                            Industrial Estate , Kaliabali Chhaka, CHATRAPUR Ganjam - 761045</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="developers" id="developers">
        <h3 style="text-align: center; background-color: #97cbf0; padding: 12px; margin-top: 20px;">
                            <b>----Project Developers----</b>
                        </h3>
            <div class="DevBox d-flex flex-row flex-wrap mx-3 justify-content-center">
                <!-- <div class="card m-4" style="width: 15rem;">
                                <img src="./images/vicky.jpg" class="card-img-top" alt="image" style="border-radius:30%; box-shadow:1px 1px 4px 4px teal;">
                                <div class="card-body">
                                    <p class="card-text">
                                    <h4>Vicky Kumar</h4>
                                    B. Tech In Computer Science And Engineering
                                    </p>
                                </div>
                            </div> -->
                <div class="profile-card" data-aos="flip-left">
                    <div class="image">
                        <img src="./images/vicky.png" alt="" class="profile-pic">
                    </div>
                    <div class="data">
                        <h2>Vicky Kumar</h2>
                        <span>B-Tech in CSE</span>
                        <span>Full Stack Web Developer</span>
                    </div>

                    <div class="buttons">
                        <a href="https://www.linkedin.com/in/vicky-cse03" class="btn" target="_blank">Linkedin</a>
                        <a href="https://github.com/vicky0004" class="btn" target="_blank">GitHub</a>
                    </div>
                </div>
                <div class="profile-card" data-aos="flip-left">
                    <div class="image">
                        <img src="./images/manish1.jpg" alt="" class="profile-pic">
                    </div>
                    <div class="data">
                        <h2>Manish Kumar</h2>
                        <span>B-Tech in CSE</span>
                        <span>Full Stack Web Developer & Designer</span>
                    </div>

                    <div class="buttons">
                        <a href="https://www.linkedin.com/in/manish-kumar-patel-169b2a269/" class="btn" target="_blank">Linkedin</a>
                        <a href="https://github.com/manishpateldnr" class="btn" target="_blank">GitHub</a>
                    </div>
                </div>
                <div class="profile-card" data-aos="flip-left">
                    <div class="image">
                        <img src="./images/shubham.jpg" alt="" class="profile-pic">
                    </div>
                    <div class="data">
                        <h2>Shubham Kumar</h2>
                        <span>B-Tech in CSE</span>
                        <span>Web Developer & Designer</span>
                    </div>

                    <div class="buttons">
                        <a href="https://www.linkedin.com/in/shubham-kumar-b69b23226/" class="btn" target="_blank">Linkedin</a>
                        <a href="https://github.com/shubham7372" class="btn" target="_blank">GitHub</a>
                    </div>
                </div>
                <div class="profile-card" data-aos="flip-left">
                    <div class="image">
                        <img src="./images/shivam.jpg" alt="" class="profile-pic">
                    </div>
                    <div class="data">
                        <h2>Shivam Misra</h2>
                        <span>B-Tech in CSE</span>
                        <span>Web Developer & Designer</span>
                    </div>

                    <div class="buttons">
                        <a href="https://github.com/shivamkumar628" class="btn" target="_blank">Linkedin</a>
                        <a href="https://www.linkedin.com/in/shivam-kumar-mishra-615109262/" class="btn" target="_blank">GitHub</a>
                    </div>
                </div>
                <div class="profile-card" data-aos="flip-left">
                    <div class="image">
                        <img src="./images/guddu.jpg" alt="" class="profile-pic">
                    </div>
                    <div class="data">
                        <h2>Guddu Kumar</h2>
                        <span>B-Tech in CSE</span>
                        <span>Web Developer & Designer</span>
                    </div>

                    <div class="buttons">
                        <a href="https://www.linkedin.com/in/guddu-kumar-359b27269/" class="btn" target="_blank">Linkedin</a>
                        <a href="https://github.com/Gudddukumar" class="btn" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>
            <h3 style="text-align: center; background-color: #97cbf0; padding: 12px; margin-top: 20px;">
                            <b>----Project Mentors----</b>
                        </h3>
                        <div class="DevBox d-flex flex-row flex-wrap mx-3 justify-content-center">
                            <div class="profile-card" data-aos="flip-left">
                                <div class="image">
                                    <img src="./images/dean.jpg" alt="" class="profile-pic">
                                </div>
                                <div class="data">
                                    <h3>Dr. Ashish Ranjan Dash</h3>
                                    <span>Dean, SoET</span>
                                    <span class="text-center">CUTM , Paralakhemundi</span>
                                </div>
                                <div class="buttons">
                                    <a href="mailto: ashish.dash@cutm.ac.in" class="btn" target="_blank">Mail</a>
                                    <a href="https://wa.me/+919437268679" class="btn" target="_blank">WhatsApp</a>
                                </div>
                            </div>
                            <div class="profile-card" data-aos="flip-left">
                                <div class="image">
                                    <img src="./images/atanu.jpg" alt="" class="profile-pic">
                                </div>
                                <div class="data">
                                    <h2>Dr. Atanu Deb</h2>
                                    <span>Dean, Students' Affair</span>
                                    <span class="text-center">CUTM , Paralakhemundi</span>
                                </div>

                                <div class="buttons">
                                    <a href="mailto: atanudeb@cutm.ac.in" class="btn" target="_blank">Mail</a>
                                    <a href="https://wa.me/+918617558791" class="btn" target="_blank">WhatsApp</a>
                                </div>
                            </div>
                        </div>
        </div>
        <div class="terms" id="terms">
            <div class="bigbox">
                <div class="box2">
                    <div class="boxhead">
                        <div class="card bg-dark text-white">
                            <img src="./images/n.jpg" class="card-img" alt="image" width="900" height="200">
                            <div class="card-img-overlay align-center">
                                <h1 class="card-title text-center">Terms & Condition</h1>
                            </div>
                        </div>
                    </div>
                    
                    <div class="box3" >
                        <div class="m-2">
                            <h3>Indemnification</h3>
                            <p>You agree to indemnify, defend and hold us and our partners, attorneys, staff
                                and
                                affiliates (collectively, “Affiliated Parties”) harmless from any liability,
                                loss, claim and expense, including reasonable attorney’s fees, related to
                                your
                                violation of this Agreement or use of the Site.</p>
                            <h3>Non-Transferable</h3>
                            <p>Your right to use the Site is not transferable. Any password or right given
                                to
                                you to obtain information or documents is not transferable.</p>
                            <h3>Disclaimer</h3>
                            <p>The information and services may contain bugs, errors, problems or other
                                limitations. We and our affiliated parties have no liability whatsoever for
                                your
                                use of any information or service. In particular, but not as a limitation
                                thereof, we and our affiliated parties are not liable for any indirect,
                                special,
                                incidental or consequential damages (including damages for loss of business,
                                loss of profits, litigation, or the like), whether based on breach of
                                contract,
                                breach of warranty, tort (including negligence), product liability or
                                otherwise,
                                even if advised of the possibility of such damages. The negation of damages
                                set
                                forth above are fundamental elements of the basis of the bargain between us
                                and
                                you. This site and the information would not be provided without such
                                limitations. No advice or information, whether oral or written, obtained by
                                you
                                from us through the site shall create any warranty, representation or
                                guarantee
                                not expressly stated in this agreement.</p>
                            <h3>Use of Information</h3>
                            <p>We reserve the right, and you authorize us, to the use and assignment of all
                                information regarding Site uses by you and all information provided by you
                                in
                                any manner consistent with our Privacy Policy.</p>
                            <h3>Privacy Policy</h3>
                            <p>Our Privacy Policy, as it may change from time to time, is a part of this
                                Agreement.</p>
                            <h3>Links to Other Web Sites</h3>
                            <p>The Site contains links to other Web sites. We are not responsible for the
                                content, accuracy or opinions express in such Web sites, and such Web sites
                                are
                                not investigated, monitored or checked for accuracy or completeness by us.
                                Inclusion of any linked Web site on our Site does not imply approval or
                                endorsement of the linked Web site by us. If you decide to leave our Site
                                and
                                access these third-party sites, you do so at your own risk.</p>
                            <h3>Information and Press Releases</h3>
                            <p>The Site may contain information and press releases about us. While this
                                information was believed to be accurate as of the date prepared, we disclaim
                                any
                                duty or obligation to update this information or any press releases.
                                Information
                                about companies other than ours contained in the press release or otherwise,
                                should not be relied upon as being provided or endorsed by us.</p>
                            <h4>.........................</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <?php include("modals.php"); ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>  AOS.init({duration: 2000,})  </script>
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
    



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<html>