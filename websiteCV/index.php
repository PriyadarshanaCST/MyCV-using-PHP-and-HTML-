<!DOCTYPE html>
<html>
<head>
    <?php 
    $name="Kapila Priyadarshana";
    $job="Network Engineer";
    $email="kapilacst@gmail.com";
    $mobile="071 4795834";
    $dob="1994-09-08";
    $address="No 111/E , Bank Place , Padiyathalawa.";
    $sex="Male";
    $NIC="942522673V";
    $msat="Single";
    $School="Badulla Centrel Collage";
    $university="Uva Wellassa University,Sri Lanka";
    
    ?>
    <?php 

    echo "<title> $name - Curriculum Vitae </title>";

    ?>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Kapila Priyadarshana."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

</head>

<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
                    <img src="k1.jpg" alt="Kapila" />
		</div>
		
		<div id="name">
			<?php echo "<h1 class=quickFade delayTwo> $name </h1>
			<h2> $job </h2>";
                                ?>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
                            
                            <?php
				echo "<li>email: <a href=mailto:kapilacst@gmail.com>$email</a></li>
				
				<li>mobile: $mobile </li>
			</ul>";?>
              
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Personal Profile Details</h1>
				</div>
				
				<div class="sectionContent">
					<p>I (Kapila Ruwan Priyadarshana )am a graduate in Uva Wellassa University of Sri Lanka. I have done two group projects during my university times.I had done the O’ level and A’ level exams during my school period.Therefore I’m requesting for a job as a Software Developer in your organization.</p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
		<article>
				<div class="sectionTitle">
					<h1>Date Of Birth</h1>
				</div>
				
				<div class="sectionContent">
					<?php echo "<p>$dob</p>";
                                        ?>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
            <section>
		<article>
				<div class="sectionTitle">
					<h1>Address</h1>
				</div>
				
				<div class="sectionContent">
					<?php echo "<p>$address</p>";
                                        ?>
				</div>
			</article>
			<div class="clear"></div>
		</section>
            
              <section>
		<article>
				<div class="sectionTitle">
					<h1>NIC</h1>
				</div>
				
				<div class="sectionContent">
					<?php echo "<p>$NIC</p>";
                                        ?>
				</div>
			</article>
			<div class="clear"></div>
		</section>
            <section>
		<article>
				<div class="sectionTitle">
					<h1>Sex</h1>
				</div>
				
				<div class="sectionContent">
					<?php echo "<p>$sex</p>";
                                        ?>
				</div>
			</article>
			<div class="clear"></div>
		</section>
              <section>
		<article>
				<div class="sectionTitle">
					<h1>Maried Status</h1>
				</div>
				
				<div class="sectionContent">
					<?php echo "<p>$msat</p>";
                                        ?>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		<section>
			<div class="sectionTitle">
				<h1>Key Skills</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="keySkills">
                                        <li>Software development</li>
					<li>Computer Networking</li>
					<li> Web development  </li>
					<li>Network Security</li>
					<li>Data Security</li>
					<li>Parallel Computing</li>
					
					
				</ul>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Education</h1>
			</div>
			
			<div class="sectionContent">
				<article>
					<h2>School</h2>
					
					<?php echo"<p>$School</p>"  ?>
				</article>
				
				<article>
					<h2>University</h2>
					
				<?php echo "<p>$university</p>";	
                                ?>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		
	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>