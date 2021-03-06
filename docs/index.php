<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keyword" content="Neko Project, Neko Resource packs">
	<meta name="description" content="Neko project | Resource packs">	
	<meta property="og:title" content="Neko Project">
	<meta property="og:image" content="img/neko.png">
	<meta property="og:locale" content="id_ID">
	<meta property="og:description" content="Neko project | Resource packs">
	<meta property="og:type" content="article">
	<meta property="og:url" content="https://nekoproj.herokuapp.com/index.php">
	<meta name="locale" content="en_US">
	<link rel="stylesheet" type="text/css" href="bs5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<title>Neko Project | Resource pack</title>
</head>
<body>
<script type="text/javascript" src="js/jquery.min.js"></script>

	<div id="loader">
		<p class="text-center" style="margin-right: 10px; margin-top: 100px;">
			<img src="img/sleepy.gif">
		</p>
		<h2 class="text-center text-white">
			Loading
		</h2>
	</div>
	<div class="bg-image">
	</div>

	<div class="contact">
		<div class="d-flex justify-content-center">
			<a class="btn btn-solid text-white" href="https://github.com/zal-byte" target="_blank">
				<span class="fa-brands fa-2xl fa-github text-white"></span> Zal-Byte
			</a>
			<a class="btn btn-solid text-white" href="https://t.me/+1FGNjoURmEw0MDE1" target="_blank">
				<span class="fa-brands fa-2xl fa-telegram text-white"></span> Neko Project
			</a>
			<a class="btn btn-solid text-white" href="https://github.com/Neko059" target="_blank">
				<span class="fa-brands fa-2xl fa-github text-white"></span> Neko059
			</a>
		</div>
	</div>

		<div class="d-flex justify-content-center" id="bb">
			<div class=" bg-content scrollable">
				<div class="d-flex justify-content-center">
					<img id="img" class="img" src="img/neko_sp.png" style="background-color: transparent;">
				</div>
				<div class="d-flex justify-content-between p-2">
							<a type="button" role="button" class="btn float-me-up glow btn-solid btn-data btn-primary" style="width:100%; margin-right: 10px;" href="https://github.com/Neko059/NekoUI/archive/refs/heads/main.zip">
								<img id="img" class="inside-btn" src="img/nekoui_logo.png">
							</a>
							<a type="button" role="button" class="btn btn-solid btn-primary btn-data" style="width:100%;pointer-events: none;cursor: default;opacity: 0.6;" href="https://github.com/Neko059/NekoClient/archive/refs/heads/main.zip">
								<img id="img" class="inside-btn" src="img/nekoclient_logo.png">
							</a>
				</div>
					<div class="row mt-3 justify-content-center">
						<div class="col-sm">
							<div class="typing-container">
							    <span id="sentence" class="sentence text-center"></span>
							  </div>
						</div>
					</div>	
			</div>
		</div>

<script type="text/javascript" src="bs5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="fontawesome/js/all.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript">



	$(document).ready(function(){

	$("#loader").fadeOut(100);
	typeSentence("NekoUI A Custom interface for your Minecraft Bedrock Edition. This UI contains Anime & Virtual YouTuber ( Hololive ).",document.getElementById("sentence"));

	});


</script>
</body>
</html>