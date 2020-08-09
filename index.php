<!DOCTYPE html>
<html>
<head>
	<title>Sukarela</title>
	<link rel="stylesheet" href="assets/css/style.css">
	
</head>
<body>
<?php include 'header.php';?>
<div class="container">
	
	<input type="radio" id="i1" name="images" checked />
	<input type="radio" id="i2" name="images" />
	<input type="radio" id="i3" name="images" />
	
	
	<div class="slide_img" id="one">			
			
			<img src="assets/images/1.jpg">
			
				<label class="prev" for="i3"><span>&#x2039;</span></label>
				<label class="next" for="i2"><span>&#x203a;</span></label>	
		
	</div>
	
	<div class="slide_img" id="two">
		
			<img src="assets/images/2.jpg " >
			
				<label class="prev" for="i1"><span>&#x2039;</span></label>
				<label class="next" for="i3"><span>&#x203a;</span></label>
		
	</div>
			
	<div class="slide_img" id="three">
			<img src="assets/images/3.jpg">	
			
				<label class="prev" for="i2"><span>&#x2039;</span></label>
				<label class="next" for="i1"><span>&#x203a;</span></label>
	</div>

	

	<div id="nav_slide">
		<label for="i1" class="dots" id="dot1"></label>
		<label for="i2" class="dots" id="dot2"></label>
		<label for="i3" class="dots" id="dot3"></label>
		
	</div>
		
</div>

<div id="centerContent" >
              <center>
              <div id="first" style="margin-bottom:10px">
                <img src="assets/images/donate.png" href="home.html" style="width:150px;height:150px;">
                <h2 style="color: #297272;">Donation</h2>
                <p style="text-align: justify; text-justify: inter-ideograph; line-height: 150%;">There are people struggling to obtain their daily requirements. With our contributions, we aim to make their life easier and to assist them with their everyday needs. We provide substantial help based on two key directions: Physical &amp; Mental.</p>
                <div style="margin-top:30px">
                  <form  action="GetPromoted.html">
                    <button class="btn readmore">Read More</button>
                  </form>
                </div>

              </div>
              <div id="second">
                <img src="assets/images/volunteer.png" href="home.html" style="width:150px;height:150px;">
                <h2 style="color: #297272;">Volunteer</h2>
                <p style="text-align: justify; text-justify: inter-ideograph; line-height: 150%;">Volunteering is generally considered an altruistic activity where an individual or group provides services for no financial or social gain "to benefit another person, group or organization".Volunteering is also renowned for skill development and is often intended to promote goodness. </p>
                <form  action="volunteer.html">
                  <button class="btn readmore">Read More</button>
                </form>
              </div>
              <div id="third">
                <img src="assets/images/sponsorship.png" href="home.html" style="width:150px;height:150px;">
                <h2 style="color: #297272;">Sponsorship</h2>
                <p style="text-align: justify; text-justify: inter-ideograph; line-height: 150%;">Charity should be considered as a form of education. The implementation of charity cultures into schools serves to act as a jumpstart for students to organize community projects voluntarily while enhancing their self-development and hence.</p>
                <div style="margin-top:30px">
                <form action="sponsorship.html">
                  <button class="btn readmore">Read More</button>
                </form>
                </div>
              </div>
            </center>

          </div>
          <div id="centerpicture_container">
            <img src="assets/images/Capture.jpg" alt="Charity Project" style="width:100%;height:80%">

          </div>

          <div id="center_about" style="position:relative" >
            <div id="center_content">
              <img src="assets/images/aboutus.png" href="aboutus.html" style="width:300px;height:130px;">
              <h2 style="color: #6bc9c9;">Hand-in-hand Charity</h2>
              <p style="text-align: justify; text-justify: inter-ideograph; line-height: 150%;">There are people struggling to obtain their daily requirements. With our contributions, we aim to make their life easier and to assist them with their everyday needs. We provide substantial help based on two key directions: Physical &amp; Mental.</p>
              <form action="AboutUss.html">
                <button class="btn readmore">Read More</button>
              </form>
            </div>

          </div>

<?php include 'footer.php';?>
</body>
</html>