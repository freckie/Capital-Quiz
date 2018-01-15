<!-- pages/play.php -->
<!-- feature : game play -->

<!DOCTYPE html>

<html>

<head>
	<!-- Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title -->
	<title>수도 퀴즈 :: 일반 모드 (by fr3ky)</title>

	<!-- CSS -->
	<link rel="stylesheet" href="./../css/play.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	<!-- Javascript -->
	<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script>
	</script>
</head>

<body>

	<div class="row">

		<!-- Header -->
		<div class="col s12 m12 myheader">
		</div>

		<!-- Main Wrapper -->
		<div class="col s12 m12 main-wrapper" style="padding:0;">

			<!-- Question Wrapper -->
			<div class="col s12 m12 q-wrapper">
				<div class="col s8 offset-s2 m4 offset-m4 q-inner">
					<span id="score">1 / 10</span>
					<div class="q-flag-holder">
						<img id="q-flag" src="./../res/flag/default.png" width=100% height=110px style="border-radius: 7px 7px 7px 7px;">
					</div>
					<span id="q-name"><h5 id="q-name-txt">&nbsp;</h5></span>
				</div>
			</div>

			<!-- Answer Buttons Wrapper -->
			<div class="col s12 m12 a-wrapper">
				<div class="col s8 offset-s2 m4 offset-m4 a-inner">
					<a class="waves-effect waves-light btn red lighten-2 a-btn"><span id="a-btn1">&nbsp;</span></a>
					<a class="waves-effect waves-light btn red lighten-2 a-btn"><span id="a-btn2">&nbsp;</span></a>
					<a class="waves-effect waves-light btn red lighten-2 a-btn"><span id="a-btn3">&nbsp;</span></a>
					<a class="waves-effect waves-light btn red lighten-2 a-btn"><span id="a-btn4">&nbsp;</span></a>
				</div>
			</div>

		</div>

	</div>

	<!-- Control JQuery -->
	<script src="./../js/play_control.js"></script>

</body>

</html>