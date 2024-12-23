<?php 
    include "connection.php";
    
    $con = new mysqli($server, $username, $password,$dbname);

    if($con->connect_error){
        die("connection to this database failed due to" . $con->connect_error);
        echo "not connected.";
    }

    date_default_timezone_set("asia/kolkata");
    $current_year = date("Y");
    // Include the database configuration file
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "links.php"; ?>
  <title>CSaR | Gallery</title>
</head>

<style>
  .gallery img {
    background-color: #ffffff;
    padding: 5px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    cursor: pointer;
  }
</style>

<body class="font" style="background:#d3e9f9;">
  <?php include("navbar.php"); ?>
  <?php include("modals.php"); ?>
  <div class="container" style="background-color:#c9e3f6;">

    <?php
            for($year_count=0;$year_count<4;$year_count++){
                $table_name = "images"."_".$current_year;
                $stmt= $con->prepare("SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'csar' AND  TABLE_NAME = '$table_name';");
                $stmt->execute();
                $stmt_result = $stmt->get_result();

                if($stmt_result->num_rows<1){
                    $stmt= $con->prepare("CREATE TABLE `$table_name` (`id` INT(11) NOT NULL AUTO_INCREMENT , `file_name` VARCHAR(255) NOT NULL , `event_name` VARCHAR(255) NOT NULL , `event_date` VARCHAR(255) NOT NULL , `uploaded_on` DATETIME NOT NULL , `status` ENUM('1','0') NOT NULL DEFAULT '1' , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
                    $result=$stmt->execute();
                }
                $query = $con->query("SELECT DISTINCT event_name,event_date FROM $table_name");
            ?>
    <div class="campuses" id="campuses">
      <h3 style="text-align: center; background-color: #97cbf0; padding: 12px; margin-top: 20px;">
        <b>----Image Galllery
          <?php echo " $current_year" ?>----
        </b>
      </h3>

      <div class="campusBox d-flex flex-row flex-wrap mx-3 justify-content-center">
        <?php
                        for($i=1;$i<= $query->num_rows;$i++){
                        $data=$query->fetch_assoc();
                        $event_name=$data['event_name'];
                        $event_date=$data['event_date'];
                        $query2 = $con->query("SELECT file_name FROM $table_name where event_name='$event_name' and event_date='$event_date';");
                        $data2=$query2->fetch_assoc();
                        $img_src="uploads/".$data2['file_name'];
                    ?>

        <div class="card m-2 card-campus"
          style="cursor: pointer;width: 15rem; background-image: url('./images/bgGradient.jpg');" data-bs-toggle="modal"
          data-bs-target="<?php echo "#gallery-full-page".$event_name.$event_date; ?>">
          <img src="<?php echo $img_src; ?>" alt="<?php echo $img_src; ?>" class="card-img-top p-2" alt="image"
            style="height: 230px;">
          <div class="card-body">
            <h4><strong>
                <?php echo $event_name; ?>
              </strong></h4>
            <p class="card-text">
              <?php echo $event_date; ?>
            </p>
          </div>
        </div>
        <!-- image gallery modal -->
        <div class="modal top fade" id="<?php echo "gallery-full-page".$event_name.$event_date; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
          aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
          <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
              <div class="modal-header" style="text-align: center; background-color: #97cbf0;">
                <button type="button" class="btn btn-secondary mx-3" data-bs-dismiss="modal">
                 <i class="fa fa-solid fa-arrow-left"></i>
                </button>
                <h5 class="modal-title" id="exampleModalLabel"> Image Gallery <?php echo " $event_name-$current_year  "; ?> </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="background-color: #d3e9f9;">
                <section class="gallery min-vh-100">
                  <div class="container-lg">
                    <div class="row">
                          <?php
                          $query3 = $con->query("SELECT * FROM $table_name where event_name='$event_name' and event_date='$event_date';");
                          for($j=1;$j<= $query3->num_rows;$j++){
                            $data3=$query3->fetch_assoc();
                            $img_src3="uploads/".$data3['file_name'];
                        ?>
                      <div class="col">
                        <img src="<?php echo $img_src3; ?>" class="gallery-item m-1" alt="gallery" height=200px width=200px >
                      </div>
                            <?php } ?>
                    </div>
                  </div>
                </section>
              </div>
              <div class="modal-footer" style=" background-color: #97cbf0;">
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php $current_year--;   } ?>
  </div>




  <!-- Modal -->
  <div class="modal" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="img/1.jpg" class="modal-img" alt="modal img" style="width: -webkit-fill-available;">
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>
<script>
  document.addEventListener("click", function (e) {
    if (e.target.classList.contains("gallery-item")) {
      const src = e.target.getAttribute("src");
      document.querySelector(".modal-img").src = src;
      const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
      myModal.show();
    }
  })
</script>

</html>