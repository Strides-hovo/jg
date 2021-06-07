var typeTitles = ["Standart", "Medium", "Premium"];
var type = 0;
var currency = 0;
var currencyLimits = [
	[
		[0.01, 0.06],
		[13850, 83250],
		[37450, 224750],
		[413, 2480],
		[500, 3000]
	],[
		[0.06, 0.28],
		[83250, 416315],
		[224750, 1124145],
		[2480, 12400],
		[3000, 15000]
	],[
		[0.28, 18.38],
		[416315, 27754460],
		[1124146, 74965500],
		[12400, 826665],
		[15000, 1000000]
	]
];
var curBid = 0;
var bids = [0.75, 0.97, 1.19];
var curMin = currencyLimits[type][currency][0];
var curMax = currencyLimits[type][currency][1];
var investSum = 0.02;
var investSumString;
var oldSect = 3;

var slideAllow = false;
var sliderElement;
var curX;
var investInput;

var options;
var radios;
var slidersList;

var curDate = new Date();
var endDate = new Date();
var months = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
var daysDelta;

var total;
var totalProfit;
var profitPercent;
document.addEventListener("DOMContentLoaded", function(){
	plusM = 3;
	cDay = curDate.getDate();
	cMon = curDate.getMonth();
	cYea = curDate.getFullYear();
	eMon = cMon + plusM;
	if (eMon>11) {
		eYea = curDate.getFullYear() + 1;
		eMon = eMon - 12;
	} else eYea = curDate.getFullYear();
	if (cDay == 31){
		switch (eMon){
			case 0:
				eDay = 31;
				break;
			case 1:
				if (new Date(eYea, 1, 29).getMonth()==1) eDay = 29;
				else eDay = 28;
				break;
			case 2:
				eDay = 31;
				break;
			case 3:
				eDay = 30;
				break;
			case 4:
				eDay = 31;
				break;
			case 5:
				eDay = 30;
				break;
			case 6:
				eDay = 31;
				break;
			case 7:
				eDay = 31;
				break;
			case 8:
				eDay = 30;
				break;
			case 9:
				eDay = 31;
				break;
			case 10:
				eDay = 30;
				break;
			case 11:
				eDay = 31;
				break;
		}
	} else if (cDay == 30 && eMon == 1){
		if (new Date(eYea, 1, 29).getMonth()==1) eDay = 29;
		else eDay = 28;
	} else if (cDay == 29 && eMon == 1){
		if (new Date(eYea, 1, 29).getMonth()==1) eDay = 29;
		else eDay = 28;
	} else {
		eDay = cDay;
	}
	var d = new Date(eYea, eMon, eDay);
	daysDelta = Math.round(Math.abs(d - curDate)/1000/60/60/24)+1;
	document.querySelector("#curdate").value = cDay+" "+months[cMon]+" "+cYea;
	document.querySelector("#findate").value = eDay+" "+months[eMon]+" "+eYea;
	
	investInput = document.querySelector(".field_input");
	investInput.addEventListener("keydown", function(e){
		if ((e.key=="Ю" || e.key=="ю" || e.key==">") || (e.keyCode!=8 && e.keyCode!=49 && e.keyCode!=50 && e.keyCode!=51 && e.keyCode!=52 && e.keyCode!=53 && e.keyCode!=54 && e.keyCode!=55 && e.keyCode!=56 && e.keyCode!=57 && e.keyCode!=48 && e.keyCode!=96 && e.keyCode!=97 && e.keyCode!=98 && e.keyCode!=99 && e.keyCode!=100 && e.keyCode!=101 && e.keyCode!=102 && e.keyCode!=103 && e.keyCode!=104 && e.keyCode!=105 && e.keyCode!=190 && e.keyCode!=13)){
			e.preventDefault();
			e.stopPropagation();
			return;
		}
	});
	investInput.addEventListener("change", function(){
		investInput.blur();
		curMin = currencyLimits[type][currency][0];
		curMax = currencyLimits[type][currency][1];
		investSum = investInput.value;
		investSum = investSum.replace(/\s/g, '');
		console.log(investSum);
		if (investSum.match(/[^0-9.]/)) {
			firstRecount();
		} else {
			if (investSum*1 > curMax) {
				investSumString = curMax+"";
				curPercent = 100;
			} else if (investSum*1 < curMin) {
				investSumString = curMin+"";
				curPercent = 0;
			} else {
				curDelta = curMax - curMin;
				percent = curDelta / 100;
				curPercent = Math.round((investSum - curMin) / percent);
				investSumString = investSum+'';
			}
			if (currency == 0){
				investSumString = investSumString;
			} else {
				investSumString = investSumString.substring(investSumString.length-6, investSumString.length-9)+" "+investSumString.substring(investSumString.length-3, investSumString.length-6)+" "+investSumString.substring(investSumString.length, investSumString.length-3)
			}
			document.querySelector(".field_input").value = investSumString;
			document.querySelector("#final_invest").textContent = investSumString;
			document.querySelector("#graph_invest").textContent = investSumString;
			document.querySelector("#slider1 .slider_ctrl").style.left = curPercent + "%";
			document.querySelector("#slider1 .slider_active").style.width = curPercent + "%";
		}
	});
	slidersList = document.querySelectorAll(".slider_wrapper");
	var disabled = document.querySelectorAll(".field_date");
	for (var d=0; d<disabled.length; d++){
		disabled[d].addEventListener('select', function(e) {
			this.selectionStart = this.selectionEnd;
			e.preventDefault();
			e.stopPropagation();
		}, false);
	}
	
	document.querySelector(".field_dd").addEventListener("mouseleave", function(){
		if (document.querySelector(".field_dd").classList.contains("active")) document.querySelector(".field_dd").classList.remove("active");
	});
	document.querySelector(".field_dd").addEventListener("click", function(){
		if (document.querySelector(".field_dd").classList.contains("active")) document.querySelector(".field_dd").classList.remove("active");
		else document.querySelector(".field_dd").classList.add("active");
	});
	
	options = document.querySelectorAll(".field_dd_option");
	for (var o=0; o<options.length; o++){
		options[o].addEventListener("click", function(e){
			type = e.currentTarget.getAttribute("data-value");
			curBid = type;
			document.querySelector("#bidval").textContent = bids[curBid];
			firstRecount();
		});
	}
	radios = document.querySelectorAll(".currency");
	for (var r=0; r<radios.length; r++){
		radios[r].addEventListener("change", function(e){
			currency = e.currentTarget.getAttribute("data-value");
			document.querySelector(".input_lbl").textContent = e.currentTarget.getAttribute("value");
			document.querySelector("#final_cur").textContent = e.currentTarget.getAttribute("value");
			document.querySelector("#graph_cur").textContent = e.currentTarget.getAttribute("value");
			document.querySelector("#graph_pro_cur").textContent = e.currentTarget.getAttribute("value");
			document.querySelector("#prof_cur").textContent = e.currentTarget.getAttribute("value");
			firstRecount();
		});
	}

	curX = document.querySelector("#slider1 .slider_ctrl").getBoundingClientRect().left - document.querySelector("#slider1").getBoundingClientRect().left;
	//recount(slidersList[0]);
	calculate();
	for (var s=0; s<slidersList.length; s++){
		slidersList[s].addEventListener("mousedown", function(e){
			sliderElement = e.currentTarget;1
			slideAllow = true;
		});
		slidersList[s].addEventListener("touchstart", function(e){
			sliderElement = e.currentTarget;
			slideAllow = true;
		});
		slidersList[s].addEventListener("mousemove", slideChange);
		slidersList[s].addEventListener("touchmove", function(e){
			slideChange(e);
		});
		document.addEventListener("mouseup", function(e){
			slideChange(e);
			slideAllow = false;
		});
		document.addEventListener("touchend", function(e){
			slideChange(e);
			slideAllow = false;
		});
	}
});

function slideChange(e){
	if (!slideAllow) return;
	var sliderControl = sliderElement.querySelector(".slider_ctrl");
	if (e.pageX){
		curX = e.pageX - sliderElement.getBoundingClientRect().left;
	} else {
		var delta = e.changedTouches[0].clientX ? e.changedTouches[0].clientX : e.touches[0].clientX;
		curX = delta - sliderElement.getBoundingClientRect().left;
	}
	if (sliderElement.id=="slider1"){
		if (e.pageX < sliderElement.getBoundingClientRect().left) {
			curX = 0;
			curMinStr = curMin + '';
			if (currency != 0){
				investSumString = curMinStr.substring(curMinStr.length-6, curMinStr.length-9)+" "+curMinStr.substring(curMinStr.length-3, curMinStr.length-6)+" "+curMinStr.substring(curMinStr.length, curMinStr.length-3)
			}
			document.querySelector(".field_input").value = investSumString;
			document.querySelector("#final_invest").textContent = investSumString;
			document.querySelector("#graph_invest").textContent = investSumString;
			sliderControl.style.left = "0";
			sliderElement.querySelector(".slider_active").style.width = "0";
			return;
		}
		if (e.pageX > sliderElement.getBoundingClientRect().left + sliderElement.getBoundingClientRect().width) {
			curX = sliderElement.getBoundingClientRect().width;
			curMaxStr = curMax + '';
			if (currency != 0){
				investSumString = curMaxStr.substring(curMaxStr.length-6, curMaxStr.length-9)+" "+curMaxStr.substring(curMaxStr.length-3, curMaxStr.length-6)+" "+curMaxStr.substring(curMaxStr.length, curMaxStr.length-3)
			}
			document.querySelector(".field_input").value = investSumString;
			document.querySelector("#final_invest").textContent = investSumString;
			document.querySelector("#graph_invest").textContent = investSumString;
			sliderControl.style.left = "100%";
			sliderElement.querySelector(".slider_active").style.width = "100%";
			return;
		}
		sliderControl.style.left = curX + "px";
		sliderElement.querySelector(".slider_active").style.width = curX + "px";
		recount(sliderElement);
	} else if (sliderElement.id=="slider2"){
		var sect = Math.trunc(sliderElement.getBoundingClientRect().width/12);
		var curSect = Math.round((curX+sect/2)/sect);
		if (oldSect == curSect) return;
		oldSect = curSect;
		var curPos = curSect*sect - sect/2;
		if (curPos<=sect) curPos = 0;
		else if (curPos>=sliderElement.getBoundingClientRect().width-sect) curPos = sliderElement.getBoundingClientRect().width;
		if (curSect<=0) curSect = 1;
		if (curSect>=13) curSect = 12;
		if (document.querySelector(".slider_cap_active")) document.querySelector(".slider_cap_active").classList.remove("slider_cap_active");
		document.querySelector("#slider_cap"+curSect).classList.add("slider_cap_active");
		plusM = curSect;
		eMon = cMon + plusM;
		if (eMon>11) {
			eYea = curDate.getFullYear() + 1;
			eMon = eMon - 12;
		} else eYea = curDate.getFullYear();
		if (cDay == 31){
			switch (eMon){
				case 0:
					eDay = 31;
					break;
				case 1:
					if (new Date(eYea, 1, 29).getMonth()==1) eDay = 29;
					else eDay = 28;
					break;
				case 2:
					eDay = 31;
					break;
				case 3:
					eDay = 30;
					break;
				case 4:
					eDay = 31;
					break;
				case 5:
					eDay = 30;
					break;
				case 6:
					eDay = 31;
					break;
				case 7:
					eDay = 31;
					break;
				case 8:
					eDay = 30;
					break;
				case 9:
					eDay = 31;
					break;
				case 10:
					eDay = 30;
					break;
				case 11:
					eDay = 31;
					break;
			}
		} else if (cDay == 30 && eMon == 1){
			if (new Date(eYea, 1, 29).getMonth()==1) eDay = 29;
			else eDay = 28;
		} else if (cDay == 29 && eMon == 1){
			if (new Date(eYea, 1, 29).getMonth()==1) eDay = 29;
			else eDay = 28;
		} else {
			eDay = cDay;
		}
		var d = new Date(eYea, eMon, eDay);
		daysDelta = Math.round(Math.abs(d - curDate)/1000/60/60/24)+1;

		document.querySelector("#findate").value = eDay+" "+months[eMon]+" "+eYea;
		if (curSect==1){
			sliderControl.style.left = 0;
			sliderElement.querySelector(".slider_active").style.width = 0;
			
		} else if (curSect==12){
			sliderControl.style.left = "100%";
			sliderElement.querySelector(".slider_active").style.width = "100%";
		} else {
			sliderControl.style.left = (document.querySelector(".slider_cap_active").getBoundingClientRect().left - sliderElement.getBoundingClientRect().left + document.querySelector(".slider_cap_active").getBoundingClientRect().width/2) + "px";
			sliderElement.querySelector(".slider_active").style.width = (document.querySelector(".slider_cap_active").getBoundingClientRect().left - sliderElement.getBoundingClientRect().left + document.querySelector(".slider_cap_active").getBoundingClientRect().width/2) + "px";
		}
		calculate();
	}
	//calculate();
}

function firstRecount(){
	curMin = currencyLimits[type][currency][0];
	curMax = currencyLimits[type][currency][1];
	if (currency == 0){
		investSum = ((curMax - curMin)/5 + curMin).toFixed(2);
		investSumString = investSum.toString();
		investSumString = investSumString;
	} else {
		investSum = Math.round((curMax - curMin)/5 + curMin);
		investSumString = investSum.toString();
		investSumString = investSumString.substring(investSumString.length-6, investSumString.length-9)+" "+investSumString.substring(investSumString.length-3, investSumString.length-6)+" "+investSumString.substring(investSumString.length, investSumString.length-3)
	}
	document.querySelector("#field_dd_selected_val").textContent = typeTitles[type];
	document.querySelector("#slider1 .slider_ctrl").style.left = "18%";
	document.querySelector("#slider1 .slider_active").style.width = "18%";
	document.querySelector(".field_input").value = investSumString;
	document.querySelector("#final_invest").textContent = investSumString;
	document.querySelector("#graph_invest").textContent = investSumString;
	calculate();
}

function recount(sliderElement){
	curMin = currencyLimits[type][currency][0];
	curMax = currencyLimits[type][currency][1];
	curDelta = curMax - curMin;
	percent = sliderElement.getBoundingClientRect().width / 100;
	curPercent = Math.round(curX / percent);
	if (currency == 0){
		investSum = parseFloat((curMin + curDelta/100 * curPercent).toFixed(2));
		investSumString = investSum+'';
	} else {
		investSum = Math.round(curMin + curDelta/100 * curPercent);
		investSumString = investSum+'';
		investSumString = investSumString.substring(investSumString.length-6, investSumString.length-9)+" "+investSumString.substring(investSumString.length-3, investSumString.length-6)+" "+investSumString.substring(investSumString.length, investSumString.length-3)
	}
	document.querySelector(".field_input").value = investSumString;
	document.querySelector("#final_invest").textContent = investSumString;
	document.querySelector("#graph_invest").textContent = investSumString;
	calculate();
}

function calculate(){
	total = investSum/100*daysDelta*bids[curBid];
	if (currency == 0) total = total - total/100*37;
	totalProfit = total;
	if (currency == 0){
		total = parseFloat(total.toFixed(8));
		profitString = total+'';
	} else {
		total = Math.round(total);
		profitString = total+'';
		profitString = profitString.substring(profitString.length-6, profitString.length-9)+" "+profitString.substring(profitString.length-3, profitString.length-6)+" "+profitString.substring(profitString.length, profitString.length-3)
	}
	document.querySelector("#final_prof").textContent = profitString;
	document.querySelector("#graph_profit").textContent = profitString;
	document.querySelector("#profit_percent").textContent = (Math.round(bids[curBid]*daysDelta*100))/100;
	soTired = (total+investSum)/100;
	document.querySelector(".graph_fill_right").style.height = "200px";
	document.querySelector(".profit_graph").style.bottom = investSum/soTired*2 + "px";
	document.querySelector(".profit_graph").style.height = total/soTired*2 + "px";
	document.querySelector(".graph_fill_left").style.height = investSum/soTired*2 + "px";
	if (document.querySelector(".col_right").classList.contains("active")) return;
	else setTimeout(function(){
		document.querySelector(".col_right").classList.add("active");
	}, 1000);
}