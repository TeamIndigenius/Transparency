<!DOCTYPE html>
<html>
	<head>
		<title>About | Transparency</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/about-style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		<script src="js/jquery.fullpage.js"></script>

	</head>
	<body>
		<header>
			<div class="nav-bar">
				<div>
					<a href="{{ url('/') }}">HOME</a>
				</div>
			</div>
		</header>

		<div class="content" id="fullpage">
			<section class="main" id="main">
			    <img src="img/transparency_logo.png">
			    <div class="description">
				   an archive for CAS organizations.
			    </div>
			    <a align="center" href="#" class="arrow down"></a>
			</section>

			<section class="developers" id="developers">
				<div class="our-team">
 				   <p class="div-title"> - DEVELOPERS - </p>
 			    </div>

			    <div class="team-list">

				  <div class="team-data first">
					  <img src="img/developers-img/nicole.png">
					  <label class="member-name"><br>NICOLE SOLANO</label>
				  </div>

				  <div class="team-data">
					  <img src="img/developers-img/aira.png">
					  <label class="member-name"><br>AIRA TORRES</label>
				  </div>

				  <div class="team-data">
					  <img src="img/developers-img/leica.png">
					  <label class="member-name"><br>LEICA BANDIOLA</label>
				  </div>

				  <div class="team-data fourth">
					  <img src="img/developers-img/fruitz.png">
					  <label class="member-name"><br>JENNY YAP</label>
				  </div>
				  <div class="team-data">
					  <img src="img/developers-img/hannah.png">
					  <label class="member-name"><br>HANNAH JALBUNA</label>
				  </div>
			    </div>
			    <a align="center" href="#" class="arrow down"></a>
			</section>

			<section class="contact" id="contact">
			    <div class="contact-label">
				   <p> <span class="label">CONTACT US</span> <br>
					  <span class="suggestions">ANY SUGGESTIONS?</span> <br>
					  <span class="tags">CONCERNS. FEEDBACKS. VIOLENT REACTIONS.</span>
				   </p>
			    </div>


			    <div class="form-field">
				   <form>
					  <input type="email" name="email" placeholder="E-mail" required> <br>
					  <input type="text" name="contactnum" placeholder="Contact Number" required> <br>

					  <textarea name="commentfield" placeholder="Message"></textarea> <br>
					  <input type="submit" name="submit">
				   </form>
			    </div>
			</section>

		</div>

		<script type="text/javascript">
			FastClick.attach(document.body);
			$('#fullpage').fullpage();
		</script>
	</body>
</html>
