<!DOCTYPE html>
<html>
	<head>
		<title>Orgs | Transparency</title>
			<link rel="stylesheet" type="text/css" href="css/orgs.css">

			<link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet"> 
			<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet"> 
			<link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet">
	</head>

	<body>
		<header>
            <div class="nav-bar">
                <div>
                    <a id="left-nav-title" href="{{ url('/') }}">BACK</a>
                </div>
            </div>
        </header>

		<div class="main">
			<p id="organizations"> - ORGANIZATIONS - </p>

			<div class="dropdown">
				<a href="{{ url('accessOrg/2') }}" id="redbolts" onclick="orgs(id)">
				  	<button class="dropbtn" id="redbolts-btn">R</button>
			  		<div class="org-label">
			   			<label id="redbolts-label">REDBOLTS</label>
						<p id="redbolts-select">SELECT &gt;</p>
			  		</div>
			  	</a>
			</div>

			<div class="dropdown">
				<a href="{{ url('accessOrg/3') }}" id="clovers" onclick="orgs(id)">
				  	<button class="dropbtn" id="clovers-btn">C</button>
			  		<div class="org-label">
			   			<label id="clovers-label">CLOVERS</label>
						<p id="clovers-select">SELECT &gt;</p>
			  		</div>
			  	</a>
			</div>

			<div class="dropdown">
				<a href="{{ url('accessOrg/4') }}" id="skimmers" onclick="orgs(id)">
				  	<button class="dropbtn" id="skimmers-btn">S</button>
			  		<div class="org-label">
			   			<label id="skimmers-label">SKIMMERS</label>
						<p id="skimmers-select">SELECT &gt;</p>
			  		</div>
		  		</a>
			</div>
			
			<div class="dropdown">
				<a href="{{ url('accessOrg/1 ') }}" id="elektrons" onclick="orgs(id)">
				  	<button class="dropbtn" id="elektrons-btn">E</button>
			  		<div class="org-label">
			   			<label id="elektrons-label">ELEKTRONS</label>
						<p id="elektrons-select">SELECT &gt;</p>
			  		</div>
			  	</a>
			</div>
		</div>
		<script type="text/javascript" src="js/app.js"></script>
	</body>
</html>