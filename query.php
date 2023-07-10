<?php
if ($_SERVER["REQUEST_METHOD"] === "POST")
 {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $specialization = $_POST["specialization"];
  $contact = $_POST["contact"];
  $birthdate = $_POST["birthdate"];
  $location = $_POST["location"];
  $gender = $_POST["gender"];
  $education = $_POST["education"];

  $image = "profile".rand(10,500).".".end(explode(".",$_FILES["image"]["name"]));
  
  $img_source_path = $_FILES["image"]["tmp_name"];
  $img_dest_path = "C:/wamp64/www/Assignment-Portfolio/".$image;
  $upload = move_uploaded_file($img_source_path,$img_dest_path);
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Resume -
      <?php echo strtoupper($name);?>
    </title>
  </head>

  <body>
    <div class="main-body">
      <div class="border">
        <div class="r1">
          <div class="image"><img width="150px" src="<?php echo $image;?>" alt="Profile image"></div>
          <div class="name">
            <h1>
              <?php echo strtoupper($name);?>
            </h1>
            <center><b>Specialization: </b>
              <?php echo strtoupper($specialization);?>
            </center>
          </div>
        </div>
        <div class="r2">
          <h2>Contact Details :-</h2>
          <b>Mobile Number: </b>
          <?php echo strtoupper($contact);?> <br><br>
          <b>Email: </b>
          <?php echo $email;?>
        </div>
        <div class="r3">
          <h2>Personal Details :-</h2>
          <b>Location:</b>
          <?php echo strtoupper($location);?><br><br>
          <b>Date of birth:</b>
          <?php echo $birthdate;?><br><br>
          <b>Gender:</b>
          <?php echo strtoupper($gender);?>
        </div>
        <div class="r4">
          <h2>Educational Details :-</h2>
          <b>Highest education:</b>
          <?php if($education=="ug"){echo "UNDER GRADUATION DEGREE";}else{echo "POST GRADUATION DEGREE";}?>
        </div>
      </div>
    </div><br><br><br>
  </body>

</html>