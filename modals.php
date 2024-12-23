    <!--Registration form modal-->
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
                            <div class="form-group my-2">
                            <label for="name"><b>Student Name</b></label>
                            <input type="text" placeholder="Full Name" name="name" id="name" class="w-100 p-1" required>
                            </div>
                            <div class="form-group my-2">
                            <label for="reg"><b>Registration No.</b></label>
                            <input type="text"  name="reg" id="reg" class="w-100 p-1">
                            </div>
                            <div class="form-group my-2">
                            <label for="email"><b>Email</b></label>
                            <input type="text"  name="email" id="email" class="w-100 p-1" required>
                            </div>
                            <div class="form-group my-2">
                            <label for="phone"><b>Mobile No.</b></label>
                            <input type="text"  name="phone" id="phone" class="w-100 p-1" required>
                            </div>
                            <div class="form-group my-2">
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
                            </div>
                            <div class="form-group my-2">
                            <label for="branch"><b>Branch</b></label>
                            <select class="form-select" aria-label="Default select example" id="branch"
                                name="branch"></select>
                            </div>
                            <div class="form-group my-2">
                            <label for="club"><b>CSR Club Name</b></label>
                            <input type="text" placeholder="clubs" name="club" id="club" class="w-100 p-1" required>
                            </div>
                            <div class="form-group my-2">
                            <label for="other"><b>Description</b></label>
                            <input type="text" placeholder="write about your interest" name="other" class="w-100 p-1" id="other">
                            </div>
                            <div class="form-group my-2">
                            <label>
                                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
                                Remember me
                            </label>
                            </div>
                            <p>By creating an account you agree to our <a href="#"
                                    style="color:dodgerblue; text-decoration: none;">Terms & Privacy</a>.
                            </p>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" onclick="submit_form();" class="btn btn-primary">SignUp</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    
    <!--attendence filter-->
    <div class="modal fade" id="id05" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container my-4">
                    <form class="d-flex flex-column justify-content-around" action="attendance.php" method="POST">
                        <div class="w-100">
                            <label for="branch"><b>Program</b></label>
                            <select class="form-select" aria-label="Default select program" name="select-program"
                                id="select-program" onchange="populate(this.id,'select-branch')">
                                <option value="all" selected>all</option>
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
                        <div class="w-100">
                            <label for="select-branch"><b>Branch</b></label>
                            <select class="form-select" aria-label="Default select" id="select-branch"
                                name="select-branch"></select>
                        </div>
                        <div>
                            <label for="select-club"><b>Club</b></label>
                            <select class="form-select " aria-label="Default select club" id="select-club"
                                name="select-club" disabled>
                                <option value="all" selected>all</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                        </div>
                        <div class="w-100 flex-column">
                            <p>submit to view list</p>
                            <input type="submit" name="btn-list" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--User login modal-->
<div class="modal fade" id="login-modal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #A41034;">
                <div class="card-header text-center  text-white" >
                    <h2>Student Login</h2>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="login-form" action="./login.php" method="post" autocomplete="off">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email5" class="form-control" name="email" required />
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" id="password5" class="form-control" name="password" required />
                    </div>
                    <br>
                    <button type="submit" class="btn w-100 text-white" style="background-color: #A41034;">Login</button>
                    <a href="./userpass.php" style="text-decoration: none;"><small>Forget password</small></a>
                </form>

                <div class="card-footer text-end">
                        <button class="btn btn-sm w-25 text-white" style="background-color: #A41034;" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#admin-login-modal">Admin</button>
                    <small>&copy; Centurion University</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!--admin modal-->
<div class="modal fade" id="admin-login-modal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #A41034;">
                <div class="card-header text-center  text-white" >
                    <h2>ADMIN LOGIN </h2>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="admin_form"  action="admin.php" method="post" autocomplete="off">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" class="form-control" name="username" required />
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" id="password" class="form-control" name="password" required />
                    </div>
                    <br>
                    <button name="admin-btn" type="submit" class="btn w-100 text-white" onclick="admin_login();"
                        style="background-color: #A41034;">Login</button>
                    <a href="pupdate.php" style="text-decoration: none;"><small>Forget password</small></a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Image upload modal -->
<div class="modal fade" id="image-upload-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Image</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="adminmain.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="event-name">Event Name</label>
                    <input type="text" id="event-name" class="form-control" name="event-name" required />
                </div><br>
                <div class="form-group">
                    <label for="event-date">Event date</label>
                    <input type="date" name="event-date" id="event-date">
                </div><br>

                <div class="form-group">
                    <label for="file[]">Select Images</label>
                    <input type="file"  name="files[]" multiple="" data-max_length="40"  multiple>
                    <p style="font-size:12px;color:#7557fa;"><i> size less than 3mb(jpg,jpeg,png)</i></p>
                </div><br>
                <div class="form-group ">
                    <input class="btn btn-sm bg-dark text-white" type="reset"/>
                    <input  type="submit" name="submit" value="UPLOAD" class="btn btn-sm bg-dark text-white"/>
                </div>
            </form>
      </div>
      <div class="modal-footer">
            <small>&copy; Centurion University</small>
      </div>

    </div>
  </div>
</div>