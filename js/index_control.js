var debug_rank;
$(document).ready(function() {
	$.ajax({
		type: "POST",
		url: "./php/get_ranking.php",
		data: { people: 3 },
		success: function(data, status, xhr) {
			console.log("[DEBUG] Ranking Data");
			console.log(data);

			$("#inf-rank-1").html(data[0].name + ": " + String(data[0].score) + "점");
			$("#inf-rank-2").html(data[1].name + ": " + String(data[1].score) + "점");
			$("#inf-rank-3").html(data[2].name + ": " + String(data[2].score) + "점");
		},
		error: function(jqXHR, textStatus, errorThrown) {
			console.log(jqXHR.responseText);
		}
	});
});

$("#b-btn1").click(function() {
	//window.location.replace("./pages/play.php");
	window.location.href = "./pages/play.php";
});

$("#b-btn2").click(function() {
	//window.location.replace("./pages/play.php");
	window.location.href = "./pages/play_inf.php";
});