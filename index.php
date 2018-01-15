<!-- index.php -->
<!-- feature : game play -->

<!DOCTYPE html>

<html>

<head>
	<!-- Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title -->
	<title>수도 퀴즈 (by fr3ky)</title>

	<!-- CSS -->
	<link rel="stylesheet" href="./css/index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>

<body>

	<div class="row">

		<!-- Main Wrapper -->
		<div class="col s12 m12 main-wrapper" style="padding:0;">

			<!-- Logo Wrapper -->
			<div class="col s12 m12 l-wrapper">
				<div class="col s8 offset-s2 m4 offset-m4 l-inner">
					<div class="l-holder">
						<img id="l-logo" src="./res/flag/대한민국.png" width=100% height=150px style="border-radius: 7px 7px 7px 7px; opacity: 0.8;">
					</div>
				</div>
			</div>

			<!-- Buttons Wrapper -->
			<div class="col s12 m12 b-wrapper">
				<div class="col s8 offset-s2 m4 offset-m4 b-inner">
					<a class="waves-effect waves-light btn red lighten-2 b-btn"><span id="b-btn1">일반 모드</span></a>
					<a class="waves-effect waves-light btn red lighten-2 b-btn"><span id="b-btn2">무한 모드</span></a>
					<a class='dropdown-button btn red lighten-2 b-btn'  data-activates='inf-rank'>무한 모드 랭킹</a>

					<!-- Ranking Dropdown -->
					<ul id='inf-rank' class='dropdown-content inf-rank-dd'>
						<li id="inf-rank-li1"><a>
							<i class="material-icons">filter_1</i>
							<span id="inf-rank-1">name : score점</span>
						</a></li>
						<li id="inf-rank-li2"><a>
							<i class="material-icons">filter_2</i>
							<span id="inf-rank-2">name : score점</span>
						</a></li>
						<li id="inf-rank-li3"><a>
							<i class="material-icons">filter_3</i>
							<span id="inf-rank-3">name : score점</span>
						</a></li>
					</ul>
				</div>
			</div>

		</div>

	</div>

	<div id="my-copyright">Made by Fr3ky (freckie@frec.kr)</div>

	<!-- Control JQuery -->
	<script src="./js/index_control.js"></script>

</body>

</html>