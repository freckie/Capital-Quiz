<!-- pages/play_inf.php -->
<!-- feature : game play (infinity mode) -->

<!DOCTYPE html>

<html>

<head>
	<!-- Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title -->
	<title>수도 퀴즈 :: 무한 모드 (by fr3ky)</title>

	<!-- CSS -->
	<link rel="stylesheet" href="./../css/play.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
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
					<span id="score">1 / ∞ (난이도 미상)</span>
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

	<!-- Game End Modal -->
	<div id="end-modal" class="modal">
		<div class="modal-content">
			<h4>최종 점수</h4>
			<p id="modal-msg"></p>
			<br />
			<p>랭킹에 점수를 남기고 싶다면, 닉네임을 입력하고 '등록' 버튼을 누르세요!</p>
			<p>등록을 원치 않는다면 '홈으로' 버튼을 누르세요.</p>
			<br />
			<div class="input-field col s6">
				<i class="material-icons prefix">account_circle</i>
				<input id="modal-nickname" type="text" class="validate">
				<label for="modal-nickname">닉네임 (최대 4글자)</label>
			</div>
		</div>
		<div class="modal-footer">
			<a id="modal-btn1" class="modal-action modal-close waves-effect waves-green btn-flat">홈으로</a>
			<a id="modal-btn2" class="modal-action modal-close waves-effect waves-green btn-flat">등록</a>
		</div>
	</div>

	<!-- Control JQuery -->
	<script src="./../js/play_inf_control.js"></script>

</body>

</html>