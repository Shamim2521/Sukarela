<?php
include("config.php");

$message = "";

if(isset($_POST['submit-btn'])){
  $sql = "SELECT id FROM registration";
  $result = $mysqli->query($sql);
  while ( $row = $result->fetch_assoc()) {
    $id = $row["id"]+1;  
  }

  $name = $_FILES['file']['name'];

  $e_name = filter_var($_POST['e-name'], FILTER_SANITIZE_STRING);
 
  $date = isset($_POST['date'])?strtotime($_POST['date']):'';
  $date = date("Y-m-d",$date);

  $time = isset($_POST['time'])?strtotime($_POST['time']):'';
  $time = date("h:i:a", $time);

  $c_name = filter_var($_POST['c-name'], FILTER_SANITIZE_STRING) ;

  
  $target_dir = "uploads/";

  
  $n_volunteer = filter_var($_POST['n-volunteer'], FILTER_SANITIZE_STRING);
  $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

    
  $statement = $mysqli->prepare("INSERT INTO registration  VALUES(?, ?, ?, ?, ?, ?, ?, ?)"); 

  $statement->bind_param('ssssssss', $e_name, $date, $time, $c_name, $name, $n_volunteer, $description, $id);

  if($statement->execute()){
    
    $message = "<div id='confirmation'> <b>Your event '". $e_name ."' has been registered<br><br>Event Date: " . $date . "<br>Event Time: " . $time . "<br>Your Club Name: " . $c_name . "<br>No of volunteers needed: " . $n_volunteer . "</b></div>";

    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

  }else{
    print $mysqli->error; //show mysql error if any
  }

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sukarela</title>
	
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'header.php';?>

<div id="about">
    <h1>Promote Your Event!</h1>

    <p>
      Hi, Do you want to promote ur event? Wanna get some people for your event? Wanna get some help?
      Well this is the right place for you to .How many Volunteers do you need?Just give a call here.We are here for everything
      How worthful is your event?ahys agjf assjd and abvah loiuir nnjba hasbka ajsbavs and is you ask where could you do within menu
      and also to the nation worrld wilde.Other than that, this is the best website in order to promote our event to our clients.Not only our clientbut
      also to the nationwide and people.
    </p>
    <div id="regBtn">
    <button type="button" id="registerBtn" onclick="openForm()">Register</button>
    </div>
    <?php echo $message ; ?>

        <div class="form-popup" id="myForm">
          <form action="" class="form-container" method="post" enctype="multipart/form-data">
            <h2 style="text-align: center; padding: 20px 0px;">Registration of the Event</h2>

            <label for="e-name"><b>Event Name</b></label>
            <input type="text" placeholder="Event Name.." name="e-name" required>

            <label for="date"><b>Date</b></label>
            <input type="date" id="date" name="date" required><br>

            <label for="time"><b>Time</b></label>
            <input type="time" id="time" name="time" required><br>

            <label for="c-name"><b>Club's Name</b></label>
            <input type="text"  name="c-name" required>

            <label for="e-poster"><b>Event Poster</b></label>
            <input type="file" id="e-poster" name="file" required/><br>

            <label for="n-volunteer"><b>No. of Volunteer Needed</b></label>
            <input type="number" id="n-volunteer" name="n-volunteer" required><br>

            <label for="description"><b>Event Description</b></label>
            <input type="text" id="description" name="description" required>

            <button type="submit" class="btn" name="submit-btn" >Submit</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </form>
        </div>
        
          

        </div>
        <div id='item'> 
            <div class='do-items'>
            <?php 
            $sql = "SELECT id, e_name, dat, tim, description, e_poster FROM registration ORDER BY id DESC";
            $result = $mysqli->query($sql) or die($mysqli->error);
            
            #$row = array_reverse($row);

            while ($row = $result->fetch_assoc()) {


                $src = $row["e_poster"];
                echo "<div id='poster'> <img src='uploads/$src'> <br> <b>Event Name : </b>". $row['e_name'] . " <br> <b>Event Date: </b>". $row['dat'] . " <br> <b>Event Time :  </b>". $row['tim'] ." <br><b> Event Description :</b> ". $row['description'] ." <br><button type='button' id='donateBtn' onclick='openDonation()'>Donate</button> </div>";
              }
        
            

            ?>
            </div>
          </div>
          
          
          <div class="donateForm" id="donateForm">
            <div class="donateForm-content">
              <span class="close" onclick="closeDonation()">&times;</span>
            
              <form id="donate" class="donate-form-container">
                <h3>Fill up your credit card information below: </h2>
              <label><b>Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</b></label>
              <input type="text" name="name"><br>
              <label><b>Card Number  &nbsp &nbsp : </b></label>
              <input id="cardnumber" name="cardnumber" type="text" pattern="[0-9]{16,19}" maxlength="19" placeholder="8888-8888-8888-8888"/><br>
              <label><b>Expiry Date : </b></label>
              <select id="expiry-date" name="expiry-date">
                        <option>MM</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <span>/</span>
                     <select id="expiry-date">
                        <option>YYYY</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select> &nbsp &nbsp 
                <label><b>CVV </b></label>
                <input id="cvv" type="text" maxlength="4" placeholder="123" name="cvv" /><br>
                <button type='button' id='donateBtn' name="donateBtn" onclick="showConfirmation()">Donate</button>

              
            </form>
            <div id="donate-confirm">
              <h2>Thanks for your donation!!!</h2>
            </div>
          
            </div>
            
          </div>

</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById('registerBtn').style.display = "none";
}
function openDonation(){
  document.getElementById('donateForm').style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById('registerBtn').style.display = "block";
}

function closeDonation(){
  document.getElementById('donateForm').style.display = "none";
}
function showConfirmation(){
  
    document.getElementById('donate-confirm').style.display = "block";
  
    document.getElementById('donate').style.display = "none";
  
}
</script>
<?php include'footer.php';?>
</body>
</html>