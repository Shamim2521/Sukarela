<!DOCTYPE html>
<html>
<head>
	<title>Sukarela</title>
	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="assets/css/sponsorship.css">
</head>
<body>
<?php include 'header.php';?>

<div id="content_body">
	<div id="header_text">
	<h1>Our Sponsorsors</h1>
	</div>

<div id="accordian">
<ul>
    <li>
      <h3>Bank Islam Berhad</h3>
      <ul>
        <li><a href="#">Bank Islam Malaysia Berhad (Jawi: بڠك اسلام مليسيا برحد) is an Islamic bank based in Malaysia that has been in operation since July 1983. Bank Islam was established primarily to assist the financial needs of the country's Muslim population, and extended its services to the broader population.
    The bank currently provides Shariah-compliant card services and mobile banking, in addition to traditional banking.
    Bank Islam was set up with an initial authorised capital of RM 500 million and paid in capital of RM 79.9 million; the bank has gradually increased its authorised and paid-in capital to RM 2 billion and RM 563 million respectively.</a></li>

      </ul>
    </li>
    <li>
      <h3>Mercy Malaysia</h3>
      <ul>
        <li><a href="#">It all began in 1999, amidst a raging war in Kosova where thousands of lives were lost and suffering was widespread. Moved by the plight of countless innocent civilians, especially women and children, Dr. Jemilah Mahmood, a Malaysian obstetrician-gynaecologist, sought to offer her services voluntarily. Finding no national organisation ready to support such international crises, together with a handful of like-minded friends, the Malaysian Medical Relief Society – better known today as MERCY Malaysia – was established. MERCY Malaysia aimed to provide a platform for Malaysians to unite and take their role in the international humanitarian arena.</a></li>

      </ul>
    </li>
    <li>
      <h3>Berjaya Corporation Berhad</h3>
      <ul>
        <li><a href="#">The Berjaya Corporation group of companies' history dates back to 1984 when our Founder, Tan Sri Dato' Seri Vincent Tan Chee Yioun acquired a major controlling stake in Berjaya Industrial Berhad (originally known as Berjaya Kawat Berhad and now known as Reka Pacific Berhad) from the founders, Broken Hill Proprietary Ltd, Australia and National Iron & Steel Mills, Singapore. The shareholding change also resulted in a major change in the business, direction and the dynamic growth of a diversified conglomerate under the flagship of Berjaya Corporation Berhad ("BCorp").</a></li>

      </ul>
    </li>
    <li>
      <h3>Bank Muamalat Malaysia Berhad</h3>
      <ul>
        <li><a href="#">Bank Muamalat Malaysia Berhad (Jawi: بڠك معاملة مليسيا) started its operations on 1 October 1999 with a combined assets and liabilities brought over from the Islamic banking windows of the then Bank Bumiputra Malaysia Berhad, Bank of Commerce (M) Berhad and BBMB Kewangan. Bank Muamalat Malaysia Berhad, the second full-fledged Islamic bank to be established in Malaysia after Bank Islam Malaysia Berhad, is poised to play its role in providing Islamic banking products and services to Malaysians, without regard to race or religious beliefs. DRB-HICOM holds 70% shares in the Bank while Khazanah Nasional Berhad holds the remaining shares.</a></li>

      </ul>
    </li>
    <li>
      <h3>Maybank</h3>
      <ul>
        <li><a href="#">In 2010, in conjunction with the MAYBANK GROUP'S 50th anniversary, Maybank Foundation was inaugurated as the main vehicle for corporate responsibility across MAYBANK GROUP. Maybank Foundation’s mandate is to identify programmes that will have the most tangible and sustainable results - efforts that will bring measurable change over the long term.</a></li>

      </ul>
    </li>
    </ul>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
  $("#accordian h3").click(function() {
    //slide up all lists
    $("#accordian ul ul").slideUp();
    //slide down the link list below the h3 clicked
    if (!$(this).next().is(":visible")) {
      $(this).next().slideDown();
    }
  })
})
</script>


<?php include 'footer.php';?>
</body>
</html>