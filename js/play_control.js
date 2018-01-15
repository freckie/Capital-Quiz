/*************/
/* Functions */
/*************/

function get_question(args_level)
{
	$.ajax({
		type: "POST",
		url: "./../php/get_question.php",
		data: {
			level: args_level
		},
		dataType: "json",
		success: function(data, status, xhr) {
			q_now++;

			_debug_ajax_data = data; // for Debug
			console.log(data); // for Debug

			_set_next(data);
		},
		error: function(jqXHR, textStatus, errorThrown) {
			console.log(jqXHR.responseText);
		}

	});
}

function check_answer(mynum, ansnum, level)
{
	if(mynum == ansnum)
	{
		alert("정답입니다!");
		score += scores[level];

		_clear_question(country_num, true);
	}
	else
	{
		var msg = "오답입니다.\n" + country_name + "의 수도는 " + answer_name + "입니다."

		console.log("[DEBUG] check_answer() :: mynum=" + String(mynum) + ", ansnum=" + String(ansnum));
		alert(msg);
		_clear_question(country_num, false);
	}

	if(isGameEnd == true)
	{
		_end_game(score);
	}
}

function _set_next(data)
{
	// Randomize
	var rand_num = Math.floor(Math.random()*4);
	var count = 1;
	for(var i=0; i<4; i++)
	{
		if(i == rand_num)
		{
			abtns[i].html(data.city[0].name);
		}
		else
		{
			abtns[i].html(data.city[count].name);
			count++;
		}
	}

	answer_num = rand_num;
	answer_name = data.city[0].name;
	country_num = data.country.id;
	country_name = data.country.name;
	now_level = data.country.level;

	var flag_url = "./../res/flag/" + data.country.name.replace(" ", "_") + ".png";
	var score_str = q_now.toString() + " / " + q_max.toString() + "&nbsp;&nbsp;(난이도 " + _level_to_char(now_level) + ")";

	$("#score").html(score_str);
	$("#q-name-txt").html(country_name);
	$("#q-flag").attr("src", flag_url);

}

// Shuffle Array.
function _arr_shuffle(oldArray) {
    var newArray = oldArray.slice();
    var len = newArray.length;
    var i = len;
    while (i--) 
    {
        var p = parseInt(Math.random()*len);
        var t = newArray[i];
        newArray[i] = newArray[p];
        newArray[p] = t;
    }
    return newArray;
};

// Level type changing. (int to string)
function _level_to_char(lv_int)
{
	switch(Number(lv_int))
	{
		case 0:
			return "S";
			break;
		case 1:
			return "A";
			break;
		case 2:
			return "B";
			break;
		case 3:
			return "C";
			break;
		case 4:
			return "D";
			break;
		case 5:
			return "F";
			break;
		default:
			return "미상";
			break;
	}

}

// Clear Question
function _clear_question(_country_num, _is_win)
{
	var is_win = (_is_win == true) ? 1 : 0;

	$.ajax({
		type: "POST",
		url: "./../php/clear_question.php",
		data: {
			country: _country_num,
			isWin: is_win
		},
		//dataType: "json",
		success: function(data, status, xhr) {
		},
		error: function(jqXHR, textStatus, errorThrown) {
			//console.log(jqXHR.responseText);
		}

	});
}

// Game End Event
function _end_game(score_fin)
{
	alert("당신의 최종 점수는 " + String(score_fin) + "점 입니다!");
	window.location.href = "./../";
}


/*************/
/* Variables */
/*************/
var q_now = 0;
var q_max = 20;
var abtns = new Array($("#a-btn1"), $("#a-btn2"), $("#a-btn3"), $("#a-btn4"));

var answer_num;
var answer_name;
var country_name;
var country_num;
var now_level;

var levels = _arr_shuffle([0, 1, 1, 2, 2, 2, 3, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 5, 5]);

var scores = [11, 8, 7, 5, 3, 2];
var score = 0;

var isGameEnd = false;

// var for debugging
var _debug_ajax_data;

////////////////

$(document).ready(get_question(levels[0]));

abtns[0].click(function() {
	check_answer(0, answer_num, now_level);
	if(q_now >= q_max)
	{
		_end_game(score);
		return;
	}
	else
	{
		get_question(levels[q_now]);
	}
});

abtns[1].click(function() {
	check_answer(1, answer_num, now_level);
	if(q_now >= q_max)
	{
		_end_game(score);
		return;
	}
	else
	{
		get_question(levels[q_now]);
	}
});

abtns[2].click(function() {
	check_answer(2, answer_num, now_level);
	if(q_now >= q_max)
	{
		_end_game(score);
		return;
	}
	else
	{
		get_question(levels[q_now]);
	}
});

abtns[3].click(function() {
	check_answer(3, answer_num, now_level);
	if(q_now >= q_max)
	{
		_end_game(score);
		return;
	}
	else
	{
		get_question(levels[q_now]);
	}
});