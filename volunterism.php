<!DOCTYPE html>
<html>
<head>
	<title>Sukarela</title>
	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="assets/css/volunterism.css">
</head>
<body>
<?php include 'header.php';?>


<div class="row">
<div class="column left">
<br>
<br>
<div id="states">
<form action="/action_page.php">
  <h3>Select area</h3>
    <select name="states">
        <option class="malaysia">Entire Malaysia</option>
      <option class="perlis">Perlis</option>
        <option class="kedah">Kedah</option>
          <option class="perak">Perak</option>
      <option class="selangor">Selangor</option>
        <option class="kuala lumpur">Kuala Lumpur</option>
      <option class="kelantan">Kelantan</option>
       <option class="terengganu">Terengganu</option>
      <option class="pahang">Pahang</option>
      <option class="nsembilan">Negeri Sembilan</option>
      <option class="melaka">Melaka</option>
      <option class="johor">Johor</option>
      <option class="sabah">Sabah</option>
      <option class="sarawak">Sarawak</option>
 </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</form>
</div>
<br>
<br>
<br>
  <h3>Date prefer  </h3>
<form action="/action_page.php">
   Date :
  <input type="date" value="Date">
      </form>
<br>
<br>
<br>

  <div id="newsletter">
    <form action="/action_page.php">
    <h1>Newsletter</h1>
    <h4>Keep updating with us by subcribing</h4>
    <label for="name">Name : </label>
    <input class="form" type="text" id="name" name="name" placeholder="Your name...">
    <br>
    <br>
    <label for="name">E-mail : </label>
    <input class="form" type="text" id="email" name="email" placeholder="Your e-mail...">
  </form>
  <br>
  <a href="accepted.html"  class="btn submit" type="submit">Submit</a>
</div>
<br>
<br>
<br>

<img class="textimage" src="kid.jpg" alt="Avatar">
<div class="text-block">
<h4>Volunteer</h4>
<p>Beautiful heart make beautiful world</p>
</div>
</div>

  <div class="row">
  <div class="column middle">

<div class="bigtitle">
    <h1 style="font-size: 5vw">Events</h1>
    <div class="title">Here we are providing several type of volunteering programs around Malaysia that you can choose based on your preferences.
    We are hoping that this website will bring awareness to people around the world to lend
    their hands to help the needy.Let's make a better place to live.Just click on the "READ MORE" button for more information.</p>
  </div>
</div>
    <br>
    <br>
    <br>

    <div id="tab-background">
    <div class="tab">
      <button class="btn tablinks" onclick="openTabs(event, 'education')" id="defaultOpen">EDUCATION</button>
      <button class="btn tablinks" onclick="openTabs(event, 'fundraising')">FUNDRAISING</button>
      <button class="btn tablinks" onclick="openTabs(event, 'social')">SOCIAL</button>
    </div>
  </div>

  <div id="content">
    <div id="education" class="tabcontent">
               <div class="container">
                 <img src="vol1.jpg" class="picture">
                 <div class="overlay">
                    <form action="https://www.unicef.org/malaysia/">
                      <button class="button">READ MORE</button>
                    </form>
                     <div class="text">PLAY AND PRAY<br><br>An engineering-based programme that need you to guide the children.<br>
                  </div>
                 </div>
               </div>

               <div class="container">
                 <img src="vol2.jpg" class="picture">
                 <div class="overlay">
                     <form action="http://www.thegivengoproject.org/main.php">
                     <button class="button">READ MORE</button>
                   </form>
                   <div class="text">SOLAT CAMP<br><br>Facilitate the children on how to perform solah.<br>
                 </div>
                 </div>
               </div>
               <div class="container">
                 <img src="vol3.jpg" class="picture">
                 <div class="overlay">
                  <form action="http://www.wwf.org.my/">
                        <button class="button">READ MORE</button>
                   </form>
                 <div class="text">SCIENTIST CAMP<br><br>Do amazing experiment with the kids!<br>
               </div>
                 </div>
               </div>

               <div class="container">
                 <img src="vol4.jpg" class="picture">
                 <div class="overlay">
                   <form action="https://kleff.my/volunteer/">
                        <button class="button">READ MORE</button>
                      </form>
                      <div class="text">BACK TO SCHOOL<br><br>A camp that full of excitement during school break.<br>
                    </div>
                 </div>
               </div>

               <div class="container">
                 <img src="vol5.jpg" class="picture">
                 <div class="overlay">
                   <form action="http://www.thegivengoproject.org/main.php">
                        <button class="button">READ MORE</button>
                      </form>
                      <div class="text">TEACH THE ORPHAN<br><br>A short tuition with the unfortunate kids.Teaching their basic mathematics.<br>
                    </div>
                 </div>
               </div>

               <div class="container">
                 <img src="vol6.jpg" class="picture">
                 <div class="overlay">
                   <form action="https://www.dosomething.gd/">
                        <button class="button">READ MORE</button>
                      </form><div class="text">BLIND CAN READ<br><br>Need of volunteers that can read and teach brails.Lets help the blind read.<br>
                    </div>
                  </div>
              </div>
        </div>

              <div id="fundraising" class="tabcontent">
                            <div class="container">
                              <img src="vol7.jpg" class="picture">
                              <div class="overlay">
                                 <form action="https://kleff.my/volunteer/">
                                     <button class="button">READ MORE</button>
                                   </form>  <div class="text">RUN FOR CANCER<br><br>A fundraising run that want to help the cancer patient in Malaysia Cancer Institute.<br>
                                 </div>
                              </div>
                            </div>

                            <div class="container">
                              <img src="vol8.jpg" class="picture">
                              <div class="overlay">
                                  <form action="https://www.dosomething.gd/">
                                     <button class="button">READ MORE</button>
                                   </form><div class="text">NEON RUN<br><br>Run at night.Need volunteers in many checkpoints.<br>
                                 </div>
                              </div>
                            </div>

                            <div class="container">
                              <img src="vol9.jpg" class="picture">
                              <div class="overlay">
                                   <form action="http://www.thegivengoproject.org/main.php">
                                     <button class="button">READ MORE</button>
                                   </form><div class="text">RUN KL 2018<br><br>As we need 200 volunteers for this big event.Come and join us! <br>
                                 </div>
                              </div>
                            </div>

                            <div class="container">
                              <img src="vol10.jpg" class="picture">
                              <div class="overlay">
                                   <form action="https://kleff.my/volunteer/">
                                     <button class="button">READ MORE</button>
                                   </form><div class="text">ZOMBI RUN<br><br>You can join us as checkpoint keepers or you can be the ZOMBIES!!!<br>
                                 </div>
                              </div>
                            </div>

                            <div class="container">
                              <img src="vol11.jpg" class="picture">
                              <div class="overlay">
                                   <form action="http://www.thegivengoproject.org/main.php">
                                     <button class="button">READ MORE</button>
                                   </form><div class="text">STREET ART MASJID JAMEK<br><br>Do join us and make art shows for fundraising the homeless kids.<br>
                                 </div>
                              </div>
                            </div>

                            <div class="container">
                              <img src="vol12.jpg" class="picture">
                              <div class="overlay">
                                   <form action="http://www.thegivengoproject.org/main.php">
                                     <button class="button">READ MORE</button>
                                   </form><div class="text">BLIND CAN READ TOO<br><br>Help us sell the books for the blinded everyday needs.<br>
                                 </div>
                              </div>
                            </div>
                          </div>

                            <div id="social" class="tabcontent">
                                       <div class="container">
                                         <img src="vol13.jpg" class="picture">
                                         <div class="overlay">

                                              <form action="https://www.dosomething.gd/">
                                                <button class="button">READ MORE</button>
                                              </form><div class="text">ERDERLY AND YOUNGSTERS<br><br>Going to old folks home and do some activities with them as to make some color in their life.<br>
                                            </div>
                                         </div>
                                       </div>

                                       <div class="container">
                                         <img src="vol11.jpg" class="picture">
                                         <div class="overlay">

                                              <form action="http://www.thegivengoproject.org/main.php">
                                                <button class="button">READ MORE</button>
                                              </form>   <div class="text">DARE TO DREAM<br><br>A physical challenge games will be held.We need you as time keeper and trainer.<br></div>
                                         </div>
                                       </div>
                                       <div class="container">
                                         <img src="vol15.jpg" class="picture">
                                         <div class="overlay">

                                              <form action="http://www.thegivengoproject.org/main.php">
                                                <button class="button">READ MORE</button>
                                              </form><div class="text">SCIENTIST CAMP<br><br>Do amazing experiment with the kids!<br></div>
                                         </div>
                                       </div>
                                       <div class="container">
                                         <img src="vol6.jpg" class="picture">
                                         <div class="overlay">

                                             <form action="https://kleff.my/volunteer/">
                                                <button class="button">READ MORE</button>
                                              </form><div class="text">BACK TO SCHOOL<br><br>A camp that full of excitement during school break.<br>
                                            </div>
                                         </div>
                                       </div>
                                       <div class="container">
                                         <img src="vol8.jpg" class="picture">
                                         <div class="overlay">

                                              <form action="http://www.thegivengoproject.org/main.php">
                                                <button class="button">READ MORE</button></form><div class="text">TEACH THE ORPHAN<br><br>A short tuition with the unfortunate kids.Teaching their basic mathematics.<br>
                                              </div>
                                         </div>
                                       </div>
                                       <div class="container">
                                         <img src="vol2.jpg" class="picture">
                                         <div class="overlay">

                                              <form action="https://www.dosomething.gd/">
                                                <button class="button">READ MORE</button>
                                              </form> <div class="text">JUMP STREET DAY<br><br>Need of volunteers that have high stamina to keep watching the participants.<br>
                                            </div>
                                         </div>
                                       </div>
                                     </div>


<script>
function openTabs(evt, category) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(category).style.display = "block";
    evt.currentTarget.className += " active";
    topFunction();
}
document.getElementById("defaultOpen").click();

</script>
<?php include 'footer.php';?>
</body>
</html>