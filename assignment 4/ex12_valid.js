function checkDate() {
	var ok = _privateCheck();
	var okay = daysInMonth();
	var submitButton = document.getElementById("submit");

	submitButton.disabled = ! ok;
}

function _privateCheck() {
	var year = document.getElementById("year").value;
	var msgElt = document.getElementById("errmsg");
	var which_month = document.getElementsByName("month");

	var which_month_len = which_month.length;

	if (year == ""){
			msg.innerText = "Year is required and must be between 1900 and 2100";
			return false;
	}

	if (isNaN(year) || year <= 1900 || year >= 2100) {
			msgElt.innerText = "Year must be between 1900 and 2100, not '" + year + "'";
			return false;
	}
	if (which_month == null) {
			msgElt.innerText = "You must choose a month";
			return false
	}

	daysInMonth();

	msgElt.innerText = "";
	return true;
}
function daysInMonth() {
	var which_month = document.getElementsByName("month");
	var days = document.getElementById("days");
	var year = parseInt(document.getElementById("year").value);

	var which_month_len = which_month.length;
	days.innerHTML = "";

	console.log(year);

	for (var i = 0; i < which_month_len; i++) {
			if (which_month[i].checked) {
					if(which_month[i].value == "1" || which_month[i].value == "3" || which_month[i].value == "5" ||
							which_month[i].value == "7" || which_month[i].value == "9" || which_month[i].value == "11") {

							var day_num = 31;
					}
					else if(which_month[i].value == "4" || which_month[i].value == "6" || which_month[i].value == "8" ||
							which_month[i].value == "10" || which_month[i].value == "12") {

							var day_num = 30;
					}
					else if(which_month[i].value == "2") {
							if( ( (year % 4 == 0) && (year % 100 != 0) ) || (year % 400 == 0) ) {
									var day_num = 29;
							}
							else {
									var day_num = 28;
							}
					}
			}
	}
	for (var i = 1; i <= day_num; i++) {
			var newOption = document.createElement("option");
			newOption.value = i;
			newOption.innerHTML = i;
                days.options.add(newOption);
        }
		return true;
	}